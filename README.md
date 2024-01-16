# Laravel with Azampay Demo

![Azampay](./public/Screenshot%202024-01-16%20223321.png)

## Installation

1. Clone the repository
2. Run `composer install`
3. Run `cp .env.example .env`
4. Run `php artisan key:generate`
5. Run `php artisan migrate`
6. Run `php artisan serve`

Use Ngrok to expose your local server to the internet. You can download it [here](https://ngrok.com/download).

7. Run `ngrok http 8000` to expose your local server to the internet.
8. Copy the forwarding address and paste it in the [Azampay Dashboard](https://developers.azampay.co.tz/sandbox/registerapp) under `Register App`.
9. Copy the `Client ID` and `Client Secret` and paste them in the `.env` file.
10. Run `curl http://localhost:8000/checkout` to test the API.
