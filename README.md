Yii PHP Framework Version 2 / NOX UserAgent Parser
==================================================

## What It Is

A simple streamlined PHP user-agent parser for Yii Framework 2, using "[donatj/PhpUserAgent](https://github.com/donatj/PhpUserAgent)".

Licensed under the MIT license: http://www.opensource.org/licenses/mit-license.php


## Why Use This

You have your choice in user-agent parsers. This one detects **all modern browsers** in a very light, quick, understandable fashion.
It is less than 200 lines of code, and consists of just three regular expressions!
It can also correctly identify exotic versions of IE others fail on.

It offers 100% unit test coverage, is installable via Composer, and is very easy to use.

## What It Does Not Do

### OS Versions

User-agent strings **are not** a reliable source of OS Version!

- Many agents simply don't send the information.
- Others provide varying levels of accuracy.
- Parsing Windows versions alone almost nearly doubles the size of the code.

## Requirements

  - PHP 5.4.0+

## Installing

PHP User Agent is available through Packagist via Composer.

```json
{
	"require": {
		"nox-it/yii2-nox-user-agent-parser": "*"
	}
}
```

## Sample Usage (Statically)

```php
use nox\components\http\userAgent\Parser;

$userAgent = UserAgentParser::parse(); // or UserAgentParser::parse($ua);

$userAgent->ua;                 // [Searched UserAgent]
$userAgent->successfullyParsed; // [Has UserAgent Results]
$userAgent->platform;           // [Detected Platform]
$userAgent->browser;            // [Detected Browser]
$userAgent->version;            // [Detected Browser Version]
```

## Sample Usage (as Object)

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

![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)
