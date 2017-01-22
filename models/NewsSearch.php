<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\News;

/**
 * NewsSearch represents the model behind the search form about `app\models\News`.
 */
class NewsSearch extends News
{
    /**
     * @inheritdoc
     */
    public function rules()
    {

        return [
            [['newsID', 'newsTime', 'addTime', 'wbTime', 'newsOrder', 'newsClick', 'digg', 'isHidden', 'ownerID', 'focus', 'tid', 'mid', 'qid', 'kid', 'wyid', 'sid', 'is_brand', 'edit_type_id'], 'integer'],
            [['newsTitle', 'shortTitle', 'newsContent', 'newsAuthor', 'isPublic', 'newsKeyword', 'taoKeyword', 'newsDes', 'action', 'metro', 'weiboTopic', 'controller', 'from', 'tag', 'struKey', 'showWhere', 'newspic', 'newssamllpic', 'newsthumbpic', 'iscommand', 'home', 'channel', 'header', 'lister', 'news_recommend', 'address'], 'safe'],
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
        $query = News::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'newsID' => $this->newsID,
            'newsTime' => $this->newsTime,
            'addTime' => $this->addTime,
            'wbTime' => $this->wbTime,
            'newsOrder' => $this->newsOrder,
            'newsClick' => $this->newsClick,
            'digg' => $this->digg,
            'isHidden' => $this->isHidden,
            'ownerID' => $this->ownerID,
            'focus' => $this->focus,
            'tid' => $this->tid,
            'mid' => $this->mid,
            'qid' => $this->qid,
            'kid' => $this->kid,
            'wyid' => $this->wyid,
            'sid' => $this->sid,
            'is_brand' => $this->is_brand,
            'edit_type_id' => $this->edit_type_id,
        ]);

        $query->andFilterWhere(['like', 'newsTitle', $this->newsTitle])
            ->andFilterWhere(['like', 'shortTitle', $this->shortTitle])
            ->andFilterWhere(['like', 'newsContent', $this->newsContent])
            ->andFilterWhere(['like', 'newsAuthor', $this->newsAuthor])
            ->andFilterWhere(['like', 'isPublic', $this->isPublic])
            ->andFilterWhere(['like', 'newsKeyword', $this->newsKeyword])
            ->andFilterWhere(['like', 'taoKeyword', $this->taoKeyword])
            ->andFilterWhere(['like', 'newsDes', $this->newsDes])
            ->andFilterWhere(['like', 'action', $this->action])
            ->andFilterWhere(['like', 'metro', $this->metro])
            ->andFilterWhere(['like', 'weiboTopic', $this->weiboTopic])
            ->andFilterWhere(['like', 'controller', $this->controller])
            ->andFilterWhere(['like', 'from', $this->from])
            ->andFilterWhere(['like', 'tag', $this->tag])
            ->andFilterWhere(['like', 'struKey', $this->struKey])
            ->andFilterWhere(['like', 'showWhere', $this->showWhere])
            ->andFilterWhere(['like', 'newspic', $this->newspic])
            ->andFilterWhere(['like', 'newssamllpic', $this->newssamllpic])
            ->andFilterWhere(['like', 'newsthumbpic', $this->newsthumbpic])
            ->andFilterWhere(['like', 'iscommand', $this->iscommand])
            ->andFilterWhere(['like', 'home', $this->home])
            ->andFilterWhere(['like', 'channel', $this->channel])
            ->andFilterWhere(['like', 'header', $this->header])
            ->andFilterWhere(['like', 'lister', $this->lister])
            ->andFilterWhere(['like', 'news_recommend', $this->news_recommend])
            ->andFilterWhere(['like', 'address', $this->address]);

        return $dataProvider;
    }
}
