<?php

    namespace nox\components\userAgent;

    use yii\base\Component;

    /**
     * Class Parser
     *
     * @package nox\components
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

            $this->parser = parse_user_agent();
        }
    }
