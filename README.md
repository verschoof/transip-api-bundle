transip-api-bundle
==================

A Symfony2 bundle for the TransIP API


Installation
============

Edit your composer.json
```json
"require": {
  ...
  "verschoof/transip-api-bundle": "1.1.*"
}
```

Register bunle in AppKernel

```php
$bundles = array(
  ...
  new Verschoof\TransipApiBundle\TransipApiBundle()
);
```

Run `composer update verschoof/transip-api-bundle`


Configuration
=============

```yaml
transip_login:      "login"
transip_privatekey: "privatekey"
```

Info: privatekey is a multiline key from transip, just remove the breaks to create a one-liner
