<?php
global $bookingultrapro, $bupcomplement;

$howmany = "20";
$year = "";
$month = "";
$day = "";
$status = "";
$avatar = "";
$edit = "";

if(isset($_GET["avatar"]) && $_GET["avatar"]!=''){
	
	$avatar = $_GET["avatar"];
}

if(isset($_GET["edit"]) && $_GET["edit"]!=''){
	
	$edit = $_GET["edit"];
}

$load_training_session_id = $bookingultrapro->userpanel->get_first_training_session_on_list();


if(isset($_GET["ui"]) && $_GET["ui"]!=''){
	
	$load_staff_id=$_GET["ui"];
}

if(isset($_GET["code"]) && $_GET["code"] !='' && isset($bupcomplement->googlecalendar))
{
	session_start();
	
	$current_staff_id =$_SESSION["current_staff_id"] ;
	echo "Google Calendar Linked Staff ID :" . $current_staff_id;
		
	if($current_staff_id!='')
	{				
		//google calendar.	
		$client = $bupcomplement->googlecalendar->auth_client_with_code($_GET["code"], $current_staff_id);	
		$load_staff_id=$current_staff_id;
	
	}

}else{
	
	session_start();	
	$_SESSION["current_staff_id"] = $load_staff_id;
}


?>



     
        <div class="bup-sect ">
        
        <div class="bup-staff ">
        
        
        
        	
        </div>        
        </div>
        
        <div id="bup-breaks-new-box" title="<?php _e('Add Breaks','bookingup')?>"></div>
        
        <div id="bup-spinner" class="bup-spinner" style="display:">
            <span> <img src="<?php echo bookingup_url?>admin/images/loaderB16.gif" width="16" height="16" /></span>&nbsp; <?php echo __('Please wait ...','bookingup')?>
	</div>
        
         <div id="bup-staff-editor-box"></div>
        
  

 <script type="text/javascript">
	
			
			 var message_wait_availability ='<img src="<?php echo bookingup_url?>admin/images/loaderB16.gif" width="16" height="16" /></span>&nbsp; <?php echo __("Please wait ...","bookingup")?>'; 
			 
			 jQuery("#bup-spinner").hide();		 
			  
			  console.log("Line 151");
			  bup_load_trainingSessions_list_adm();
			 
			   //bup_load_staff_list_adm();
			   //bup_load_trainingSessions_list_adm();
			   
				   <?php if($load_staff_id!=''){?>		  
				  
				//	setTimeout("bup_load_staff_details(<?php echo $load_staff_id?>)", 1000);
				  
				  <?php }?>
			  
			   	
				  
			  
		
	</script>
