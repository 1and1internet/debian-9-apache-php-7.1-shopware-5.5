# Shopware 5.5 on Apache with PHP 7.1 on Debian 9 (stretch)

This image provides Shopware 5.5 in an Apache, PHP 7.1 Debian 9 environment.

## Usage

Please note this image is explictly intended to be run as a non-privileged user. Ensure you specify a user id (UID) other than zero when you run it. Running as root will not function.


```bash
UID=999
PORT=80
WEB_ROOT="/var/www/"

docker run -u ${UID}:0 -p ${PORT}:8080 -v ${WEB_ROOT}:/var/www/ 1and1internet/debian-9-apache-php-7.1-shopware-5.5
```

## Building and testing

A simple Makefile is included for your convience. It assumes a linux environment with a docker socket available at `/var/run/docker.sock`

To build and test just run `make`.
You can also just `make pull`, `make build` and `make test` separately.

Please see the top of the Makefile for various variables which you may choose to customise. Variables may be passed as arguments, e.g. `make IMAGE_NAME=bob` or `make build BUILD_ARGS="--rm --no-cache"`

## Modifying the tests

All tests are run using the testpack-framework image. See 1and1internet/testpack-framework for more information.
