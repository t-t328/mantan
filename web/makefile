.PHONY: up down build ps logs logs-f
up:
	./vendor/bin/sail up -d && ./vendor/bin/sail npm run dev
down:
	./vendor/bin/sail down
build:
	./vendor/bin/sail build
ps:
	./vendor/bin/sail ps
logs:
	./vendor/bin/sail logs
logs-f:
	./vendor/bin/sail logs -f