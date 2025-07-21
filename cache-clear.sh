#!/bin/bash

# Laravel キャッシュクリアスクリプト

echo "🧹 Laravel キャッシュをクリアします..."

php artisan config:clear
php artisan view:clear
php artisan cache:clear
php artisan optimize:clear

echo "✅ キャッシュクリア完了しました！"
