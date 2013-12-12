<?php
/* @var $this DataController */

$this->breadcrumbs=array(
	'Data',
);

//Yii::app()->clientScript->registerScript('search', "	
//$('.search-form form').submit(function(){
//    $.fn.yiiGridView.update('p-grid', {
//        data: $(this).serialize()
//    });
//    return false;
//});
//");

?>
<div class="form">
<?php echo CHtml::beginForm(); ?>
<?php echo CHtml::activeLabelEx($model,'text'); ?>
<?php echo CHtml::activeTextArea($model,'text',array('rows' => 8,'style'=>'width:98%;')); ?>
<?php 
    echo CHtml::ajaxSubmitButton(
        'บันทึกข้อมูล',array(
            '../../data/save/' => array(
                'id'=>$model->id),
        ),
        array(
            'update'=>'#req_result',
            'beforeSend' => 'function(call,settings){
                $("#req_result").html("กำลัง ประมวลผล กรุณารอ..");
            }',
            'success'=>'js:function(){
               $("#req_result").html("");
            }',
        )
    );
?>
<div id="req_result"></div>
<?php echo CHtml::endForm(); ?>
</div><!-- form -->
<?php



//$this->widget('bootstrap.widgets.TbGridView', array(
//    'id' => 'p-grid',                   // ชื่อตาราง
//    'dataProvider' => $dataProvider,    // ตัวแปร data ที่มีข้อมูล
//    'enablePagination' => true,         // กำหนดให้แสดงปุ่มเปลี่ยนหน้า
////    'filter' => $model,
//    'columns' => array(                 // กำหนด column ที่จะแสดง
//
//    ),
//));
