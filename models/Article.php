<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%article}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property integer $author_id
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $publish
 *
 * @property User $author
 */
class Article extends \yii\db\ActiveRecord
{

    const PUBLISH_YES = 1; // 发布
    const PUBLISH_NO = 0; // 不发布

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content', 'author_id'], 'required'],
            [['content'], 'string'],
            [['author_id', 'created_at', 'updated_at', 'publish'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['author_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('user', 'ID'),
            'title' => Yii::t('user', 'Title'),
            'content' => Yii::t('user', 'Content'),
            'author_id' => Yii::t('user', 'Author ID'),
            'publish' => Yii::t('user', 'Publish'),
            'created_at' => Yii::t('user', 'Created At'),
            'updated_at' => Yii::t('user', 'Updated At'),
        ];
    }

    public function behaviors()
    {
        $behaviors =  parent::behaviors();
        $behaviors[] = [
            'class' => TimestampBehavior::className(),
        ];
        return $behaviors;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'author_id']);
    }

    public function afterFind()
    {
        $this->created_at = date('Y-m-d H:i:s', $this->created_at);
        $this->updated_at = date('Y-m-d H:i:s', $this->updated_at);
        $this->publish = $this->publish == self::PUBLISH_YES ? '发布': '待发布';
//            translate('article', 'published') :
//            translate('article', 'waiting for publish');
        parent::afterFind();
    }
}
