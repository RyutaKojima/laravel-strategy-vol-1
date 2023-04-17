# 開発環境の構築

環境変数定義ファイルをコピー
```shell
cp .env.example .env
```

コンテナをビルド&バックグラウンドで立ち上げます
```shell
./vendor/bin/sail up -d
```

composerパッケージをインストール
```shell
./vendor/bin/sail composer install
```

マイグレーション実行
```shell
./vendor/bin/sail artisan migrate
```


# Tips

コンテナに入る

```shell
./vendor/bin/sail shell
```
