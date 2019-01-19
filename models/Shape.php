<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shape".
 *
 * @property int $id
 * @property string $name
 * @property string $sides
 */
class Shape extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shape';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'sides'], 'required'],
            [['name', 'sides'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'sides' => 'Sides',
        ];
    }
}
