# コーディングガイドライン

## モデル作成

```shell
./vendor/bin/sail artisan make:model CustomerPhoneNumber
```

## マイグレーションファイル命名規則

### テーブル作成

```shell
./vendor/bin/sail artisan make:migration create_{table名}_table
```

### テーブル削除

```shell
./vendor/bin/sail artisan make:migration drop_{table名}_table
```

### 単一カラム追加

```shell
./vendor/bin/sail artisan make:migration add_{column名}_to_{table名}_table
```

### 単一カラム削除


```shell
./vendor/bin/sail artisan make:migration remove_{column名}_from_{table名}_table
```

### 単一カラム変更


```shell
./vendor/bin/sail artisan make:migration change_{column名}_in_{table名}_table
```

### その他


```shell
./vendor/bin/sail artisan make:migration {やりたいこと}_{table名}_table
```

ガイドライン
