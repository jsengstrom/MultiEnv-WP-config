# Multi Environment WP-config

This is a really simple solution for developing a WordPress website in multiple environments, for example between local, staging and production sites.

The ```wp-config.php``` file replaces the default WordPress one, and reads the ```HTTP_HOST``` from the server. Each environment is declared within an array, and when the ```HTTP_HOST``` matches the relevant config settings are included, from  ```wp-env/``` folder.

## How to

1. Copy ```wp-config.php``` and ```wp-env/``` to the root of your WordPress installation.
2. Open ```wp-config.php``` and configure the environments array. Common names (local, staging and production) have already been included.
3. For each environment, the should be a file ```wp-env/db-[ENVIRONMENT-NAME].php```. Again, the common names have been included. If you've added additional environments, duplicate and rename one of the existing configs.
4. Configure your database settings and salts as usual, within each environment config. For the common names, WordPress debugging is turned on for local and stanging and off for production.

That's all. Tweet me [@jsengstrom](https://twitter.com/jsengstrom) for support.
