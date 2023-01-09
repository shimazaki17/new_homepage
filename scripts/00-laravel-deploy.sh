#!/usr/bin/env bash
echo "Running composer"
composer install --no-dev --working-dir=/var/www/html

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Build assets"
apk add --no-cache nodejs npm
npm install
npm run build

echo "Running migrations..."
php artisan migrate --force
