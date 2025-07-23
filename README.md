# mantan
htmlの制作課題

# clone後に実行するコマンド
$ cd web &&
cp .env.example .env &&
chmod -R 777 storage bootstrap/cache &&
docker run --rm \
-u "$(id -u):$(id -g)" \
-v $(pwd):/var/www/html \
-w /var/www/html \
laravelsail/php81-composer:latest \
composer install --ignore-platform-reqs &&
./vendor/bin/sail up -d

$ sail php artisan key:generate &&
sail composer install &&
sail npm install &&
sail artisan migrate &&
sail npm run dev

# おまけ
編集ファイルオープン
shift + command + p -> shell
code web/resources/views

エイリアス設定 (zsh)
$ alias sail='./vendor/bin/sail'
$ source ~/.zshrc