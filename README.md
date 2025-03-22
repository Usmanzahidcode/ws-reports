# WsReports

WsReports is a structured reporting system designed to streamline data collection and project tracking. It provides a
user-friendly interface for employees to fill out reports and administrators to manage and analyze data.

## 🛠️ Tech Stack

- **Backend:** Laravel (PHP)
- **Frontend:** Vanilla JavaScript, jQuery (where needed)
- **Styling:** Bulma CSS
- **Database:** MySQL
- **JavaScript Libraries:** Sortable.js (for drag-and-drop functionality)

## Installation & Setup

### Clone the Repository

```sh
git clone https://github.com/your-repo/wsreports.git  
cd wsreports
```

### Install Dependencies

composer install  
npm install

### Set Environment Variables

```sh
cp .env.example .env  
php artisan key:generate
```

Configure `.env` with your database credentials.

### Run Migrations & Seed Database

```sh
php artisan migrate --seed
```

### Start the Server

```sh
php artisan serve
```

By default, the app runs at `http://127.0.0.1:8000`.

## Deployment

### Standard Laravel Deployment

1. Upload the project files to the server.
2. Run `composer install --no-dev --optimize-autoloader`.
3. Configure the `.env` file with the production database.
4. Run migrations and seeders:
   ```sh
   php artisan migrate --seed
   ```
5. Set correct file permissions for `storage` and `bootstrap/cache`:
   ```sh
   chmod -R 775 storage bootstrap/cache
   ```
6. Configure a queue worker using Supervisor if needed.
7. Set up Nginx/Apache to serve the Laravel project.

### Supervisor for Queues (Optional)

If the project requires queues, configure Supervisor:

```sh
sudo apt update && sudo apt install supervisor  
sudo nano /etc/supervisor/conf.d/wsreports-worker.conf  
```
