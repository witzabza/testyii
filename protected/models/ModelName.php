<?php
class ModelName extends RActiveRecord {
    // แทรกคำสั่งนี้ลงในไฟล์ Model
    public function getDbConnection(){
        return self::getSubMainDbConnection();
    }
}