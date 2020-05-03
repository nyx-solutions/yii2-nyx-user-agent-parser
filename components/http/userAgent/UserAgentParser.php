<?php

    namespace nox\components\http\userAgent;

    use donatj\UserAgent\UserAgentParser as BaseUserAgentParser;
    use nox\components\http\userAgent\models\UserAgent;
    use Yii;
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
        public ?UserAgent $parser = null;

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
        public static function parse($ua = '')
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
                $ua = Yii::$app->request->userAgent;

                if (empty($ua)) {
                    return new UserAgent();
                }
            }

            $parsedUserAgent = new BaseUserAgentParser();

            $baseUserAgent   = $parsedUserAgent->parse($ua);

            $userAgent       = new UserAgent();

            $userAgent->ua   = $ua;

            if ($baseUserAgent instanceof \donatj\UserAgent\UserAgent) {
                $userAgent->platform = (string)$baseUserAgent->platform();
                $userAgent->browser  = (string)$baseUserAgent->browser();
                $userAgent->version  = (string)$baseUserAgent->browserVersion();

                if (!empty($userAgent->platform) || !empty($userAgent->browser) || !empty($userAgent->version)) {
                    $userAgent->successfullyParsed = true;
                }
            }

            return $userAgent;
        }
    }
