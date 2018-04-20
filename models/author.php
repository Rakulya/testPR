<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\data\ActiveDataProvider;
use yii\base\Model;
use yii\db\Query;

class author extends ActiveRecord
{

    public function rules()
    {
        return [
            [['u_id', 'count_p'], 'integer'],
            [['surname', 'name'], 'string'],
             ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {

        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */

    public function search($params)
    {
        $query = Author::find();



        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {

            return $dataProvider;
        }


        $query->andFilterWhere([
            'u_id' => $this->u_id,
            'surname' => $this->surname,
            'name' => $this->name,
            'count_p' => $this->count_p,
        ]);

        return $dataProvider;
    }

    public function getBook(){
        return $this->hasMany(Book::className(), ['autor' => 'u_id']);
    }

    public function getParentName()
    {
               return  $this->getBook()->count();
    }
}
?>