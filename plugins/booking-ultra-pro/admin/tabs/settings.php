<h3><?php _e('General Settings','bookingup'); ?></h3>
<form method="post" action="">
<input type="hidden" name="update_settings" />

<?php
global $bookingultrapro, $bupcomplement;

 
?>


<div id="tabs-bupro-settings" class="bup-multi-tab-options">

<ul class="nav-tab-wrapper bup-nav-pro-features">
<li class="nav-tab bup-pro-li"><a href="#tabs-1" title="<?php _e('General','bookingup'); ?>"><?php _e('General','bookingup'); ?></a></li>

<li class="nav-tab bup-pro-li"><a href="#tabs-bup-business-hours" title="<?php _e('Business Hours','bookingup'); ?>"><?php _e('Business Hours','bookingup'); ?> </a></li>

<li class="nav-tab bup-pro-li"><a href="#tabs-bup-newsletter" title="<?php _e('Newsletter','bookingup'); ?>"><?php _e('Newsletter','bookingup'); ?> </a></li>


<li class="nav-tab bup-pro-li"><a href="#tabs-bup-googlecalendar" title="<?php _e('Google Calendar','bookingup'); ?>"><?php _e('Google Calendar','bookingup'); ?> </a></li>

<li class="nav-tab bup-pro-li"><a href="#tabs-bup-shopping" title="<?php _e('Shopping Cart','bookingup'); ?>"><?php _e('Shopping Cart','bookingup'); ?> </a></li>





</ul>


<div id="tabs-1">

<div class="bup-sect  bup-welcome-panel">
  <h3><?php _e('Premium  Settings','bookingup'); ?></h3>
  
    <?php if(isset($bupcomplement))
{?>

  <p><?php _e('This section allows you to set your company name, phone number and many other useful things such as set time slot, date format.','bookingup'); ?></p>
  
  <table class="form-table">
<?php

$active_feature = false;

if($active_feature){
$this->create_plugin_setting(
            'select',
            'gateway_payment_request_page',
            __('Payment Page for Appointments','bookingup'),
            $this->get_all_sytem_pages(),
            __("Select the page that will be used to request payments from your clients. The client will be taken to this page so they can submit their payment, once tha payment is confirmed then the appointment will change it's status to 'Approved'. Make sure this page contains this shortcode: [bup_payment_form]",'bookingup'),
            __('Select the page that will be used to request payments from your clients.','bookingup')
    );

}

$this->create_plugin_setting(
	'select',
	'what_display_in_admin_calendar',
	__('What To Display in BUP Admin Calendar?','bookingup'),
	array(
		1 => __('Staff Name','bookingup'), 		
		2 => __('Client Name','bookingup')),
		
	__('You can set what will be displayed in the BUP Dashboard Calendar. You can set either Staff Name or Client Name','bookingup'),
  __('You can set what will be displayed in the BUP Dashboard Calendar. You can set either Staff Name or Client Name','bookingup')
       );

$days_min = array(
						'0' => __('Disabled.','bookingup'),
						'1' => __('1 hour.','bookingup'),
						'2' => __('2 hours.','bookingup'),
						'3' => __('3 hours.','bookingup'),
						'4' => __('4 hours.','bookingup'),
						'5' => __('5 hours.','bookingup'),
						'6' => __('6 hours.','bookingup'),		
		 				'7' => __('7 hours.','bookingup'),
						'8' => __('8 hours.','bookingup'),
						'9' => __('9 hours.','bookingup'),
                        '10' =>__('10 hours.','bookingup'),
						'11' =>__('11 hours.','bookingup'),
						'12' =>__('12 hours.','bookingup'),
                        '24' => __('1 day','bookingup'),
                        '48' => __('2 days.','bookingup'),
                        '72' => __('3 days.','bookingup'),
                        '96' =>__('4 days.','bookingup'),                       
                        '120' =>__('5 days','bookingup'),
						'144' =>__('6 days','bookingup'),
						'168' =>__('1 week.','bookingup'),
						'336' =>__('2 weeks.','bookingup'),
						'504' =>__('3 weeks.','bookingup'),
						'672' =>__('4 Weeks.','bookingup'),
                       
                    );
   
		
		$this->create_plugin_setting(
            'select',
            'bup_min_prior_booking',
            __('Minimum time requirement prior to booking:','bookingup'),
            $days_min,
            __('Set how late appointments can be booked (for example, require customers to book at least 1 hour before the appointment time).','bookingup'),
            __('Set how late appointments can be booked (for example, require customers to book at least 1 hour before the appointment time).','bookingup')
    );
	
	
	$this->create_plugin_setting(
	'select',
	'allow_timezone',
	__("Activate timezone detection?",'bookingup'),
	array(
		0 => __('NO','bookingup'), 		
		1 => __('YES','bookingup')),
		
	__("This will detect the client's timezone. Which is useful if you offer services on different locations with different hours.",'bookingup'),
  __("This will detect the client's timezone. Which is useful if you offer services on different locations with different hours.",'bookingup')
       );
	   
	  
   
		
	
?>
</table>

<?php }else{?>

<p><?php _e('These settings are included in the premium version of Booking Ultra Pro. If you find the plugin useful for your business please consider buying a licence for the full version.','bookingup'); ?>. Click <a href="https://bookingultrapro.com/compare-packages.html">here</a> to upgrade </p>

<strong>The following settings are included in Premium Version</strong>
<p>- Google Calendar. </p>
<p>- Minimum time requirement prior to booking. </p>
<p>- Display either Staff Name or Cient name on Admin Calendar. </p>



<?php }?> 

  
</div>


