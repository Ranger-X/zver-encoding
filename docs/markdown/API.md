# Zver\Encoding

## Table of Contents

* [Encoding](#encoding)
    * [set](#set)
    * [get](#get)
* [UnknownEncodingException](#unknownencodingexception)

## Encoding

Class Encoding provides static access to use in all project classes/functions.



* Full name: \Zver\Encoding


### set

Set encoding of project.

```php
Encoding::set( string $encoding ): void
```

If encoding is unknown - exception raised.

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$encoding` | **string** | Encoding to set |




---

### get

Get project encoding

```php
Encoding::get(  ): string
```



* This method is **static**.



---

## UnknownEncodingException





* Full name: \Zver\Exceptions\Encoding\UnknownEncodingException
* Parent class: 




--------
> This document was automatically generated from source code comments on 2016-06-23 using [phpDocumentor](http://www.phpdoc.org/) and [cvuorinen/phpdoc-markdown-public](https://github.com/cvuorinen/phpdoc-markdown-public)
