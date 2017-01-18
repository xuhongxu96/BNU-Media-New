<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bnm_social".
 *
 * @property integer $ID
 * @property string $name
 * @property integer $type
 * @property string $url
 * @property integer $category
 *
 * @property SocialCategories $category0
 */
class Social extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bnm_social';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'type', 'url', 'category'], 'required'],
            [['type', 'category'], 'integer'],
            [['name', 'url'], 'string', 'max' => 300],
            [['category'], 'exist', 'skipOnError' => true, 'targetClass' => SocialCategories::className(), 'targetAttribute' => ['category' => 'ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'name' => '名称',
            'type' => '类型',
            'url' => '链接',
            'category' => '成员分类',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMyCategory()
    {
        return $this->hasOne(SocialCategories::className(), ['ID' => 'category']);
    }

    /**
     * @return string
     */
    public function getMyType()
    {
        return $this->type == 0 ? '微博' : '微信';
    }
}
