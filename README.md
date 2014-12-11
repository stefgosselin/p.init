p.init
======

Project init - Easy flexible and extensible configuration setup for a few popular php web frameworks.

FOREWARD
--------

This project and the inspiration behind it rests on the shoulders of pioneers, creators, who themselves rested on the shoulders of giants.

The codebase is now symfony2.6, the initial codebase was based off M. Reiber's  [timesaving symfony-kickstarter](https://github.com/bicpi/symfony-kickstarter) package.
This was basically used as is, with packages updated for 2.6 version of Symfony2.

## Features

Common Symfony2 features like controllers, templating, bundle integration, database integration

* Git configuration
* Permission setup helper script

Integration and demonstration of 3rd party software:

* Bower
* FOSUserBundle
* FOSJsRoutingBundle
* KnpPaginatorbundle
* KNP Labs Doctrine behaviors
* DoctrineFixturesBundle
* JMSDiExtraBundle
* JMSDiSecurityBundle
* LiipFunctionalTestBundle
* PhpExcel
* HtmlConverterBundle
* jQuery
* jQueryUI
* holder.js
* Assetic
* Bootstrap3
* Travis configuration


###Install

Installation is quite straighforward.  

1. git clone git@github.com:stefgosselin/p.init.git
2. cd p.init
3. Get composer ( if needed ) curl -sS https://getcomposer.org/installer | php
4. Install vendors with composer:
5. create a database pinit, with user pinit and password pinit
6. run bower

###License 

The MIT License (MIT)

Copyright (c) <year> <copyright holders>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.