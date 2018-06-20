# Enpress

To start up a new Enpress projects:

```
git clone --depth=1 https://github.com/enpress/enpress.git <project_name>
cd <project_name>
composer install
mv .env.example .env
php artisan key:generate
php artisan salts:generate
npm install
```

Open the website to complete the Wordpress setup.

## Using Enpress with Valet

Create a file in the valet drivers directory: `~/.valet/Drivers/EnpressValetDriver.php` with the following code:
https://gist.github.com/jeffory/1b13edfe5ef2d2e670c3331841ae9bb9

Then restart valet `valet restart`.
