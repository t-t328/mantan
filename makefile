.PHONY: up down
up:
	cd web && ./vendor/bin/sail up -d && ./vendor/bin/sail npm run dev
down:
	cd web && ./vendor/bin/sail down