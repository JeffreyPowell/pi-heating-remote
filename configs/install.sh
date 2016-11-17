#!/bin/bash

# configure apache
cp /home/pi/pi-heating-remote/configs/homeheating-site.conf /etc/apache2/sites-available/homeheating-site.conf
chown root:root /etc/apache2/sites-available/homeheating-site.conf
chmod 644 /etc/apache2/sites-available/homeheating-site.conf
a2ensite homeheating-site
service apache2 reload

