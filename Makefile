build:
	docker build -t nprdcacnwwwdevacr.azurecr.io/drupalwxt-internet .

run:
	docker run -d \
	--name drupalwxt-internet \
	-p 80:80 \
	-h dev.tc.canada.ca \
	--network host \
	-v $(CURDIR)/html/sites/default/settings.php:/var/www/html/sites/default/settings.php \
	-v $(CURDIR)/docker/apache2/sites-available/vhost.conf:/etc/apache2/sites-available/000-default.conf \
	-v $(CURDIR)/storage/:/home/ \
	-e DRUPAL_HASH_SALT='PHlhk1pNA3I-ifkIF93PaDfVbX47lddV-1v5pNOLVV83aYct4sg8OIaaRDeXvSlAUzlD9hlq2w' \
	-e POSTGRES_DATABASE=www \
	-e POSTGRES_USERNAME=postgres \
	-e POSTGRES_PASSWORD=WxT \
	-e POSTGRES_HOST=localhost \
	nprdcacnwwwdevacr.azurecr.io/drupalwxt-internet
	
	docker run -d \
	--name postgres-drupalwxt \
	-p 5432:5432 \
	-e POSTGRES_PASSWORD=WxT \
	-v pgdatawxt:/var/lib/postgresql/data \
	postgres:11.6

fix_owner_permissions:
	#chown -R root:www-data $(CURDIR)/html/sites/default/files
	#find $(CURDIR)/html/sites -type d -name files -exec chmod ug=rwx,o= '{}' \;

stop:
	docker stop drupalwxt-internet
	docker stop postgres-drupalwxt
	docker rm drupalwxt-internet
	docker rm postgres-drupalwxt

login:
	az acr login --name nprdcacnwwwdevacr

push:
	docker push nprdcacnwwwdevacr.azurecr.io/drupalwxt-internet:latest

bash:
	docker exec -it drupalwxt-internet /bin/bash

bash_postgres:
	docker exec -it postgres-drupalwxt /bin/bash