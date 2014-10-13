<?php

class TestAjaxController extends Controller {
    public function actionIndex($id = '') {
        if(empty($id)) {
            $model = new Table;
        }else{
            $model = Table::model()->findByPk($id);
        }
        $this->render('index',array('model'=>$model));
    }
 
    public function actionSave($id = ''){
        if(empty($id)){
            $model = new Table;
        }else{
            $model = Table::model()->findByPk($id);
        }
        if(isset($_POST['Table'])){
            $model->attributes = $_POST['Table'];
            $res = $model->save();
        }
        if(!empty($res) && empty($id)){
            echo 'Already Created.';
        }else if(!empty($res) && !empty($id)){
            echo 'Already Updated.';
        }else{
            echo 'Error: '.print_r($model->getErrors(),true);
        }
        Yii::app()->end();
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