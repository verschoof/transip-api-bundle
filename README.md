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
