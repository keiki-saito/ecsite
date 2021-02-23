### よく使うコマンド
```
php artisan cache:clear
php artisan config:clear
```
キャッシュが残ってうまく動かないときがある気がする

## マイグレーション関係

### マイグレーションの状況を確認
```
php artisan migrate:status
```

### マイグレーションをロールバック
```
php artisan migrate:rollback
```
### モデル・マイグレーションファイル一括で作る
```
php artisan make:model モデル名 -m
```

```
php artisan migrate:refresh --seed
```

### シードファイル作成
```
php artisan make:seeder ファイル名
```

 php artisan make:controller HelloController



