# IP

Validates an ip address is either public or private. Supports ipv4 & ipv6.

<p align="center">
  <a href="https://travis-ci.org/laravel-validation-rules/ip">
    <img src="https://img.shields.io/travis/laravel-validation-rules/ip.svg?style=flat-square">
  </a>
  <a href="https://scrutinizer-ci.com/g/laravel-validation-rules/ip/code-structure/master/code-coverage">
    <img src="https://img.shields.io/scrutinizer/coverage/g/laravel-validation-rules/ip.svg?style=flat-square">
  </a>
  <a href="https://scrutinizer-ci.com/g/laravel-validation-rules/ip">
    <img src="https://img.shields.io/scrutinizer/g/laravel-validation-rules/ip.svg?style=flat-square">
  </a>
  <a href="https://github.com/laravel-validation-rules/ip/blob/master/LICENSE">
    <img src="https://img.shields.io/github/license/laravel-validation-rules/ip.svg?style=flat-square">
  </a>
</p>

## Installation

```bash
composer require laravel-validation-rules/ip
```

## Usage

Validate an ip address is a public address.

```php
use LVR\IP\PublicAddress;

$request->validate([
    'ip' => ['required', new PublicAddress],
]);
```

Validate an ip address is a private address.

```php
use LVR\IP\PrivateAddress;

$request->validate([
    'ip' => ['required', new PrivateAddress],
]);
```
