# mantan
htmlの制作課題

エイリアス設定 (zsh)
$ alias sail='./vendor/bin/sail'
$ source ~/.zshrc

clone後に実行するコマンド
$ cd web &
cp .env.example .env &
chmod -R 777 storage bootstrap/cache &
sail up -d &
sail artisan key:generate &
sail composer install &
sail npm install &
sail artisan migrate

編集ファイルオープン
shift + command + p -> shell
code web/resources/views