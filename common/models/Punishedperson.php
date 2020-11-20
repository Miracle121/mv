<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "punishedperson".
 *
 * @property int $id
 * @property string|null $photo
 * @property string $name
 * @property string $secondname
 * @property string $middlename
 * @property string $ordernumber
 * @property int $dateissue
 * @property int|null $dateend
 * @property string $nationality
 * @property int $birthday
 * @property int $livingplacesregions
 * @property int $livingplacesdistricts
 * @property string $livingplacesmahalla
 * @property int $registrationregion
 * @property int $registrationdistricts
 * @property string $registrationmahalla
 * @property string|null $fulldescription
 * @property int $createddate
 * @property int $creatorid
 * @property int|null $administrId
 * @property int|null $agesId
 * @property int|null $citizenshipId
 * @property int|null $conditionpersonId
 * @property int|null $conditionvId
 * @property int|null $criminalproceedId
 * @property int|null $districtsId
 * @property int|null $ectionspersonId
 * @property int|null $educationId
 * @property int|null $extensionId
 * @property int|null $familypositionId
 * @property int|null $gendersId
 * @property int|null $groundsId
 * @property int|null $mfyId
 * @property int|null $occurredrepetitionId
 * @property int|null $personviolenceId
 * @property int $placeectionId
 * @property int $reasonviolenceId
 * @property int $regionsId
 * @property int $sendpreparationId
 * @property int $socialstatusId
 * @property int $stateviolenceId
 * @property int $typerestrictionsId
 * @property int $typeviolenceId
 * @property int $workingplaceId
 * @property int|null $jabirlanuvchi
 *
 * @property Regions $livingplacesregions0
 * @property Criminalproceedings $criminalproceed
 * @property Districts $districts
 * @property Ectionspersonviolence $ectionsperson
 * @property Education $education
 * @property Extensionprotectionorder $extension
 * @property Familyposition $familyposition
 * @property Criminalproceedings $criminalproceed0
 * @property Districts $livingplacesdistricts0
 * @property Regions $registrationregion0
 * @property Districts $registrationdistricts0
 * @property Administrativeliability $administr
 * @property Ages $ages
 * @property Citizenship $citizenship
 * @property Conditionperson $conditionperson
 * @property Conditionpersonviolence $conditionv
 */
