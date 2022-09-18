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
  ) AS maior_50_anos 
FROM 
  usuario u 
  JOIN info i ON u.cpf = i.cpf 
WHERE 
  i.genero = 'M';
