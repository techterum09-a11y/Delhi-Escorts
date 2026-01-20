# Escorts Laravel Application

A Laravel PHP web application built with the Laravel framework.

## Requirements

- PHP 8.1 or higher
- Composer
- MySQL/MariaDB
- XAMPP (recommended for local development)

## Installation

### 1. Clone or Extract Project
Navigate to your XAMPP htdocs folder:
```
C:\xampp\htdocs\escorts\
```

### 2. Install Dependencies
```bash
composer install
```

### 3. Configure Environment
Copy the environment file and update it:
```bash
copy .env.example .env
```

Edit `.env` file and configure:
- Database credentials
- APP_KEY (generate with: `php artisan key:generate`)
- Other settings as needed

### 4. Generate Application Key
```bash
php artisan key:generate
```

### 5. Create Database
Create a MySQL database named `escorts_db` or modify DB_DATABASE in `.env`

### 6. Run Migrations
```bash
php artisan migrate
```

## Running the Application

### Start XAMPP Services
1. Open XAMPP Control Panel
2. Start Apache and MySQL

### Run Development Server
```bash
php artisan serve
```

The application will be available at: `http://localhost:8000`

Or access directly through Apache:
`http://localhost/escorts/public`

## Project Structure

```
escorts/
├── app/                 # Application code
├── bootstrap/          # Framework bootstrap
├── config/             # Configuration files
├── database/           # Migrations and seeders
├── public/             # Web root and assets
├── resources/          # Views and raw assets
├── routes/             # Route definitions
├── storage/            # Logs and cached files
├── tests/              # Test files
├── .env                # Environment variables (create from .env.example)
├── artisan             # Artisan CLI
└── composer.json       # Project dependencies
```

## Useful Artisan Commands

```bash
# Create a new migration
php artisan make:migration create_table_name

# Run migrations
php artisan migrate

# Create a new controller
php artisan make:controller ControllerName

# Create a new model
php artisan make:model ModelName

# Start development server
php artisan serve

# View all available commands
php artisan list
```

## Database Setup

### Using XAMPP phpMyAdmin

1. Open http://localhost/phpmyadmin
2. Create a new database: `escorts_db`
3. Update `.env` with database credentials (default: root, no password)

### Run Migrations

```bash
php artisan migrate
```

## Troubleshooting

### Composer Not Found
- Install Composer: https://getcomposer.org/download/
- Add Composer to PATH or use full path: `C:\composer\composer.phar install`

### PHP Version Issues
- Check PHP version: `php -v`
- XAMPP PHP version can be changed in php.ini

### Database Connection Error
- Ensure MySQL is running in XAMPP Control Panel
- Verify .env database credentials
- Check DB_HOST is correct (127.0.0.1 for XAMPP)

## Documentation

- [Laravel Documentation](https://laravel.com/docs)
- [Laravel API Reference](https://laravel.com/api/11.x)
- [XAMPP Documentation](https://www.apachefriends.org/index.html)

## License

MIT License
