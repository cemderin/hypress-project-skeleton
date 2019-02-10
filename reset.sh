#!/usr/bin/env bash
vagrant destroy
rm -r ./.vagrant/
rm -r ./.hypress/htdocs/wp/
rm -r ./vendor/
rm ./composer.lock
rm -r ./node_modules/
rm ./ubuntu-bionic-18.04-cloudimg-console.log




