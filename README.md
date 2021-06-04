# Prueba pixeling BackendJunior 

Esta es una prueba realizada para pixeling la cual trata de una api para adopción de mascotas 

# Endpoints 
php artisan migrate --seed para cargar los seeders.
php artisan serve para habilitar servidor 

# Institute 
-Index, post 
    Ruta: api/institute
    Campos requeridos para POST: name, email, phone (formato Json)

-Edit, Delete 
    Ruta: api/institute/id
    Campos requeridos para el Edit/Update name, email, phone (formato Json)

# Pet
-Index,Post
    Ruta: api/pet
    Campos requeridos para POST: name, species(se debe elegir entre dog o cat), 
    breed (según la especie, la raza será el ID correspondiente en la table gato/perro raza)
    birth (fecha de nacimiento formato yyyy-mm-d)
    image (foto correspondiente)
    institute_id (institución a la que pertenece)

# Relaciones 
 uno a muchos pet-> institute

# Clonar desde la rama Valeria
