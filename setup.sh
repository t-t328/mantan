alias sail='./vendor/bin/sail'

cd web

cp .env.example .env

chmod -R 777 storage bootstrap/cache

docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs

sail up -d

sail php artisan key:generate
sail artisan migrate
sail composer install
sail npm install
sail npm run dev