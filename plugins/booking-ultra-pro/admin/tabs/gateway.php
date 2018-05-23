<?php 
global $bookingultrapro,   $bupcomplement;
?>
<h3><?php _e('Payment Gateways Settings','bookingup'); ?></h3>
<form method="post" action="">
<input type="hidden" name="update_settings" />


<?php if(isset($bupcomplement))
{?>
<div class="bup-sect ">
  <h3><?php _e('Stripe Settings','bookingup'); ?></h3>
  
  <p><?php _e("Stripe is a payment gateway for mechants. If you don't have a Stripe account, you can <a href='https://stripe.com/'> sign up for one account here</a> ",'bookingup'); ?></p>
  
  <p><?php _e('Here you can configure Stripe if you wish to accept credit card payments directly in your website. Find your Stripe API keys here <a href="https://dashboard.stripe.com/account/apikeys">https://dashboard.stripe.com/account/apikeys</a>','bookingup'); ?></p>
  
  
  <table class="form-table">
<?php 

$this->create_plugin_setting(
                'checkbox',
                'gateway_stripe_active',
                __('Activate Stripe','bookingup'),
                '1',
                __('If checked, Stripe will be activated as payment method','bookingup'),
                __('If checked, Stripe will be activated as payment method','bookingup')
        ); 


$this->create_plugin_setting(
        'input',
        'test_secret_key',
        __('Test Secret Key','bookingup'),array(),
        __('You can get this on stripe.com','bookingup'),
        __('You can get this on stripe.com','bookingup')
);

$this->create_plugin_setting(
        'input',
        'test_publish_key',
        __('Test Publishable Key','bookingup'),array(),
        __('You can get this on stripe.com','bookingup'),
        __('You can get this on stripe.com','bookingup')
);

$this->create_plugin_setting(
        'input',
        'live_secret_key',
        __('Live Secret Key','bookingup'),array(),
        __('You can get this on stripe.com','bookingup'),
        __('You can get this on stripe.com','bookingup')
);

$this->create_plugin_setting(
        'input',
        'live_publish_key',
        __('Live Publishable Key','bookingup'),array(),
        __('You can get this on stripe.com','bookingup'),
        __('You can get this on stripe.com','bookingup')
);


$this->create_plugin_setting(
        'input',
        'gateway_stripe_currency',
        __('Currency','bookingup'),array(),
        __('Please enter the currency, example USD.','bookingup'),
        __('Please enter the currency, example USD.','bookingup')
);

$this->create_plugin_setting(
        'textarea',
        'gateway_stripe_success_message',
        __('Custom Message','bookingup'),array(),
        __('Input here a custom message that will be displayed to the client once the booking has been confirmed at the front page.','bookingup'),
        __('Input here a custom message that will be displayed to the client once the booking has been confirmed at the front page.','bookingup')
);

$this->create_plugin_setting(
                'checkbox',
                'gateway_stripe_success_active',
                __('Custom Success Page Redirect ','bookingup'),
                '1',
                __('If checked, the users will be taken to this page once the payment has been confirmed','bookingup'),
                __('If checked, the users will be taken to this page once the payment has been confirmed','bookingup')
        ); 


$this->create_plugin_setting(
            'select',
            'gateway_stripe_success',
            __('Success Page','bookingup'),
            $this->get_all_sytem_pages(),
            __("Select the sucess page. The user will be taken to this page if the payment was approved by stripe.",'bookingup'),
            __('Select the sucess page. The user will be taken to this page if the payment was approved by stripe.','bookingup')
    );


$this->create_plugin_setting(
	'select',
	'enable_live_key',
	__('Mode','bookingup'),
	array(
		1 => __('Production Mode','bookingup'), 
		2 => __('Test Mode (Sandbox)','bookingup')
		),
		
	__('.','bookingup'),
  __('.','bookingup')
       );
	   



		
?>
</table>

  
</div>

<?php }?>


