#!/bin/bash

# configure apache
cp /home/pi/pi-heating-remote/homeheating-site.conf /etc/apache2/sites-available/homeheating-site.conf
chown root:root /etc/apache2/sites-available/homeheating-site.conf
chmod 744 /etc/apache2/sites-available/homeheating-site.conf
a2ensite homeheating-site

