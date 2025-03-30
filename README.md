Docker para aplicação com PHP, MySQL e PHPMyAdmin

Este projeto utiliza Docker para configurar um ambiente de desenvolvimento com PHP, MySQL e PHPMyAdmin.

Tecnologias:

PHP 8.2 (com Apache)
MySQL
PHPMyAdmin
Docker (usado para containerização)

Pré-requisitos
Certifique-se de que os seguintes softwares estão instalados:

Docker: Link para instalar o Docker

Docker Compose: Link para instalar o Docker Compose

Instalação
Clone este repositório:

git clone https://github.com/seu-usuario/nome-do-repositorio.git
cd nome-do-repositorio

Crie um arquivo .env com as variáveis de ambiente para o banco de dados:

DB_HOST= coloque o host do seu banco, nesse caso use "db"
DB_USER= coloque um nome para o usuário
DB_PASS= defina uma senha que será usada no banco
DB_NAME= defina o nome do banco

Construa e inicie os containers:

docker-compose up -d --build
O Docker Compose irá construir as imagens e iniciar os containers necessários: php_app, mysql_db_test e phpmyadmin.

Acesse sua aplicação:

PHP Application: http://localhost:8000

PHPMyAdmin: http://localhost:8080 (usuario: admin, senha: admin)
