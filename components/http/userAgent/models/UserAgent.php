<?php

    namespace nox\components\http\userAgent\models;

    use nox\mvc\base\Model;

    /**
     * Class UserAgent
     *
     * @package nox\components\http\userAgent\models
     */
    class UserAgent extends Model
    {
        /**
         * @var string
         */
        public $ua;

        /**
         * @var bool
         */
        public $successfullyParsed = false;

        /**
         * @var string
         */
        public $platform;

        /**
         * @var string
         */
        public $browser;

        /**
         * @var string
         */
        public $version;
    }
