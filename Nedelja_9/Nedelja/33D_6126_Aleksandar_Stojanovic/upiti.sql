/* Zadatak 1*/

/* Dodavanje proizvoda*/

INSERT INTO `proizvodi` (`barkod`, `naziv`, `cena`) VALUES ('123', 'krastavac', '100'), ('456', 'paprika', '129'), ('098', 'jabuka', '55'), ('918', 'kruska', '99');

/* Dodavanje prodaja */

INSERT INTO `prodaja` (`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES (NULL, '98', '10', '60', '2021-05-01 16:25:55'), (NULL, '98', '20', '70', '2021-06-16 16:25:55'), (NULL, '98', '30', '80', '2021-06-17 16:25:55'), (NULL, '123', '10', '90', '2021-05-01 16:25:55'), (NULL, '123', '20', '80', '2021-06-16 16:25:55'), (NULL, '123', '30', '100', '2021-06-17 16:25:55'), (NULL, '918', '20', '90', '2021-05-01 16:25:55'), (NULL, '918', '30', '80', '2021-06-17 16:25:55'), (NULL, '456', '10', '110', '2021-05-01 16:25:55'), (NULL, '456', '10', '120', '2021-06-16 16:25:55');

/*Zadatak 2 - upiti po redu*/

- INSERT INTO `proizvodi` (`barkod`, `naziv`, `cena`) VALUES ('789', 'paradajz', '200'), ('776', 'crni luk', '50'), ('761', 'beli luk', '80')

- INSERT INTO `prodaja`(`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES (NULL,'789','50','200','2021-06-16')

- INSERT INTO `prodaja`(`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES (NULL,'789','20','200','2021-06-17')

- INSERT INTO `prodaja`(`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES (NULL,'789','40','250','2021-06-17')

- INSERT INTO `prodaja`(`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES (NULL,'789','10','220','2021-06-17')

- INSERT INTO `prodaja`(`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES (NULL,'776','30','50','2021-05-01')

- INSERT INTO `prodaja`(`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES (NULL,'761','30','50','2021-05-01'), (NULL,'761','10','220','2021-06-17'), (NULL,'761','50','200','2021-06-16')

- DELETE FROM `prodaja` WHERE `datum`='2021-06-16' AND `barkod`='789' /* brise svu prodaju paradajza za datum 16.6 */


- UPDATE `prodaja` SET `cena`=(`cena`+(`cena`*0.1)) WHERE `datum`='2021-06-17' /* svim prodajama za datum 17.6 dodaje na cenu 10%
*/

- SELECT `barkod` FROM `prodaja` WHERE `datum`='2021-05-01' /* prikazuje barkodove svih proizvoda koji su imali prodaju 1.5.
*/

- SELECT DISTINCT(`barkod`) FROM `prodaja` WHERE `datum`='2021-05-01' /* prikazuje samo razlicite barkodove koji su imali prodaju 1.5 */

- SELECT `datum`,SUM(`kolicina`) AS ukupna_kolicina FROM `prodaja` GROUP BY `datum` /* prikazuje ukupnu kolicinu prodatih proizvoda po datumima, tako sto prikazuje dve kolone:  datum,  ukupna_kolicina */

- SELECT `naziv` AS proizvod, SUM(`kolicina`) AS ukupna_kolicina FROM `prodaja` JOIN `proizvodi` ON prodaja.barkod=proizvodi.barkod GROUP BY `naziv` /* prikazuje ukupnu kolicinu prodaje po proizvodu, tako sto prikazuje dve kolone:  proizvod,  ukupna_kolicina */˛

- SELECT `naziv` AS proizvod, `datum`, SUM(`kolicina`) as ukupno FROM `prodaja` JOIN `proizvodi` ON prodaja.barkod=proizvodi.barkod group by `naziv`, `datum` /* prikazuje ukupnu kolicinu prodaje po proizvodu i datumu, tako sto prikazuje tri kolone:  proizvod,  datum, ukupna_kolicina. 
*/

