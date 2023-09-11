# Onlinecheckwriter - Quick Pay
onlinecheckwriter.com PHP Client is a simple but flexible wrapper for the [onlinecheckwriter.com](https://www.onlinecheckwriter.com) API. See full onlinecheckwriter.com documentation [here](https://apiv3.onlinecheckwriter.com/). 

## Table of Contents

- [Getting Started](#getting-started)
  - [Registration](#registration)
  - [Installation](#installation)
  - [Usage](#usage)
- [Examples](#examples)
- [Video Explanation](https://www.youtube.com/watch?v=KCXGY4Ukhxk&feature=youtu.be)
- [API Documentation](#api-documentation)
- [Mail Type explanation](#mail-type)


## Getting Started

- https://apiv3.onlinecheckwriter.com/
- Plz watch the video
- and please read the documentation




### Registration



### Installation

The recommended way to install onlinecheckwriter.com PHP Client is through [Composer](https://getcomposer.org).

```bash
// Install Composer
curl -sS https://getcomposer.org/installer | php

// Add onlinecheckwriter.com PHP client as a dependency
composer require onlinecheckwriter/Quickpay
```

After installing, you need to require Composer's autoloader:

```php
require_once __DIR__ . '/vendor/autoload.php';
```

### Usage

```php
// setToken
// setEnviorment : SANDBOX   

use onlinecheckwriter\Quickpay\Index;

$ocw = (new Index());
$ocw->setToken("G5LoP94QISpOvk6i072yXDFBPwSjRS01foqlYPdVdYJ7li2NRkvzuHvYIzif")
$ocw->setEnviorment("SANDBOX");



// setToken
// setEnviorment : LIVE   

use onlinecheckwriter\MailCheck\Index;

$ocw = (new Index());
$ocw->setToken("YOUR API TOKEN")
$ocw->setEnviorment("LIVE");



```

## Examples

We've provided various examples for you to try out [here](https://github.com/onlinecheckwriter/quickpay/tree/master/examples).

There are simple scripts to demonstrate how to create all the core onlinecheckwriter objects (checks, sent mail) 

## API Documentation
- [Introduction](hhttps://apiv3.onlinecheckwriter.com/#6fedbc4a-638b-48e7-bd0b-c44679b222ea)

=======================



Copyright &copy; 2023 onlinecheckwriter.com

