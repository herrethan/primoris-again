A Pico-driven School Website
============================

With theme "Angel", based on Angel Shins design, of Primoris stardom.

Setup is as you would normally a [Pico CMS](https://github.com/picocms/Pico).

0. Clone, then
    ```bash
    $ cd primoris-pico/Pico
    ```
0. Get and run composer

    ```bash
    $ curl -sS https://getcomposer.org/installer | php
    $ php composer.phar install
    ```

0. For local dev ok to use simple php server with `php -S 127.0.0.1:8080`

0. For frontend dev `cd themes/angel` and `npm i` and `grunt watch`

0. For form-mailing support (using mailgun), file uploads (using s3), and pico_edit admin access you'll need to set global envs:

    `MAILGUN_API_KEY`
    `MAILGUN_DOMAIN`
    `PICO_EDIT_SHA1_PASSWORD`
    `AWS_ACCESS_KEY_ID`
    `AWS_SECRET_ACCESS_KEY`
    `AWS_BUCKET_NAME`
    `AWS_BUCKET_PREFIX`
    `AWS_PAGES_DIR`
    `AWS_IMAGES_DIR`

0. You'll need accounts for Mailgun and AWS of course. S3 Storage is really only necessary if this is hosted on an ephemeral file system like Heroku, otherwise all page and image data can be stored on disk.

Tis it!
