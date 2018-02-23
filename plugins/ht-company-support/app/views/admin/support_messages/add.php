<h2>Add Support Message</h2>

<?php echo $this->form->create($model->name); ?>
<?php echo $this->form->belongs_to_dropdown('SupportGroup', $groups, array('style' => 'width: 200px;', 'empty' => '--select--')); ?>
<?php echo $this->form->input('message'); ?>
<?php echo $this->form->input('type'); ?>
<?php echo $this->form->input('date'); ?>
<?php echo $this->form->end('Add'); ?>