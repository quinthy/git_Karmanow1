SELECT
  pizo.priz
FROM klichka
  INNER JOIN trener
    ON trener.klichka_jovotnogo = klichka.id_klichka
  INNER JOIN jivotnoe
    ON jivotnoe.klichka = klichka.id_klichka
  INNER JOIN pizo
    ON jivotnoe.prizi = pizo.id_prizi
WHERE pizo.priz = 1