<?php
global $bookingultrapro, $bupcomplement, $bupultimate, $bup_filter, $wp_locale;

$how_many_upcoming_app = 20;


$currency_symbol =  $bookingultrapro->get_option('paid_membership_symbol');
$date_format =  $bookingultrapro->get_int_date_format();
$time_format =  $bookingultrapro->service->get_time_format();


//today
$today = $bookingultrapro->appointment->get_appointments_planing_total('today');
$tomorrow = $bookingultrapro->appointment->get_appointments_planing_total('tomorrow');
$week = $bookingultrapro->appointment->get_appointments_planing_total('week');

$pending = $bookingultrapro->appointment->get_appointments_total_by_status(0);
$cancelled = $bookingultrapro->appointment->get_appointments_total_by_status(2);
$noshow = $bookingultrapro->appointment->get_appointments_total_by_status(3);
$unpaid = $bookingultrapro->order->get_orders_by_status('pending');



//echo "current_time( 'timestamp' ) returns local site time: " . date( 'Y-m-d H:i:s', current_time( 'timestamp', 0 ) );
//echo "current_time( 'timestamp', 1 ) returns GMT: " . date( 'Y-m-d H:i:s', current_time( 'timestamp', 1 ) );



$va = get_option('bup_c_key');
				
if($va==''  && isset($bupultimate)){
					
	$this->display_ultimate_validate_copy();
					
}


$upcoming_appointments = $bookingultrapro->appointment->get_upcoming_appointments($how_many_upcoming_app);

        
?>

<div class="bup-welcome-panel">

    <div class="welcome-panel-content">
        <h3 class="bup-welcome"><?php _e('Welcome to Booking Ultra Pro!','bookingup')?></h3>
        
        <span class="bup-main-close-open-tab"><a href="#" title="Close" class="bup-widget-home-colapsable" widget-id="111"><i class="fa fa-sort-asc " id="bup-close-open-icon-111" ></i></a></span>
        
        <div class="buprodash-main-sales-summary " id="bup-main-cont-home-111" >
        
        <div class="bupro-main-dashcol-1" >
          	 <div id='easywpm-gcharthome' style="width: 100%; height: 180px;">
          	 </div>
        </div>
        
        <!--Col2-->
       <div class="bupro-main-dashcol-2" >
        	
            
             <div class="bupro-main-quick-summary" >
             
                <p class="bupquickappbtn"> <a id="bup-create-new-app" href="#"><span><i class="fa fa-calendar"></i></span><?php _e('Create New Appointment','bookingup')?></a> </p>
          
         	   <ul>
                   <li>                    
                     
                      <p style="color: #3C0"> <?php echo $today?></p>  
                       <small><?php _e('Today','bookingup')?> </small>                  
                    </li>
                    
                    <li>                   
                     
                      <p style="color:"> <?php echo $tomorrow?></p> 
                       <small><?php _e('Tomorrow','bookingup')?> </small>                   
                    </li>
                
                	<li>                   
                     
                      <p style="color:"> <?php echo $week?></p> 
                       <small><?php _e('This Week','bookingup')?> </small>                   
                    </li>
              </ul>
              
            </div>
            
            <div class="buprodash-main-blocksec" >
            
            
                 <div class="bupdashsum" >
                 
                    <ul>
                    
                       <li><a href="#"  class="bup-adm-see-appoint-list-quick" bup-status='0' bup-type='bystatus'>                    
                          <small><?php _e('Pending','bookingup')?> </small>
                          <p style="color: #333"> <?php echo $pending?></p>   </a>                
                        </li>
                    
                        <li>  <a href="#" class="bup-adm-see-appoint-list-quick" bup-status='2' bup-type='bystatus'>                  
                          <small><?php _e('Cancelled','easy-wp-members')?> </small>
                          <p style="color:"><?php echo $cancelled?></p>     </a>               
                        </li>
                        
                        <li> 
                        
                      <a href="#" class="bup-adm-see-appoint-list-quick" bup-status='3' bup-type='bystatus'>               
                          <small><?php _e('No-show','easy-wp-members')?> </small>
                          <p style="color:"> <?php echo $noshow?></p>  
                          
                          </a>                  
                        </li>
                        
                        <li>     
                        
                         <a href="#" class="bup-adm-see-appoint-list-quick" bup-status='3' bup-type='byunpaid'>              
                          <small><?php _e('Unpaid','easy-wp-members')?> </small>
                          <p style="color: #F90000"> <?php echo $unpaid?></p> 
                          
                           </a>                     
                        </li>
                        
                                      
                    </ul>  
                    
                        <p style="text-align:right" class="bup-timestamp-features"> <?php _e('Site Time: ','bookingup')?><?php echo date( 'Y-m-d H:i:s', current_time( 'timestamp', 0 ) )?> (Offset: <?php echo get_option('gmt_offset');?>) | <?php _e('GMT: ','bookingup')?>  <?php echo date( 'Y-m-d H:i:s', current_time( 'timestamp', 1 ) )?></p>
           
                 </div>
            
            
            </div>
            
           
            
            
          
          </div>
        <!-- End Col2-->
        
        
        
        </div>
        
    </div>

