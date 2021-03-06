# PHP-MVC SQLite CRUD

Projeto simples de CRUD(Create, Read, Update, Delete) em [PHP](https://php.net) usando o [Mini3](https://github.com/panique/mini3), [Twitter Boostrap 4](https://getbootstrap.com) e o template [Spur](https://hackerthemes.com/bootstrap-templates/spur/) com o banco de dados em [SQLite3](https://www.sqlite.org).

## Pré-requisitos

- Nginx ou Apache
- PHP
- Composer
- Fé

## Instalação

- Descompacte ou clone este repositório no webroot do seu servidor web.
- ~~Altere e os arquivos `app/config/auth.sample.php` e `app/config/email.sample.php` para `app/config/auth.php` e `app/config/email.php` respectivamente.~~
- Rode o comando `composer install` no mesmo diretório onde se encontra o arquivo `composer.json`
- Caso use Gmail(para enviar e-mails através do seu site), visite o site https://accounts.google.com/DisplayUnlockCaptcha para desbloquear sua conta de e-mail.
- Visite: https://site.com/admin/instalar
- Reze.

## Nginx

Sugestão de config do Nginx:

```
server {
    listen 80;
    server_name localhost;
    error_log  /var/log/nginx/error.log;
    access_log /var/log/nginx/access.log;
    root /var/www/public;

    location / {
    	index index.php;
        try_files /$uri /$uri/ /index.php?url=$uri&$args;
    }

    location ~ \.php$ {
        try_files $uri =404;
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass php:9000;
        fastcgi_index index.php;
        include fastcgi_params;
    }
}
```

## Apache

Em breve.

## Demo

- [http://mvc.lucasbrum.net](http://mvc.lucasbrum.net)

## Créditos

- [Mini3](https://github.com/panique/mini3)
- [Twitter Boostrap 4](https://getbootstrap.com)
- [Spur](https://hackerthemes.com/bootstrap-templates/spur/)
- [Composer](https://getcomposer.org)
- [PHPMailer](https://packagist.org/packages/phpmailer/phpmailer)
- [Monolog](https://packagist.org/packages/monolog/monolog)

## Contribuindo

- Colaboradores são bem vindos(as)!

## Contato

- lucas@archlinux.com.br

## Ajude

Doe qualquer valor através do <a href="https://pag.ae/bfxkQW"><img src="https://img.shields.io/badge/pagseguro-green"></a> ou <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=DWHJL387XNW96&source=url"><img src="https://img.shields.io/badge/paypal-blue"></a>

## ScreenShots

![Screenshot1][screenshot1] 

![Screenshot2][screenshot2]

[screenshot1]: https://gitlab.com/sistematico/php-mvc-sqlite-crud/raw/master/mvc1.png "ScreenShot #1"
[screenshot2]: https://gitlab.com/sistematico/php-mvc-sqlite-crud/raw/master/mvc2.png "ScreenShot #2"