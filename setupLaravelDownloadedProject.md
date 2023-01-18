How to run Laravel project downloaded from GitHub | Google drive

1. Download the project
2. Run composer update
3. Check if it have env.  if not. Probably have a .env(Example)
   the file .env must be with no key: so you can generate a new one using the command 
4. php artisan key:generate
5. Create the Database
6. Run php artisan migrate
7. Run php artisan serve