<div class="bup-sect  bup-welcome-panel">
  <h3><?php _e('Miscellaneous  Settings','bookingup'); ?></h3>
  
  <p><?php _e('This section allows you to set your company name, phone number and many other useful things such as set time slot, date format.','bookingup'); ?></p>
  
  
  <table class="form-table">
<?php 


$this->create_plugin_setting(
        'input',
        'company_name',
        __('Company Name:','bookingup'),array(),
        __('Enter your company name here.','bookingup'),
        __('Enter your company name here.','bookingup')
);

$this->create_plugin_setting(
        'input',
        'company_phone',
        __('Company Phone Number:','bookingup'),array(),
        __('Enter your company phone number here.','bookingup'),
        __('Enter your company phone number here.','bookingup')
);

$this->create_plugin_setting(
        'input',
        'company_address',
        __('Company Address:','bookingup'),array(),
        __('Enter your company address here.','bookingup'),
        __('Enter your company address here.','bookingup')
);

$this->create_plugin_setting(
	'select',
	'registration_rules',
	__('Booking Type','bookingup'),
	array(
		4 => __('Paid Booking','bookingup'), 		
		1 => __('Free Booking','bookingup')),
		
	__('Free Booking allows users to book and appointment for free, the payment methods will not be displayed. ','bookingup'),
  __('Free Booking allows users to book and appointment for free, the payment methods will not be displayed.','bookingup')
       );
	   
	   
	    $this->create_plugin_setting(
	'select',
	'wp_head_present',
	__("Is wp_head in theme?",'bookingup'),
	array(
		1 => __('YES','bookingup'), 		
		0=> __('NO','bookingup')),
		
	__("This setting is useful for themes that doesn't include the wp_head functions, which is not the ideal for the best practice to develop WP themes.",'bookingup'),
  __("This setting is useful for themes that doesn't include the wp_head functions, which is not the ideal for the best practice to develop WP themes.",'bookingup')
       );
	   
	   
$this->create_plugin_setting(
                'checkbox',
                'gateway_free_success_active',
                __('Custom Success Page Redirect ','bookingup'),
                '1',
                __('If checked, the users will be taken to this page. This option is used only when you have set Free Bookins as Regitration Type ','bookingup'),
                __('If checked, the users will be taken to this page ','bookingup')
        ); 


$this->create_plugin_setting(
            'select',
            'gateway_free_success',
            __('Success Page for Free Bookings','bookingup'),
            $this->get_all_sytem_pages(),
            __("Select the sucess page. The user will be taken to this page right after the booking confirmation.",'bookingup'),
            __('Select the sucess page. The user will be taken to this page right after the booking confirmation.','bookingup')
    );
	
	
	$data_status = array(
		 				'0' => 'Pending',
                        '1' =>'Approved'
                       
                    );
