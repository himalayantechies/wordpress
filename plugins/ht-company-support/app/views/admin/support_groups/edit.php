<h2>Edit Support Group</h2>

<?php echo $this->form->create($model->name); ?>
<?php echo $this->form->input('title'); ?>
<?php echo $this->form->belongs_to_dropdown('SupportCompany', $companies, array('style' => 'width: 200px;', 'empty' => '--select--')); ?>
<?php echo $this->form->input('ht_handler'); ?>
<?php echo $this->form->has_many_dropdown('SupportCompuser', $compusers, array('style' => 'width: 200px;', 'empty' => '--select--')); ?>
<?php echo $this->form->end('Update'); ?>

<script type="text/javascript">
$(document).ready(function(){
	$('#SupportGroup_SupportCompany_select').change(function(){
		$("#SupportGroup_SupportCompuser_list li").remove();
		var company_id = $(this).val(); 
		var data = {
		    action: 'admin_support_groups_get_company_user',
		    content: company_id
		  };
		  //ajaxurl is defined by WordPress
		  jQuery.post(ajaxurl, data, function(response){
		  	var options = '';
		  	$.each(response, function(i, obj){
		  		options = '<option value="">--select--</option>';
		  		for (var i = 0; i < obj.length; i++) {
		  			options += '<option value='+obj[i].id+'>'+obj[i].name+'</option>';
		  		}
		  	});
		  	$('#SupportGroup_SupportCompuser_select').html(options);
		  });
	});
});
</script>