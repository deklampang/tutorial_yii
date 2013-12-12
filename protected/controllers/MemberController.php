<?php

class MemberController extends Controller{
    
    
        /*
        // ใช้ เขียนคำสั่ง MYSQL
	public function actionIndex(){
            // Sql ปกติ
            $sql = "SELECT * FROM account ORDER BY id ASC";   // คำสั่ง SQL ที่ต้องการ
            // SQL JOIN 
            //$sql = "SELECT account.*, profile.* FROM account INNER JOIN profile ON account.pid = profile.id ORDER BY account.id ASC";
                  
            $dataProvider = new CSqlDataProvider($sql, array( // เอา sql แปลงเป็น dataProvider
                'pagination' => array(
                    'pageSize' => 10,   // กำหนดให้หน้านึงแสดง 10 รายการ
                ),
            ));
            
            $this->render('index', array('dataProvider' => $dataProvider));   // ส่งตัวแปรไปยัง view

	}

        */
       
        // ใช้ Model
        public function actionIndex() {
            // Account คือชื่อ Model ที่สร้างไว้ใน Gii
            $dataProvider = new CActiveDataProvider('Account', array(  
                'pagination' => array(
                    'pageSize' => 20,   // จำนวนรายการที่แสดงต่อหน้า
                ),
            ));
            $this->render('index', array('dataProvider' => $dataProvider)); // ส่งข้อมูลไปยัง View
        }  

        
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}