$this->create_plugin_setting(
            'select',
            'gateway_free_default_status',
            __('Default Status for Free Appointments','bookingup'),
            $data_status,
            __("Set the default status an appointment will have when NOT using a payment method. You won't have to approve the appointments manually, they will get approved automatically.",'bookingup'),
            __('et the default status an appointment will have when NOT using a payment method.','bookingup')
    );	


	
$this->create_plugin_setting(
        'textarea',
        'gateway_free_success_message',
        __('Custom Message for Free Bookings','bookingup'),array(),
        __('Input here a custom message that will be displayed to the client once the booking has been confirmed at the front page.','bookingup'),
        __('Input here a custom message that will be displayed to the client once the booking has been confirmed at the front page.','bookingup')
);


$this->create_plugin_setting(
                'checkbox',
                'appointment_cancellation_active',
                __('Redirect Cancellation link? ','bookingup'),
                '1',
                __('If checked, the clients will be able to cancel the appointment by using the cancellation link displayed in the appointment details email and they will be redirected to your custom page specified above. ','bookingup'),
                __('If checked, the clients will be able to cancel the appointment by using the cancellation link displayed in the appointment details email. ','bookingup')
        );
$this->create_plugin_setting(
            'select',
            'appointment_cancellation_redir_page',
            __('Cancellation Page','bookingup'),
            $this->get_all_sytem_pages(),
            __("Select the cancellation page. The appointment cancellation needs a page. Please create your cancellation page and set it here. IMPORTANT: Setting a page is very important, otherwise this feature will not work.",'bookingup'),
            __('Select the cancellation page. The appointment cancellation needs a page. Please create your cancellation page and set it here.','bookingup')
    );	
	
	
	$this->create_plugin_setting(
            'select',
            'appointment_admin_approval_page',
            __('Appointment Approval Page','bookingup'),
            $this->get_all_sytem_pages(),
            __("Select the approbation page for your appointments. Please create a page if you wish to let the admin to approve an appointment via email. <br><br><strong>IMPORTANT:</strong> Setting this page is very important, otherwise this feature will not work. <br><br><strong>IMPORTANT:</strong> Only the admin will receive the link to approve and appointment via email.",'bookingup'),
            __('Select the Approbation page for your appointments','bookingup')
    );	    


 $data = array(
		 				'm/d/Y' => date('m/d/Y'),                        
                        'Y/m/d' => date('Y/m/d'),
                        'd/m/Y' => date('d/m/Y'),                  
                       
                        'F j, Y' => date('F j, Y'),
                        'j M, y' => date('j M, y'),
                        'j F, y' => date('j F, y'),
                        'l, j F, Y' => date('l, j F, Y')
                    );
		$data_picker = array(
		 				'm/d/Y' => date('m/d/Y'),
						'd/m/Y' => date('d/m/Y')
                    );
					
		$data_admin = array(
		 				'm/d/Y' => date('m/d/Y'),
						'd/m/Y' => date('d/m/Y')
                    );
					
		 $data_time = array(
		 				'5' => 5,
                        '10' =>10,
                        '12' => 12,
                        '15' => 15,
                        '20' => 20,
                        '30' =>30,                       
                        '60' =>60,
						'90' =>90,
						'120' =>120
                       
                    );
		
		$data_time_format = array(
		 				
                        'H:i' => date('H:i'),
                        'h:i A' => date('h:i A')
                    );
		 $days_availability = array(
						'1' => 1,
						'2' => 2,
						'3' => 3,
						'4' => 4,
						'5' => 5,
						'6' => 6,		
		 				'7' => 7,
                        '10' =>10,
                        '15' => 15,
                        '20' => 20,
                        '25' => 25,
                        '30' =>30,                       
                        '35' =>35,
						'40' =>40,
                       
                    );
   
		
		$this->create_plugin_setting(
            'select',
            'bup_date_format',
            __('Date Format:','bookingup'),
            $data,
            __('Select the date format to be used','bookingup'),
            __('Select the date format to be used','bookingup')
    );
	
	
	$this->create_plugin_setting(
            'select',
            'bup_date_picker_format',
            __('Date Picker Format:','bookingup'),
            $data_picker,
            __('Select the date format to be used on the Date Picker','bookingup'),
            __('Select the date format to be used on the Date Picker','bookingup')
    );
	
	$this->create_plugin_setting(
            'select',
            'bup_date_admin_format',
            __('Admin Date Format:','bookingup'),
            $data_admin,
            __('Select the date format to be used on the Date Picker','bookingup'),
            __('Select the date format to be used on the Date Picker','bookingup')
    );
	
	$this->create_plugin_setting(
            'select',
            'bup_time_format',
            __('Display Time Format:','bookingup'),
            $data_time_format,
            __('Select the time format to be used','bookingup'),
            __('Select the time format to be used','bookingup')
    );
	
	
	
		$this->create_plugin_setting(
	'select',
	'allow_bookings_outsite_business_hours',
	__('Allow booking outside business hours?','bookingup'),
	array(
		'yes' => __('YES','bookingup'), 		
		'no' => __('NO','bookingup')),
		
	__("Use this option if you don't wish to receive purchases on services that fall outside the business hours. The booking system calculates that the appointments have to end when the business hours stop. ",'bookingup'),
  __("Use this option if you don't wish to receive purchases on services that fall outside the business hours. The booking system calculates that the appointments have to end when the business hours stop.  ",'bookingup')
       );
	
	
	$this->create_plugin_setting(
	'select',
	'display_only_from_hour',
	__('Display only from hour?','bookingup'),
	array(
		'no' => __('NO','bookingup'), 		
		'yes' => __('YES','bookingup')),
		
	__("Use this option if you don't wish to display the the whole time range, example 08:30 – 09:00 ",'bookingup'),
  __("Use this option if you don't wish to display the the whole time range, example 08:30 – 09:00  ",'bookingup')
       );
	   
	   
	   $this->create_plugin_setting(
	'select',
	'phone_number_mandatory',
	__('Is Phone Number Mandatory?','bookingup'),
	array(
		'yes' => __('YES','bookingup'), 		
		'no' => __('NO','bookingup')),
		
	__("Use this option if you don't wish to require a phone number at the step 3 ",'bookingup'),
  __("Use this option if you don't wish to require a phone number at the step 3  ",'bookingup')
       );
	   
	    $this->create_plugin_setting(
	'select',
	'last_name_mandatory',
	__('Ask for Last Name on Checkout?','bookingup'),
	array(
		'yes' => __('YES','bookingup'), 		
		'no' => __('NO','bookingup')),
		
	__("Use this option if you don't wish to require a the last name of your client at the step 3 ",'bookingup'),
  __("Use this option if you don't wish to require a the last name of your client at the step 3 ",'bookingup')
       );
	
	
	
	$this->create_plugin_setting(
            'select',
            'bup_calendar_days_to_display',
            __('Days to display on Step 2:','bookingup'),
            $days_availability,
            __('Set how many days will be displayed on the step 2','bookingup'),
            __('Set how many days will be displayed on the step 2','bookingup')
    );
	
	
	
	
	$this->create_plugin_setting(
        'input',
        'currency_symbol',
        __('Currency Symbol','bookingup'),array(),
        __('Input the currency symbol: Example: $','bookingup'),
        __('Input the currency symbol: Example: $','bookingup')
);

