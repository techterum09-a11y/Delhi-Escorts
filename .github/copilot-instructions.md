# Escorts Laravel Application - Setup Guide

## Project Overview
Laravel-based PHP web application for XAMPP environment.

## Prerequisites Completed
- ✅ Directory structure created
- ✅ Core configuration files generated
- ✅ Laravel bootstrap and routing setup
- ✅ Environment template provided

## Next Steps

### 1. Install Composer Dependencies
Run the following command in the project root:
```bash
composer install
```

### 2. Configure Environment
```bash
copy .env.example .env
php artisan key:generate
```

### 3. Database Setup
- Create MySQL database: `escorts_db`
- Update `.env` with database credentials
- Run migrations: `php artisan migrate`

### 4. Run Application
```bash
php artisan serve
```

Access at: http://localhost:8000

## Directory Structure
- **app/** - Application controllers, models, services
- **config/** - Configuration files
- **database/** - Migrations and seeders
- **public/** - Web root and entry point
- **resources/** - Views and assets
- **routes/** - Route definitions
- **storage/** - Logs and cache

## Key Files
- `composer.json` - Project dependencies
- `.env` - Environment configuration
- `artisan` - Command-line interface
- `bootstrap/app.php` - Application bootstrap

## Support
See README.md for detailed documentation.
