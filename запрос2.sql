SELECT
  trener.fam,
  trener.ima,
  trener.otch,
  klichka.klichka
FROM trener
  INNER JOIN klichka
    ON trener.klichka_jovotnogo = klichka.id_klichka
  INNER JOIN jivotnoe
    ON jivotnoe.klichka = klichka.id_klichka
WHERE klichka.klichka = 'ivan'