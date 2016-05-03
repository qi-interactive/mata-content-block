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
public function findByRegion($region) {}
```
Returns ContentBlock entity with specified Region.


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

## 1.0.4.5-alpha, May 3, 2015
- Added filterableAttributes() to ContentBlock model (for search functionality)

## 1.0.4.4-alpha, October 8, 2015
- Added missing Language field

## 1.0.4.3-alpha, September 21, 2015
- Updated migration for matacms-language support

## 1.0.4.2-alpha, September 21, 2015
- Updated migration for matacms-language support

## 1.0.4.1-alpha, September 18, 2015
- Added migration for matacms-language support

## 1.0.4-alpha, June 11, 2015
- Removed create and delete buttons from Production (!YII_DEBUG)

## 1.0.3-alpha, June 4, 2015
- Updated composer.json

## 1.0.2-alpha, May 21, 2015
- Updated Content Block Client
- Updated installation notes

## 1.0.1-alpha, May 18, 2015
- Added standard mata headers in PHP files
- Updated code style

## 1.0.0-alpha, May 1, 2015

- Initial release.
