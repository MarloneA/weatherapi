To start the weather api, follow this instructions


clone the repository

```bash
git clone https://github.com/MarloneA/weather-api.git
```

run 

```bash
composer install
```

Create a .env file at the root of the folder and copy everything from .env.example

supply the following keys to your env file before proceeding

```bash
GOOGLE_URL=maps.googleapis.com/maps/api/geocode/json
OPENWEATHERMAP_URL=api.openweathermap.org/data/3.0/onecall

GEOCODING_API_KEY=[your-unique-key]
OPENWEATHERMAP_API_KEY=[your-unique-key]
```

 run this to generate api key

```bash
php artisan key:generate
```


run this to initialise with an empty sqlite db you will be prompted select Yes and continue

```bash
php artisan migrate

The SQLite database configured for this application does not exist: database/database.sqlite.

 ┌ Would you like to create it? ────────────────────────────────┐
 │ ● Yes / ○ No
```


Then start your server:


```bash
php artisan serve
```

The api is now up and running on http://localhost:8000