$this->create_plugin_setting(
	'select',
	'price_on_staff_list_front',
	__('Display service price on staff list?','bookingup'),
	array(
		'yes' => __('YES','bookingup'), 		
		'no' => __('NO','bookingup')),
		
	__("Use this option if you don't wish to display the service's price on the staff drop/down list ",'bookingup'),
  __("Use this option if you don't wish to display the service's price on the staff drop/down list ",'bookingup')
       );
	   
	   $this->create_plugin_setting(
	'select',
	'display_unavailable_slots_on_front',
	__('Display unavailable slots on booking form?','bookingup'),
	array(
		'yes' => __('YES','bookingup'), 		
		'no' => __('NO','bookingup')),
		
	__("Use this option if you don't wish to display the unavailable slots in the front-end booking form.",'bookingup'),
  __("Use this option if you don't wish to display the unavailable slots in the front-end booking form. ",'bookingup')
       );
	   
	   
	   $working_hours_time = array(
	                    '' => '',
		 				'5' => 5,
                        '10' =>10,
                        '12' => 12,
                        '15' => 15,
                        '20' => 20,
                        '30' =>30,                       
                        '60' =>60,
						'90' =>90,
						'120' =>120
                       
                    );
					
	
	 $this->create_plugin_setting(
            'select',
            'bup_calendar_working_hours_start',
            __('Staff Schedule Period:','bookingup'),
            $working_hours_time,
            __('This gives you flexibility to set the start working hour for your staff members','bookingup'),
            __('This gives you flexibility to set the start working hour for your staff members','bookingup')
    );
	   
	 $this->create_plugin_setting(
            'select',
            'bup_calendar_time_slot_length',
            __('Calendar Slot Length:','bookingup'),
            $data_time,
            __('Select the slot length to be used on the Calendar','bookingup'),
            __('Select the slot length to be used on the Calendar','bookingup')
    );
	
	
	$this->create_plugin_setting(
            'select',
            'bup_time_slot_length',
            __('Time slot length:','bookingup'),
            $data_time,
            __('Select the time interval that will be used in frontend and backend, e.g. in calendar, second step of the booking process, while indicating the working hours, etc.','bookingup'),
            __('Select the time interval that will be used in frontend and backend, e.g. in calendar, second step of the booking process, while indicating the working hours, etc.','bookingup')
    );
	
	
	$this->create_plugin_setting(
	'select',
	'bup_override_avatar',
	__('Use Booking Ultra Avatar','bookingup'),
	array(
		'no' => __('No','bookingup'), 
		'yes' => __('Yes','bookingup'),
		),
		
	__('If you select "yes", Booking Ultra will override the default WordPress Avatar','bookingup'),
  __('If you select "yes", Booking Ultra will override the default WordPress Avatar','bookingup')
       );
	
	
	   $this->create_plugin_setting(
	'select',
	'avatar_rotation_fixer',
	__('Auto Rotation Fixer','bookingup'),
	array(
		'no' => __('No','bookingup'), 
		'yes' => __('Yes','bookingup'),
		),
		
	__("If you select 'yes', Booking Ultra will Automatically fix the rotation of JPEG images using PHP's EXIF extension, immediately after they are uploaded to the server. This is implemented for iPhone rotation issues",'bookingup'),
  __("If you select 'yes', Booking Ultra will Automatically fix the rotation of JPEG images using PHP's EXIF extension, immediately after they are uploaded to the server. This is implemented for iPhone rotation issues",'bookingup')
       );
	   $this->create_plugin_setting(
        'input',
        'media_avatar_width',
        __('Avatar Width:','bookingup'),array(),
        __('Width in pixels','bookingup'),
        __('Width in pixels','bookingup')
);

