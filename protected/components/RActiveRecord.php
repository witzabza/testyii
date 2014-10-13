<?php
// protected/components/RActiveRecord.php
class RActiveRecord extends CActiveRecord {
    private static $db_subMain = null;
    protected static function getSubMainDbConnection(){
        if (self::$db_subMain !== null){
            return self::$db_subMain;
        }else{
            self::$db_subMain = Yii::app()->db2;
            if (self::$db_subMain instanceof CDbConnection){
                Yii::app()->db->setActive(false); // ปิด db
                Yii::app()->db2->setActive(true); // เปิด db2
                return self::$db_subMain;
            }else{
                throw new CDbException(Yii::t('yii','Active Record requires a "db" CDbConnection application component.'));
            }
        }
    }
}
?>