<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hk_news_tb".
 *
 * @property integer $newsID
 * @property string $newsTitle
 * @property string $shortTitle
 * @property string $newsContent
 * @property string $newsAuthor
 * @property integer $newsTime
 * @property integer $addTime
 * @property integer $wbTime
 * @property string $isPublic
 * @property string $newsKeyword
 * @property string $taoKeyword
 * @property string $newsDes
 * @property string $action
 * @property string $metro
 * @property string $weiboTopic
 * @property integer $newsOrder
 * @property string $controller
 * @property string $from
 * @property string $tag
 * @property integer $newsClick
 * @property integer $digg
 * @property string $struKey
 * @property string $showWhere
 * @property integer $isHidden
 * @property string $newspic
 * @property string $newssamllpic
 * @property string $newsthumbpic
 * @property string $iscommand
 * @property integer $ownerID
 * @property string $home
 * @property string $channel
 * @property string $header
 * @property string $lister
 * @property integer $focus
 * @property integer $tid
 * @property string $mid
 * @property string $qid
 * @property string $kid
 * @property string $wyid
 * @property string $sid
 * @property string $news_recommend
 * @property string $address
 * @property integer $is_brand
 * @property integer $edit_type_id
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hk_news_tb';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['newsTitle', 'newsContent', 'newsTime'], 'required'],
            [['newsContent', 'isPublic', 'home', 'channel', 'header', 'lister'], 'string'],
            [['newsTime', 'addTime', 'wbTime', 'newsOrder', 'newsClick', 'digg', 'isHidden', 'ownerID', 'focus', 'tid', 'mid', 'qid', 'kid', 'wyid', 'sid', 'is_brand', 'edit_type_id'], 'integer'],
            [['newsTitle', 'taoKeyword'], 'string', 'max' => 64],
            [['shortTitle', 'news_recommend'], 'string', 'max' => 32],
            [['newsAuthor', 'action', 'weiboTopic', 'controller', 'from', 'struKey', 'showWhere'], 'string', 'max' => 24],
            [['newsKeyword', 'newsDes', 'newspic', 'newssamllpic', 'newsthumbpic', 'address'], 'string', 'max' => 255],
            [['metro'], 'string', 'max' => 12],
            [['tag'], 'string', 'max' => 128],
            [['iscommand'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'newsID' => 'News ID',
            'newsTitle' => 'News Title',
            'shortTitle' => 'Short Title',
            'newsContent' => 'News Content',
            'newsAuthor' => 'News Author',
            'newsTime' => 'News Time',
            'addTime' => 'Add Time',
            'wbTime' => 'Wb Time',
            'isPublic' => 'Is Public',
            'newsKeyword' => 'News Keyword',
            'taoKeyword' => 'Tao Keyword',
            'newsDes' => 'News Des',
            'action' => 'Action',
            'metro' => 'Metro',
            'weiboTopic' => 'Weibo Topic',
            'newsOrder' => 'News Order',
            'controller' => 'Controller',
            'from' => 'From',
            'tag' => 'Tag',
            'newsClick' => 'News Click',
            'digg' => 'Digg',
            'struKey' => 'Stru Key',
            'showWhere' => 'Show Where',
            'isHidden' => 'Is Hidden',
            'newspic' => 'Newspic',
            'newssamllpic' => 'Newssamllpic',
            'newsthumbpic' => 'Newsthumbpic',
            'iscommand' => 'Iscommand',
            'ownerID' => 'Owner ID',
            'home' => 'Home',
            'channel' => 'Channel',
            'header' => 'Header',
            'lister' => 'Lister',
            'focus' => 'Focus',
            'tid' => 'Tid',
            'mid' => 'Mid',
            'qid' => 'Qid',
            'kid' => 'Kid',
            'wyid' => 'Wyid',
            'sid' => 'Sid',
            'news_recommend' => 'News Recommend',
            'address' => 'Address',
            'is_brand' => 'Is Brand',
            'edit_type_id' => 'Edit Type ID',
        ];
    }
}
