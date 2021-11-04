<?php

class base_subject extends BaseModel {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    public function tableName() {
        return '{{base_subject}}';
    }
    /**
     * 模型验证规则
     */
    public function rules() {
        return array(
           array('subject', 'required', 'message' => '{attribute} 不能为空'),
           //array('F_NAME', 'required', 'message' => '{attribute} 不能为空'),
           //array('F_value', 'safe'),
        );
    }

    /**
     * 模型关联规则
     */
    public function relations() {
        return array(
        //'F_CODE' => array(self::HAS_MANY, 'MallBrandProject', 'brand_id'),
        //'qmdd_administrators' => array(self::BELONGS_TO, 'QmddAdministrators', 'f_user_id'),
            
        );
    }

    /**
     * 属性标签
     */
    public function attributeLabels() {
        return array(
           'f_id' => 'ID',
  'subject'=> '专业',
/*  'F_NAME'=> '名称',
  'F_value'=> '值',*/

        );
    }

    /**
     * Returns the static model of the specified AR class.
     */
 

    protected function beforeSave() {
        parent::beforeSave();
        return true;
    }

}