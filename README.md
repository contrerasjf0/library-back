# Library-back

### Requirements

 >* PHP >= 7.1
 >* MariaDB
 >* Composer
 >* Node >= 6.9
 >* Yarn 0.21.0

### Steps to install

>* git clone git@github.com:contrerasjf0/library-back.git
>* composer install
>* Create DB with the name `library`
>* rename file the `./.env.example` to `./.env`
>* Change properties in the file  `./.env`
 >>* DB_HOST=127.0.0.1 -> DB_HOST=<Your IP>
 >>* DB_PORT=3306 -> DB_PORT=<Your port>
 >>* DB_DATABASE=homestead -> DB_DATABASE=library
 >>* DB_USERNAME=homestead -> DB_USERNAME=< Your user DB>
 >>* DB_PASSWORD=secret -> DB_PASSWORD=<Your Password>
>* Run the command at the root of the project `artisan migrate --seed`
>* Update the file `./resources/assets/js/config.js` the property url `'http://127.0.0.1/app/'` by `'http://<your IP or the name of your host name>/app/'`
>* Run the command at the root of the project `yarn install`
    >>* If you are in windows it is likely that an error of symbolic enlases (`--no-bin-links`) appears 
    >>* Then run `npm install --no-bin-links`
    >>* Even if the error appears `npm rebuild node-sass --no-bin-links`
>* Run the command at the root of the project `yarn run dev`

### Note

 1. Es preferible instalarlo en una VM con Homestead, por que fue desarrollado en ese entorno.
 2. We did not cover the points to change the borrowed status with the modal, validation