</div>    

<div class="bup-welcome-panel">

<div class="welcome-panel-content">
	<h3 class="bup-welcome"><?php _e('Upcoming Appointments!','bookingup')?></h3>
    
    <span class="bup-main-close-open-tab"><a href="#" title="Close" class="bup-widget-home-colapsable" widget-id="1"><i class="fa fa-sort-asc " id="bup-close-open-icon-1" ></i></a></span>
	
	<div class="welcome-panel-column-container " id="bup-main-cont-home-1" >
    

    
   
    
      <?php
			
			
				
				if (!empty($upcoming_appointments)){
				
				
				?>
       
           <table width="100%" class="wp-list-table widefat fixed posts table-generic">
            <thead>
                <tr>
                    <th width="4%"><?php _e('#', 'bookingup'); ?></th>
                    
                     <th width="13%"><?php _e('Date', 'bookingup'); ?></th>
                     
                     <?php if(isset($bup_filter) && isset($bupultimate)){?>
                     
                      <th width="11%"><?php _e('Location', 'bookingup'); ?></th>
                     
                     <?php	} ?>
                    
                    <th width="23%"><?php _e('Client', 'bookingup'); ?></th>
                    <th width="23%"><?php _e('Phone Number', 'bookingup'); ?></th>
                    <th width="23%"><?php _e('Provider', 'bookingup'); ?></th>
                     <th width="18%"><?php _e('Service', 'bookingup'); ?></th>
                    <th width="16%"><?php _e('At', 'bookingup'); ?></th>
                    
                     
                     <th width="9%"><?php _e('Status', 'bookingup'); ?></th>
                    <th width="9%"><?php _e('Actions', 'bookingup'); ?></th>
                </tr>
            </thead>
            
            <tbody>
            
            <?php 
			$filter_name= '';
			$phone= '';
			foreach($upcoming_appointments as $appointment) {
				
				
				$date_from=  date("Y-m-d", strtotime($appointment->booking_time_from));
				$booking_time = date($time_format, strtotime($appointment->booking_time_from ))	.' - '.date($time_format, strtotime($appointment->booking_time_to ));
				 
				$staff = $bookingultrapro->userpanel->get_staff_member($appointment->booking_staff_id);
				
				$client_id = $appointment->booking_user_id;				
				$client = get_user_by( 'id', $client_id );
				
				if(isset($appointment->filter_name))
				{
					$filter_name=$appointment->filter_name;
					
				}else{
					
					$filter_id = $bookingultrapro->appointment->get_booking_meta($appointment->booking_id, 'filter_id');					
					$filter_n = $bookingultrapro->appointment->get_booking_location($filter_id);
					$filter_name=$filter_n->filter_name;
					
				}
				
				//get phone
			
				$phone = $bookingultrapro->appointment->get_booking_meta($appointment->booking_id, 'full_number');
				
				
					
			?>
              

                <tr>
                    <td><?php echo $appointment->booking_id; ?></td>
                   
                     <td><?php echo  date($date_format, strtotime($date_from)); ?>      </td> 
                     
                      <?php if(isset($bup_filter) && isset($bupultimate)){?>
                      
                      <td><?php echo $filter_name; ?> </td>
                       <?php	} ?>
                      
                    <td><?php echo $client->display_name; ?> (<?php echo $client->user_email; ?>)</td>
                    <td><?php echo $phone; ?></td>
                    <td><?php echo $staff->display_name; ?></td>
                    <td><?php echo $appointment->service_title; ?> </td>
                    <td><?php echo  $booking_time; ?></td>                  
                     
                      <td><?php echo $bookingultrapro->appointment->get_status_legend($appointment->booking_status); ?></td>
                   <td> <a href="#" class="bup-appointment-edit-module" appointment-id="<?php echo $appointment->booking_id?>" title="<?php _e('Edit','bookingup'); ?>"><i class="fa fa-edit"></i></a></td>
                </tr>
                
                
                <?php
					}
					
					} else {
			?>
			<p><?php _e('There are no appointments yet.','bookingup'); ?></p>
			<?php	} ?>

            </tbody>
        </table>
        
	          
  
	
	</div>
	</div>
    
    
</div>

<?php if(isset($bupcomplement) && isset($bupultimate)){?>

<div class="bup-welcome-panel">

    <div class="welcome-panel-content">
        <h3 class="bup-welcome"><?php _e('Locations','bookingup')?></h3>
        
         <span class="bup-main-close-open-tab"><a href="#" title="Close" class="bup-widget-home-colapsable" widget-id="2"><i class="fa fa-sort-asc " id="bup-close-open-icon-2" ></i></a></span>
         
         <div class="welcome-panel-column-container " id="bup-main-cont-home-2" >
         
        	 <div class="bup-locations-home-cont "  >
         
         	 </div>
         
         </div>
     
    </div>
    
</div>

<?php }?>

