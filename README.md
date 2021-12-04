## Projeto sistema administrativo da plataforma E-Diaristas

Desenvolvido na imersão Multi Stack da TreinaWeb

### Instalação

#### Clonar o repositório

```
git clone https://github.com/rodrigosoares67/ediaristas-admin-laravel.git
```

#### Instalar as dependências

```
composer install
```

Ou em ambiente de desenvolvimento:

```
composer update
```

#### Criar o arquivo de configurações de ambiente

Copiar o arquivo de exemplo `.env.example` para `.env` na raiz do projeto
configurar os detalhes da aplicação e conexão com o banco de dados.

#### Criar a estrutura no banco de dados

```
php artisan migrate
```

#### Criar o usuário admin

```
php artisan db:seed
```

Usuário criado admin@admin.com  
Senha: 123123123

#### Iniciar o servidor de desenvolvimento

```
php artisan serve
```
