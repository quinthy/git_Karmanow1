SELECT
  klichka.klichka,
  trener.fam,
  trener.ima,
  trener.otch,
  jivotnoe.prizi
FROM rod,
     jivotnoe
       INNER JOIN klichka
         ON jivotnoe.klichka = klichka.id_klichka
       INNER JOIN pizo
         ON jivotnoe.prizi = pizo.id_prizi
       INNER JOIN mast
         ON jivotnoe.mast = mast.id_mast
       INNER JOIN sor
         ON jivotnoe.nal_rodoslovnoi = sor.id_sor
       INNER JOIN trener
         ON trener.klichka_jovotnogo = klichka.id_klichka
WHERE jivotnoe.prizi = 1