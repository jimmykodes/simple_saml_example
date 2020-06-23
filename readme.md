# SimpleSAML example

## Run locally

Create self signed certs
```shell script
cd idp/certs
openssl req -newkey rsa:3072 -new -x509 -days 3652 -nodes -out idp.crt -keyout idp.pem

cd ../../sp/certs
openssl req -newkey rsa:3072 -new -x509 -days 3652 -nodes -out saml.crt -keyout saml.pem
```

You will need to update the `certData` in the metadata of the `sp/saml20-idp-remote.php` file to match the new certs.

Start the docker container with:
```shell script
docker-compose up -d
```

Since this runs both and SP and IDP on the same computer, it will be important to make sure they are running on different
domains, I added this to my hosts file to achieve that:
```
127.0.0.1    sp.com
127.0.0.1    idp.com
```

you will then be able to access the simplesaml frontpage here:

`http://sp.com:8000/simplesamlphp/module.php/core/frontpage_welcome.php`

From this page, you can click on the `Authentication` tab, and from there, the "Test configured Authentication Sources"
link. this will take you to a bulleted list, letting you log in w/ the admin credentials, (see the samle_secrets.php
files for admin creds), or the "default-sp", which should point to the idp container. Credentials can be added to the 
sql file in the dbinit folder, or by interacting directly w/ the db container.
