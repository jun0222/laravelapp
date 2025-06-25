#!/bin/bash
MAX_ATTEMPTS=10
attempts=0

echo "実行権限が必要です。推奨: 755"

# APP_KEYが正常に設定されるまで試行を繰り返す
while [ $attempts -lt $MAX_ATTEMPTS ]; do
    # 試行回数をインクリメント
    ((attempts++))
    echo "試行 $attempts/$MAX_ATTEMPTS"
    
    # .env.localから.envをコピー
    cp .env.local .env
    
    # APP_KEYを生成
    php artisan key:generate
    
    # 設定をキャッシュ
    php artisan config:cache
    
    # APP_KEYが正しく設定されているか確認
    APP_KEY=$(php artisan tinker --execute="dump(config('app.key'))" | grep -o '"[^"]*"' | tr -d '"')
    
    # APP_KEYが設定されている場合、成功として終了
    if [[ ! -z "$APP_KEY" && "$APP_KEY" != "null" && "$APP_KEY" != "" ]]; then
        echo "APP_KEYが正常に設定されました: $APP_KEY"
        php artisan tinker --execute="dump(['config(app.key)' => config('app.key')])"
        exit 0
    fi
    
    echo "APP_KEYが設定されていないか空です。再試行します..."
    
    # 強制的にキーを再生成
    php artisan key:generate --force
done

# 最大試行回数に達した場合
echo "最大試行回数($MAX_ATTEMPTS回)に達しました。APP_KEYを設定できませんでした。"
echo "手動で問題を確認してください。"
exit 1