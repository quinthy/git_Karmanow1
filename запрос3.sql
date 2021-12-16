SELECT
  klichka.klichka,
  mast.cvet
FROM klichka
  INNER JOIN mast
    ON klichka.cvet = mast.id_mast
WHERE mast.cvet = 'black'