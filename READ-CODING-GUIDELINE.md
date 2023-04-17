# コーディングガイドライン


## マイグレーションファイルの命名規則

### テーブル作成: `create_{table名}_table`

```shell
./vendor/bin/sail artisan make:migration create_{table名}_table
```

### テーブル削除: `drop_{table名}_table`

```shell
./vendor/bin/sail artisan make:migration drop_{table名}_table
```

### 単一カラム追加: `add_{column名}_to_{table名}_table`

```shell
./vendor/bin/sail artisan make:migration add_{column名}_to_{table名}_table
```

### 単一カラムの削除: `remove_{column名}_from_{table名}_table`

```shell
./vendor/bin/sail artisan make:migration remove_{column名}_from_{table名}_table
```

### 単一カラムの変更: `change_{column名}_in_{table名}_table`

```shell
./vendor/bin/sail artisan make:migration change_{column名}_in_{table名}_table
```

### その他: `{やりたいこと}_{table名}_table`

```shell
./vendor/bin/sail artisan make:migration {やりたいこと}_{table名}_table
```

