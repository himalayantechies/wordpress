<h2>Edit Support Compuser</h2>

<?php echo $this->form->create($model->name); ?>
<?php echo $this->form->input('name'); ?>
<?php echo $this->form->belongs_to_dropdown('SupportCompany', $companies, array('style' => 'width: 200px;', 'empty' => '--select--')); ?>
<?php echo $this->form->input('contact'); ?>
<?php echo $this->form->input('email'); ?>
<?php echo $this->form->input('designation'); ?>
<?php echo $this->form->end('Update'); ?>