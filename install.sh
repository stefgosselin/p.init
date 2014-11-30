#!/bin/bash
# Needs curl

echo "Fetching composer from composer.org"
curl -sS https://getcomposer.org/installer | php
php composer.phar
