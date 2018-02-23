<h2><?php echo "Chat Here" ;?> </h2>
<!-- list group users in chat
<div>
<label class="user-list">Users</label>
<div>
<?php 
foreach( $users_name as $user){
	 echo ($user[0]->name);
	 echo "<br/>";
} ?>
</div>
</div> -->
 
<div class="col-md-12">
	<div class="chat-box col-md-12">
		<div class="row">
			<div class="chat-detail"></div>
		</div>
		<div class="row" style="padding-top: 30px;">
			<div class="col-md-10">
				<input id="usermsg" type="text" class="form-control">
			</div>
			<div class="col-md-1">
				<button id="submitmsg" class="btn btn-primary">Send</button>
			</div>	
		</div>
	</div>
</div>

<?php 
$current_user = wp_get_current_user();
$user = $current_user->user_login;
?>

<script type="text/javascript">
	var message_id = '';
	var group_id = '<?php echo $id;?>';
	var current_user = '<?php echo $user;?>';

	$(document).ready(function() {
	  	$('#submitmsg').click(function() {
	    	var message = $('#usermsg').val();
	    	var tzoffset = (new Date()).getTimezoneOffset() * 60000; //offset in milliseconds
			var msgtime = (new Date(Date.now() - tzoffset)).toISOString().slice(0,-5).replace("T", " ");
		    $('#usermsg').val('');
	      	var data = {
				    action: 'admin_support_messages_save_chat',
				    content: message,
				    group_id, current_user, msgtime
		  	};
		  	//ajaxurl is defined by WordPress
		  	jQuery.post(ajaxurl, data, function(response){
				});
	      
	    });
	  	$('#usermsg').keyup(function(e){
	        if(e.which == 13){//Enter key pressed
	            $('#submitmsg').click();
	        }
    	});

		function getchat(){
			var datas = {
				    action: 'admin_support_messages_get_chat',
				    content: message_id, group_id
		  		};
			jQuery.post(ajaxurl, datas, function(response){
			  	$.each(response, function(i, obj){
		  			for (var i = 0; i < obj.length; i++) {
		  				$('.chat-detail').append('<p>'+ obj[i].sender +' ('+ obj[i].timestamp +')  :  ' + obj[i].message + '</p>');
		  				message_id = obj[i].id;
		  			}
		  		});
		 	});
			setTimeout(getchat, 4000);
		}
		setTimeout(getchat, 4000);
	});
</script>


