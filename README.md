# Sweet Alert PHP


<a href="https://packagist.org/packages/realrashid/sweet-alert" target="_blank"><img src="https://poser.pugx.org/realrashid/sweet-alert/license.svg" alt="License"></a>
## Instalação

```bash
composer require jhuliocastro/sweet-alert
```


## Utilização
```php
#IMPORTE A CLASSE
use Alertas\Alert;

#MODO DE SUCESSO
Alert::success('Título', 'Mensagem', "Ação de Botão");

#MODO DE ERRO
Alert::error('Título', 'Mensagem', "Ação de Botão");

#MODO DE INFORMAÇÕES
Alert::info('Título', 'Mensagem', "Ação de Botão");

#MODO DE ATENÇÃO
Alert::warning('Título', 'Mensagem', "Ação de Botão");

#MODO DE PERGUNTA
Alert::question('Título', 'Mensagem', 'Ação de Botão (Sim)', 'Ação de Botão (Não)');

#NOVO MODO DE CRON
Alert::cron("Tipo", "Título", "Mensagem", "Ação de Botão", "Tempo para redirecionar");

O MODO CRON REDIRECIONA O USUÁRIO AUTOMATICAMENTE DE ACORDO COM O TEMPO DEFINIDO!
ELE ACEITA OS TIPOS "success", "info", "error" e "warning"

#MODO DE INPUT
Alert::input("Título", "TIPO DO INPUT", "Ação de Botão");

O INPUT ACEITA OS TIPOS 'text', 'password', 'email'
```
```

```