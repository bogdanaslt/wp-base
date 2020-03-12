# Base WP install

Every Wordpress configuration variable should be taken fron environment variables, which may be defined in any of:

- `docker-compose.yml` file under `environment` section
- `.env` file located in projects root folder
- server environment itself

Posible configuration options:

- DB_NAME
- DB_USER
- DB_PASSWORD
- DB_HOST
- DB_CHARSET
- DB_COLLATE
- WP_HOME
- WP_SITEURL
- AUTH_KEY
- SECURE_AUTH_KEY
- LOGGED_IN_KEY
- NONCE_KEY
- AUTH_SALT
- SECURE_AUTH_SALT
- LOGGED_IN_SALT
- NONCE_SALT
- WP_DEBUG
