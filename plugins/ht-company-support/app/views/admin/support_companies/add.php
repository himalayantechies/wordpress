<h2>Add Company</h2>

<?php echo $this->form->create($model->name); ?>

<?php echo $this->form->input('name'); ?>
<?php echo $this->form->input('address'); ?>
<?php echo $this->form->input('contact'); ?>
<?php echo $this->form->input('email'); ?>
<?php echo $this->form->input('website'); ?>

<?php echo $this->form->end('Add'); ?>