# Project Title

Medscriptr Test Project

### Prerequisites


```
PHP 5.6+
Composer
```


## Getting Started
Clone or download the project into your pc workspace

From the commandline, cd into the project directory

Type the following commands and run in sequence,



```
"composer install"
"composer update"
"composer dump-autoload -o"

```


### Database

Create a new database

Create a file named .env at the root directory

Copy the contents of the .env.example file into the newly created .env file

Edit the content of the .env file as follows

```

DB_DATABASE=[your_database_name]
DB_USERNAME=[your_mysql_username]
DB_PASSWORD=[your_mysql_password]


```

Then at your commandline, run the following commands

```
"php artisan migrate"
"php artisan db:seed"

```


then to start up the local server, run the command :
 ``` 
 "php artisan serve" 

 ``` 




### Usage

Once the  Laravel development server started on http://127.0.0.1:8000/, visit the url on your preffered browser,

```
Click on the "Admin" link to access the admin area
```

Login Credentials 

```
Email : admin@medscriptr.com

password : 123456
```

As an admin, you have :

1) Ability to register company staffs with different roles (Administrator, Doctor,
and Nurse)


2) Search and display results any staff, by any of the 4 criteria mentioned above
(first name, last name, email or role) using the quick filter search box.

3) Ability to only view staffs in each respective role using the search box. 

4) Ability to view all created staffs in a tabular responsive format 

5) Ability to view and update each staff’s profile.

6) Ability to delete any of the created staffs.

## Built With

* [Laravel 5.3](https://www.laravel.com/docs/) - The web framework used
* [Bootstrap 3](https://getbootstrap.com) - CSS framework used

## Authors

* **Damilola Edwards** - *Initial work* - [damilolaedwards](https://github.com/damilolaedwards)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

