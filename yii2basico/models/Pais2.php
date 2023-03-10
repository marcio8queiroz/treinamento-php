<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pais2".
 *
 * @property string $codigo
 * @property string $nome
 * @property int $populacao
 */
class Pais2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pais2';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codigo', 'nome'], 'required'],
            [['populacao'], 'integer'],
            [['codigo'], 'string', 'max' => 2],
            [['nome'], 'string', 'max' => 52],
            [['codigo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codigo' => 'Codigo',
            'nome' => 'Nome',
            'populacao' => 'Populacao',
        ];
    }
}
