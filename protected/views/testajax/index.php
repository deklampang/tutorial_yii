<?php
/* @var $this TestajaxController */

$this->breadcrumbs=array(
	'Testajax',
);
?>
<h3><?php echo $this->id . '/' . $this->action->id; ?></h3>

<div class="form">
<?php echo CHtml::beginForm(); ?>
    <?php echo CHtml::activeTextField($model,'field1'); ?>
    <?php echo CHtml::activeTextField($model,'field2'); ?>
    <?php
    echo CHtml::ajaxSubmitButton('Save',
        array('testajax/save','id'=>$model->id),
        array('update'=>'#req_result','beforeSend' => 'function(call,settings){
            $("#req_result").html("Saving, Please wait..");}',
       )); 
  ?>
<div id="req_result"></div>
<?php echo CHtml::endForm(); ?>
</div><!-- form -->
