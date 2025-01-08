# My Laravel Application

This is a Laravel-based web application that uses Vite for modern front-end development. Follow the steps below to clone the repository and get started with development.

## Table of Contents

-   [Prerequisites](#prerequisites)
-   [Cloning the Repository](#cloning-the-repository)
-   [Setting Up the Development Environment](#setting-up-the-development-environment)
-   [Running the Application](#running-the-application)
-   [Development Commands](#development-commands)
-   [License](#license)

## Prerequisites

Before getting started, ensure that you have the following installed:

-   [PHP](https://www.php.net/) (>= 8.0)
-   [Composer](https://getcomposer.org/)
-   [Node.js](https://nodejs.org/) (>= 16.x)
-   [NPM](https://www.npmjs.com/)

## Cloning the Repository

First, clone the repository to your local machine using the following command:

```bash
git clone https://github.com/mojay2/yale-soa.git
```

Navigate into the project directory:

```bash
cd yale-soa
```

## Setting Up the Development Environment

1. **Install PHP dependencies:**
   Run the following command to install all the PHP dependencies via Composer:

    ```bash
    composer install
    ```

2. **Install JavaScript dependencies:**
   After installing the PHP dependencies, install the required JavaScript packages using NPM:

    ```bash
    npm install
    ```

3. **Set up your environment file:**
   Copy the `.env.example` file to `.env`:

    ```bash
    cp .env.example .env
    ```

4. **Configure database:**
   You have two options for database configuration:

    **Option 1: MySQL**
    Create a new MySQL database and update your `.env` file with the database credentials:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=yale_soa
    DB_USERNAME=root
    DB_PASSWORD=
    ```

    To create the database, you can use MySQL command line:

    ```bash
    mysql -u root -p
    ```

    Then in the MySQL prompt:

    ```sql
    CREATE DATABASE yale_soa;
    ```

    **Option 2: SQLite**
    For a simpler setup, you can use SQLite. Update your `.env` file to use SQLite:

    ```env
    DB_CONNECTION=sqlite
    #DB_HOST=127.0.0.1
    #DB_PORT=3306
    #DB_DATABASE=yale_soa
    #DB_USERNAME=root
    #DB_PASSWORD=
    ```

    Then create a SQLite database file:

    ```bash
    touch database/database.sqlite
    ```

5. **Generate the application key:**
   Laravel requires an application key for encryption, which can be generated by running the following command:

    ```bash
    php artisan key:generate
    ```

6. **Migrate and seed the database:**
   Run migrations with seed data to set up the required tables:

    ```bash
    php artisan migrate:fresh --seed
    ```

## Running the Application

Once the environment is set up, you can run the application locally.

1. **Start the backend (Laravel):**
   Start the Laravel development server by running:

    ```bash
    php artisan serve
    ```

    This will serve your application at `http://localhost:8000`.

2. **Start the front-end (Vite):**
   Vite is used for front-end development. To start the development server for the front-end, run:

    ```bash
    npm run dev
    ```

    This will start Vite, and you can access the front-end at `http://localhost:3000` (or the URL displayed in the terminal).

## Development Commands

Here are some commonly used development commands:

-   **Start Laravel development server**:

    ```bash
    php artisan serve
    ```

-   **Start Vite development server**:

    ```bash
    npm run dev
    ```

-   **Build the front-end assets for production**:

    ```bash
    npm run build
    ```

-   **Run Laravel migrations**:

    ```bash
    php artisan migrate
    ```

-   **Clear Laravel cache**:
    ```bash
    php artisan cache:clear
    ```
