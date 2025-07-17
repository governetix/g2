# Convención de Íconos

    [ ] Pendiente por implementar
    [I] Creación inicial (módulo/página/blade vacío)Solamente 
    [B]  Módulo/página/blade creado con Funcionalidades básicas
    [E]  Módulo/página/blade con errores
    [C]  Módulo/página/blade implementado completamente y aceptado

# Estructura de URLs de la Aplicación

Esta sección debe ser actualizada cada vez que se agregue un nuevo componente a la aplicación. Siguiendo la convención de íconos. 

[ ] ├── `Home` (Página principal de la aplicación)
    │
[I] ├── `admin`
[ ] │   ├── `overview`                  // Página principal del dashboard de administración
[ ] │   ├── `modules`                   // Gestión de módulos
[ ] │   ├── `users`                     // Gestión de usuarios
[I] │   ├── `core`                      // Página principal del módulo gCore
[I] │   │   ├── `test-exception`        // Ruta de prueba para excepciones
[I] │   │   ├── `translations`          // CRUD de traducciones
[E] │   │   │   ├── `create`            // Formulario nueva traducción
[I] │   │   │   └── `{id}/edit`         // Formulario para editar traducción
    │   │   │
[B] │   │   ├── `settings`              // Gestión de configuraciones dinámicas, temas CSS y feature flags
[I] │   │   │   ├── `create`            // Formulario para crear nueva configuración/variable
[ ] │   │   │   └── `{id}/edit`         // Formulario para editar configuración/variable
    │   │   │
[B] │   │   ├── `style`                 
[B] │   │   │    ├── `theme`            // Gestión de temas CSS
[I] │   │   │    ├── `format`           // Gestión de fuentes, encabezados y 
[I] │   │   │    ├── `visual`           // Gestión de formatos visuales
[I] │   │   │    ├── `form`             // Gestión de formularios
[I] │   │   │    ├── `table`            // Gestión de tablas
[I] │   │   │    ├── `charts`           // Gestión de gráficas
[I] │   │   │    └── `maps`             // Gestión de mapas
[B] │   │   └── `feature-flags`     // Gestión de feature flags
    │   │
[I] │   ├── `backup`
[ ] │   │   ├── `create`
[ ] │   │   └── `restore`
[ ] │   │
[ ] │   ├── `tools`               // Herramientas administrativas
[ ] │   ├── `audit-log`           // Registro de auditoría
    │   │
[ ] │   └── `monitor`
[B] │       ├── `logs`                  // Visor de logs
[B] │       ├── `errors`                // Visor de Errores
[B] │       └── `modules`               // Estado de módulos
    │
[ ] ├── `dashboard`
[ ] │       ├── `overview`              // Página principal del dashboard de usuario
[ ] │       ├── `profile`               // Gestión de perfil de usuario
[ ] │       ├── `settings`              // Configuración de usuario
[ ] │       └── `{module-name}`         // Secciones de módulos orientados al usuario

# Explicación técnica de componentes de la aplicación.

Cada entrada en esta sección debe describir un componente de la aplicación (módulo, ruta, vista Blade o componente Blade) de manera concisa y técnica. La descripción debe ser un párrafo continuo que explique su propósito, cómo se define (ej. ruta, controlador, modelo asociado) y su interacción con otros componentes. Evita el uso de listas o viñetas dentro de la descripción. El objetivo es proporcionar una comprensión clara de la implementación para facilitar el mantenimiento y la depuración.

