# ForceHttps

<p align="center" class="text-center" style="text-align:center;"><a href="https://i9w3b.github.io" target="_blank"><img src="https://i9w3b.github.io/i9w3b.png" width="200"></a></p>
<p align="center" class="text-center" style="text-align:center;">
<a href="https://github.com/i9w3b/force-https/blob/master/LICENSE.md"><img src="https://img.shields.io/github/license/i9w3b/force-https" alt="License"></a>
<a href="https://github.com/i9w3b/force-https"><img src="https://img.shields.io/github/languages/count/i9w3b/force-https" alt="GitHub Language Count"></a>
<a href="https://github.com/i9w3b/force-https"><img src="https://img.shields.io/github/repo-size/i9w3b/force-https" alt="GitHub Repo Size"></a>
<a href="https://github.com/i9w3b/force-https/releases"><img src="https://img.shields.io/github/v/release/i9w3b/force-https" alt="GitHub Release"></a>
<a href="https://github.com/i9w3b/force-https"><img src="https://img.shields.io/github/downloads/i9w3b/force-https/total" alt="Total Downloads"></a>
</p>

Forçar redirecionamento de http para https usando middleware

## Instalação

Execute o seguinte comando:

```bash
$ composer require i9w3b/force-https
```

Se estiver usando uma versão inferior a 5.5 do Laravel, adicione o provedor de serviços em `config/app.php`:

```php
I9W3b\ForceHttps\ForceHttpsServiceProvider::class,
```

##### Opcional

```bash
php artisan vendor:publish --provider="I9W3b\ForceHttps\ForceHttpsServiceProvider"
```

## Como Usar

Para redirecionar todas as rotas `http` para o `https` deverá usar o middleware `https`. e adicionar em seu aquivo .env `FORCE_HTTPS=true`. Valor padrão = true.

Portanto, se `FORCE_HTTPS` estiver definido como `true`, isso força o esquema de URL no Laravel a usar o prefixo HTTPS para todos os links gerados.

## Exemplo

Usando o middleware `https`

```php
Route::group(['middleware' => ['https']], function () {

    Route::get('/', function () {
        return view('welcome');
    });

    /* outras rotas ... */

});
```

## Dúvidas/Sugestões
Encontrando erros ou tiver sugestões de melhorias, acesse: [issues](https://github.com/i9w3b/force-https/issues/new)

## Licença
[MIT](https://github.com/i9w3b/force-https/blob/master/LICENSE.md) © [i9W3b](https://github.com/i9w3b)
