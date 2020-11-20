<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Clientes;

/**
 * ClientesSearch represents the model behind the search form about `common\models\Clientes`.
 */
class ClientesSearch extends Clientes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['telegram_id', 'first_name', 'username', 'name', 'phone_number', 'ages', 'direction', 'address', 'nationality', 'living_pls', 'edu_level', 'info_edu', 'family_position', 'family_info', 'xizmatsafari', 'xarbiyxizmat', 'sudlangan', 'haydovchilik', 'moshina', 'language_ru', 'language_eng', 'language_china', 'other_lang', 'exel', 'word', '1c', 'boshqadastur', 'korxonamalumot', 'oxirgiishjoyi_info', 'oxirgiishjoyi_oylik', 'qanchaoylik', 'qancha_ishlaysiz', 'ishdankeyin', 'kolectiv', 'otaona', 'sogliq', 'qoshimchainfo', 'rasim', 'qoshimcha'], 'safe'],
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
        $query = Clientes::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'telegram_id', $this->telegram_id])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'phone_number', $this->phone_number])
            ->andFilterWhere(['like', 'ages', $this->ages])
            ->andFilterWhere(['like', 'direction', $this->direction])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'nationality', $this->nationality])
            ->andFilterWhere(['like', 'living_pls', $this->living_pls])
            ->andFilterWhere(['like', 'edu_level', $this->edu_level])
            ->andFilterWhere(['like', 'info_edu', $this->info_edu])
            ->andFilterWhere(['like', 'family_position', $this->family_position])
            ->andFilterWhere(['like', 'family_info', $this->family_info])
            ->andFilterWhere(['like', 'xizmatsafari', $this->xizmatsafari])
            ->andFilterWhere(['like', 'xarbiyxizmat', $this->xarbiyxizmat])
            ->andFilterWhere(['like', 'sudlangan', $this->sudlangan])
            ->andFilterWhere(['like', 'haydovchilik', $this->haydovchilik])
            ->andFilterWhere(['like', 'moshina', $this->moshina])
            ->andFilterWhere(['like', 'language_ru', $this->language_ru])
            ->andFilterWhere(['like', 'language_eng', $this->language_eng])
            ->andFilterWhere(['like', 'language_china', $this->language_china])
            ->andFilterWhere(['like', 'other_lang', $this->other_lang])
            ->andFilterWhere(['like', 'exel', $this->exel])
            ->andFilterWhere(['like', 'word', $this->word])
//            ->andFilterWhere(['like', '1c', $this->1c])
            ->andFilterWhere(['like', 'boshqadastur', $this->boshqadastur])
            ->andFilterWhere(['like', 'korxonamalumot', $this->korxonamalumot])
            ->andFilterWhere(['like', 'oxirgiishjoyi_info', $this->oxirgiishjoyi_info])
            ->andFilterWhere(['like', 'oxirgiishjoyi_oylik', $this->oxirgiishjoyi_oylik])
            ->andFilterWhere(['like', 'qanchaoylik', $this->qanchaoylik])
            ->andFilterWhere(['like', 'qancha_ishlaysiz', $this->qancha_ishlaysiz])
            ->andFilterWhere(['like', 'ishdankeyin', $this->ishdankeyin])
            ->andFilterWhere(['like', 'kolectiv', $this->kolectiv])
            ->andFilterWhere(['like', 'otaona', $this->otaona])
            ->andFilterWhere(['like', 'sogliq', $this->sogliq]);
            // ->andFilterWhere(['like', 'qoshimchainfo', $this->qoshimchainfo])
            // ->andFilterWhere(['like', 'rasim', $this->rasim])
            // ->andFilterWhere(['like', 'qoshimcha', $this->qoshimcha]);

        return $dataProvider;
    }
}