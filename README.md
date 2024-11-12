# How To Setup Project on Locally

This guide provides step-by-step instructions for setting up Funeral App.

## Prerequisites

Before starting, ensure your system has:

-   PHP 8.1 or higher
-   Composer (PHP package manager)
-   Node.js and npm (for frontend assets)
-   MySQL or PostgreSQL database
-   Apache or Nginx web server
-   Git

#### If you are using Windows:

Download Laragon from here:[Laragon Download](https://laragon.org/download/)
It comes with everything you need to start local development on Windows, after installing Laragon, skip to step 3

## 1. Install PHP and Required Extension

```bash
# Update package manager
sudo apt update

# Install PHP and common extensions
sudo apt install php8.1 \
    php8.1-cli \
    php8.1-common \
    php8.1-curl \
    php8.1-mbstring \
    php8.1-mysql \
    php8.1-xml \
    php8.1-zip \
    php8.1-bcmath \
    unzip
```

## 2. Install Node.js and npm

```bash
# Install Node.js and npm using nvm (Node Version Manager)
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.0/install.sh | bash

# Reload shell configuration
source ~/.bashrc

# Install latest LTS version of Node.js
nvm install --lts
```

## 3. Install Composer

#### If you are using Windows:

Download and install the composer .exe from here: [Composer .exe Download](https://getcomposer.org/Composer-Setup.exe)

#### For Linux Users:

```bash
# Download Composer installer
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

# Install Composer globally
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer

# Remove installer
php -r "unlink('composer-setup.php');"
```

## 4. Clone Project

```bash
# Create new Laravel project
git clone git@github.com:oheneadj/funeralapp.git

# Navigate to project directory
cd your-project-name
```

## 5. Configure Environment

#### Copy environment file

copy .env.example and rename it to .env

```bash
# Generate application key
php artisan key:generate

```

Update the following variables in `.env`:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

## 7. Install Dependencies and Compile Assets

```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install

# Compile assets
npm run dev
```

## 8. Start Development Server

```bash
# Start Laravel development server
php artisan serve
```

Your application will be available at `http://localhost:8000`

## Common Development Commands

```bash
# Create new migration
php artisan make:migration create_table_name

# Run migrations
php artisan migrate

# Create new controller
php artisan make:controller ControllerName

# Create new model
php artisan make:model ModelName

# Clear application cache
php artisan cache:clear

# List all available artisan commands
php artisan list
```

## Troubleshooting

1. If you encounter permission issues:

    - Verify that storage and bootstrap/cache directories are writable
    - Check file ownership and permissions

2. If composer install fails:

    - Check PHP version compatibility
    - Verify PHP extensions are installed
    - Clear composer cache: `composer clear-cache`

3. If npm run dev fails:
    - Delete node_modules directory and package-lock.json
    - Run `npm install` again
    - Update Node.js to LTS version

## Additional Resources

-   [Laravel Documentation](https://laravel.com/docs)
-   [Laravel GitHub Repository](https://github.com/laravel/laravel)
-   [Laravel News](https://laravel-news.com)
-   [Laracasts](https://laracasts.com)
