
## Deployment

To deploy this project run

```bash
    - Clone/download the project on your local PC

    - Open up your terminal and cd to the project directory

    - Run composer install

    - Start up the laravel server by running php artisan serve

    - Rename .env.example to .env

    - To generate the App key, open the new .env file and run php artisan key:generate command in the terminal:

    - Be sure to keep the database connection as mysql
       e.g: DB_CONNECTION=mysql

    - Rename the database in .env to DB_DATABASE=subscriptions

    - Run php artisan migrate command to migrate all the needed database tables

    - Visit mailtrap.io to setup a free mail smpt account

    - MAIL CONFIGURATION SETTINGS IN .env

        . Set the QUEUE_CONNECTION=database
        . MAIL_MAILER=smtp
        . MAIL_HOST=smpt.mailtrap.io
        . MAIL_PORT=2525
        . MAIL_USERNAME=get this from your mailtrap.io account
        . MAIL_PASSWORD=get this from your mailtrap.io account
        . MAIL_ENCRYPTION=tls
        . MAIL_FROM_ADDRESS="hello@example.com"
        . MAIL_FROM_NAME="${APP_NAME}"

    - Open up the project on your browser (http://localhost:8000) to register new subscribers

    - POSTMAN FOR REST-API

        . Download/run a Postman to test and access the api endpoints
        . Create this get url http://localhost:8000/api/subscribers to see all registered subscribers.

        - To create new post/message broadcasts using Postman
            1. Set a POST url http://localhost:8000/api/posts
            2. In the Header section, set key=Accept and value=application/json respectively in the key/value pairs
            3. In the Body section, select x-www-form-urlencoded radio button
            4. Create the message to be posted and sent to the subscribers by entering:
            Key, Value and the Description pairs. The key colums to enter are "topic" and "post" to correspond with the database columns.

    - If any error appears in the postman terminal when trying to create a post message, simply run these 2 commands in the project console:
        . php artisan config:cache
        . php artisan config:clear

    - Finally, you can run a "php artisan queue:work" command in the project terminal to process all queued/scheduled posts in background.
