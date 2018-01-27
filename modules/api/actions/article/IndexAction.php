<?php
/**
 * Created by PhpStorm.
 * User: rex
 * Email: caoliang@simpleware.com.cn
 * Date: 14/01/2018
 * Time: 11:07 AM
 */

namespace app\modules\api\actions\article;


use Yii;
use yii\data\ActiveDataProvider;

class IndexAction extends \yii\rest\IndexAction
{
    /**
     * @return ActiveDataProvider
     * @throws \yii\base\InvalidConfigException
     */
    public function run()
    {
        if ($this->checkAccess) {
            call_user_func($this->checkAccess, $this->id);
        }

        return $this->prepareDataProvider();
    }

    /**
     * Prepares the data provider that should return the requested collection of the models.
     * @return ActiveDataProvider
     * @throws \yii\base\InvalidConfigException
     */
    protected function prepareDataProvider()
    {
        if ($this->prepareDataProvider !== null) {
            return call_user_func($this->prepareDataProvider, $this);
        }

        /* @var $modelClass \yii\db\ActiveRecord */
        $modelClass = $this->modelClass;

        $query = $modelClass::find();
        $query->joinWith('author')
            ->where(['publish' => 1]);

//        $id = get_request()->get('id');
//        $id && $query->andWhere(['article.id' => $id])->offset(0)->limit(1);

        return Yii::createObject([
            'class' => ActiveDataProvider::className(),
            'query' => $query,
        ]);
    }
}