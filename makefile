run:
	docker-compose build
	docker-compose up

stop:
	docker-compose down

#--env-file .env