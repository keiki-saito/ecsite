### よく使うコマンド
```
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
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

php artisan db:seed --class=UserTableSeeder
```

### シードファイル作成
```
php artisan make:seeder ファイル名
```
### コントローラー作成
```
php artisan make:controller HelloController
```

### アセット変更監視
```
npm run watch
```

### カラム追加
```
pt_user_id_to_posts_table --table=posts
```







