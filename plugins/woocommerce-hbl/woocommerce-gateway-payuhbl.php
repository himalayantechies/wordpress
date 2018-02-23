<?php
/*
Plugin Name: WooCommerce HBL Pay
Plugin URI: 
Description: HBL Pay pays through HBL bank.
Version: 1.0.0
Author URI: 
*/

add_action('plugins_loaded', 'woocommerce_gateway_payuhbl_init', 0);
define('payuhbl_IMG', WP_PLUGIN_URL . "/" . plugin_basename(dirname(__FILE__)) . '/assets/img/hbl.png');

function woocommerce_gateway_payuhbl_init() {
	if ( !class_exists( 'WC_Payment_Gateway' ) ) return;

	/**
 	 * Gateway class
 	 */
	class WC_Gateway_PayUhbl extends WC_Payment_Gateway {

	     /**
         * Make __construct()
         **/	
		public function __construct(){
			
			$this->id 					= 'payuhbl'; // ID for WC to associate the gateway values
			$this->method_title 		= 'HBL Pay'; // Gateway Title as seen in Admin Dashboad
			$this->method_description	= 'HBL Pay - Convenient Payments'; // Gateway Description as seen in Admin Dashboad
			$this->has_fields 			= false; // Inform WC if any fileds have to be displayed to the visitor in Frontend 
			
			$this->init_form_fields();	// defines your settings to WC
			$this->init_settings();		// loads the Gateway settings into variables for WC
						
			$key_id   			= $this->settings['key_id'];
			$key_secret 		= $this->settings['key_secret'];
			// Special settigns if gateway is on Test Mode
			$test_title			= '';	
			$test_description	= '';
			// if ( 'test' == $this->settings['test_mode'] ) {
			// 	$test_title 		= ' [TEST MODE]';
			// 	$test_description 	= '<br/><br/><u>Test Mode is <strong>ACTIVE</strong>, use following Credit Card details:-</u><br/>'."\n"
			// 						 .'Test Card Name: <strong><em>any name</em></strong><br/>'."\n"
			// 						 .'Test Card Number: <strong>5123 4567 8901 234<u>6</u></strong> <small><em>(last is 6 not <s>5</s>)</em></small><br/>'."\n"
			// 						 .'Test Card CVV: <strong>123</strong><br/>'."\n"
			// 						 .'Test Card Expiry: <strong>12/'.date('y', strtotime('+1 year')).'</strong>';
			// 	if ( 'biz' == $this->settings['service_provider'] ) {
			// 		// @see https://documentation.payubiz.in/hosted-page-copy/
			// 		$key_id		= 'gtKFFx';
			// 		$key_secret	= 'eCwWELxi';
			// 	} else {
			// 		// @see https://www.payumoney.com/dev-guide/development/general.html
			// 		$key_id 	= 'rjQUPktU';
			// 		$key_secret	= 'e5iIg1jwi8';
			// 	}
			// } //END--test_mode=yes

			$this->title 			= $this->settings['title'].$test_title; // Title as displayed on Frontend
			$this->description 		= $this->settings['description'].$test_description; // Description as displayed on Frontend
			// if ( $this->settings['show_logo'] != "no" ) { // Check if Show-Logo has been allowed
			$this->icon               = apply_filters( 'woocommerce_hbl_icon', plugins_url( '/woocommerce-hbl/assets/images/hbl.png', plugin_dir_path( __FILE__ ) ) );
			// }
            $this->key_id 			= $key_id;
            $this->key_secret 		= $key_secret;
			$this->liveurl 			= 'https://hblpgw.2c2p.com/HBLPGW/Payment/Payment/Payment';
			$this->redirect_page	= $this->settings['redirect_page']; // Define the Redirect Page.
			//$this->service_provider	= $this->settings['service_provider']; // The Service options for PayU hbl.
			
            $this->msg['message']	= '';
            $this->msg['class'] 	= '';
			
			add_action('init', array(&$this, 'check_payuhbl_response'));
            add_action('woocommerce_api_' . strtolower(get_class($this)), array($this, 'check_payuhbl_response')); //update for woocommerce >2.0

            if ( version_compare(WOOCOMMERCE_VERSION, '2.0.0', '>=' ) ) {
                    add_action( 'woocommerce_update_options_payment_gateways_' . $this->id, array( &$this, 'process_admin_options' ) ); //update for woocommerce >2.0
                 } else {
                    add_action( 'woocommerce_update_options_payment_gateways', array( &$this, 'process_admin_options' ) ); // WC-1.6.6
                }
            add_action('woocommerce_receipt_payuhbl', array(&$this, 'receipt_page'));	
		} //END-__construct
		
        /**
         * Initiate Form Fields in the Admin Backend
         **/
		function init_form_fields(){

			$this->form_fields = array(
				// Activate the Gateway
				'enabled' => array(
					'title' 		=> __('Enable/Disable:', 'woo_payuhbl'),
					'type' 			=> 'checkbox',
					'label' 		=> __('Enable HBL Pay', 'woo_payuhbl'),
					'default' 		=> 'no',
					'description' 	=> ''
				),
				// Title as displayed on Frontend
      			'title' => array(
					'title' 		=> __('Title:', 'woo_payuhbl'),
					'type'			=> 'text',
					'default' 		=> __('HBL Pay', 'woo_payuhbl'),
					'description' 	=> __('This controls the title which the user sees during checkout.', 'woo_payuhbl'),
					'desc_tip' 		=> true
				),
				// Description as displayed on Frontend
      			'description' => array(
					'title' 		=> __('Description:', 'woo_payuhbl'),
					'type' 			=> 'textarea',
					'default' 		=> __("Pay securely with:\n - Credit or Debit Cards\n\nPowered by Himalayan Techies.", 'woo_payuhbl'),
					'description' 	=> __('This controls the description which the user sees during checkout.', 'woo_payuhbl'),
					'desc_tip' 		=> true
				),
				// PayU hbl - Type
    //   			'service_provider' => array(
				// 	'title' 		=> __('Service Provider:', 'woo_payuhbl'),
				// 	'type' 			=> 'select',
				// 	'options' 		=> array('money'=>'PayUmoney','biz'=>'PayUbiz')
				// ),
				// LIVE Key-ID
      			'key_id' => array(
					'title' 		=> __('Merchant KEY:', 'woo_payuhbl'),
					'type' 			=> 'text',
					'description' 	=> __('Given to Merchant by HBL'),
					'desc_tip' 		=> true
				),
  				// LIVE Key-Secret
    			'key_secret' => array(
					'title' 		=> __('Merchant SALT:', 'woo_payuhbl'),
					'type' 			=> 'text',
					'description' 	=> __('Given to Merchant by HBL'),
					'desc_tip' 		=> true
                ),
  				// Mode of Transaction
     //  			'test_mode' => array(
					// 'title' 		=> __('Mode:', 'woo_payuhbl'),
					// 'type' 			=> 'select',
					// 'label' 		=> __('PayUhbl Tranasction Mode.', 'woo_payuhbl'),
					// 'options' 		=> array('test'=>'Test Mode','secure'=>'Live Mode'),
					// 'default' 		=> 'test',
					// 'description' 	=> __('Mode of PayUhbl activities'),
					// 'desc_tip' 		=> true
     //            ),
  				// Page for Redirecting after Transaction
      			'redirect_page' => array(
					'title' 			=> __('Return Page'),
					'type' 			=> 'select',
					'options' 		=> $this->payuhbl_get_pages('Select Page'),
					'description' 	=> __('URL of success page', 'woo_payuhbl'),
					'desc_tip' 		=> true
                ),
  				// Show Logo on Frontend
     //  			'show_logo' => array(
					// 'title' 		=> __('Show Logo:', 'woo_payuhbl'),
					// 'type' 			=> 'select',
					// 'label' 		=> __('Logo on Checkout Page', 'woo_payuhbl'),
					// 'options' 		=> array('no'=>'No Logo','icon-light'=>'Light - Icon','payu-light'=>'Light - Logo','icon-biz'=>'PayU biz - Icon','payu-biz'=>'PayU biz - Logo','payubiz'=>'PayU biz - Logo (Full)','icon-money'=>'PayU money - Icon','payu-money'=>'PayU money - Logo','payumoney'=>'PayU money - Logo (Full)'),
					// 'default' 		=> 'no',
					// 'description' 	=> __('<strong>PayU (Light)</strong> | Icon: <img src="'. payuhbl_IMG . 'logo_icon-light.png" height="24px" /> | Logo: <img src="'. payuhbl_IMG . 'logo_payu-light.png" height="24px" /><br/>' . "\n"
					// 					 .'<strong>PayU biz&nbsp;&nbsp;&nbsp;&nbsp;</strong> | Icon: <img src="'. payuhbl_IMG . 'logo_icon-biz.png" height="24px" /> | Logo: <img src="'. payuhbl_IMG . 'logo_payu-biz.png" height="24px" /> | Logo (Full): <img src="'. payuhbl_IMG . 'logo_payubiz.png" height="24px" /><br/>' . "\n"
					// 					 .'<strong>PayU money&nbsp;&nbsp;</strong> | Icon: <img src="'. payuhbl_IMG . 'logo_icon-money.png" height="24px" /> | Logo: <img src="'. payuhbl_IMG . 'logo_payu-money.png" height="24px" /> | Logo (Full): <img src="'. payuhbl_IMG . 'logo_payumoney.png" height="24px" />', 'woo_payuhbl'),
					// 'desc_tip' 		=> false
     //            )
			);

		} //END-init_form_fields
		
        /**
         * Admin Panel Options
         * - Show info on Admin Backend
         **/
		public function admin_options(){
			echo '<h3>'.__('HBL Pay', 'woo_payuhbl').'</h3>';
			echo '<p>'.__('Please make a note if you are using ', 'woo_payuhbl').'<strong>'.__('"HBL Pay"', 'woo_payuhbl').'</strong>'.__(' as you main account.', 'woo_payuhbl').'</p>';
			echo '<table class="form-table">';
			// Generate the HTML For the settings form.
			$this->generate_settings_html();
			echo '</table>';
		} //END-admin_options

        /**
         *  There are no payment fields, but we want to show the description if set.
         **/
		function payment_fields(){
			if( $this->description ) {
				echo wpautop( wptexturize( $this->description ) );
			}
		} //END-payment_fields
		
        /**
         * Receipt Page
         **/
		function receipt_page($order){
			echo '<p><strong>' . __('Thank you for your order.', 'woo_payuhbl').'</strong><br/>' . __('The payment page will open soon.', 'woo_payuhbl').'</p>';
			echo $this->generate_payuhbl_form($order);
		} //END-receipt_page
    
        /**
         * Generate button link
         **/
		function generate_payuhbl_form($order_id){
			global $woocommerce;
			$order = new WC_Order( $order_id );

			// Redirect URL
			if ( '' == $this->redirect_page  || 0 == $this->redirect_page ) {
				$redirect_url = get_site_url() . "/";
			} else {
				$redirect_url = get_permalink( $this->redirect_page );
			}
			// Redirect URL : For WooCoomerce 2.0
			if ( version_compare(WOOCOMMERCE_VERSION, '2.0.0', '>=' ) ) {
				$redirect_url = add_query_arg( 'wc-api', get_class( $this ), $redirect_url );
			}

            $productinfo = "Order $order_id";
            $invoiceNo = $this->get_formated_invoiceNo( $order );
            $amount = $this->get_formated_amount( $order );
            $currencyCode = "524"; //for NPR

			$txnid = $order_id.'_'.date("ymds");

			$hash = $this->process_hashvalue( $order );

			$payuhbl_args = array(
				'paymentGatewayID' 	=> $this->key_id,
				'invoiceNo'		=> $invoiceNo,
				'productDesc'	=> $productinfo,
				'amount' 		=> $amount,
				'currencyCode'	=> $currencyCode,
				'hashvalue' 	=> $hash,

				'txnid' 		=> $txnid,
				'firstname'		=> $order->billing_first_name,
				'email' 		=> $order->billing_email,
				'phone' 		=> substr( $order->billing_phone, -10 ),
				'surl' 			=> $redirect_url,
				'furl' 			=> $redirect_url,
				'lastname' 		=> $order->billing_last_name,
				'address1' 		=> $order->billing_address_1,
				'address2' 		=> $order->billing_address_2,
				'city' 			=> $order->billing_city,
				'state' 		=> $order->billing_state,
				'country' 		=> $order->billing_country,
				'zipcode' 		=> $order->billing_postcode,
				'curl'			=> $redirect_url,
				'udf1' 			=> $order_id,
			);

			$payuhbl_args_array = array();
			foreach($payuhbl_args as $key => $value){
				$payuhbl_args_array[] = "<input type='hidden' name='$key' value='$value'/>";
			}
			
			return '	<form action="'.$this->liveurl.'" method="post" id="payuhbl_payment_form">
  				' . implode('', $payuhbl_args_array) . '
				<input type="submit" class="button-alt" id="submit_payuhbl_payment_form" value="'.__('Pay via HBL Pay', 'woo_payuhbl').'" /> <a class="button cancel" href="'.$order->get_cancel_order_url().'">'.__('Cancel order &amp; restore cart', 'woo_payuhbl').'</a>
					<script type="text/javascript">
					jQuery(function(){
					jQuery("body").block({
						message: "'.__('Thank you for your order. We are now redirecting you to Payment Gateway to make payment.', 'woo_payuhbl').'",
						overlayCSS: {
							background		: "#fff",
							opacity			: 0.6
						},
						css: {
							padding			: 20,
							textAlign		: "center",
							color			: "#555",
							border			: "3px solid #aaa",
							backgroundColor	: "#fff",
							cursor			: "wait",
							lineHeight		: "32px"
						}
					});
					jQuery("#submit_payuhbl_payment_form").click();});
					</script>
				</form>';		
		
		}
		 //END-generate_payuhbl_form
		function get_formated_invoiceNo( $order ){
			$invoice_prefix = "hbl";
			$invoiceNo = $invoice_prefix.$order->get_order_number();
			if(strlen($invoiceNo) < 20){
				$formated_invoiceNo = str_pad((string) $invoiceNo, 20, '0', STR_PAD_LEFT);
				return $formated_invoiceNo;
			}
			else {
				return $invoiceNo;
			}
		}

		function get_formated_amount( $order ) {
			$amount = $order->get_total();
			$amount = (int) ($amount * 100);
			$formatedAmount = str_pad((string) $amount, 12, '0', STR_PAD_LEFT);
			return $formatedAmount;
		}

		function process_hashvalue( $order ){
			$merchantID = $this->key_id;
			$invoiceNumber = $this->get_formated_invoiceNo( $order );
			$amount = $this->get_formated_amount( $order );
			$currencyCode = '524';
			$nonSecure = '';
			$signString = $merchantID.$invoiceNumber.$amount.$currencyCode.$nonSecure;
			$hashvalue = $this->get_hashvalue($signString);
			return $hashvalue;
		}

 		function get_hashvalue( $signatureString ){
			$SecretKey = $this->key_secret;
			$signData = hash_hmac('SHA256', $signatureString, $SecretKey, false);
			$signData = strtoupper($signData);
			return urlencode($signData);
		}

        /**
         * Process the payment and return the result
         **/
        function process_payment($order_id){
			global $woocommerce;
            $order = new WC_Order($order_id);
			
			if ( version_compare( WOOCOMMERCE_VERSION, '2.1.0', '>=' ) ) { // For WC 2.1.0
			  	$checkout_payment_url = $order->get_checkout_payment_url( true );
			} else {
				$checkout_payment_url = get_permalink( get_option ( 'woocommerce_pay_page_id' ) );
			}

			return array(
				'result' => 'success', 
				'redirect' => add_query_arg(
					'order', 
					$order->id, 
					add_query_arg(
						'key', 
						$order->order_key, 
						$checkout_payment_url						
					)
				)
			);
		} //END-process_payment

        /**
         * Check for valid gateway server callback
         **/
        function check_payuhbl_response(){
            global $woocommerce;
            
			if( isset($_REQUEST['paymentGatewayID']) && isset($_REQUEST['respCode']) && isset($_REQUEST['fraudCode']) && isset($_REQUEST['pan']) && isset($_REQUEST['amount']) && isset($_REQUEST['invoiceNo']) && isset($_REQUEST['tranRef']) && isset($_REQUEST['approvalCode']) && isset($_REQUEST['eci']) && isset($_REQUEST['dateTime']) && isset($_REQUEST['status']) && isset($_REQUEST['hashValue']) ) {

				$invoiceNo = !empty($_REQUEST['invoiceNo']) ? $_REQUEST['invoiceNo'] : '';
				$paymentGatewayID = !empty($_REQUEST['paymentGatewayID']) ? $_REQUEST['paymentGatewayID'] : '';
				$respCode = !empty($_REQUEST['respCode']) ? $_REQUEST['respCode'] : '';
				$fraudCode = !empty($_REQUEST['fraudCode']) ? $_REQUEST['fraudCode'] : '';
				$pan = !empty($_REQUEST['pan']) ? $_REQUEST['pan'] : '';
				$amount = !empty($_REQUEST['amount']) ? $_REQUEST['amount'] : '';
				$approvalCode = !empty($_REQUEST['approvalCode']) ? $_REQUEST['approvalCode'] : '';
				$eci = !empty($_REQUEST['eci']) ? $_REQUEST['eci'] : '';
				$tranRef = !empty($_REQUEST['tranRef']) ? $_REQUEST['tranRef'] : '';
				$dateTime = !empty($_REQUEST['dateTime']) ? $_REQUEST['dateTime'] : '';
				$status = !empty($_REQUEST['status']) ? $_REQUEST['status'] : '';
				$hashValue = !empty($_REQUEST['hashValue']) ? $_REQUEST['hashValue'] : '';

				$order_id = $this->get_orderno_from_invoice( $invoiceNo );
		
				if($order_id != ''){
					try{
						$order = new WC_Order( $order_id );
						$responseHash = $paymentGatewayID.$respCode.$fraudCode.$pan.$amount.$invoiceNo.$tranRef.$approvalCode.$eci.$dateTime.$status;
						$checkhash = $this->get_hashvalue( $responseHash );
						$trans_authorised = false;

						if( 'completed' !== $order->status ){
							if($hashValue == $checkhash){
								$status = strtolower($status);
								if( 'ap' == $status ){
									$trans_authorised = true;
									$this->msg['message'] = "Thank you for the order. Your account has been charged and your transaction is successful.";
									$this->msg['class'] = 'success';
									if( 'processing' == $order->status ){
										$order->add_order_note('HBL Pay ID: '.$_REQUEST['paymentGatewayID'].' ('.$_REQUEST['txnid'].')<br/>ECI: '.$_REQUEST['eci'].'('.$_REQUEST['status'].')<br/>Bank Ref: '.$_REQUEST['tranRef'].'('.$_REQUEST['approvalCode'].')');
									}
									else{																				
										$order->payment_complete();
										$order->add_order_note('HBL payment successful.<br/>HBL Pay ID: '.$_REQUEST['paymentGatewayID'].' ('.$_REQUEST['txnid'].')<br/>ECI: '.$_REQUEST['eci'].'('.$_REQUEST['status'].')<br/>Bank Ref: '.$_REQUEST['tranRef'].'('.$_REQUEST['approvalCode'].')');
										$woocommerce->cart->empty_cart();
									}
								}
								else if( 'pe' == $status ){
									$trans_authorised = true;
									$this->msg['message'] = "Thank you for the order. Right now your payment status is pending. We will keep you posted regarding the status of your order through eMail";
									$this->msg['class'] = 'notice';
									$order->add_order_note('HBL Pay payment status is pending<br/>HBL Pay ID: '.$_REQUEST['paymentGatewayID'].' ('.$_REQUEST['txnid'].')<br/>ECI: '.$_REQUEST['eci'].'('.$_REQUEST['status'].')<br/>Bank Ref: '.$_REQUEST['tranRef'].'('.$_REQUEST['approvalCode'].')');
									$order->update_status('on-hold');
									$woocommerce -> cart -> empty_cart();
								}else{
									$this->msg['class'] = 'error';
									$this->msg['message'] = "Thank you for the order. However, the transaction has been declined.";
									$order->add_order_note('Transaction ERROR: '.$_REQUEST['error'].'<br/>HBL Pay ID: '.$_REQUEST['paymentGatewayID'].' ('.$_REQUEST['txnid'].')<br/>ECI: '.$_REQUEST['eci'].'('.$_REQUEST['status'].')<br/>Bank Ref: '.$_REQUEST['tranRef'].'('.$_REQUEST['approvalCode'].')');
								}
							}else{
								$this->msg['class'] = 'error';
								$this->msg['message'] = "Security Error. Illegal access detected.";
								$order->add_order_note('Checksum ERROR: '.json_encode($_REQUEST));
							}
							if( false == $trans_authorised) {
								$order->update_status('failed');
							}
							//removed for WooCommerce 2.0
							//add_action('the_content', array(&$this, 'payupaisa_showMessage'));
						}
					}catch(Exception $e){
                        // $errorOccurred = true;
                        $msg = "Error";
					}
				}


				if ( function_exists( 'wc_add_notice' ) ) {
					wc_add_notice( $msg['message'], $msg['class'] );

				} else {
					if( 'success' == $msg['class'] ) {
						$woocommerce->add_message( $msg['message']);
					}else{
						$woocommerce->add_error( $msg['message'] );

					}
					$woocommerce->set_messages();
				}	
				
				
				if ( '' == $this->redirect_page || 0 == $this->redirect_page ) {
					$redirect_url = get_permalink( get_option('woocommerce_myaccount_page_id') );
				} else {
					$redirect_url = get_permalink( $this->redirect_page );
				}
				
				wp_redirect( $redirect_url );
                exit;
	
			}

        } //END-check_payuhbl_response

        function get_orderno_from_invoice( $invoiceNo ){
			$invoice_prefix = 'hbl';
			$order_no = ltrim(ltrim($invoiceNo, '0'), $invoice_prefix);
			return $order_no;
		}

        /**
         * Get Page list from WordPress
         **/
		function payuhbl_get_pages($title = false, $indent = true) {
			$wp_pages = get_pages('sort_column=menu_order');
			$page_list = array();
			if ($title) $page_list[] = $title;
			foreach ($wp_pages as $page) {
				$prefix = '';
				// show indented child pages?
				if ($indent) {
                	$has_parent = $page->post_parent;
                	while($has_parent) {
                    	$prefix .=  ' - ';
                    	$next_page = get_post($has_parent);
                    	$has_parent = $next_page->post_parent;
                	}
            	}
            	// add to page list array array
            	$page_list[$page->ID] = $prefix . $page->post_title;
        	}
        	return $page_list;
		} //END-payuhbl_get_pages

	} //END-class
	
	/**
 	* Add the Gateway to WooCommerce
 	**/
	function woocommerce_add_gateway_payuhbl_gateway($methods) {
		$methods[] = 'WC_Gateway_PayUhbl';
		return $methods;
	}//END-wc_add_gateway
	
	add_filter('woocommerce_payment_gateways', 'woocommerce_add_gateway_payuhbl_gateway' );
	
} //END-init

/**
* 'Settings' link on plugin page
**/
add_filter( 'plugin_action_links', 'payuhbl_add_action_plugin', 10, 5 );
function payuhbl_add_action_plugin( $actions, $plugin_file ) {
	static $plugin;

	if (!isset($plugin))
		$plugin = plugin_basename(__FILE__);
	if ($plugin == $plugin_file) {

			$settings = array('settings' => '<a href="admin.php?page=wc-settings&tab=checkout&section=wc_gateway_payuhbl">' . __('Settings') . '</a>');
		
    			$actions = array_merge($settings, $actions);
			
		}
		
		return $actions;
}//END-settings_add_action_link