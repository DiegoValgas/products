<h1 align="center">Products</h1>
<p align="center">Api contendo endpoins para login, cadastro e listagem de produtos.</p>

<!--ts-->
    *[Tenologias utilizadas](#tecnologias)
    *[Containers](#inicializacao)
        *[Inicializar](#inicializacao)
        *[Encerrar](#encerrar)
    *[Primeiros passos](#primeiros_passos)
        *[Instalar dependências](#primeiros_passos)
        *[Rodar migrations](#migrations)
    *[Comandos adicionais](#comandos)
        *[Criar usuário](#comandos)
    *[Endpoints](#endpoints)
        *[Login](#login)
        *[Categorias](#categorias)
        *[Produtos](#produtos)
<!--te-->

<h2 id="tecnologias">Tenologias utilizadas</h2>

- [Docker](https://www.docker.com/)
- [Laravel](https://laravel.com/)
- [Mysql](https://www.mysql.com/)

<h2 id="inicializacao">Containers</h2>
<p>Para inicializar os containers utilizados no projeto, execute o comando:</p>

```bash
docker-compose up -d
```

<p id="encerrar">Os containers podem ser encerrados com:</p>

```bash
docker-compose down
``` 

<h2 id="primeiros_passos">Primeiros passos</h2>
<p>Primeiro, será necessário instalar as dependências do framework:</p>

```bash
docker-compose exec app composer update
```

<p id="migrations">Agora vamos rodar as migrations para criar as tabelas no banco de dados:</p>

```bash
docker-compose exec app php artisan migrate
```

<h2 id="comandos">Comandos adicionais</h2>
<p>Para criar um usuário:</p>

```bash
docker-compose exec app php artisan usuario
```

<h2 id="endpoints">Endpoints</h2>

<h3 id="login">Login</h3>

`POST /api/login`

```bash
 {
    "email": "email@exemplo.com",
    "password" : "senha-de-acesso"
 }
```

<h3 id="categorias">Categorias</h3>

<p>Listagem de categorias</p>

`GET /api/categories`

<p>Criar uma categoria</p>

`POST /api/categories`

```bash
 {
    "name": "Nome da categoria"
 }
```

<p>Atualizar uma categoria</p>

`PUT /api/categories/{id-da-categoria}`

```bash
 {
    "name": "Nome da categoria"
 }
```

<p>Excluir uma categoria</p>

`DELETE /api/categories/{id-da-categoria}`

<h3 id="produtos">Produtos</h3>

<p>Listagem de produtos</p>

`GET /api/products`

<p>Criar um produto</p>

`POST /api/products`

```bash
 {
    "category_id": 1,
    "code": 12345678,
    "name": "Nome do produto",
    "price": 100.00,
    "price_promotion": 90.00,
    "tax": 10.00,
    "promotion": 0,
    "active": 1,
 }
```

<p>Atualizar um produto</p>

`PUT /api/products/{id-do-produto}`

```bash
 {
    "category_id": 1,
    "code": 12345678,
    "name": "Nome do produto",
    "price": 100.00,
    "price_promotion": 90.00,
    "tax": 10.00,
    "promotion": 0,
    "active": 1,
 }
```

<p>Excluir um produto</p>

`DELETE /api/products/{id-do-produto}`