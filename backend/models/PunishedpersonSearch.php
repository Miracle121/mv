<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Punishedperson;

/**
 * PunishedpersonSearch represents the model behind the search form of `common\models\Punishedperson`.
 */
class PunishedpersonSearch extends Punishedperson
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'dateissue', 'dateend', 'birthday', 'livingplacesregions', 'livingplacesdistricts', 'registrationregion', 'registrationdistricts', 'createddate', 'creatorid', 'administrId', 'agesId', 'citizenshipId', 'conditionpersonId', 'conditionvId', 'criminalproceedId', 'districtsId', 'ectionspersonId', 'educationId', 'extensionId', 'familypositionId', 'gendersId', 'groundsId', 'mfyId', 'occurredrepetitionId', 'personviolenceId', 'placeectionId', 'reasonviolenceId', 'regionsId', 'sendpreparationId', 'socialstatusId', 'stateviolenceId', 'typerestrictionsId', 'typeviolenceId', 'workingplaceId', 'jabirlanuvchi'], 'integer'],
            [['photo', 'name', 'secondname', 'middlename', 'ordernumber', 'nationality', 'livingplacesmahalla', 'registrationmahalla', 'fulldescription'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Punishedperson::find();

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
            'dateissue' => $this->dateissue,
            'dateend' => $this->dateend,
            'birthday' => $this->birthday,
            'livingplacesregions' => $this->livingplacesregions,
            'livingplacesdistricts' => $this->livingplacesdistricts,
            'registrationregion' => $this->registrationregion,
            'registrationdistricts' => $this->registrationdistricts,
            'createddate' => $this->createddate,
            'creatorid' => $this->creatorid,
            'administrId' => $this->administrId,
            'agesId' => $this->agesId,
            'citizenshipId' => $this->citizenshipId,
            'conditionpersonId' => $this->conditionpersonId,
            'conditionvId' => $this->conditionvId,
            'criminalproceedId' => $this->criminalproceedId,
            'districtsId' => $this->districtsId,
            'ectionspersonId' => $this->ectionspersonId,
            'educationId' => $this->educationId,
            'extensionId' => $this->extensionId,
            'familypositionId' => $this->familypositionId,
            'gendersId' => $this->gendersId,
            'groundsId' => $this->groundsId,
            'mfyId' => $this->mfyId,
            'occurredrepetitionId' => $this->occurredrepetitionId,
            'personviolenceId' => $this->personviolenceId,
            'placeectionId' => $this->placeectionId,
            'reasonviolenceId' => $this->reasonviolenceId,
            'regionsId' => $this->regionsId,
            'sendpreparationId' => $this->sendpreparationId,
            'socialstatusId' => $this->socialstatusId,
            'stateviolenceId' => $this->stateviolenceId,
            'typerestrictionsId' => $this->typerestrictionsId,
            'typeviolenceId' => $this->typeviolenceId,
            'workingplaceId' => $this->workingplaceId,
            'jabirlanuvchi' => $this->jabirlanuvchi,
        ]);

        $query->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'secondname', $this->secondname])
            ->andFilterWhere(['like', 'middlename', $this->middlename])
            ->andFilterWhere(['like', 'ordernumber', $this->ordernumber])
            ->andFilterWhere(['like', 'nationality', $this->nationality])
            ->andFilterWhere(['like', 'livingplacesmahalla', $this->livingplacesmahalla])
            ->andFilterWhere(['like', 'registrationmahalla', $this->registrationmahalla])
            ->andFilterWhere(['like', 'fulldescription', $this->fulldescription]);

        return $dataProvider;
    }
}
