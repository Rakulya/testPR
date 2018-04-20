<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\data\ActiveDataProvider;
use yii\base\Model;

class book extends ActiveRecord
{

    public function rules()
    {
        return [
            [['u_id', 'count_page'], 'integer'],
            [['name', 'autor', 'edition', 'image'], 'string'],
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
        $query = Book::find();



        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {

            return $dataProvider;
        }


        $query->andFilterWhere([
            'u_id' => $this->u_id,
            'name' => $this->name,
            'autor' => $this->autor,
            'edition' => $this->edition,
            'count_page' => $this->count_page,
            'image' => $this->image,
        ]);

        return $dataProvider;
    }


    public function getAuthor(){
        return $this->hasOne(Author::className(), ['u_id' => 'autor']);
    }

    public function getParentName()
    {
        $parent = $this->author;

        return $parent ? $parent->surname : '';
    }

    public function getInfo(){
        $all=Book::find();
        return $all;
    }

}
?>