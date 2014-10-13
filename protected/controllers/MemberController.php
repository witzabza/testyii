<?php

class MemberController extends Controller
{
    public function actionIndex() {
        // Account คือชื่อ Model ที่สร้างไว้ใน Gii
        $dataProvider = new CActiveDataProvider('Account', array(
             'criteria' => array(
                 'with'=>'myprofile', // เรียก relation ชื่อ myprofile
             ),
             'pagination' => array(
                'pageSize' => 10,   // จำนวนรายการที่แสดงต่อหน้า
             ),
        ));
        $this->render('index', array('dataProvider' => $dataProvider));
    }
    
    /*
        public function actionIndex() {
            // Account คือชื่อ Model ที่สร้างไว้ใน Gii
            $dataProvider = new CActiveDataProvider('Account', array(
                 'criteria' => array(
                     'with'=>'myprofile', // เรียก relation ชื่อ myprofile
                 ),
                 'pagination' => array(
                    'pageSize' => 10,   // จำนวนรายการที่แสดงต่อหน้า
                 ),
            ));
            $this->render('index', array('dataProvider' => $dataProvider));
         }

     */
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