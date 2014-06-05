# MamuzBlog

[![Build Status](https://travis-ci.org/mamuz/MamuzBlog.svg?branch=master)](https://travis-ci.org/mamuz/MamuzBlog)
[![Dependency Status](https://www.versioneye.com/user/projects/538f788b46c473980c000029/badge.svg)](https://www.versioneye.com/user/projects/538f788b46c473980c000029)
[![Coverage Status](https://coveralls.io/repos/mamuz/MamuzBlog/badge.png?branch=master)](https://coveralls.io/r/mamuz/MamuzBlog?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/mamuz/MamuzBlog/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/mamuz/MamuzBlog/?branch=master)

[![Latest Stable Version](https://poser.pugx.org/mamuz/mamuz-blog/v/stable.svg)](https://packagist.org/packages/mamuz/mamuz-blog)
[![Total Downloads](https://poser.pugx.org/mamuz/mamuz-blog/downloads.svg)](https://packagist.org/packages/mamuz/mamuz-blog)
[![Latest Unstable Version](https://poser.pugx.org/mamuz/mamuz-blog/v/unstable.svg)](https://packagist.org/packages/mamuz/mamuz-blog)
[![License](https://poser.pugx.org/mamuz/mamuz-blog/license.svg)](https://packagist.org/packages/mamuz/mamuz-blog)

## Installation

Run doctrine orm command line to create database table:

Dump the sql..
```sh
./vendor/bin/doctrine-module  orm:schema-tool:update --dump-sql
```
Force update
```sh
./vendor/bin/doctrine-module  orm:schema-tool:update --force
```
In usage of environment variable..
```sh
export APPLICATION_ENV=development; ./vendor/bin/doctrine-module  orm:schema-tool:update
```

## Requirements

- Hashids/HashIds to encrypt repository identities
