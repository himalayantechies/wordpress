<h2>Add Support Task</h2>

<?php $current_user = wp_get_current_user();
$user = $current_user->user_login; ?>

<?php echo $this->form->create($model->name); ?>
<?php echo $this->form->input('title'); ?>
<?php echo $this->form->input('description'); ?>
<?php echo $this->form->belongs_to_dropdown('SupportCompany', $companies, array('style' => 'width: 200px;', 'empty' => '--select--')); ?>
<?php echo $this->form->input('task_deadline', array('label' => 'Date (YYYY-MM-DD)')); ?>
<?php echo $this->form->hidden_input('created_by', $options = array('value' => $user)); ?>
<?php echo $this->form->end('Add',array('class' => 'submit')); ?>
