<?php

namespace app\modules\admin\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\AdminUser;
use yii\helpers\ArrayHelper;

/**
 * AdminSearch represents the model behind the search form about `app\modules\admin\models\AdminUser`.
 */
class AdminSearch extends AdminUser
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admin_id', 'group_id'], 'integer'],
            [['admin_name', 'admin_psw'], 'safe'],
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

        $query = AdminUser::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['attributes' => ['admin_id']],
            //'pagination' => ['pageSize' => 1],
        ]);
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'admin_id' => $this->admin_id,
            'group_id' => $this->group_id,
        ]);

        $query->andFilterWhere(['like', 'admin_name', $this->admin_name])
            ->andFilterWhere(['like', 'admin_psw', $this->admin_psw]);

        return $dataProvider;
    }
}
