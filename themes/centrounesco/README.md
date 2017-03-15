# Tema para la Plataforma de Formación Derechos Humanos

Tema de Wordpress basado en el tema de WooCommerce llamado [Storefront](https://github.com/woocommerce/storefront).

## Instalación

* Instalar [NodeJS](https://nodejs.org/en/)
* Instalar [Grunt](https://gruntjs.com/getting-started)

El siguiente comando instalará grunt para correr en consola:
~~~
npm install -g grunt-cli
~~~

En el caso de Windows es *posible* que además de esto necesite instalar las variables de entorno. Por favor agregar esto si es necesario dentro de las variables de usuario:
~~~
%APPDATA%\npm
~~~

Para instalar el tema
~~~
cd themes/centrounesco
npm install
grunt
~~~

Por favor agregar los estilos CSS al archivo:
> style.scss

Ya que al correr el comando **grunt** generará el archivo:
> style.css

Para mayor información ver la documentación rápida de leer de [Sass](http://sass-lang.com/).