`Home`:
`admin`: Este prefijo de ruta agrupa todas las funcionalidades administrativas de la aplicación. Se espera que esté protegido por middleware de autenticación y autorización para asegurar que solo los usuarios con los permisos adecuados puedan acceder a estas secciones.
`admin/overview`: Esta ruta será la página principal del dashboard de administración, ofreciendo un resumen de métricas clave del sistema, estado de salud de la aplicación, alertas críticas y un resumen de las actividades administrativas recientes. Será manejada por un controlador específico para el dashboard de administración.
`admin/modules`: Esta ruta permitirá la gestión de módulos, incluyendo la capacidad de habilitar/deshabilitar módulos, configurar sus ajustes específicos y ver su estado. Integrará y expandirá la funcionalidad del visor de módulos de `admin/monitor/modules`.
`admin/users`: Esta ruta proporcionará una interfaz completa para la gestión de usuarios (CRUD), incluyendo la creación, lectura, actualización y eliminación de usuarios, así como la asignación de roles y permisos. Se integrará con el futuro módulo `gIAM`.
`admin/core`: Este componente representa el módulo `gCore`. Su ruta principal se define en `Modules/gCore/Routes/web.php` y es manejada por un controlador dentro de `Modules/gCore/Http/Controllers/Admin`. Su propósito es servir como un panel de control para las configuraciones y utilidades centrales de la aplicación.
`admin/core/test-exception`: Esta ruta es una utilidad de prueba dentro del módulo `gCore` para verificar eNo, l manejo de excepciones personalizadas. Se define en `Modules/gCore/Routes/web.php` y está asociada a un método en un controlador que intencionalmente lanza una excepción (por ejemplo, `ResourceNotFoundException` o `ValidationException`) para probar la configuración del manejador de excepciones global.
`admin/core/translations`: Esta ruta es la base para la gestión CRUD de traducciones dentro del módulo `gCore`. Se define en `Modules/gCore/Routes/web.php` y es manejada por un controlador (por ejemplo, `TranslationController`) que interactúa con el modelo `Modules/gCore/Models/Translation` y el `TranslationRepository` para listar, crear, actualizar y eliminar entradas de traducción.
`admin/core/translations/create`: Esta ruta específica dentro del módulo `gCore` muestra el formulario para crear una nueva traducción. Se define en `Modules/gCore/Routes/web.php` y es manejada por un método en el controlador de traducciones que devuelve una vista Blade (por ejemplo, `Modules/gCore/Resources/views/admin/translations/create.blade.php`) con los campos necesarios para introducir una nueva clave de traducción y sus valores para los diferentes idiomas.
`admin/core/translations/{id}/edit`: Esta ruta permite editar una traducción existente en el módulo `gCore`. El `{id}` es un parámetro de ruta que representa el identificador único de la traducción a editar. Se define en `Modules/gCore/Routes/web.php` y es manejada por un método en el controlador de traducciones que recupera la traducción por su ID y carga una vista Blade (por ejemplo, `Modules/gCore/Resources/views/admin/translations/edit.blade.php`) pre-llenada con los datos actuales de la traducción para su modificación.
`admin/core/settings`: Esta ruta será el punto de entrada para la gestión de configuraciones dinámicas, temas CSS y feature flags del módulo `gCore`. Se definirá en `Modules/gCore/Routes/web.php` y será manejada por un `gCoreSettingsController` en `Modules/gCore/Http/Controllers/Admin`. Este controlador interactuará con modelos como `Setting`, `CssTheme` y `FeatureFlag` para permitir la administración de estos elementos desde la interfaz.
`admin/core/settings/create`: Esta ruta mostrará el formulario para crear una nueva configuración o variable dinámica. Será manejada por el `gCoreSettingsController` y renderizará una vista Blade (por ejemplo, `Modules/gCore/Resources/views/admin/settings/create.blade.php`) para la entrada de datos.
`admin/core/settings/{id}/edit`: Esta ruta permitirá editar una configuración o variable dinámica existente, identificada por `{id}`. El `gCoreSettingsController` recuperará la configuración y la pasará a una vista Blade (por ejemplo, `Modules/gCore/Resources/views/admin/settings/edit.blade.php`) para su modificación.
`admin/core/settings/css-themes`: Esta ruta gestionará la selección y administración de temas CSS. El `gCoreSettingsController` presentará una interfaz para listar los temas disponibles (posiblemente desde el modelo `CssTheme`) y permitir la activación de uno de ellos, afectando dinámicamente el estilo de la aplicación.
`admin/core/settings/feature-flags`: Esta ruta proporcionará una interfaz para activar o desactivar funcionalidades específicas de la aplicación (feature flags). El `gCoreSettingsController` interactuará con el modelo `FeatureFlag` para mostrar el estado de cada flag y permitir su modificación, habilitando o deshabilitando características sin despliegue de código.
`admin/core/style/visual`: Esta ruta, definida en `Modules/gCore/Routes/web.php` y manejada por el método `visual()` en `Modules/gCore/Http/Controllers/Admin/GCoreSettingsController.php`, proporciona una interfaz para la gestión de formatos visuales de la aplicación. La vista asociada es `Modules/gCore/Resources/views/admin/style/visual.blade.php`, donde se podrán configurar aspectos como espaciado, sombras, bordes y otros elementos estéticos que no son directamente colores o tipografías.
`admin/core/style/format`: Esta ruta gestionará la configuración de tipografías, tamaños de fuente, estilos de encabezados y otros elementos relacionados con el formato de texto. Se definirá en `Modules/gCore/Routes/web.php` y será manejada por un controlador o método específico que interactuará con la base de datos para almacenar y recuperar estas configuraciones, permitiendo una personalización dinámica de la apariencia del texto en toda la aplicación.
`admin/core/style/form`: Esta ruta se encargará de la personalización visual de los elementos de formulario, incluyendo estilos de campos de entrada, botones, selectores, checkboxes y radios. Se definirá en `Modules/gCore/Routes/web.php` y será manejada por un controlador o método que permitirá ajustar propiedades como bordes, fondos, estados de foco y error, y la apariencia de los iconos dentro de los campos, todo ello almacenado dinámicamente en la base de datos.
`admin/core/style/table`: Esta ruta proporcionará una interfaz para configurar el estilo de las tablas en la aplicación, incluyendo colores de fondo para cabeceras y filas alternas, estilos de bordes de celdas y efectos de hover. Se definirá en `Modules/gCore/Routes/web.php` y será manejada por un controlador o método que permitirá la personalización de estos elementos visuales, asegurando una apariencia coherente y adaptable para todas las tablas del sistema.
`admin/core/style/charts`: Esta ruta gestionará la paleta de colores y los estilos visuales para los gráficos y visualizaciones de datos. Se definirá en `Modules/gCore/Routes/web.php` y será manejada por un controlador o método que permitirá configurar los colores de las series, el estilo de las líneas de los ejes y cuadrículas, los fondos de los tooltips y contenedores, y el color del texto de las etiquetas, todo ello para una representación visual consistente y atractiva de los datos.
`admin/core/style/maps`: Esta ruta se dedicará a la configuración visual de los mapas integrados en la aplicación, permitiendo ajustar la paleta de colores para representar datos geográficos (colores mínimos y máximos), y el estilo de los bordes de las regiones. Se definirá en `Modules/gCore/Routes/web.php` y será manejada por un controlador o método que permitirá la personalización de estos elementos para una visualización clara y efectiva de la información geográfica.
`admin/backup`: Este componente representa el módulo `gBackup`. Su ruta principal se define en `Modules/gBackup/Routes/web.php` y es manejada por un controlador que orquesta las operaciones de creación y restauración de backups de archivos.
`admin/backup/create`: Esta ruta dentro del módulo `gBackup` permitirá iniciar el proceso de creación de una copia de seguridad de archivos específicos. Se definirá en `Modules/gBackup/Routes/web.php` y será manejada por un controlador que ejecutará el comando Artisan `gbackup:file` para realizar el backup, posiblemente con opciones para seleccionar los archivos o directorios a respaldar.
`admin/backup/restore`: Esta ruta en el módulo `gBackup` proporcionará la funcionalidad para restaurar archivos desde una copia de seguridad existente. Se definirá en `Modules/gBackup/Routes/web.php` y será manejada por un controlador que permitirá seleccionar un backup y restaurar los archivos a su ubicación original, con las debidas precauciones y confirmaciones.
`admin/tools`: Esta ruta agrupará diversas herramientas administrativas, como la limpieza de caché, la optimización de la base de datos y otras utilidades de mantenimiento del sistema. Será manejada por un controlador específico para herramientas administrativas.
`admin/audit-log`: Esta ruta proporcionará una interfaz para visualizar un registro detallado de todas las acciones significativas realizadas por los administradores dentro del panel, crucial para la seguridad y la trazabilidad. Se integrará con la funcionalidad de auditoría de cambios.
`admin/monitor`: Este componente representa el módulo `gMonitorix`. Su ruta principal se define en `Modules/gMonitorix/Routes/web.php` y es manejada por un controlador que sirve como punto de entrada para las herramientas de monitoreo y observabilidad de la aplicación.
`admin/monitor/logs`: Esta ruta dentro del módulo `gMonitorix` proporciona una interfaz para visualizar los logs de la aplicación. Se define en `Modules/gMonitorix/Routes/web.php` y es manejada por un controlador que recupera y muestra los registros de logs, ya sea desde archivos de log o desde el modelo `LogEntry` si se están persistiendo en la base de datos. La vista asociada (por ejemplo, `Modules/gMonitorix/Resources/views/admin/logs/index.blade.php`) permite filtrar y paginar los logs.
`admin/monitor/errors`: Esta ruta en el módulo `gMonitorix` muestra un visor de errores capturados por la aplicación. Se define en `Modules/gMonitorix/Routes/web.php` y es manejada por un controlador que consulta el modelo `ErrorEntry` (donde se persisten los errores críticos) y presenta los detalles de cada error, incluyendo `stack traces`, contexto y metadatos. La vista (por ejemplo, `Modules/gMonitorix/Resources/views/admin/errors/index.blade.php`) facilita la revisión y gestión de los errores.
`admin/monitor/modules`: Esta ruta dentro del módulo `gMonitorix` ofrece una vista del estado de los módulos instalados en la aplicación. Se define en `Modules/gMonitorix/Routes/web.php` y es manejada por un controlador que utiliza la API de `nwidart/laravel-modules` para obtener información sobre cada módulo (nombre, versión, estado habilitado/deshabilitado, etc.) y la presenta en una tabla en una vista Blade (por ejemplo, `Modules/gMonitorix/Resources/views/admin/modules/index.blade.php`).
`dashboard`: Este prefijo de ruta agrupará todas las funcionalidades orientadas al usuario final. Será el centro de control personalizado para cada usuario, proporcionando una visión general rápida y acceso a las funcionalidades más relevantes para su experiencia.
`dashboard/overview`: La página de inicio del usuario, mostrando un resumen de su actividad reciente, notificaciones importantes y accesos directos a las secciones más utilizadas. Será manejada por un controlador específico para el dashboard de usuario.
`dashboard/profile`: Sección dedicada a la gestión del perfil del usuario, donde podrá actualizar su información personal, cambiar contraseña, gestionar preferencias de notificación y configurar ajustes específicos de su cuenta.
`dashboard/settings`: Configuración a nivel de usuario, como preferencias de idioma, zona horaria y cualquier otra opción que personalice su experiencia sin afectar la configuración global de la aplicación.
`dashboard/{module-name}`: Este patrón de ruta permitirá que cada módulo orientado al usuario (ej. `gVault` para gestión de documentos personales, `gWatch` para monitoreo de activos específicos del usuario) tenga su propia sección dentro del dashboard de usuario, manteniendo una experiencia coherente y modular.
`x-gcore::flash-messages`: Este es un componente Blade global que se utilizará para mostrar notificaciones flash (mensajes de éxito, error, advertencia, etc.) a los usuarios. Se definirá en `Modules/gCore/Resources/views/components/flash-messages.blade.php` y será renderizado en el layout principal de la aplicación. Este componente interactuará con un `NotificationService` para recuperar y mostrar los mensajes almacenados en la sesión o en la base de datos.