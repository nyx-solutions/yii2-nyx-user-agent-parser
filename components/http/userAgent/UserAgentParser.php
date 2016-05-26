<?php

    namespace nox\components\http\userAgent;

    use nox\components\http\userAgent\models\UserAgent;
    use yii\base\Component;

    /**
     * Class UserAgentParser
     *
     * @package nox\components\http
     */
    class UserAgentParser extends Component
    {
        /**
         * @var UserAgent
         */
        public $parser;

        /**
         * @inheritdoc
         */
        public function init()
        {
            parent::init();

            $this->parser = static::parseUserAgent();
        }

        /**
         * @param string $ua
         *
         * @return UserAgent
         */
        public static function parse($ua)
        {
            return static::parseUserAgent($ua);
        }

        /**
         * @param string $ua
         *
         * @return UserAgent
         */
        protected static function parseUserAgent($ua = '')
        {
            $ua = (string)$ua;

            if (empty($ua)) {
                $ua = \Yii::$app->request->userAgent;

                if (empty($ua)) {
                    return new UserAgent();
                }
            }

            $parsedUserAgent = parse_user_agent($ua);
            $userAgent       = new UserAgent();

            $userAgent->ua = $ua;

            if (is_array($parsedUserAgent) && isset($parsedUserAgent['platform'], $parsedUserAgent['browser'], $parsedUserAgent['version'])) {
                $userAgent->platform = (string)$parsedUserAgent['platform'];
                $userAgent->browser  = (string)$parsedUserAgent['browser'];
                $userAgent->version  = (string)$parsedUserAgent['version'];

                if (!empty($userAgent->platform) || !empty($userAgent->browser) || !empty($userAgent->version)) {
                    $userAgent->successfullyParsed = true;
                }
            }

            return $userAgent;
        }
    }
