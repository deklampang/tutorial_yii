<?php

class DataController extends Controller{
	public function actionIndex($id = ''){
            empty($id)?$model = new Data():$model = Data::model()->findByPk($id);
            $dataProvider = new CActiveDataProvider('Data',array(
                'pagination' => array(
                    'pageSize' => 20,   // จำนวนรายการที่แสดงต่อหน้า
                ),
            ));
            $this->performAjaxValidation($model);
            if(isset($_POST['Data'])){
                $model->attributes=$_POST['Data'];
                $model->save();
            }                
            $this->render('index',array('model' => $model,'dataProvider'=>$dataProvider));
	}
        
        public function actionSave($id=''){
            empty($id)?$model = new Data():$model = Data::model()->findByPk($id);
            $this->performAjaxValidation($model);
            $model->attributes = $_POST['Data'];
            $res = $model->save();
            if($res){
                echo 'Already Created.';
            }else{
                echo 'Error: '.print_r($model->getErrors(),true);
            }
            Yii::app()->end();
        }

        public function actionEdit($id=''){
            !empty($id)?$model = Data::model()->findByPk($id):NULL;
            $this->performAjaxValidation($model);
            if(isset($_POST['Data'])):
                $model->attributes = $_POST['Data'];
                if($model->save())
                    $this->redirect('22');
            endif;
           $this->render('edit',array('model'=>$model));
        }
        
        public function actionDelete($id=''){
            !empty($id)?$model = Data::model()->findByPk($id):NULL;
            
            $this->render('index');
        }
        
        protected function performAjaxValidation($model){
            if(isset($_POST['ajax']) && $_POST['ajax']==='comment-form'){
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }
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