# IP

Validates an ip address is either public or private. Supports ipv4 & ipv6.

<p align="center">
  <a href="https://github.com/laravel-validation-rules/ip/blob/master/LICENSE">
    <img src="https://img.shields.io/github/license/laravel-validation-rules/ip.svg?style=flat-square">
  </a>
  <a href="https://twitter.com/clarkeash">
    <img src="http://img.shields.io/badge/author-@clarkeash-blue.svg?style=flat-square">
  </a>
</p>

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