class Punishedperson extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'punishedperson';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'secondname', 'middlename', 'ordernumber', 'dateissue', 'nationality', 'birthday', 'livingplacesregions', 'livingplacesdistricts', 'livingplacesmahalla', 'registrationregion', 'registrationdistricts', 'registrationmahalla', 'createddate', 'creatorid', 'placeectionId', 'reasonviolenceId', 'regionsId', 'sendpreparationId', 'socialstatusId', 'stateviolenceId', 'typerestrictionsId', 'typeviolenceId', 'workingplaceId'], 'required'],
            [['dateissue', 'dateend', 'birthday', 'livingplacesregions', 'livingplacesdistricts', 'registrationregion', 'registrationdistricts', 'createddate', 'creatorid', 'administrId', 'agesId', 'citizenshipId', 'conditionpersonId', 'conditionvId', 'criminalproceedId', 'districtsId', 'ectionspersonId', 'educationId', 'extensionId', 'familypositionId', 'gendersId', 'groundsId', 'mfyId', 'occurredrepetitionId', 'personviolenceId', 'placeectionId', 'reasonviolenceId', 'regionsId', 'sendpreparationId', 'socialstatusId', 'stateviolenceId', 'typerestrictionsId', 'typeviolenceId', 'workingplaceId', 'jabirlanuvchi'], 'integer'],
            [['livingplacesmahalla', 'registrationmahalla', 'fulldescription'], 'string'],
            [['photo', 'name', 'secondname', 'middlename', 'nationality'], 'string', 'max' => 250],
            [['ordernumber'], 'string', 'max' => 50],
            [['livingplacesregions'], 'exist', 'skipOnError' => true, 'targetClass' => Regions::className(), 'targetAttribute' => ['livingplacesregions' => 'id']],
            [['criminalproceedId'], 'exist', 'skipOnError' => true, 'targetClass' => Criminalproceedings::className(), 'targetAttribute' => ['criminalproceedId' => 'id']],
            [['districtsId'], 'exist', 'skipOnError' => true, 'targetClass' => Districts::className(), 'targetAttribute' => ['districtsId' => 'id']],
            [['ectionspersonId'], 'exist', 'skipOnError' => true, 'targetClass' => Ectionspersonviolence::className(), 'targetAttribute' => ['ectionspersonId' => 'id']],
            [['educationId'], 'exist', 'skipOnError' => true, 'targetClass' => Education::className(), 'targetAttribute' => ['educationId' => 'id']],
            [['extensionId'], 'exist', 'skipOnError' => true, 'targetClass' => Extensionprotectionorder::className(), 'targetAttribute' => ['extensionId' => 'id']],
            [['familypositionId'], 'exist', 'skipOnError' => true, 'targetClass' => Familyposition::className(), 'targetAttribute' => ['familypositionId' => 'id']],
            [['criminalproceedId'], 'exist', 'skipOnError' => true, 'targetClass' => Criminalproceedings::className(), 'targetAttribute' => ['criminalproceedId' => 'id']],
            [['livingplacesdistricts'], 'exist', 'skipOnError' => true, 'targetClass' => Districts::className(), 'targetAttribute' => ['livingplacesdistricts' => 'id']],
            [['registrationregion'], 'exist', 'skipOnError' => true, 'targetClass' => Regions::className(), 'targetAttribute' => ['registrationregion' => 'id']],
            [['registrationdistricts'], 'exist', 'skipOnError' => true, 'targetClass' => Districts::className(), 'targetAttribute' => ['registrationdistricts' => 'id']],
            [['administrId'], 'exist', 'skipOnError' => true, 'targetClass' => Administrativeliability::className(), 'targetAttribute' => ['administrId' => 'id']],
            [['agesId'], 'exist', 'skipOnError' => true, 'targetClass' => Ages::className(), 'targetAttribute' => ['agesId' => 'id']],
            [['citizenshipId'], 'exist', 'skipOnError' => true, 'targetClass' => Citizenship::className(), 'targetAttribute' => ['citizenshipId' => 'id']],
            [['conditionpersonId'], 'exist', 'skipOnError' => true, 'targetClass' => Conditionperson::className(), 'targetAttribute' => ['conditionpersonId' => 'id']],
            [['conditionvId'], 'exist', 'skipOnError' => true, 'targetClass' => Conditionpersonviolence::className(), 'targetAttribute' => ['conditionvId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'photo' => 'Photo',
            'name' => 'Name',
            'secondname' => 'Secondname',
            'middlename' => 'Middlename',
            'ordernumber' => 'Ordernumber',
            'dateissue' => 'Dateissue',
            'dateend' => 'Dateend',
            'nationality' => 'Nationality',
            'birthday' => 'Birthday',
            'livingplacesregions' => 'Livingplacesregions',
            'livingplacesdistricts' => 'Livingplacesdistricts',
            'livingplacesmahalla' => 'Livingplacesmahalla',
            'registrationregion' => 'Registrationregion',
            'registrationdistricts' => 'Registrationdistricts',
            'registrationmahalla' => 'Registrationmahalla',
            'fulldescription' => 'Fulldescription',
            'createddate' => 'Createddate',
            'creatorid' => 'Creatorid',
            'administrId' => 'Administr ID',
            'agesId' => 'Ages ID',
            'citizenshipId' => 'Citizenship ID',
            'conditionpersonId' => 'Conditionperson ID',
            'conditionvId' => 'Conditionv ID',
            'criminalproceedId' => 'Criminalproceed ID',
            'districtsId' => 'Districts ID',
            'ectionspersonId' => 'Ectionsperson ID',
            'educationId' => 'Education ID',
            'extensionId' => 'Extension ID',
            'familypositionId' => 'Familyposition ID',
            'gendersId' => 'Genders ID',
            'groundsId' => 'Grounds ID',
            'mfyId' => 'Mfy ID',
            'occurredrepetitionId' => 'Occurredrepetition ID',
            'personviolenceId' => 'Personviolence ID',
            'placeectionId' => 'Placeection ID',
            'reasonviolenceId' => 'Reasonviolence ID',
            'regionsId' => 'Regions ID',
            'sendpreparationId' => 'Sendpreparation ID',
            'socialstatusId' => 'Socialstatus ID',
            'stateviolenceId' => 'Stateviolence ID',
            'typerestrictionsId' => 'Typerestrictions ID',
            'typeviolenceId' => 'Typeviolence ID',
            'workingplaceId' => 'Workingplace ID',
            'jabirlanuvchi' => 'Jabirlanuvchi',
        ];
    }

    /**
     * Gets query for [[Livingplacesregions0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLivingplacesregions0()
    {
        return $this->hasOne(Regions::className(), ['id' => 'livingplacesregions']);
    }

    /**
     * Gets query for [[Criminalproceed]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCriminalproceed()
    {
        return $this->hasOne(Criminalproceedings::className(), ['id' => 'criminalproceedId']);
    }

    /**
     * Gets query for [[Districts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDistricts()
    {
        return $this->hasOne(Districts::className(), ['id' => 'districtsId']);
    }

    /**
     * Gets query for [[Ectionsperson]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEctionsperson()
    {
        return $this->hasOne(Ectionspersonviolence::className(), ['id' => 'ectionspersonId']);
    }

    /**
     * Gets query for [[Education]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEducation()
    {
        return $this->hasOne(Education::className(), ['id' => 'educationId']);
    }

    /**
     * Gets query for [[Extension]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExtension()
    {
        return $this->hasOne(Extensionprotectionorder::className(), ['id' => 'extensionId']);
    }

    /**
     * Gets query for [[Familyposition]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFamilyposition()
    {
        return $this->hasOne(Familyposition::className(), ['id' => 'familypositionId']);
    }

    /**
     * Gets query for [[Criminalproceed0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCriminalproceed0()
    {
        return $this->hasOne(Criminalproceedings::className(), ['id' => 'criminalproceedId']);
    }

    /**
     * Gets query for [[Livingplacesdistricts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLivingplacesdistricts0()
    {
        return $this->hasOne(Districts::className(), ['id' => 'livingplacesdistricts']);
    }

    /**
     * Gets query for [[Registrationregion0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistrationregion0()
    {
        return $this->hasOne(Regions::className(), ['id' => 'registrationregion']);
    }

    /**
     * Gets query for [[Registrationdistricts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistrationdistricts0()
    {
        return $this->hasOne(Districts::className(), ['id' => 'registrationdistricts']);
    }

    /**
     * Gets query for [[Administr]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdministr()
    {
        return $this->hasOne(Administrativeliability::className(), ['id' => 'administrId']);
    }

    /**
     * Gets query for [[Ages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAges()
    {
        return $this->hasOne(Ages::className(), ['id' => 'agesId']);
    }

    /**
     * Gets query for [[Citizenship]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCitizenship()
    {
        return $this->hasOne(Citizenship::className(), ['id' => 'citizenshipId']);
    }

    /**
     * Gets query for [[Conditionperson]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getConditionperson()
    {
        return $this->hasOne(Conditionperson::className(), ['id' => 'conditionpersonId']);
    }

    /**
     * Gets query for [[Conditionv]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getConditionv()
    {
        return $this->hasOne(Conditionpersonviolence::className(), ['id' => 'conditionvId']);
    }
}
