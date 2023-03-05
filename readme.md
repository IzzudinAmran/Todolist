1. Clone the repository by running git clone https://github.com/IzzudinAmran/todolist.git in your terminal.
2. Make sure the local environment running PHP 7
3. Create a new .env file by copying the env.example file and renaming it to .env.
4. Edit the .env file and change the DB_DATABASE value to "todolist", DB_USERNAME value to "root", and DB_PASSWORD value to an empty string.
5. Run composer install or composer update to install the project dependencies.
6. Generate a cipher key by running php artisan key:generate.
7. Migrate the database by running php artisan migrate.
8. Finally, run the application using php artisan serve to start the server.
