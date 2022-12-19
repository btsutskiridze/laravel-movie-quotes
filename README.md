<div style="display:flex; align-items: center">
  <h1 style="position:relative; top: -6px" >Movie Quotes</h1>
</div>

---

This is a application which generates random quote from different movies to users.
The webApp has also admin panel which can be accessed by only the person who has permissions and admin account.
Admin can create, edit, delete movies and quotes.

#

### Table of Contents

-   [Prerequisites](#prerequisites)
-   [Tech Stack](#tech-stack)
-   [Getting Started](#getting-started)
-   [Migrations](#migration)
-   [Development](#development)
-   [Database Design](#database-design-diagram)

#

### Prerequisites

-   *PHP@7.2 and up*
-   _MYSQL@8 and up_
-   _npm@6 and up_
-   _composer@2 and up_

#

### Tech Stack

-   [Laravel@6.x](https://laravel.com/docs/6.x) - back-end framework
-   [Laravel Nova](https://nova.laravel.com/) - flexible Admin Panel as espace "Super Admin"
-   [Laravel Mix](https://laravel-mix.com/) - is a webpack wrapper which makes an ease for a developer to start working on JS files and compile them with such simplicity...
-   [JWT Auth](https://jwt-auth.readthedocs.io/en/develop/) - Authentication system for mobile users
-   [Spatie Translatable](https://github.com/spatie/laravel-translatable) - package for translation

#

### Getting Started

1\. First of all you need to clone repository from github:

```sh
git clone https://github.com/btsutskiridze/laravel-movie-quotes.git
```

2\. Next step requires you to run _composer install_ in order to install all the dependencies.

```sh
composer install
```

3\. after you have installed all the PHP dependencies, it's time to install all the JS dependencies:

```sh
npm install
```

and also:

```sh
npm run dev
```

in order to build your JS/SaaS resources.

4\. Now we need to set our env file. Go to the root of your project and execute this command.

```sh
cp .env.example .env
```

And now you should provide **.env** file all the necessary environment variables:

#

**MYSQL:**

> DB_CONNECTION=mysql

> DB_HOST=127.0.0.1

> DB_PORT=3306

> DB_DATABASE=**\***

> DB_USERNAME=**\***

> DB_PASSWORD=**\***

after setting up **.env** file, execute:

```sh
php artisan config:cache
```

in order to cache environment variables.

4\. Now execute in the root of you project following:

```sh
  php artisan key:generate
```

Which generates auth key.

##### Now, you should be good to go!

#

### Migration

if you've completed getting started section, then migrating database if fairly simple process, just execute:

```sh
php artisan migrate
```

#

### Running Unit tests

Running unit tests also is very simple process, just type in following command:

```sh
composer test
```

#

### Development

You can run Laravel's built-in development server by executing:

```sh
  php artisan serve
```

when working on JS you may run:

```sh
  npm run dev
```

it builds your js files into executable scripts.
If you want to watch files during development, execute instead:

```sh
  npm run watch
```

it will watch JS files and on change it'll rebuild them, so you don't have to manually build them.

#

### Database Design diagram

![Database Design](./readme/movie-quotes-sql-mine.png)
<br />
