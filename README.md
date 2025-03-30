# Docker para Aplicação com PHP, MySQL e PHPMyAdmin

Este projeto utiliza Docker para configurar um ambiente de desenvolvimento com PHP, MySQL e PHPMyAdmin.

## Tecnologias Utilizadas

- **PHP 8.2** (com Apache)
- **MySQL**
- **PHPMyAdmin**
- **Docker** (usado para containerização)

## Pré-requisitos

Certifique-se de que os seguintes softwares estão instalados:

- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Instalação

1. **Clone este repositório:**

   ```sh
   git clone https://github.com/AndreyCavalcante/Docker-para-PHP-e-MySQL.git <nome_repositorio>
   cd <nome_repositorio>
   ```
   - Substitua <nome_repositorio> para o nome do projeto desejado

2. **Crie um arquivo **`` com as variáveis de ambiente para o banco de dados:

   ```env
   DB_HOST=db
   DB_USER=seu_usuario
   DB_PASS=sua_senha
   DB_NAME=seu_banco
   ```

3. **Construa e inicie os containers:**

   ```sh
   docker-compose up -d --build
   ```

   O Docker Compose irá construir as imagens e iniciar os containers necessários:

   - **App** (Aplicação PHP)
   - **mysql\_db** (Banco de dados MySQL)
   - **phpmyadmin** (Interface gráfica para o banco de dados)

## Acessando a Aplicação

- **Aplicação PHP:** [http://localhost:8000](http://localhost:8000)
- **PHPMyAdmin:** [http://localhost:8080](http://localhost:8080)
  - **Usuário:** `user passado no .env`
  - **Senha:** `senha passada no.env`

Caso precise modificar as credenciais, altere o arquivo `.env` antes de iniciar os containers.

---

🚀 Agora seu ambiente está pronto para desenvolvimento!

