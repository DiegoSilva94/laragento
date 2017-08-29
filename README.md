# Laragento


Uma forma de integrar o Laravel com magento de forma simples [Laravel 5](http://laravel.com/)

## Documentation

* [Instalação](#instalacao)
* [Começando](#comecando)
* [Ajuda](#ajuda)
* [Licença](#licenca)


## Instalação

```
composer require dsilva94/laragento
```
ou adicionar no composer.json para o caso de dev-master

```json
    "require": {
        "dsilva94/laragento": "dev-master"
    }
```
  
Agora, adicione o LaragentoServideProvider a config de `providers` array localizado no `config/app.php`.

```php
<?php

'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Foundation\Providers\ArtisanServiceProvider::class,
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
	
        ...
        
        Laragento\ServiceProvider\LaragentoServiceProvider::class,
        
        ...

],
?>
```

E no final do arquivo `config/app.php` adicione `'Magento'    => Laragento\Facade\LaragentoFacade::class` na opção  `aliases` array:

```php
<?php

'aliases' => [

    'App'       => Illuminate\Support\Facades\App::class,
    'Artisan'   => Illuminate\Support\Facades\Artisan::class,
    ...
    'Magento'   => Laragento\Facade\LaragentoFacade::class,

],
?>
```

Agora execute o vendor no artisan
```
php artisan vendor:publish --provider="Laragento\ServiceProvider\LaragentoServiceProvider"
```

## Começando

Para começar você precisara configurar os dados de acesso, você poderá fazer isso pelas variaveis de ambiente `MAGENTO_PATH`, `MAGENTO_USER` e `MAGENTO_KEY` no seu anquivo de variaveis de ambiente ou configurar no arquivo `config/laragento.php` 

```php
<?php
return [
    'connection' => [
        'path' => env('MAGENTO_PATH', 'http://domainname.tld/shop-folder/'),
        'user' => env('MAGENTO_USER', 'username'),
        'key' => env('MAGENTO_KEY', 'xxxxxxxxxxxxxxxxxxx')
    ],
    ...
]
```

Apos a instalação e a configuração está seria uma chamada simples:


```php
<?php
    Magento::order()->getInfo($orderIncrementId);
?>
```


## Ajuda

Please submit all issues and questions using GitHub issues and I will try to help you.

## Licença

*Laragento* software livre distribuído sob os termos do MIT license.