$this->create_plugin_setting(
        'input',
        'media_avatar_height',
        __('Avatar Height','bookingup'),array(),
        __('Height in pixels','bookingup'),
        __('Height in pixels','bookingup')
);
	
	
	
	 								
	
	  
		
?>
</table>


</div>


<p class="submit">
	<input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes','bookingup'); ?>"  />
</p>




</div>



<div id="tabs-bup-googlecalendar">
  
<div class="bup-sect bup-welcome-panel ">
<h3><?php _e('Google Calendar Settings','bookingup'); ?></h3>


  <?php if(isset($bupcomplement))
{?>

  
  <p><?php _e('This module gives you the capability to sync the plugin with Google Calendar. Each Staff member can have a different Google Calendar linked to their accounts.','bookingup'); ?></p>
  
  
<table class="form-table">
<?php 
   
		
$this->create_plugin_setting(
        'input',
        'google_calendar_client_id',
        __('Client ID','bookingup'),array(),
        __('Fill out this field with your Client ID obtained from the Developers Console','bookingup'),
        __('Fill out this field with your Client ID obtained from the Developers Console','bookingup')
);

$this->create_plugin_setting(
        'input',
        'google_calendar_client_secret',
        __('Client Secret','bookingup'),array(),
        __('Fill out this field with your Client Secret obtained from the Developers Console.','bookingup'),
        __('Fill out this field with your Client Secret obtained from the Developers Console.','bookingup')
);


$this->create_plugin_setting(
	'select',
	'google_calendar_template',
	__('What To Display in Google Calendar?','bookingup'),
	array(
		'service_name' => __('Service Name','bookingup'), 
		'staff_name' => __('Staff Name','bookingup'),
		'client_name' => __('Client Name','bookingup')
		),
		
	__("Set what information should be placed in the title of Google Calendar event",'bookingup'),
  __("Set what information should be placed in the title of Google Calendar event",'bookingup')
       );
	   
	   
	   $this->create_plugin_setting(
	'select',
	'google_calendar_debug',
	__('Debug Mode?','bookingup'),
	array(
		'no' => __('NO','bookingup'), 
		'yes' => __('YES','bookingup')
		),
		
	__("This option will display the detail of the error message if the Google Calendar Insert Method fails.",'bookingup'),
  __("This option will display the detail of the error message if the Google Calendar Insert Method fails.",'bookingup')
       );
	
?>
</table>


<p><strong><?php _e('Redirect URI','bookingup'); ?></strong></p>
<p><?php _e('Enter this URL as a redirect URI in the Developers Console','bookingup'); ?></p>

<p><strong><?php echo get_admin_url();?>admin.php?page=bookingultra&tab=users </strong></p>



<p class="submit">
	<input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes','bookingup'); ?>"  />
</p>


<?php }else{?>

<p><?php _e('This function is disabled in the free version of Booking Ultra Pro. If you find the plugin useful for your business please consider buying a licence for the full version.','bookingup'); ?>. Click <a href="https://bookingultrapro.com/compare-packages.html">here</a> to upgrade </p>
<?php }?> 


