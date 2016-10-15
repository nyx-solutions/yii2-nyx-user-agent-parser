Yii PHP Framework Version 2 / NOX UserAgent Parser
==================================================

A simple streamlined PHP user-agent parser for Yii Framework 2.

[![Latest Stable Version](https://poser.pugx.org/nox-it/yii2-nox-user-agent-parser/v/stable)](https://packagist.org/packages/nox-it/yii2-nox-user-agent-parser)
[![Total Downloads](https://poser.pugx.org/nox-it/yii2-nox-user-agent-parser/downloads)](https://packagist.org/packages/nox-it/yii2-nox-user-agent-parser)
[![Latest Unstable Version](https://poser.pugx.org/nox-it/yii2-nox-user-agent-parser/v/unstable)](https://packagist.org/packages/nox-it/yii2-nox-user-agent-parser)
[![License](https://poser.pugx.org/nox-it/yii2-nox-user-agent-parser/license)](https://packagist.org/packages/nox-it/yii2-nox-user-agent-parser)
[![Monthly Downloads](https://poser.pugx.org/nox-it/yii2-nox-user-agent-parser/d/monthly)](https://packagist.org/packages/nox-it/yii2-nox-user-agent-parser)
[![Daily Downloads](https://poser.pugx.org/nox-it/yii2-nox-user-agent-parser/d/daily)](https://packagist.org/packages/nox-it/yii2-nox-user-agent-parser)
[![composer.lock](https://poser.pugx.org/nox-it/yii2-nox-user-agent-parser/composerlock)](https://packagist.org/packages/nox-it/yii2-nox-user-agent-parser)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
php composer.phar require --prefer-dist nox-it/yii2-nox-user-agent-parser "*"
```

or add

```
"nox-it/yii2-nox-user-agent-parser": "*"
```

to the require section of your `composer.json` file.

## Usage

### Statically

```php
use nox\components\http\userAgent\Parser;

$userAgent = UserAgentParser::parse(); // or UserAgentParser::parse($ua);

$userAgent->ua;                 // [Searched UserAgent]
$userAgent->successfullyParsed; // [Has UserAgent Results]
$userAgent->platform;           // [Detected Platform]
$userAgent->browser;            // [Detected Browser]
$userAgent->version;            // [Detected Browser Version]
```

### As Object

```php
use nox\components\http\userAgent\Parser;

$userAgent = new UserAgentParser();

$userAgent->ua;                 // [Searched UserAgent]
$userAgent->successfullyParsed; // [Has UserAgent Results]
$userAgent->platform;           // [Detected Platform]
$userAgent->browser;            // [Detected Browser]
$userAgent->version;            // [Detected Browser Version]
```

## Currently Detected Platforms

- Desktop
    - Windows
    - Linux
    - Macintosh
    - Chrome OS
- Mobile
    - Android
    - iPhone
    - iPad / iPod Touch
    - Windows Phone OS
    - Kindle
    - Kindle Fire
    - BlackBerry
    - Playbook
    - Tizen
- Console
    - Nintendo 3DS
    - New Nintendo 3DS
    - Nintendo Wii
    - Nintendo WiiU
    - PlayStation 3
    - PlayStation 4
    - PlayStation Vita
    - Xbox 360
    - Xbox One

## Currently Detected Browsers

- Android Browser
- BlackBerry Browser
- Camino
- Kindle / Silk
- Firefox / Iceweasel
- Safari
- Internet Explorer
- IEMobile
- Chrome
- Opera
- Midori
- Vivaldi
- TizenBrowser
- Lynx
- Wget
- Curl

## License

**yii2-nox-user-agent-parser** is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.

![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)
