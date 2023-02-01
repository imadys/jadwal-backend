# Project setup
```js
git clone https://github.com/imadys/jadwal-backend.git
cd jadwal-backend
composer install
php artisan key:generate
php artisan migrate --seed
```
copy .env.example and rename it to .env
```js
FRONTEND_URL="YOUR FRONTEND LOCALHOST URL"
```
In .env make sure you paste the correct frontend url

```js
ZOOM_API_URL="https://api.zoom.us/v2/"
ZOOM_API_KEY="YOUR KEY"
ZOOM_API_SECRET="YOUR SECRET KEY"

MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME="USERNAME"
MAIL_PASSWORD="PASSWORD"
MAIL_ENCRYPTION=tls
```
Replace your Zoom keys and Mailtrap