<?php if(isset($bupcomplement))
{?>
<div class="bup-sect " style="display:none">
  <h3><?php _e('Authorize.NET AIM Settings','bookingup'); ?></h3>
  
  <p><?php _e(" ",'bookingup'); ?></p>
  
  <p><?php _e(' ','bookingup'); ?></p>
  
  
  <table class="form-table">
<?php 

$this->create_plugin_setting(
                'checkbox',
                'gateway_authorize_active',
                __('Activate Authorize','bookingup'),
                '1',
                __('If checked, Authorize will be activated as payment method','bookingup'),
                __('If checked, Authorize will be activated as payment method','bookingup')
        ); 



$this->create_plugin_setting(
        'input',
        'authorize_login',
        __('API Login ID','bookingup'),array(),
        __('You can get this on authorize.net','bookingup'),
        __('You can get this on authorize.net','bookingup')
);

$this->create_plugin_setting(
        'input',
        'authorize_key',
        __('API Transaction Key','bookingup'),array(),
        __('You can get this on authorize.net','bookingup'),
        __('You can get this on authorize.net','bookingup')
);


$this->create_plugin_setting(
        'input',
        'authorize_currency',
        __('Currency','bookingup'),array(),
        __('Please enter the currency, example USD.','bookingup'),
        __('Please enter the currency, example USD.','bookingup')
);

$this->create_plugin_setting(
        'textarea',
        'gateway_authorize_success_message',
        __('Custom Message','bookingup'),array(),
        __('Input here a custom message that will be displayed to the client once the booking has been confirmed at the front page.','bookingup'),
        __('Input here a custom message that will be displayed to the client once the booking has been confirmed at the front page.','bookingup')
);

$this->create_plugin_setting(
                'checkbox',
                'gateway_authorize_success_active',
                __('Custom Success Page Redirect ','bookingup'),
                '1',
                __('If checked, the users will be taken to this page once the payment has been confirmed','bookingup'),
                __('If checked, the users will be taken to this page once the payment has been confirmed','bookingup')
        ); 


$this->create_plugin_setting(
            'select',
            'gateway_authorize_success',
            __('Success Page','bookingup'),
            $this->get_all_sytem_pages(),
            __("Select the sucess page. The user will be taken to this page if the payment was approved by Authorize.net ",'bookingup'),
            __('Select the sucess page. The user will be taken to this page if the payment was approved by Authorize.net','bookingup')
    );


$this->create_plugin_setting(
	'select',
	'authorize_mode',
	__('Mode','bookingup'),
	array(
		1 => __('Production Mode','bookingup'), 
		2 => __('Test Mode (Sandbox)','bookingup')
		),
		
	__('.','bookingup'),
  __('.','bookingup')
       );
	   



		
?>
</table>

  
</div>

<?php }?>

<div class="bup-sect ">
  <h3><?php _e('PayPal','bookingup'); ?></h3>
  
  <p><?php _e('Here you can configure PayPal if you wish to accept paid registrations','bookingup'); ?></p>
    <p><?php _e("Please note: You have to set a right currency <a href='https://developer.paypal.com/docs/classic/api/currency_codes/' target='_blank'> check supported currencies here </a> ",'bookingup'); ?></p>
  
  
  <table class="form-table">
<?php 

$this->create_plugin_setting(
                'checkbox',
                'gateway_paypal_active',
                __('Activate PayPal','bookingup'),
                '1',
                __('If checked, PayPal will be activated as payment method','bookingup'),
                __('If checked, PayPal will be activated as payment method','bookingup')
        ); 

$this->create_plugin_setting(
	'select',
	'uultra_send_ipn_to_admin',
	__('The Paypal IPN response will be sent to the admin','bookingup'),
	array(
		'no' => __('No','bookingup'), 
		'yes' => __('Yes','bookingup'),
		),
		
	__("If 'yes' the admin will receive the whole Paypal IPN response. This helps to troubleshoot issues.",'bookingup'),
  __("If 'yes' the admin will receive the whole Paypal IPN response. This helps to troubleshoot issues.",'bookingup')
       );

$this->create_plugin_setting(
        'input',
        'gateway_paypal_email',
        __('PayPal Email Address','bookingup'),array(),
        __('Enter email address associated to your PayPal account.','bookingup'),
        __('Enter email address associated to your PayPal account.','bookingup')
);

$this->create_plugin_setting(
        'input',
        'gateway_paypal_sandbox_email',
        __('Paypal Sandbox Email Address','bookingup'),array(),
        __('This is not used for production, you can use this email for testing.','bookingup'),
        __('This is not used for production, you can use this email for testing.','bookingup')
);

$this->create_plugin_setting(
        'input',
        'gateway_paypal_currency',
        __('Currency','bookingup'),array(),
        __('Please enter the currency, example USD.','bookingup'),
        __('Please enter the currency, example USD.','bookingup')
);


