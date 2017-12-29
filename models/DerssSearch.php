<?php

namespace kouosl\ders\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\ders\models\Derss;

/**
 * DerssSearch represents the model behind the search form about `kouosl\ders\models\Derss`.
 */
class DerssSearch extends Derss
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['facebook_link', 'twitter_link'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
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
        $query = Derss::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'facebook_link', $this->facebook_link])
            ->andFilterWhere(['like', 'twitter_link', $this->twitter_link]);

        return $dataProvider;
    }
}
