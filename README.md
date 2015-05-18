MATA CMS Content Block
==========================================

![MATA CMS Module](https://s3-eu-west-1.amazonaws.com/qi-interactive/assets/mata-cms/gear-mata-logo%402x.png)


Content Block module allows adding blocks of HTML code into a web page. 


Installation
------------

- Add the module using composer: 

```json
"matacms/matacms-content-block": "~1.0.0"
```

-  Run migrations
```
php yii migrate/up --migrationPath=@vendor/matacms/matacms-content-block/migrations
```


Client
------

Content Block Client extends [`matacms\clients`](https://github.com/qi-interactive/matacms-base/blob/development/clients/SimpleClient.php). 

In addition, it exposes the following methods: 

```php
public function getText($region) {}
```
Returns ContentBlock::Text for a given region. If the model is not found, and ContentBlockClient::safeMode is set to false an exception will be thrown. Otherwise an 'HttpException' will be thrown.


```php
public function renderText($region) {}
```
Echoes the result of ContentBlockClient::renderText($region).


```php
public function renderTextWithoutOuterParagraph($region) {}
```
Echoes the result of ContentBlockClient::renderText($region). It also removes the outer paragraph of tags which are usually added by Imperavi Redactor.


Changelog
---------

## 1.0.1-alpha, May 18, 2015
- Added standard mata headers in PHP files
- Updated code style

## 1.0.0-alpha, May 1, 2015

- Initial release.
 
## Future release
- Updated installation notes
