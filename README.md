# MODX SimpleSearch
![SimpleSearch version](https://img.shields.io/badge/version-2.0.0-blue.svg) ![MODX Extra by Sterc](https://img.shields.io/badge/checked%20by-sterc-ff69b4.svg) ![MODX version requirements](https://img.shields.io/badge/modx%20version%20requirement-2.0%2B-brightgreen.svg)

## Installation
Simply install it through the top menu ```Extras > Installer``` and search for ```SimpleSearch```. Install it from there. After installing it, it is recommended to clear your MODX cache, through the top menu ```Manage > Clear Cache```.

## Upgrade risks
First of all: ALWAYS MAKE A BACKUP BEFORE UPDATING! 

Upgrading to 2.0.0 from 1.* is highly recommended, but it does introduce some risks.

Important changes from 1.* to 2.0.0:
- The namespace has been changed from `sisea` to `simplesearch`. If you're using custom System Settings, then please migrate them.
- The ElasticSearch and SOLR drivers have been removed, because they were in need of improvements. Future drivers should be seperate addons. Feel free to ask us for help here.

## Bugs and feature requests
We value your feedback, feature requests and bug reports. Please issue them on [Github](https://github.com/Sterc/SimpleSearch/issues/new).
