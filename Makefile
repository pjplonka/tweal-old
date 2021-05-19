build:
	docker-compose build

up:
	docker-compose up

upd:
	docker-compose up -d

exec:
	docker-compose exec web bash

art:
	docker-compose exec web bash -c "php artisan $(c)"
