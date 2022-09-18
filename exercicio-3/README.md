
# Exercicio 3

O objetivo deste exercicio é
desafiar as minhas habilidades com a linguagem SQL
e a manipulação de queries.
## Autor

- [@ulcas](https://www.github.com/ulcas)


## 🔗 Links
[![linkedin](https://img.shields.io/badge/linkedin-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/ulcas/)

## Stack utilizada

**MySQL**


## Instalação

Para utilizar o projeto é necessário ter instalado:

[MySQL](https://www.mysql.com/)

Algum administrador/manipulador de SQL, tais como:
[DBeaver](https://dbeaver.io/download/),
[phpMyAdmin](https://www.phpmyadmin.net/).

## Rodando localmente

Para executar o projeto siga o passo-a-passo

- 1 - Clone o projeto
```bash
  git clone https://github.com/ulcas/dev-superlogica.git
```
- 2 - Acesse o diretório do exercicio
```bash
  cd dev-superlogica/exercicio-3/
```
- 3 - **DDL**
    - Execute as queries do script DDL.sql para criação das tabelas
    ```bash
        cd dev-superlogica/exercicio-3/
    ```

    ```sql
        CREATE TABLE usuario (
            id int NOT NULL AUTO_INCREMENT,
            cpf varchar(255),
            nome varchar(255),
            PRIMARY KEY (id)
        );

        CREATE TABLE info (
            id int NOT NULL AUTO_INCREMENT,
            cpf varchar(255),
            genero char(1),
            ano_nascimento int(4),
            PRIMARY KEY (id)
        );
    ```
- 4 - **DML**
    - Execute as queries no script DML.sql para o insert dos dados e para exibir o resultado esperado.
    ```bash
        cd dev-superlogica/exercicio-3/
    ```

    ```sql
        INSERT INTO usuario (cpf, nome) 
        VALUES 
            (16798125050, 'Luke Skywalker'), 
            (59875804045, 'Bruce Wayne'), 
            (04707649025, 'Diane Prince'), 
            (21142450040, 'Bruce Banner'), 
            (83257946074, 'Harley Quinn'), 
            (07583509025, 'Peter Parker');

        INSERT INTO info (cpf, genero, ano_nascimento) 
        VALUES 
            (16798125050, 'M', 1976), 
            (59875804045, 'M', 1960), 
            (04707649025, 'F', 1988), 
            (21142450040, 'M', 1954), 
            (83257946074, 'F', 1970), 
            (07583509025, 'M', 1972);
    ```

    ```sql
        SELECT 
        (
            Concat(u.nome, ' - ', i.genero)
        ) AS 'usuário', 
        (
            CASE(
            Year(
                Curdate()
            ) - i.ano_nascimento > 50
            ) WHEN true THEN 'SIM' ELSE 'NAO' end
        ) AS 'maior_50_anos' 
        FROM 
        usuario u 
        JOIN info i ON u.cpf = i.cpf 
        WHERE 
        i.genero = 'M';
    ```
## Documentação

[MySQL](https://dev.mysql.com/doc/refman/8.0/en/sql-statements.html)

[DDL](https://dev.mysql.com/doc/refman/8.0/en/sql-data-definition-statements.html)

[DML](https://dev.mysql.com/doc/refman/8.0/en/sql-data-manipulation-statements.html)