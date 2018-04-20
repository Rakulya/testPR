<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property int $a
 * @property int $b
 * @property int $c
 * @property int $d
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['a', 'b', 'c', 'd'], 'required'],
            [['a', 'b', 'c', 'd'], 'integer'],
            [['a'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'a' => 'A',
            'b' => 'B',
            'c' => 'C',
            'd' => 'D',
        ];
    }
}
