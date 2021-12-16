SELECT
  trener.fam,
  trener.ima,
  trener.otch,
  trener.data_rogdenia
FROM jivotnoe
  INNER JOIN klichka
    ON jivotnoe.klichka = klichka.id_klichka
  INNER JOIN mast
    ON jivotnoe.mast = mast.id_mast
  INNER JOIN pizo
    ON jivotnoe.prizi = pizo.id_prizi
  INNER JOIN sor
    ON jivotnoe.nal_rodoslovnoi = sor.id_sor
  INNER JOIN trener
    ON trener.klichka_jovotnogo = klichka.id_klichka
WHERE trener.data_rogdenia = '02.12.2021'