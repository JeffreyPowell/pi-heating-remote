#!/bin/bash

# configure apache
cp /home/pi/code/homeheating-remote /etc/apache2/sites-available
chown root:root /etc/apache2/sites-available
chmod 744 /etc/apache2/sites-available
a2ensite homeheating-remote
