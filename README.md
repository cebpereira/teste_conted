
![Logo conted.tech](public/img/logo_teste.png)

---

Construção de sistema web como parte do teste técnico para a vaga de Programador PHP júnior.

---

#### Requisitos:
* Docker <a url="https://icons8.com/icon/22813/docker">
* Git
* Apache
* MySQL
* PhpMyAdmin
* Laravel
* Bootstrap

---

#### Dependências Composer:
* php: ^8.2
* guzzlehttp/guzzle: ^7.2
* laravel/framework: ^10.10
* laravel/sanctum: ^3.2
* laravel/tinker: ^2.8
* laravel/ui: ^4.2
* twbs/bootstrap: 5.3.2
* yajra/laravel-datatables-oracle: ^10.0

---

#### Dependências Composer-dev:
* fakerphp/faker: ^1.9.1
* laravel/pint: ^1.0
* laravel/sail: ^1.18
* mockery/mockery: ^1.4.4
* nunomaduro/collision: ^7.0
* phpunit/phpunit: ^10.1
* spatie/laravel-ignition": ^2.0
* williamjss/layers: ^1.3

---

### Screenshots


<div align="center">
<a href="https://imgbox.com/9h8RfHkt" target="_blank"><img src="https://thumbs2.imgbox.com/4a/e4/9h8RfHkt_t.jpg" alt="image host"/></a>
<a href="https://imgbox.com/jwDxIncl" target="_blank"><img src="https://thumbs2.imgbox.com/62/8d/jwDxIncl_t.jpg" alt="image host"/></a> 
<a href="https://imgbox.com/TLn2uHAz" target="_blank"><img src="https://thumbs2.imgbox.com/1d/f7/TLn2uHAz_t.jpg" alt="image host"/></a>
</div>



#### Configuração e execução do projeto
* Clonar o repositório atual para sua máquina local:

    `git clone https://github.com/cebpereira/teste_conted`

* Navegar para a pasta do projeto:

    `cd teste_conted`

* Copiar e configurar o .env:

    `cp .env.example .env`

* Executar o comando abaixo no terminal:

    `make setup`

* Aguarde a execução do comando terminar, em caso de sucesso, os containers estarão ativos e o projeto estará rodando via localhost nas seguintes portas:
    * 8080 -> PhpMyAdmin
    * 3306 -> MySQL
    * 80 -> Apache

* Para gerar a app_key:
    * No terminal de comando execute `make file`
 
* A rota inicial do projeto é a localhost/home

---

#### Observações

- Foram adicionadas seeders para popular o banco de dados, atualmente estão sendo inseridos 50 registros únicos, caso não queira o banco populado, comentar o comando responsável em database/seeder/DatabaseSeeder.php
  
- Caso surja o erro:
    > The stream or file "/var/www/html/test-content/storage/logs/laravel.log" could not be opened in append mode: Failed to open stream: Permission denied The exception occurred while attempting to log: The stream or file "/var/www/html/test-content/storage/logs/laravel.log"\
    * utilize o comando `sudo chmod o+w ./storage/ -R` no terminal para fornecer as permissões necessárias.

- Caso surja o erro:
    > ERROR: The Compose file './docker-compose.yml' is invalid because: 
    > Unsupported config option for services: 'phpmyadmin'
    > Unsupported config option for networks: 'teste-conted-networ
    * ao utilizar o comando `make setup`, no arquivo `Makefile` altere os comandos de `docker-compose` para `docker compose`, isso deve resolver o erro.
 
> [!NOTE]
> Em caso de sugestões, correções ou dúvidas:
> [LinkedIn](https://www.linkedin.com/in/cebpereira/),
> [Instagram](https://www.instagram.com/c_elandro/)
> ou pelo email c.elandro.bp@gmail.com
