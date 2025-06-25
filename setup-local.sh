#!/bin/bash
set -e

cp .env.local .env
echo "===.env.local ファイルを .env にコピーしました。==="

php artisan key:generate
echo "===APP_KEY を生成しました。==="

php artisan config:cache
echo "===APP_KEYをキャッシュに保存しました。==="

php artisan tinker --execute="dump(['config(app.key)' => config('app.key')]);"
echo "===↑現在のAPP_KEY。値が表示されない場合は再実行してください。==="