build:
	docker build -t tccommacr.azurecr.io/drupalwxt-internet .

run:
	docker run -d \
	--name drupalwxt-internet-local \
	-p 80:80 \
	-h www.tc.gc.ca \
	--network host \
	-v $(CURDIR)/html/modules/:/var/www/html/modules/ \
	-v $(CURDIR)/html/themes/:/var/www/html/themes/ \
	-v $(CURDIR)/html/sites/default/files/:/var/www/html/sites/default/files/ \
	-v $(CURDIR)/docker/apache2/sites-available/vhost.conf:/etc/apache2/sites-available/000-default.conf \
	-e PGSQL_DATABASE=postgres \
	-e PGSQL_USERNAME=postgres \
	-e PGSQL_PASSWORD=WxT \
	-e PGSQL_HOST=localhost \
	tccommacr.azurecr.io/drupalwxt-internet
	
	docker run -d \
	--name postgres-drupalwxt \
	-p 5432:5432 \
	-e POSTGRES_PASSWORD=WxT \
	-v pgdatawxt:/var/lib/postgresql/data \
	postgres:11.6

chown:
	sudo chown -R www-data:www-data $(CURDIR)/html/sites/default/files/

stop:
	docker stop drupalwxt-internet-local
	docker stop postgres-drupalwxt
	docker rm drupalwxt-internet-local
	docker rm postgres-drupalwxt

push:
	docker push tccommacr.azurecr.io/drupalwxt-internet:latest

bash:
	docker exec -it drupalwxt-internet-local /bin/bash

bash_postgres:
	docker exec -it postgres-drupalwxt /bin/bash