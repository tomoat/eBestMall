<?php
/**
 * eBestMall
 * ============================================================================
 * Copyright 2015-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/12/22 13:38
 * E-mail: hongyukeji@126.com
 * ============================================================================
 */

namespace common\components\authclient\clients;

use yii\authclient\OAuth2;
use yii\authclient\InvalidResponseException;
use yii\httpclient\Request;
use yii\httpclient\Response;

class WeiXinAuth extends OAuth2
{
    public $authUrl = 'https://open.weixin.qq.com/connect/qrconnect';

    public $tokenUrl = 'https://api.weixin.qq.com/sns/oauth2/access_token';

    public $apiBaseUrl = 'https://api.weixin.qq.com';

    public $scope = 'snsapi_login';

    public function init()
    {
        parent::init();
        if ($this->scope === null) {
            $this->scope = implode(',', [
                'snsapi_login',
            ]);
        }
    }

    /**
     * @see https://open.weixin.qq.com/cgi-bin/showdocument?action=doc&id=open1419316518&t=0.14920092844688204
     */
    protected function initUserAttributes()
    {
        $user = $this->api('sns/userinfo', 'GET', [
            'access_token' => $this->getAccessToken()->params['access_token'],
            'openid' => $this->getAccessToken()->params['openid'],
        ]);

        // 处理赋值 client_key openid username avatar_url
        $userInfo['client_key'] = $this->getId();
        $userInfo['source_id'] = $user['openid'];
        $userInfo['username'] = $user['nickname'];
        $userInfo['avatar_url'] = $user['headimgurl'];

        return $userInfo;
    }

    public function buildAuthUrl(array $params = [])
    {
        $params = ['appid' => $this->clientId,];
        return parent::buildAuthUrl($params); // TODO: Change the autogenerated stub
    }

    public function fetchAccessToken($authCode, array $params = [])
    {
        $params = [
            'appid' => $this->clientId,
            'secret' => $this->clientSecret,
        ];
        return parent::fetchAccessToken($authCode, $params); // TODO: Change the autogenerated stub
    }

    public function beforeApiRequestSend($event)
    {
        $request = $event->request;
        $data = $request->getData();
        $data['openid'] = $this->getAccessToken()->params['openid'];
        $request->setData($data);
        parent::beforeApiRequestSend($event);
    }
}