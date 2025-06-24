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

## 環境変数かえて、コンテナ再起動、サーバー再起動

```bash
cp .env.local .env && docker compose up -d && php artisan serve
```