$this->create_plugin_setting(
                'checkbox',
                'gateway_paypal_success_active',
                __('Custom Success Page Redirect ','bookingup'),
                '1',
                __('If checked, the users will be taken to this page once the payment has been confirmed','bookingup'),
                __('If checked, the users will be taken to this page once the payment has been confirmed','bookingup')
        ); 


$this->create_plugin_setting(
            'select',
            'gateway_paypal_success',
            __('Success Page','bookingup'),
            $this->get_all_sytem_pages(),
            __("Select the sucess page. The user will be taken to this page if the payment was approved by stripe.",'bookingup'),
            __('Select the sucess page. The user will be taken to this page if the payment was approved by stripe.','bookingup')
    );
	
	
	$this->create_plugin_setting(
                'checkbox',
                'gateway_paypal_cancel_active',
                __('Custom Cancellation Page Redirect ','bookingup'),
                '1',
                __('If checked, the users will be taken to this page if the payment is cancelled at PayPal website','bookingup'),
                __('If checked, the users will be taken to this page if the payment is cancelled at PayPal website','bookingup')
        ); 
		
		
		$this->create_plugin_setting(
            'select',
            'gateway_paypal_cancel',
            __('Cancellation Page','bookingup'),
            $this->get_all_sytem_pages(),
            __("Select the cancellation page. The user will be taken to this page if the payment is cancelled at PayPal Website",'bookingup'),
            __('Select the cancellation page. The user will be taken to this page if the payment is cancelled at PayPal Website','bookingup')
    );


$this->create_plugin_setting(
	'select',
	'gateway_paypal_mode',
	__('Mode','bookingup'),
	array(
		1 => __('Production Mode','bookingup'), 
		2 => __('Test Mode (Sandbox)','bookingup')
		),
		
	__('.','bookingup'),
  __('.','bookingup')
       );
	   





		
?>
</table>

  
</div>


<div class="bup-sect ">
  <h3><?php _e('Bank Deposit/Cash Other','bookingup'); ?></h3>
  
  <p><?php _e('Here you can configure the information that will be sent to the client. This could be your bank account details.','bookingup'); ?></p>
  
  
  <table class="form-table">
<?php 

$this->create_plugin_setting(
                'checkbox',
                'gateway_bank_active',
                __('Activate Bank Deposit','bookingup'),
                '1',
                __('If checked, Bank Payment Deposit will be activated as payment method','bookingup'),
                __('If checked, Bank Payment Deposit will be activated as payment method','bookingup')
        ); 


$this->create_plugin_setting(
        'input',
        'gateway_bank_label',
        __('Custom Label','bookingup'),array(),
        __('Example: Bank Deposit , Cash, Wire etc.','bookingup'),
        __('Example: Bank Deposit , Cash, Wire etc.','bookingup')
);


$this->create_plugin_setting(
        'textarea',
        'gateway_bank_success_message',
        __('Custom Message','bookingup'),array(),
        __('Input here a custom message that will be displayed to the client once the booking has been confirmed at the front page.','bookingup'),
        __('Input here a custom message that will be displayed to the client once the booking has been confirmed at the front page.','bookingup')
);



$this->create_plugin_setting(
                'checkbox',
                'gateway_bank_success_active',
                __('Custom Success Page Redirect ','bookingup'),
                '1',
                __('If checked, the users will be taken to this page ','bookingup'),
                __('If checked, the users will be taken to this page ','bookingup')
        ); 


$this->create_plugin_setting(
            'select',
            'gateway_bank_success',
            __('Success Page','bookingup'),
            $this->get_all_sytem_pages(),
            __("Select the sucess page. The user will be taken to this page on purchase confirmation",'bookingup'),
            __('Select the sucess page. The user will be taken to this page on purchase confirmation','bookingup')
    );
	
	$data_status = array(
		 				'0' => 'Pending',
                        '1' =>'Approved'
                       
                    );
$this->create_plugin_setting(
            'select',
            'gateway_bank_default_status',
            __('Default Status for Local Payments','bookingup'),
            $data_status,
            __("Set the default status an appointment will have when using local payment method. You won't have to approve the appointments manually, they will get approved automatically.",'bookingup'),
            __('et the default status an appointment will have when using local payment method.','bookingup')
    );	

		
?>
</table>

  
</div>



<p class="submit">
	<input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes','bookingup'); ?>"  />
	
</p>

</form>