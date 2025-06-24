#!/bin/bash

# コピー処理
cp .env.local .env
echo ".env ファイルを .env.local から作成しました。"

# APP_KEY 生成
php artisan key:generate
echo "APP_KEY を自動生成しました。"

# キャッシュクリア（念のため）
php artisan config:clear
echo "Laravel の設定キャッシュをクリアしました。"

echo "✅ ローカルセットアップ完了！"
