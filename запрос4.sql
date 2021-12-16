SELECT
  klichka.klichka,
  sor.rod
FROM klichka
  INNER JOIN sor
    ON klichka.rod = sor.id_sor
WHERE sor.rod = 'da'