php app/console cache:clear --env=prod --no-debug

chown -R root:www-data app/cache
chown -R root:www-data app/logs
chown -R root:www-data app/config/parameters.yml
chmod -R 775 app/cache
chmod -R 775 app/logs
chmod -R 775 app/config/parameters.yml
chown -R root:www-data web/uploads
chmod -R 775 web/uploads


