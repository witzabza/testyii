<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'grid_1',                   // ชื่อตาราง
    'dataProvider' => $dataProvider,    // ตัวแปร data ที่มีข้อมูล
    'enablePagination' => true,         // กำหนดให้แสดงปุ่มเปลี่ยนหน้า
    'columns' => array(                 // กำหนด column ที่จะแสดง
        array(
            'name' => 'id',
            'header' => 'ID',
        ),
        array(
            'name' => 'username',
            'header' => 'Username',
        ),
        array(
            'name' => 'myprofile.firstname',
            'header' => 'Firstname',
            //'value'=>'$data->myprofile->firstname',
        ),
        array(
            'name' => 'myprofile.lastname',
            'header' => 'Lastname',
            //'value'=>'$data->myprofile->lastname',
        ),
    ),
));