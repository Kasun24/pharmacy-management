## Installation

Make sure that you have set up the environment properly. You will need a minimum of PHP 8.1, MySQL/MariaDB, composer, Node.js, and SQLite.

1. Download the project (or clone using GIT)
2. Copy `.env.example` into `.env` and configure your database credentials. Update the `DB_DATABASE` with the absolute path for SQLite:

    ```dotenv
    DB_CONNECTION=sqlite
    DB_DATABASE=/absolute/path/to/your/project/database/database.sqlite
    ```

    Replace `/absolute/path/to/your/project/` with the actual absolute path to your Laravel project.

3. Go to the project's root directory using the terminal window/command prompt
4. Run `composer install`
5. Set the application key by running `php artisan key:generate`
6. Run migrations `php artisan migrate:fresh --seed`
7. Run `php artisan config:cache` to cache the configuration, including the updated SQLite path.
8. Run `npm install`
9. Run `npm run build` to build assets
10. Start the local server by executing `php artisan serve`

Now, your Laravel project should be configured with SQLite using an absolute path. If you encounter any issues during the installation, double-check the steps and ensure that the necessary dependencies and configurations are in place.
