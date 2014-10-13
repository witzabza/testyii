<?php
/* @var $this MembersController */
/* @var $model Member */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'member-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        
        <div class="row">
            <?php echo $form->labelEx($model,'id'); ?>
            <?php echo $form->textField($model,'id',array('size' => 15,'maxlength' => 11)); ?>
            <?php echo $form->error($model,'id'); ?>
        </div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
            <?php echo $form->labelEx($model,'gender'); ?>
            <?php echo $form->radioButton($model,'gender',array('value'=>'ชาย')); ?> ชาย 
            <?php echo $form->radioButton($model,'gender',array('value'=>'หญิง')); ?> หญิง
            <?php echo $form->error($model,'gender'); ?>
        </div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
                <?php echo $form->textarea($model,'address',array('rows'=>5,'cols'=>50)); ?>
                <?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zipcode'); ?>
		<?php echo $form->textField($model,'zipcode'); ?>
		<?php echo $form->error($model,'zipcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'provice_id'); ?>
		<?php echo $form->dropdownList($model,'provice_id', // Province ชื่อ Model ที่เราสร้างไว้
                    CHtml::listData(Provice::model()->findAll(),'id','name'),
                    array('0'=>'กรุณาเลือกรายการ')); ?>
                <?php echo $form->error($model,'provice_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
            <?php echo $form->labelEx($model,'typeuser'); ?>
            <?php echo $form->dropdownList($model,'typeuser',array('user'=>'user','admin'=>'admin')); ?>
            <?php echo $form->error($model,'typeuser'); ?>
        </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->