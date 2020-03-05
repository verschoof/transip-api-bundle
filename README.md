**DEPRECATED**
==============
The library that is used by this bundle is deprecated.
INFO: https://www.transip.nl/nieuws/de-nieuwe-transip-rest-api-is-live/
<br><br><br><br>

Wrapper of the transip API


transip-api-bundle
==================

A Symfony2 bundle for the TransIP API


Installation
============

Run the following command
```sh
composer require verschoof/transip-api-bundle
```

Register bundle in AppKernel
```php
#app/AppKernel.php
$bundles = array(
  ...
  new Verschoof\TransipApiBundle\TransipApiBundle()
);
```

Run `composer update verschoof/transip-api-bundle`


Configuration
=============
```yaml
#app/config/config.yml
transip_api:
    login       : "%transip_login%"
    private_key : "%transip_privatekey%"
    read_only   : "%transip_readonly%"
```

```yaml
#parameters.yml
parameters:
     transip_login:      yourusername
     transip_privatekey: "yourkey"
     transip_readonly:   true
```

Info: privatekey is a multiline key from transip, just remove the breaks to create a one-liner
