<h1>Products</h1>

Api para cadastro de produtos.

## Inicializando e Encerrando Containers

Para inicializar os containers utilizados no projeto, execute o comando:

```bash
docker-compose up -d
```

Os containers podem ser encerrados com:

```bash
docker-compose down
``` 

## Primeiros passos

Primeiro, será necessário instalar as dependências do framework:

```bash
docker-compose exec app composer update
```

Agora vamos rodar as migrations para criar as tabelas no banco de dados:

```bash
docker-compose exec app php artisan migrate
```

## Comandos adicionais

Para criar um usuário:

```bash
docker-compose exec app php artisan usuario
```