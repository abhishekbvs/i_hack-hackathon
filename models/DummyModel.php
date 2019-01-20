<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "map".
 *
 * @property int $id
 * @property string $name
 * @property string $location
 */
class DummyModel extends Model
{
    public $map_id;
    public $object_id;
    public $noo;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['map_id', 'required'],
            ['object_id', 'required'],
            ['noo', 'required'],
            // [['name'], 'required'],
            // [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'map_id' => 'Maps',
            'object_id' => 'Objects',
            'noo' => 'No of Objects',
        ];
    }
}
