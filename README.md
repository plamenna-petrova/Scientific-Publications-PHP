# SCIENTIFIC PUBLICATIONS SYSTEM

## Idea

The project stores information about scientific publications - their title, excerpt and type (article in a magazine, report of a conference or a book) and about the authors of the publications (name, occupation and image). You can search by author name, publication type as well as publication title. The admin panel of the project is generated by Backpack. A responsive HTML template is integrared, as well.

## How to configure the project

- run composer install
- configure virtual host using the APP_URL in the .env file of the project root
- add a new database scientific-publications-php in phpMyAdmin DB menu
- run all migrations with php aritisan migrate in the cmd
- seed the database via the command php artisan db:seed

## The Project

The project has seeds for all database models - the seed can be found in database/seeders/DatabaseSeeder.php file

## Models 

1. Author
   - Id - int
   - Name - string
   - Occupation - longText
   - image - string - nullable
   - Timestamps - created_at and updated_at

2. Publication
   - Id - bigIncrements
   - Title - longText - unique
   - Excerpt - longText
   - Type - string 
   - Timestamps - created_at and updated_at
   
3. User 
   - Id - int
   - Name - string
   - Email - string - unique
   - Email Verified At - timestamp
   - Password - string
   - Remember Token
   - Timestamps - created_at and updated_at
   
## Controllers

The CRUD controllers are to be found in the app/Http/Controllers/Admin folder

- AuthorCrudController
- PublicationCrudController

Their role is to set the CRUD functionality for the models

CRUD is initialized via the command php artisan backpack:crud (publication or author - singular)

Outside Backpack we have also

- AuthorController
- PublicationController
- IndexController

With their help we can list the information of the models using the database in the public part. The PublicationController has an implemented search for the publications by publication title, publication type and authors of a publication. 

## Views

In resources/views we have the following architecture :

- folder index
   - Here is stored the view for the home page - the first page loaded by typing the domain in browser search bar
- folder layouts
  - Here are stored the app layout and all views, related to the implementation of the search logic
- folder error
  - for error pages
- folder vendor
  - for Backpack
  
## Requests

Navigating to the app/Http/Requests directory we can find the corresponding requests for authors and publications

- AuthorRequest
- PublicationRequest

In the requests the validation rules and error messages are defined

## Routes

All public routes are configured in the routes/web.php file

  
