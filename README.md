# Sweet Alert PHP


<a href="https://packagist.org/packages/realrashid/sweet-alert" target="_blank"><img src="https://poser.pugx.org/realrashid/sweet-alert/license.svg" alt="License"></a>
## Instalação

```bash
composer require jhuliocastro/sweet-alert
```


## Utilização
```php
use Alertas\Alert;

Alert::success('Título', 'Mensagem', "Endereço Redirecionar");

Alert::error('Título', 'Mensagem', "Endereço Redirecionar");

Alert::info('Título', 'Mensagem', "Endereço Redirecionar");

Alert::warning('Título', 'Mensagem', "Endereço Redirecionar");

Alert::success('Título', 'Mensagem', "Endereço Redirecionar");

Alert::question('Título', 'Mensagem', 'Endereço Redirecionar (Sim)', 'Endereço Redirecionar (Não)');
```
