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
        public string $ua;

        /**
         * @var bool
         */
        public bool $successfullyParsed = false;

        /**
         * @var string
         */
        public string $platform;

        /**
         * @var string
         */
        public string $browser;

        /**
         * @var string
         */
        public string $version;
    }
