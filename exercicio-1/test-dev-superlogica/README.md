
# Exercicio 1

A intenção deste exercicio é demonstrar as habilidades de PHP, desenvolvendo um formulário.

Como não há restrição de framework, para este caso, foi utilizado o Laravel como base para facilitar o desenvolvimento de forma geral.



## Autor

- [@ulcas](https://www.github.com/ulcas)


## 🔗 Links
[![linkedin](https://img.shields.io/badge/linkedin-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/ulcas/)

## Stack utilizada

**PHP**

**Laravel**

**MySQL**


## Instalação

Para utilizar o projeto é necessário ter instalado:

Webserver [PHP](https://www.php.net/) com [Apache](https://httpd.apache.org/) ou [ngix](https://nginx.org/en/docs/) (a utilização de programas como o [XAMPP](https://www.apachefriends.org/pt_br/index.html) também são bem-vindas!).

[MySQL](https://www.mysql.com/)

[Composer](https://getcomposer.org/)

## Rodando localmente

Para executar o projeto siga o passo-a-passo

- 1 - Clone o projeto
```bash
  git clone https://github.com/ulcas/dev-superlogica.git
```
- 2 - Instale as dependencias
```bash
  composer install
```
- 3 - Banco de dados
  - Crie uma base no banco de dados com o nome de `exercicio1` 
- 4 - .ENV
  - Acesse o diretório do exercicio, copie o arquivo `.env.example` altere as informações de acesso ao banco, se necessário.
    ```bash
      cd exercicio-1/test-dev-superlogica
      cp .env.example .env
    ```
- 5 - Execute as migrations (criação das tabelas)
  - Acesse o diretório do exercicio e execute os comando para rodar as migrations
    ```bash
      cd exercicio-1/test-dev-superlogica
      php artisan migrate
    ```
- 5 - Subindo o projeto para um servidor local
  - No diretório do exercicio, execute o comando para subir um servidor PHP local e assim navegar pelo formulário.
      ```bash
      cd exercicio-1/test-dev-superlogica
      php artisan serve
    ```


## FAQ

#### Por que Laravel foi o framework escolhido para este exercicio?

Utilizei o Laravel pela facilidade de implementação e escalabilidade.
É extremamente simples subir um servidor com o Laravel,
isso poupa tempo de desenvolvimento e ajuda na praticidade de execução do exercicio.

Além disso, o Laravel conta com ferramentas extremamente poderosas e eficientes
como o Phinx para migrations e o Eloquent para o banco de dados.

## Documentação

[PHP](https://www.php.net/manual/pt_BR/)

[Laravel](https://laravel.com/docs/9.x/)

[Composer](https://getcomposer.org/doc/o)

[Laravel PT-BR - Validator](http://laravellegends.github.io/pt-br-validator/)