<?php if(!isset($bupcomplement)){?>
<p class="bup-extra-features"><?php _e('Do you need more features or manage multiple locations, google calendar integration, SMS reminders, change legends & colors?','bookingup')?> <a href="https://bookingultrapro.com/compare-packages.html" target="_blank">Click here</a> to see higher versions.</p>

<?php }?>
        <div class="bup-sect bup-welcome-panel">
        
        
        
        	<div id="full_calendar_wrapper">     
            
            <?php if(isset($bupcomplement) && isset($bupultimate)){?>
            
                <div class="bup-calendar-filters">
                
                       <?php echo $bup_filter->get_all_calendar_filter();?>          
                       <?php echo $bookingultrapro->userpanel->get_staff_list_calendar_filter();?> 
                       <button name="bup-btn-calendar-filter" id="bup-btn-calendar-filter" class="bup-button-submit-changes"><?php _e('Filter','bookingup')?>	</button>
                </div>  
            
            <?php }?>      
            	
                <div class="table-responsive">
                        <div class="ab-loading-inner" style="display: none">
                            <span class="ab-loader"></span>
                        </div>
                        <div class="bup-calendar-element"></div>
                </div>  
                
            </div> 
        
        </div>
        
     <div id="bup-appointment-new-box" title="<?php _e('Create New Appointment','bookingup')?>"></div>
     <div id="bup-appointment-edit-box" title="<?php _e('Edit Appointment','bookingup')?>"></div>     
     <div id="bup-new-app-conf-message" title="<?php _e('Appointment Created','bookingup')?>"></div> 
     <div id="bup-new-payment-cont" title="<?php _e('Add Payment','bookingup')?>"></div>
     <div id="bup-confirmation-cont" title="<?php _e('Confirmation','bookingup')?>"></div>
     <div id="bup-new-note-cont" title="<?php _e('Add Note','bookingup')?>"></div>     
     <div id="bup-appointment-list" title="<?php _e('Pending Appointments','bookingup')?>"></div>
     
     <div id="bup-client-new-box" title="<?php _e('Create New Client','bookingup')?>"></div>
           <div id="bup-appointment-change-status" title="<?php _e('Appointment Status','bookingup')?>"></div>

     
     
       
    
    <div id="bup-spinner" class="bup-spinner" style="display:">
            <span> <img src="<?php echo bookingup_url?>admin/images/loaderB16.gif" width="16" height="16" /></span>&nbsp; <?php echo __('Please wait ...','bookingup')?>
	</div>
    
    
    <script type="text/javascript">
	
			var err_message_payment_date ="<?php _e('Please select a payment date.','bookingup'); ?>";
			var err_message_payment_amount="<?php _e('Please input an amount','bookingup'); ?>"; 
			var err_message_payment_delete="<?php _e('Are you totally sure that you want to delete this payment?','bookingup'); ?>"; 
			
			var err_message_note_title ="<?php _e('Please input a title.','bookingup'); ?>";
			var err_message_note_text="<?php _e('Please input some text','bookingup'); ?>";
			var err_message_note_delete="<?php _e('Are you totally sure that you want to delete this note?','bookingup'); ?>"; 
			
			
			var gen_message_rescheduled_conf="<?php _e('The appointment has been rescheduled.','bookingup'); ?>"; 
			var gen_message_infoupdate_conf="<?php _e('The information has been updated.','bookingup'); ?>"; 
	
		     var err_message_start_date ="<?php _e('Please select a date.','bookingup'); ?>";
			 var err_message_service ="<?php _e('Please select a service.','bookingup'); ?>"; 
		     var err_message_time_slot ="<?php _e('Please select a time.','bookingup'); ?>";
			 var err_message_client ="<?php _e('Please select a client.','bookingup'); ?>";
			 var message_wait_availability ='<img src="<?php echo bookingup_url?>admin/images/loaderB16.gif" width="16" height="16" /></span>&nbsp; <?php echo __("Please wait ...","bookingup")?>'; 
			  
		
	</script>
    
    <?php

$sales_val= $bookingultrapro->appointment->get_graph_total_monthly();
$months_array = array_values( $wp_locale->month );
$current_month = date("m");
$current_month_legend = $months_array[$current_month -1];

?>

<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
		  
        var data = google.visualization.arrayToDataTable([
          ["<?php _e('Day','bookingup')?>", "<?php _e('Bookings','bookingup')?>"],
         <?php echo $sales_val?>
        ]);

        var options = {
        
          hAxis: {title: '<?php printf(__( 'Month: %s', 'bookingup' ),
    $current_month_legend);?> ',  titleTextStyle: {color: '#333'},  textStyle: {fontSize: '9'}},
          vAxis: {minValue: 0},		 
		  legend: { position: "none" }
        };

        var chart_1 = new google.visualization.AreaChart(document.getElementById('easywpm-gcharthome'));
        chart_1.draw(data, options);
		
				
		
		
		
      }
    </script>


     
