# QAE Dashboard

---

# Qredit Data Server Installation

Requires:

Install Node:

```
curl -sL https://deb.nodesource.com/setup_9.x | sudo -E bash -
sudo apt-get install -y nodejs
```

Install PM2

```
npm install -g pm2
```

Install packages

```
npm install
```

Make DB folder

```
mkdir db
```

Start the program:

```
pm2 start app
```

---

# Laravel Installation:

Server Requirement

The Laravel framework has a few system requirements. Of course, all of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.

However, if you are not using Homestead, you will need to make sure your server meets the following requirements:

    PHP >= 7.1.3
    OpenSSL PHP Extension
    PDO PHP Extension
    Mbstring PHP Extension
    Tokenizer PHP Extension
    XML PHP Extension
    Ctype PHP Extension
    JSON PHP Extension
    BCMath PHP Extension

Installation Steps:

    composer install

    npm install

    php artisan key:generate

Now Need some Laravel Commands

    php artisan serve
    Serves your project

    npm run watch
    Watches your files and compiles your assets on the fly (also auto reloads your browser)

    npm run dev
    Compiles your assets

    npm run prod
    Compiles and prepares your assets for production

---

# Dependencies

Bootstrap

Doc: https://getbootstrap.com
Datatables

Doc: https://datatables.net
Datepicker

Doc: http://amsul.ca/pickadate.js
Cropper

Doc: https://github.com/fengyuanchen/cropper
echarts

Echart Doc
Ladda

Doc: http://lab.hakim.se/ladda
Slider

Doc: https://refreshless.com/nouislider/
Qill Rich text editor

Doc: https://quilljs.com
Sweetalert2

Doc: https://sweetalert2.github.io
TaggingJs

Doc: http://sniperwolf.github.io/taggingJS
Toastr

Doc: https://codeseven.github.io/toastr
perfect-scrollbar

Doc: https://github.com/noraesae/perfect-scrollbar
