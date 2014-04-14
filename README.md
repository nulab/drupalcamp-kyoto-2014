# Examples how to integrate Nulab's services to Drupal.

This is an example project to show how to integrate Nulab's services to Drupal. You can see [this presentation slides](https://speakerdeck.com/nulabinc/connecting-nulabs-services-to-drupal) to know the overview of the modules included in this project.

## Source code

You can find some moduels under www/site/default/modules directory. 

* [Cacoo Parapara Viewer](https://github.com/nulab/drupalcamp-kyoto-2014/tree/master/www/sites/default/modules/cacoo)
* [Typetalk Notifier](https://github.com/nulab/drupalcamp-kyoto-2014/tree/master/www/sites/default/modules/typetalk)
* [Backlog Contact Form](https://github.com/nulab/drupalcamp-kyoto-2014/tree/master/www/sites/default/modules/backlog)

# How to start local development environment

## Prerequisites

* [Vagrant 1.5 or later](http://docs.vagrantup.com/v2/installation/index.html)
* [Ansible 1.5 or later](http://docs.ansible.com/intro_installation.html)

## Start developing environment

    vagrant up

After successfully startup, you can open Drupal installation page via http://172.28.128.3/install.php. (IP address is specified in a Vagrant file).
