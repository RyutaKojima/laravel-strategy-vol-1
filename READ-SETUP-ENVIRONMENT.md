# 開発環境の構築

環境変数定義ファイルをコピー
```shell
cp .env.example .env
```

composerインストール
https://laravel.com/docs/10.x/sail#installing-composer-dependencies-for-existing-projects
```shell
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

コンテナをビルド&バックグラウンドで立ち上げます
```shell
./vendor/bin/sail up -d
```

```shell
./vendor/bin/sail artisan key:generate
```

マイグレーション実行
```shell
./vendor/bin/sail artisan migrate
```

ide-helperファイルを作成
```shell
./vendor/bin/sail composer ide-helper
```


# Tips

コンテナに入る

```shell
./vendor/bin/sail shell
```
