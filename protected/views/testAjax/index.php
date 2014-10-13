<div class="form">
    <?php $form = $this->beginWidget('CActiveForm', array(
        'id'=>'ajax-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>
    <div class="row">
        <?php echo $form->labelEx($model,'field1'); ?>
        <?php echo $form->textField($model,'field1'); ?>
        <?php echo $form->error($model,'field1'); ?>
         
        <?php echo $form->labelEx($model,'field2'); ?>
        <?php echo $form->textField($model,'field2'); ?>
        <?php echo $form->error($model,'field2'); ?>
     <br />
        <?php
            echo CHtml::ajaxSubmitButton('Save',
                array('testAjax/save','id'=>$model->id),
                array('update'=>'#req_result')
            );
        ?>
        <div id="req_result"></div>
    </div> <!-- row -->
    <?php $this->endWidget(); ?>
</div><!-- form -->
