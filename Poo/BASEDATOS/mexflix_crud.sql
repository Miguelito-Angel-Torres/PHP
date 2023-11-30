-- Listado de Operaciones (queries) CRUD de mexflix

-- movieseries
    -- Crear movieseries,
    INSERT INTO movieseries SET imdb_id = "tt3749900",title = "Gotam",
    plot ="",author = "",actors = "",country="",premiere="2014",trailer = "",
    poster = "",rating = 8.0,genres="Crime, Drama, Thriller",category="Serie",
    mose_statu = 3; 
    -- Actualizar movieseries,
    UPDATE movieseries SET title = "Gotham",plot ="In crime ridden Gotham City, Thomas and Martha Wayne are murdered before young Bruce Wayne's eyes. Although Gotham City Police Department detectives, James Gordon, and his cynical partner, Harvey Bullock, seem to solace's the case quickly, things are not so simple. Inspired by Bruce's traumatized desire for justice, Gordon vows to find it amid Gotham's corruption. Thus begins Gordon's lonely quest that would set him against his own comrades and the underworld with their own deadly rivalries and mysteries. In the coming wars, innocence will be lost and compromises will be made as some criminals will fall as casualties while others will rise as super villains. All the while, young Bruce observes this war with a growing obsession that would one day drive him to seek his own
    justice against the evil of Gotham as The Batman.",author = "Bruno Heller",actors = "Ben McKenzie, Jada Pinkett Smith, Donal Logue",
    country="USA",premiere="2014",trailer = 'https://www.youtube.com/watch?v=xduLX21Mjis',
    poster = "https://m.media-amazon.com/images/M/MV5BMmUyOTdjMGEtN2RmNC00YzUwLTg5ZDEtMTI1NWE4ZjcwN2ViXkEyXkFqcGdeQXVyNTA3MTU2MjE@._V1_SX300.jpg",
    rating = 8.0,genres="Crime, Drama, Thriller",category="Serie",
    mose_statu = 3 where imdb_id = "tt3749900";
    -- Eliminar movieseries,
    DELETE FROM movieseries WHERE imdb_id = "tt3749900";
    -- Buscar Todas las movieseries,
    SELECT ms.imdb_id,ms.title,ms.plot,ms.author,ms.actors,ms.country,ms.premiere,
    ms.poster,ms.trailer,ms.rating,ms.genres,ms.category,s.statu 
    FROM movieseries ms join statu s
    ON (ms.mose_statu = s.status_id);
    -- Buscar una movieseries por titulos,personas(actores,autores),generos
    SELECT ms.imdb_id,ms.title,ms.plot,ms.author,ms.actors,ms.country,ms.premiere,
    ms.poster,ms.trailer,ms.rating,ms.genres,ms.category,s.statu 
    FROM movieseries ms join statu s
    ON (ms.mose_statu = s.status_id)
    WHERE MATCH(ms.title,ms.author,ms.actors,ms.genres)
    AGAINST('drama'IN BOOLEAN MODE);
    -- Buscar una movieseries por categoria
    SELECT ms.imdb_id,ms.title,ms.plot,ms.author,ms.actors,ms.country,ms.premiere,
    ms.poster,ms.trailer,ms.rating,ms.genres,ms.category,s.statu 
    FROM movieseries ms join statu s
    ON (ms.mose_statu = s.status_id) WHERE ms.category = "Movie";
    -- Buscar una movieseries por status
    SELECT ms.imdb_id,ms.title,ms.plot,ms.author,ms.actors,ms.country,ms.premiere,
    ms.poster,ms.trailer,ms.rating,ms.genres,ms.category,s.statu 
    FROM movieseries ms join statu s
    ON (ms.mose_statu = s.status_id) WHERE ms.mose_statu = 1;
-- statu
    -- Crear statu,
    INSERT INTO statu SET status_id = 0,statu = "Otro status";
    --Salvar statu replace: Una instruccion inserta un nuevo registro
    -- en caso el id no exista entonce inserta un registro y en caso
    -- que la busqueda encuentre un registro con el valor , lo que hace
    --una actualizacion.porque actualiza todo los campos y omites un 
    --campo se tiene que escribir el valor actual sino lo guarda nulo
    --Trata de insertar primero de ahi trata en actualizar
    REPLACE INTO statu(status_id,statu)VALUES(0,'Otro Status');
    REPLACE statu SET status_id = 0,statu = 'Otro Status';
    -- Actualizar statu,
    UPDATE statu SET statu = 'Other Status' WHERE status_id = 6;


    -- Eliminar statu,
    DELETE FROM statu WHERE status_id = 6;
    -- Buscar Todos los status
    SELECT * FROM statu;
    -- Buscar un statu por status_id*/
    SELECT * FROM statu WHERE status_id = 3;
-- user
    -- Crear users,
    INSERT INTO users SET user_ = "@u",email ='usuario@gmail.com',name_ ="Maria",
    birthday ="2002-10-09",pass = md5('Maria12'),role_="Admin"; 
    -- Actualizar Datos generales,Password
    UPDATE users SET name_ = "Usuario123",birthday = "2000-10-09",role_="User"
    WHERE  user = "@u" AND email = "usuario@gmail.com";

    UPDATE users SET pass = MD5('nuevo')
    WHERE  user = "@u" AND email = "usuario@gmail.com";
    -- Eliminar user
    DELETE FROM users WHERE user_ = "@u" and email = "usuario@gmail.com";
    -- Buscar Todo los users
    SELECT * FROM users;
    -- Buscar un user por:user,email,role
    SELECT * FROM users WHERE user_ = "@u";
    SELECT * FROM users WHERE email = "usuario@gmail.com";
    SELECT * FROM users WHERE role_  = "User";

