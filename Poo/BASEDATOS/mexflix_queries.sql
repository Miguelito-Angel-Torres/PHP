-- INSERT INTO movieseries SET imdb_id = "tt3749900",title="Gothan",genres="Action, Crime, Drama",premiere='2014',mose_statu=3;
UPDATE movieseries SET author = "Bruno Heller",actors="Ben McKenzie, Jada Pinkett Smith, Donal Logue",
country ="USA",poster="https://m.media-amazon.com/images/M/MV5BMmUyOTdjMGEtN2RmNC00YzUwLTg5ZDEtMTI1NWE4ZjcwN2ViXkEyXkFqcGdeQXVyNTA3MTU2MjE@._V1_SX300.jpg",
trailer='https://www.youtube.com/watch?v=xduLX21Mjis',rating="8.0",
category="Serie",
plot="In crime ridden Gotham City, Thomas and Martha Wayne are murdered before young Bruce Wayne's eyes. Although Gotham City Police Department detectives, James Gordon, and his cynical partner, Harvey Bullock, seem to solace's the case quickly, things are not so simple. Inspired by Bruce's traumatized desire for justice, Gordon vows to find it amid Gotham's corruption. Thus begins Gordon's lonely quest that would set him against his own comrades and the underworld with their own deadly rivalries and mysteries. In the coming wars, innocence will be lost and compromises will be made as some criminals will fall as casualties while others will rise as super villains. All the while, young Bruce observes this war with a growing obsession that would one day drive him to seek his own
 justice against the evil of Gotham as The Batman." where imdb_id = "tt3749900";

DELETE FROM movieseries WHERE imdb_id = "tt3749900";

SELECT * FROM movieseries;
SELECT COUNT(*) FROM movieseries;
SELECT * FROM movieseries WHERE category = "Serie";
SELECT title,country FROM movieseries WHERE category = "Serie" order by country;
SELECT title,category,country,genres,premiere,mose_statu FROM movieseries WHERE category = "Movie" and country='USA' order by country;

SELECT title,category,country,genres,premiere,mose_statu FROM movieseries WHERE mose_statu = 1 or mose_statu=2 order by country;

-- Consultas Multiples:
SELECT ms.title,ms.country,ms.genres,ms.premiere,s.statu FROM movieseries ms join statu s
ON (ms.mose_statu = s.status_id) ORDER BY ms.premiere DESC;

SELECT ms.title,ms.country,ms.genres,ms.premiere,s.statu FROM movieseries ms join statu s
ON (ms.mose_statu = s.status_id) WHERE s.statu = 'Canceled' OR s.statu = 'Coming Soon'
ORDER BY ms.premiere DESC;

SELECT ms.title,ms.country,ms.genres,ms.premiere,ms.category,s.statu FROM movieseries ms join statu s
ON (ms.mose_statu = s.status_id) WHERE (s.statu = 'Release' OR s.statu = 'Finished' OR s.statu = 'In Issue')
AND ms.category = "Serie"
ORDER BY ms.premiere DESC;

-- Busqueda(Consulta FullText Key)
-- MATCH() : Unir las concidencia,osea que cambio queremos buscar
-- AGAINST('Aca va el valor que vas a buscar' IN BOOLEAN MODE):
SELECT ms.imdb_id,ms.title,ms.plot,ms.author,ms.actors,ms.country,ms.premiere,
ms.poster,ms.trailer,ms.rating,ms.genres,s.statu,ms.category FROM movieseries MS join statu s
    on(ms.mose_statu = s.status_id)
    WHERE MATCH(title,author,actors,genres)
    AGAINST('stallone'IN BOOLEAN MODE)
    ORDER BY ms.premiere DESC;

/*Integridad Referencial: Trata que la integridad de los datos no se corrompa
-- SET NULL
--NO ACTION
--CASCADA
--RESTRICT
*/
SELECT COUNT(*) FROM movieseries WHERE mose_statu = 1;
INSERT INTO statu set statu = 'Otro Status';
DELETE FROM movieseries WHERE mose_statu = 1;
DELETE FROM statu WHERE status_id = 6;

UPDATE statu set status_id = 7, statu = "Estrenada" WHERE status_id = 2;

/*SELECT ms.title,ms.mose_statu,s.status_id,.statu FROM movieseries ms join statu s
ON (ms.mose_statu = s.status_id)*/ ;