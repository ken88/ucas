<?php

namespace common\logics;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\User;

/**
 * UserSearchLogic represents the model behind the search form of `common\models\User`.
 */
class UserSearchLogic extends User
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cboDobDay', 'cboDobYear', 'chkEducationalOption', 'chkCommercialOption', 'chkUnplacedCommsFlag', 'chkEmailOption', 'chkTxtOption', 'chkMailingsOption', 'create_time'], 'integer'],
            [['title', 'gender', 'txtForename', 'txtSurname', 'cboDobMonth', 'radioLocation', 'addrLine1Text', 'addrLine2Text', 'addrLine3Text', 'addrLine4Text', 'Country', 'txtHomePhone', 'txtMobilePhone', 'emailText', 'passwordText', 'wenti1', 'daan1', 'wenti2', 'daan2', 'wenti3', 'daan3', 'wenti4', 'daan4', 'personal_id', 'rdRoute', 'txtBuzzword', 'rdConfirm', 'cboGroups'], 'safe'],
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
        $query = User::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => ['id' => SORT_DESC]]
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
            'cboDobDay' => $this->cboDobDay,
            'cboDobYear' => $this->cboDobYear,
            'chkEducationalOption' => $this->chkEducationalOption,
            'chkCommercialOption' => $this->chkCommercialOption,
            'chkUnplacedCommsFlag' => $this->chkUnplacedCommsFlag,
            'chkEmailOption' => $this->chkEmailOption,
            'chkTxtOption' => $this->chkTxtOption,
            'chkMailingsOption' => $this->chkMailingsOption,
            'create_time' => $this->create_time,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'txtForename', $this->txtForename])
            ->andFilterWhere(['like', 'txtSurname', $this->txtSurname])
            ->andFilterWhere(['like', 'cboDobMonth', $this->cboDobMonth])
            ->andFilterWhere(['like', 'radioLocation', $this->radioLocation])
            ->andFilterWhere(['like', 'addrLine1Text', $this->addrLine1Text])
            ->andFilterWhere(['like', 'addrLine2Text', $this->addrLine2Text])
            ->andFilterWhere(['like', 'addrLine3Text', $this->addrLine3Text])
            ->andFilterWhere(['like', 'addrLine4Text', $this->addrLine4Text])
            ->andFilterWhere(['like', 'Country', $this->Country])
            ->andFilterWhere(['like', 'txtHomePhone', $this->txtHomePhone])
            ->andFilterWhere(['like', 'txtMobilePhone', $this->txtMobilePhone])
            ->andFilterWhere(['like', 'emailText', $this->emailText])
            ->andFilterWhere(['like', 'passwordText', $this->passwordText])
            ->andFilterWhere(['like', 'wenti1', $this->wenti1])
            ->andFilterWhere(['like', 'daan1', $this->daan1])
            ->andFilterWhere(['like', 'wenti2', $this->wenti2])
            ->andFilterWhere(['like', 'daan2', $this->daan2])
            ->andFilterWhere(['like', 'wenti3', $this->wenti3])
            ->andFilterWhere(['like', 'daan3', $this->daan3])
            ->andFilterWhere(['like', 'wenti4', $this->wenti4])
            ->andFilterWhere(['like', 'daan4', $this->daan4])
            ->andFilterWhere(['like', 'personal_id', $this->personal_id])
            ->andFilterWhere(['like', 'rdRoute', $this->rdRoute])
            ->andFilterWhere(['like', 'txtBuzzword', $this->txtBuzzword])
            ->andFilterWhere(['like', 'rdConfirm', $this->rdConfirm])
            ->andFilterWhere(['like', 'cboGroups', $this->cboGroups]);

        return $dataProvider;
    }
}
