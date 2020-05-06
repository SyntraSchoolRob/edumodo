Installation Project Edumodo 
--

Step 1. git clone https://github.com/SyntraSchoolRob/edumodo.git

Step2. be sure to go to the edumodo directory in your terminal (cd .../www/edumodo)

Step3. composer install

Step4. Create database with InnoDb engine: dbedumodo

Step5. Open your editor and change .env file  (db_database=dbedumodo, db_username, db_password)

// later integration Step6. Stripe: stripe_key=your public key, stripe_secret=your private key

Step7. php artisan key:generate

Step 8. php artisan migrate

Step 9. php artisan db:seed

Step 10. npm run dev (laravelmix)

Users
--
admin: 
e-mail: hi@hello.us
password: 12345678

user:
e-mail: user@edumodo.com
password: 12345678


You're know ready to explore 
--

