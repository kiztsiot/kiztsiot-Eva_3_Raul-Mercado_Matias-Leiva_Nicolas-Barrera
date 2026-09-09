==================================================
PROYECTO: Tech Solutions - Gestión de Proyectos (Unidad 3)
==================================================

REQUISITOS PREVIOS:
- PHP (Versión 8.1 o superior recomendada)
- Composer
- Node.js y NPM

--------------------------------------------------
1. INSTRUCCIONES DE INSTALACIÓN Y EJECUCIÓN
--------------------------------------------------

1. Descomprimir o clonar el proyecto en tu entorno local.

2. Abrir una terminal en la raíz del proyecto e instalar las dependencias de PHP:
   composer install

3. Instalar las dependencias de Node.js:
   npm install

4. Configurar las variables de entorno:
   - Copiar el archivo .env.example y renombrarlo como .env
   - Configurar los parámetros de conexión a la base de datos en el archivo .env.
   - Generar la key de la aplicación ejecutando:
     php artisan key:generate

5. Ejecutar las migraciones para crear las tablas en la base de datos:
   php artisan migrate

6. Iniciar la compilación de estilos (Tailwind CSS) con Laravel Mix:
   npm run watch
   *(Nota: Dejar esta terminal abierta mientras se trabaja localmente).*

7. En otra pestaña o ventana de la terminal, levantar el servidor backend de Laravel:
   php artisan serve
   
El sistema web quedará accesible por defecto en: http://localhost:8000


--------------------------------------------------
2. INSTRUCCIONES PARA REVISAR LA DOCUMENTACIÓN SWAGGER
--------------------------------------------------
link para ver el swagger:
http://127.0.0.1:8000/api/documentation#/Proyectos

El archivo de especificación técnica de la API se encuentra incluido en la raíz del proyecto bajo el nombre:
-> swagger.yaml

Para realizar la revisión y pruebas de los endpoints de manera interactiva:
1. Abrir el navegador web e ingresar a la herramienta oficial: https://editor.swagger.io/
2. Copiar todo el contenido del archivo `swagger.yaml` provisto en el repositorio/entrega.
3. Pagar el contenido en el panel izquierdo del editor.
4. El panel derecho mostrará de inmediato la interfaz interactiva de Swagger UI, 
   permitiendo verificar los métodos HTTP (Autenticación JWT y el CRUD completo de Proyectos), 
   así como los códigos de respuesta esperados (200, 201, 204, 404).
==================================================
