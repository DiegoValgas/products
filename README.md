<h1>Products</h1>

## Inicializando

Para inicializar os containers utilizados no projeto, execute o comando:

```bash
docker-compose up -d
```

## Encerrando

Os containers podem ser encerrados com:

```bash
docker-compose down
``` 

## Instalando dependências

Ao iniciar o projeto pela primera vez, será necessário instalar o pacote de dependências do projeto utilizando o comando:

```bash
docker-compose exec app composer update
```