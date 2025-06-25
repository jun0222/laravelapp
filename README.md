## サーバー起動

```bash
php artisan serve
```

## ローカルdb接続

```bash
# .env.localを.envにコピー
cp .env.local .env

# コンテナ起動
docker compose up -d
```

## 環境変数変更後、コンテナ再起動、サーバー再起動

```bash
sh setup-local.sh && docker compose up -d && php artisan serve
```

## ローカル環境を起動するための`.env`の初期設定

```bash
sh setup-local.sh
```

## キャッシュ削除

```bash
composer dump-autoload && php artisan clear-compiled && php artisan optimize && php artisan config:cache
```

## ルートのキャッシュ削除

```bash
php artisan route:clear
```