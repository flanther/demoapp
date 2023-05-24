## Tabular Data Demo App

**Instructions for setup**

-   Run `composer install`
-   Add a `.env` file to the project.
-   Add `APP_KEY=` string to the .env file.
-   Run `php artisan key:generate`
-   Add `DB_CONNECTION=sqlite` string to the `.env` file.
-   Run `./vendor/bin/phpunit` to run tests.
-   Run `php artisan serve` to serve the application.

**Instructions for usage**

There are 4 routes to try;

-   `/allactors` gives you a json payload of all the actors.
-   `/actors` gives you a html view of all the actors.
-   `/actors/{id}` gives you the actor with a particular id. In this instance there about 200 actors in total, so the id range is 1 - 200.
-   `/ui` gives you the view of all the actors in a tabular format. You can click "Get Some Data" button to get a json payload of the actors and fill into another table that is sortable and searchable with pagination. This is just to demostrate HTML, CSS and JavaScript code.
