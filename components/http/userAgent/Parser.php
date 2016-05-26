<?php

    namespace nox\components\http\userAgent;

    use yii\base\Component;

    /**
     * Class Parser
     *
     * @package nox\components\http
     */
    class Parser extends Component
    {
        /**
         * @var string[]
         */
        public $parser;

        /**
         * @inheritdoc
         */
        public function init()
        {
            parent::init();

            $this->parser = parse_user_agent(\Yii::$app->request->userAgent);
        }

        /**
         * @param string $ua
         *
         * @return string[]
         */
        public function parse($ua)
        {
            return parse_user_agent($ua);
        }
    }
