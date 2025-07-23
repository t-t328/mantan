cd web

cp .env.example .env

chmod -R 777 storage bootstrap/cache

docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs

./vendor/bin/sail up -d

./vendor/bin/sail php artisan key:generate
./vendor/bin/sail artisan migrate
./vendor/bin/sail composer install
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev