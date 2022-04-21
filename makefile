run:
	docker-compose build
	docker-compose up
	composer dump-autoload -o

stop:
	docker-compose down

migrate:
	cd ./src/app/db/ &&  php -f ./migrate.php && cd ../../..
#--env-file .env

codecept-rebuild:
	php vendor/bin/codecept build
	composer dump-autoload -o