</div>

</div>

<div id="tabs-bup-business-hours">
<div class="bup-sect  bup-welcome-panel">
  <h3><?php _e('Business Hours','bookingup'); ?></h3>  
  <p><?php _e('.','bookingup'); ?></p>
   
   <?php echo $bookingultrapro->service->get_business_hours_global_settings();?>
  
  <p class="submit">
	<input type="button" name="ubp-save-glogal-business-hours" id="ubp-save-glogal-business-hours" class="button button-primary" value="<?php _e('Save Changes','bookingup'); ?>"  />&nbsp; <span id="bup-loading-animation-business-hours">  <img src="<?php echo bookingup_url?>admin/images/loaderB16.gif" width="16" height="16" /> &nbsp; <?php _e('Please wait ...','bookingup'); ?> </span>
</p>

    
  
  
</div>


</div>





<div id="tabs-bup-newsletter">
  
  
  
  <?php if(isset($bupcomplement))
{?>


<div class="bup-sect bup-welcome-panel ">
<h3><?php _e('Aweber Settings','bookingup'); ?></h3>
  
  <p><?php _e('Here you can activate your preferred newsletter tool.','bookingup'); ?></p>

<table class="form-table">
<?php 
   
$this->create_plugin_setting(
	'select',
	'newsletter_active',
	__('Activate Newsletter','bookingup'),
	array(
		'no' => __('No','bookingup'), 
		'aweber' => __('AWeber','bookingup'),
		'mailchimp' => __('MailChimp','bookingup'),
		),
		
	__('Just set "NO" to deactivate the newsletter tool.','bookingup'),
  __('Just set "NO" to deactivate the newsletter tool.','bookingup')
       );

	
?>
</table>

<p class="submit">
	<input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes','bookingup'); ?>"  />
</p>


</div>


<div class="bup-sect bup-welcome-panel ">
<h3><?php _e('Aweber Settings','bookingup'); ?></h3>
  
  <p><?php _e('This module gives you the capability to subscribe your clients automatically to any of your Aweber List when they complete the purchase.','bookingup'); ?></p>
  
  
<table class="form-table">
<?php 
   
		
$this->create_plugin_setting(
        'input',
        'aweber_app_id',
        __('APP ID','bookingup'),array(),
        __('Fill out this field with your MailChimp API key here to allow integration with MailChimp subscription.','bookingup'),
        __('Fill out this field with your MailChimp API key here to allow integration with MailChimp subscription.','bookingup')
);

$this->create_plugin_setting(
        'input',
        'aweber_consumer_key',
        __('Consumer Key','bookingup'),array(),
        __('Fill out this field your list ID.','bookingup'),
        __('Fill out this field your list ID.','bookingup')
);

$this->create_plugin_setting(
        'input',
        'aweber_consumer_secret',
        __('Consumer Secret','bookingup'),array(),
        __('Fill out this field your list ID.','bookingup'),
        __('Fill out this field your list ID.','bookingup')
);




$this->create_plugin_setting(
                'checkbox',
                'aweber_auto_text',
                __('Auto Checked Aweber','bookingup'),
                '1',
                __('If checked, the user will not need to click on the mailchip checkbox. It will appear checked already.','bookingup'),
                __('If checked, the user will not need to click on the mailchip checkbox. It will appear checked already.','bookingup')
        );
$this->create_plugin_setting(
        'input',
        'aweber_text',
        __('Aweber Text','bookingup'),array(),
        __('Please input the text that will appear when asking users to get periodical updates.','bookingup'),
        __('Please input the text that will appear when asking users to get periodical updates.','bookingup')
);

	$this->create_plugin_setting(
        'input',
        'aweber_header_text',
        __('Aweber Header Text','bookingup'),array(),
        __('Please input the text that will appear as header when mailchip is active.','bookingup'),
        __('Please input the text that will appear as header when mailchip is active.','bookingup')
);
	
?>
</table>

<p class="submit">
	<input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes','bookingup'); ?>"  />
</p>


</div>




<div class="bup-sect bup-welcome-panel ">
<h3><?php _e('MailChimp Settings','bookingup'); ?></h3>
  
  <p><?php _e('.','bookingup'); ?></p>
  
  
<table class="form-table">
<?php 
   
		
$this->create_plugin_setting(
        'input',
        'mailchimp_api',
        __('MailChimp API Key','bookingup'),array(),
        __('Fill out this field with your MailChimp API key here to allow integration with MailChimp subscription.','bookingup'),
        __('Fill out this field with your MailChimp API key here to allow integration with MailChimp subscription.','bookingup')
);

$this->create_plugin_setting(
        'input',
        'mailchimp_list_id',
        __('MailChimp List ID','bookingup'),array(),
        __('Fill out this field your list ID.','bookingup'),
        __('Fill out this field your list ID.','bookingup')
);



$this->create_plugin_setting(
                'checkbox',
                'mailchimp_auto_checked',
                __('Auto Checked MailChimp','bookingup'),
                '1',
                __('If checked, the user will not need to click on the mailchip checkbox. It will appear checked already.','bookingup'),
                __('If checked, the user will not need to click on the mailchip checkbox. It will appear checked already.','bookingup')
        );
$this->create_plugin_setting(
        'input',
        'mailchimp_text',
        __('MailChimp Text','bookingup'),array(),
        __('Please input the text that will appear when asking users to get periodical updates.','bookingup'),
        __('Please input the text that will appear when asking users to get periodical updates.','bookingup')
);

	$this->create_plugin_setting(
        'input',
        'mailchimp_header_text',
        __('MailChimp Header Text','bookingup'),array(),
        __('Please input the text that will appear as header when mailchip is active.','bookingup'),
        __('Please input the text that will appear as header when mailchip is active.','bookingup')
);
	
?>
</table>

<p class="submit">
	<input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes','bookingup'); ?>"  />
</p>


</div>


<?php }else{?>

<p><?php _e('This function is disabled in the free version of Booking Ultra Pro. If you find the plugin useful for your business please consider buying a licence for the full version.','bookingup'); ?>. Click <a href="https://bookingultrapro.com/compare-packages.html">here</a> to upgrade </p>
<?php }?>  

</div>



</div>


<div id="tabs-bup-shopping">
  
<div class="bup-sect bup-welcome-panel ">
<h3><?php _e('Shopping Cart Settings','bookingup'); ?></h3>


  <?php if(isset($bupcomplement))
{?>

  
  <p><?php _e('This module gives you the capability to allow users to purchase multiple services at once. There are some settings you can tweak on this section','bookingup'); ?></p>
  
  
<table class="form-table">
<?php 
   
$this->create_plugin_setting(
        'input',
        'shopping_cart_description',
        __('Purchase Description','bookingup'),array(),
        __('Here you can set a custom description that will be displayed when the client purchases multiple items by using the shopping cart features.','bookingup'),
        __('Here you can set a custom description that will be displayed when the client purchases multiple items by using the shopping cart features.','bookingup')
);


	
?>
</table>



<p class="submit">
	<input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes','bookingup'); ?>"  />
</p>


<?php }else{?>

<p><?php _e('This function is disabled in the free version of Booking Ultra Pro. If you find the plugin useful for your business please consider buying a licence for the full version.','bookingup'); ?>. Click <a href="https://bookingultrapro.com/compare-packages.html">here</a> to upgrade </p>
<?php }?> 


</div>

</div>


</form>