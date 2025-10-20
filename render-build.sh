#!/usr/bin/env bash
set -o errexit
composer install --optimize-autoloader --no-dev
php artisan migrate --force
npm install
npm run build
