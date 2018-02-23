<h2>Add Support User</h2>

<?php echo $this->form->create($model->name); ?>
<?php echo $this->form->input('name'); ?>
<?php echo $this->form->belongs_to_dropdown('SupportCompany', $companies, array('style' => 'width: 200px;', 'empty' => '--select--')); ?>
<?php echo $this->form->input('contact'); ?>
<?php echo $this->form->input('email'); ?>
<?php echo $this->form->input('passkey'); ?>
<?php echo $this->form->button('generate');?>
<?php echo $this->form->input('designation'); ?>
<?php echo $this->form->end('Add'); ?>

<script type="text/javascript">
	$(document).ready(function() {
		function randomPassword(length) {
		    var chars = "abcdefghijklmnopqrstuvwxyz!@#$%^&*()-+<>ABCDEFGHIJKLMNOP1234567890";
		    var pass = "";
		    for (var x = 0; x < length; x++) {
		        var i = Math.floor(Math.random() * chars.length);
		        pass += chars.charAt(i);
		    }
		    return pass;
		}
		$('#SupportCompuserGenerate').click(function(){
			var passwd = randomPassword(8);
			$('#SupportCompuserPasskey').val(passwd);
			
		});
});
</script>