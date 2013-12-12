<?php
/* @var $this MemberController */

$this->breadcrumbs=array(
	'Member',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<?php

$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'grid_1',                               // ชื่อตาราง
    'dataProvider' => $dataProvider,   // ตัวแปร data ที่มีข้อมูล
    'enablePagination' => true,             // กำหนดให้แสดงปุ่มเปลี่ยนหน้า
    'columns' => array(                        // กำหนด column ที่จะแสดง
        'id','pid','username','password',
    ),
));


