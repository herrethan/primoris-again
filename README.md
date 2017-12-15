A Pico-driven School Website
============================

With theme "Angel", based on Angel Shins design, of Primoris stardom.

Setup is as you would normally a [Pico CMS](https://github.com/picocms/Pico).

0. Get and run composer

    ```bash
    $ curl -sS https://getcomposer.org/installer | php
    $ php composer.phar install
    ```

0. For local dev ok to use simple php server with `php -S 127.0.0.1:8080`

0. For form-mailing support (using mailgun) and pico_edit admin access you'll need to set global envs:

    `MAILGUN_API_KEY`
    `MAILGUN_DOMAIN`
    `PICO_EDIT_SHA1_PASSWORD`

Tis it!
