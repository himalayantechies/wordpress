<?php if(!empty($mediafiles)){?>
	<form action="" method="">
	<h1 class="wp-heading-inline"> Uploaded Media</h1>
	<div id="imgStyle1" class="message">  
	</div>
	</form>
<?php	} ?>

<form action="" method="POST" class="ibenic_upload_form" enctype="multipart/form-data">
<h1 class="wp-heading-inline"> Upload Media</h1>

<div id="ibenic_file_upload" class="file-upload">
  	<input type="file" multiple="multiple" id="ibenic_file_input" name="fileUpload[]" style="opacity:10;" />
  	<!-- <p class="ibenic_file_upload_text"><?php _e( 'Upload your file', 'ibenic_upload' ); ?></p> -->
</div>
</br>
	<button class="media-save" type="button"> Save </button>
</form>


<script type="text/javascript">

var current_task_id = '<?php echo $id; ?>';
var cnt = 1;
var mediafile = '<?php echo json_encode($mediafiles); ?>';
var jsonObj = JSON.parse(mediafile);
var redirectUrl = "<?php echo(admin_url('admin.php?page=mvc_support_tasks')); ?>"
	$(document).ready( function(){
		// Just to be sure that the input will be called
		$("#ibenic_file_upload").on("click", function(){
		  	$('#ibenic_file_input').click(function(event) {
				event.stopPropagation();
      		});
    	});
		$('#ibenic_file_input').on('change', prepareUpload);

		function prepareUpload(event) {

			var file = event.target.files;
			var parent = $("#" + event.target.id).parent();
			var data = new FormData();
  			var ins = document.getElementById('ibenic_file_input').files.length;
  			for (var x = 0; x < ins; x++) {
  				data.append("ibenic_file_upload[]",document.getElementById('ibenic_file_input').files[x]);
  			}
  			data.append('action', 'admin_support_tasks_file_upload');

			$.ajax({
	    		  url: ajaxurl,
		          type: 'POST',
		          data: data,
		          cache: false,
		          dataType: 'json',
		          processData: false, // Don't process the files
		          contentType: false,

		          success: function(data, textStatus, jqXHR) {
		          	var post_id = [];	
		          	for (var i = 0; i < data.length; i++) {
		          		if( data[i].response == "SUCCESS" ){
			          		post_id[i] = data[i].attachment_id;
			          	
		  	 			}
		  	 			else{
		             		alert( data[i].error );
						}
		          	}
		          	$('.media-save').click(function(){
				  	 	     	var datas = {
						   			 		action: 'admin_support_tasks_add_media',
						    				media_id: post_id, task_id: current_task_id
				  						};
				  	
				  				jQuery.post(ajaxurl, datas, function(response){
				  					window.location.replace(redirectUrl);
								});
				  	});

	          	}
			});
		}

		function viewMedia (){
			var check = 1;
    		for(i = 0; i < jsonObj.length; i++){
    			$('#imgStyle1').append("<div id='newDiv"+ check + "' class='mediaFile'></div>");
        		var media = document.createElement("IMG");
        		var str = jsonObj[i].guid;
				var filename = str.substring(str.lastIndexOf("/") + 1, str.length);;
        		media.setAttribute("src", jsonObj[i].guid );
        		media.setAttribute("title", filename);
        		media.setAttribute("style",'height : 100px;width:100px;');
        		media.classList.add("upFile");
        		document.getElementById("newDiv" + check + "").appendChild(media);
        		document.getElementById("newDiv" + check + "").appendChild(document.createElement("br"));
        		var input = document.createElement("input");
        		input.setAttribute("value", jsonObj[i].ID);
        		input.setAttribute("type", 'hidden');
        		input.classList.add("mediaId");
        		document.getElementById("newDiv" + check + "").append(input);
        		document.getElementById("newDiv" + check + "").append(filename);
 				document.getElementById("newDiv" + check + "").appendChild(document.createElement("br"));
        		var button = document.createElement("button");
        		button.innerHTML = "Remove";
        		button.classList.add("deleteImage");
        		document.getElementById("newDiv" + check + "").appendChild(button);
        		check++;
        	}
		}
		if (jsonObj != null){
			viewMedia();
		}
		
		$('.deleteImage').click(function(event){
			event.preventDefault();
			var media_id = $(this).parents('div.mediaFile').find('.mediaId').val();
			var fileurl = $(this).parents('div.mediaFile').find('.upFile').attr("src");
			var datas = {
						action: 'admin_support_tasks_file_delete',
						post_id: media_id, file_url: fileurl, task_id: current_task_id
				  		};
				  	
			jQuery.post(ajaxurl, datas, function(response){
				alert(response.msg);
				location.reload();
			});

		});
		
	});

</script>