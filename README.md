
## Deployment

To deploy this project run

```bash
    - Clone/download the project on your local pc

    - open up your terminal and cd to the project directory

    - run composer install

    - start up the laravel server by running php artisan serve

    - rename .env.example to .env

    - open the new .env file

    - To generate the App key in the (.env) file,
    simply type the following command in the terminal:
    php artisan key:generate

    - Be sure to keep the DB_CONNECTION as mysql
       e.g: DB_CONNECTION=mysql

    - Rename the database in .env to DB_DATABASE=subscriptions

    - Run php artisan migrate command to migrate the
    database tables

    - Visit mailtrap.io to setup a free mail smpt account

    MAIL CONFIGURATION SETTINGS IN .env
    - Set the QUEUE_CONNECTION=database
    - MAIL_MAILER=smtp
    - MAIL_HOST=smpt.mailtrap.io
    - MAIL_PORT=2525
    - MAIL_USERNAME=get this from your mailtrap.io account
    - MAIL_PASSWORD=get this from your mailtrap.io account
    - MAIL_ENCRYPTION=tls
    - MAIL_FROM_ADDRESS="hello@example.com"
    - MAIL_FROM_NAME="${APP_NAME}"

    - Go to the homepage to register your subscribers

    POSTMAN FOR REST-API
    - Download and run a Postman to test and access the api endpoints

    On Postman;
    - Create this get url http://localhost:8000/api/subscribers to see
     all subscribers created.
    - Create new post/message broadcasts using Postman
      1. Set a POST url http://localhost:8000/api/posts
      2. In the Header section, set key=Accept and value=application/json respectively in the key/value pairs
      3. In the Body section, select x-www-form-urlencoded radio button
      4. Create the message to be posted and sent to the subscribers by entering:
       Key, Value and the Description pairs. The key colums to enter are topic and post.

    If an error appears in the postman terminal when trying to create a post,
    simpoly run these 2 commands in the project console terminal:
    php artisan config:cache
    php artisan config:clear

    - Run a "php artisan queue:work" command in the project terminal to send the queued/scheduled posts in background.
