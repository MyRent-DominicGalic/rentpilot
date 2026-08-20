# RentPilot

## Getting started
To start first clone the repo into local folder and enter it

```
git clone https://github.com/MyRent-DominicGalic/rentpilot.git
cd rentpilot
```

## Run mandatory commands
For the app to work you need to run composer isntall

```
composer install
```

while composer is running you can copy .envexample into .env and set variables
after composer is done and you have a .env file ready you need to generate an app key
and for safe measure clear cache 

```
php artisan key:generate
php artisan cache:clear
```
