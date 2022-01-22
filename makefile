run:
	docker-compose build
	docker-compose up

stop:
	docker-compose down

migrate:
	cd ./src/app/db/ &&  php -f ./migrate.php && cd ../../..
#--env-file .env