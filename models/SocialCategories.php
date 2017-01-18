<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bnm_social_categories".
 *
 * @property integer $ID
 * @property string $name
 * @property integer $order_n
 */
class SocialCategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bnm_social_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'order_n'], 'required'],
            [['order_n'], 'integer'],
            [['name'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => '序号',
            'name' => '名称',
            'order_n' => '排序序号',
        ];
    }
}
