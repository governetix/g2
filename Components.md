# Convención de Íconos

    [I] Pendiente por implementar
    [I] Creación del Componente
    [B] Componente con funcionalidades básicas pero sin probar.
    [E] Componente con errores
    [C] Componente implementado con todas las funcionalidades completamente probado y aceptado

# Lista de Componentes

[C] ├── `Alert`
    │   └── **Uso:** Para mostrar mensajes de alerta personalizables.
    │       ```blade
    │       <x-gcore::alert message="¡Operación exitosa!" type="success" dismissible />
    │       ```
    │   └── **Parámetros Obligatorios:**
    │       - `message` (string): El contenido del mensaje de alerta.
    │   └── **Parámetros Opcionales:**
    │       - `type` (string): El tipo de alerta ('info', 'success', 'warning', 'danger'). Por defecto: 'info'.
    │       - `dismissible` (boolean): Si la alerta puede ser cerrada por el usuario. Por defecto: `false`.
    │       - `class` (string): Clases CSS adicionales para el contenedor de la alerta.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor de la alerta.
[C] ├── `Blockquote`
    │   └── **Uso:** Para mostrar citas o bloques de texto destacados.
    │       ```blade
    │       <x-gcore::blockquote cite="Autor de la Cita">
    │           "Este es un ejemplo de una cita importante."
    │       </x-gcore::blockquote>
    │       ```
    │   └── **Parámetros Obligatorios:**
    │       - Contenido (slot): El texto de la cita.
    │   └── **Parámetros Opcionales:**
    │       - `cite` (string): La fuente o autor de la cita. Por defecto: `''`.
    │       - `class` (string): Clases CSS adicionales para el blockquote.
    │       - `style` (string): Estilos CSS inline adicionales para el blockquote.
[C] ├── `Button`
    │   └── **Uso:** Para crear botones interactivos con diferentes estilos y funcionalidades.
    │       ```blade
    │       <x-gcore::button type="submit" variant="success" size="lg" icon="fas fa-check">
    │           Guardar Cambios
    │       </x-gcore::button>
    │       ```
    │   └── **Parámetros Obligatorios:**
    │       - Contenido (slot): El texto o HTML dentro del botón.
    │   └── **Parámetros Opcionales:**
    │       - `type` (string): El tipo de botón ('button', 'submit', 'reset'). Por defecto: 'button'.
    │       - `variant` (string): El estilo visual del botón ('primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark', 'link'). Por defecto: 'primary'.
    │       - `size` (string): El tamaño del botón ('sm', 'md', 'lg'). Por defecto: 'md'.
    │       - `outline` (boolean): Si el botón debe ser de estilo "outline". Por defecto: `false`.
    │       - `disabled` (boolean): Si el botón está deshabilitado. Por defecto: `false`.
    │       - `icon` (string): Clase de ícono de Font Awesome para mostrar junto al texto. Por defecto: `''`.
    │       - `class` (string): Clases CSS adicionales para el botón.
    │       - `style` (string): Estilos CSS inline adicionales para el botón.
[C] ├── `Card`
    │   └── **Uso:** Para agrupar contenido de forma visualmente distintiva, con opciones de título, cabecera y pie de página.
    │       ```blade
    │       <x-gcore::card title="Título de la Tarjeta">
    │           <p>Contenido principal de la tarjeta.</p>
    │           <x-slot:footer>
    │               <small>Información adicional en el pie.</small>
    │           </x-slot:footer>
    │       </x-gcore::card>
    │       ```
    │   └── **Parámetros Obligatorios:**
    │       - Contenido (slot): El contenido principal del cuerpo de la tarjeta.
    │   └── **Parámetros Opcionales:**
    │       - `title` (string): Título opcional para la tarjeta. Si se usa, se renderiza dentro de un `h3` en la cabecera.
    │       - `header` (string): Contenido opcional para la sección de la cabecera de la tarjeta. Puede ser HTML o un componente Blade.
    │       - `footer` (string): Contenido opcional para la sección del pie de página de la tarjeta. Puede ser HTML o un componente Blade.
    │       - `class` (string): Clases CSS adicionales para el contenedor de la tarjeta.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor de la tarjeta.
[C] ├── `ChartContainer`
    │   └── **Uso:** Para envolver y estilizar gráficos, proporcionando un contenedor con título y descripción.
    │       ```blade
    │       <x-gcore::chart-container title="Ventas Mensuales" description="Gráfico de barras de las ventas del último trimestre."
    │                                 width="80%" height="400px" background-color="#f9f9f9">
    │           {{-- Aquí iría el código de tu librería de gráficos (ej. <canvas id="myChart"></canvas>) --}}
    │       </x-gcore::chart-container>
    │       ```
    │   └── **Parámetros Obligatorios:**
    │       - Contenido (slot): El código HTML/JS de la librería de gráficos.
    │   └── **Parámetros Opcionales:**
    │       - `title` (string): El título del gráfico. Por defecto: `''`.
    │       - `description` (string): Una breve descripción del gráfico. Por defecto: `''`.
    │       - `width` (string): Ancho del contenedor del gráfico (ej. '100%', '500px'). Por defecto: '100%'.
    │       - `height` (string): Alto del contenedor del gráfico (ej. '300px', 'auto'). Por defecto: 'auto'.
    │       - `backgroundColor` (string): Color de fondo del contenedor. Por defecto: `var(--grafico-fondo-contenedor)`.
    │       - `borderColor` (string): Color del borde del contenedor. Por defecto: `var(--color-borde-base)`.
    │       - `borderWidth` (string): Ancho del borde del contenedor. Por defecto: '1px'.
    │       - `borderRadius` (string): Radio del borde del contenedor. Por defecto: '8px'.
    │       - `boxShadow` (string): Sombra de la caja del contenedor. Por defecto: `'0 2px 4px hsla(var(--color-sombra-base), 0.1)'`.
    │       - `class` (string): Clases CSS adicionales para el contenedor.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor.
[C] ├── `CodeBlock`
    │   └── **Uso:** Para mostrar bloques de código con resaltado de sintaxis (requiere librería externa para el resaltado real).
    │       ```blade
    │       <x-gcore::code-block language="php">
    │           <?php
    │           echo "Hello, World!";
    │           ?>
    │       </x-gcore::code-block>
    │       ```
    │   └── **Parámetros Obligatorios:**
    │       - Contenido (slot): El código a mostrar.
    │   └── **Parámetros Opcionales:**
    │       - `language` (string): El lenguaje de programación para el resaltado. Por defecto: 'php'.
    │       - `class` (string): Clases CSS adicionales para el bloque de código.
    │       - `style` (string): Estilos CSS inline adicionales para el bloque de código.
[C] ├── `CtaSection`
    │   └── **Uso:** Para crear secciones de llamada a la acción (Call to Action) con un título, subtítulo y opciones de color.
    │       ```blade
    │       <x-gcore::cta-section title="¡Únete a Nuestra Comunidad!" subtitle="No te pierdas las últimas actualizaciones y ofertas."
    │                                 background-color="hsl(var(--color-secundario))" text-color="hsl(var(--color-fondo-principal))">
    │           <x-gcore::button variant="light">Regístrate Ahora</x-gcore::button>
    │       </x-gcore::cta-section>
    │       ```
    │   └── **Parámetros Obligatorios:**
    │       - `title` (string): El título principal de la sección CTA.
    │   └── **Parámetros Opcionales:**
    │       - `subtitle` (string): El subtítulo o texto descriptivo. Por defecto: `''`.
    │       - `backgroundColor` (string): Color de fondo de la sección. Por defecto: `var(--color-primario)`.
    │       - `textColor` (string): Color del texto de la sección. Por defecto: `var(--color-fondo-principal)`.
    │       - `class` (string): Clases CSS adicionales para la sección.
    │       - `style` (string): Estilos CSS inline adicionales para la sección.
    │       - Contenido (slot): Cualquier contenido adicional dentro de la sección (ej. botones).
[C] ├── `Divider`
    │   └── **Uso:** Para crear una línea divisoria horizontal o vertical.
    │       ```blade
    │       <x-gcore::divider orientation="horizontal" />
    │       ```
    │   └── **Parámetros Obligatorios:**
    │       - Ninguno.
    │   └── **Parámetros Opcionales:**
    │       - `orientation` (string): La orientación del divisor ('horizontal' o 'vertical'). Por defecto: 'horizontal'.
    │       - `class` (string): Clases CSS adicionales para el divisor.
    │       - `style` (string): Estilos CSS inline adicionales para el divisor.
[C] ├── `Dropdown`
    │   └── **Uso:** Para crear menús desplegables interactivos.
    │       ```blade
    │       <x-gcore::dropdown label="Opciones" align="right">
    │           <a href="#">Opción 1</a>
    │           <a href="#">Opción 2</a>
    │       </x-gcore::dropdown>
    │       ```
    │   └── **Parámetros Obligatorios:**
    │       - Contenido (slot): Los elementos del menú desplegable (ej. enlaces `<a>`).
    │   └── **Parámetros Opcionales:**
    │       - `label` (string): El texto del botón que activa el desplegable. Por defecto: 'Dropdown'.
    │       - `align` (string): La alineación del menú desplegable ('left' o 'right'). Por defecto: 'left'.
    │       - `class` (string): Clases CSS adicionales para el contenedor del desplegable.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor del desplegable.
[C] ├── `EmptyState`
    │   └── **Uso:** Para mostrar un mensaje cuando no hay contenido disponible, a menudo con un ícono y un llamado a la acción.
    │       ```blade
    │       <x-gcore::empty-state title="No hay productos aún" message="Comienza añadiendo nuevos productos a tu inventario."
    │                             icon="fas fa-box-open">
    │           <x-gcore::button variant="primary">Añadir Producto</x-gcore::button>
    │       </x-gcore::empty-state>
    │       ```
    │   └── **Parámetros Obligatorios:**
    │       - Ninguno.
    │   └── **Parámetros Opcionales:**
    │       - `title` (string): El título para el estado vacío. Por defecto: 'No Data Available'.
    │       - `message` (string): El mensaje de contenido. Por defecto: 'There is no content to display yet.'.
    │       - `icon` (string): Clase de ícono de Font Awesome. Por defecto: 'fas fa-box-open'.
    │       - `class` (string): Clases CSS adicionales para el contenedor.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor.
    │       - Contenido (slot): Cualquier contenido adicional a mostrar dentro del estado vacío (ej. un botón).
[C] ├── `FeatureGrid`
    │   └── **Uso:** Para mostrar una cuadrícula de características o puntos destacados con íconos, títulos y descripciones.
    │       ```blade
    │       <x-gcore::feature-grid :features="[
    │           ['icon' => 'fas fa-shield-alt', 'title' => 'Seguridad Avanzada', 'description' => 'Protegemos tus datos con encriptación de última generación.'],
    │           ['icon' => 'fas fa-tachometer-alt', 'title' => 'Rendimiento Óptimo', 'description' => 'Disfruta de una velocidad y eficiencia inigualables.'],
    │           ['icon' => 'fas fa-headset', 'title' => 'Soporte 24/7', 'description' => 'Nuestro equipo está disponible para ayudarte en cualquier momento.']
    │       ]" columns="3" gap="30px" />
    │       ```
    │   └── **Parámetros Obligatorios:**
    │       - `features` (array): Un array de objetos, donde cada objeto representa una característica y debe contener:
    │           - `icon` (string): Clase de ícono de Font Awesome.
    │           - `title` (string): Título de la característica.
    │           - `description` (string): Descripción de la característica.
    │   └── **Parámetros Opcionales:**
    │       - `columns` (int): Número de columnas para el diseño de la cuadrícula. Por defecto: `3`.
    │       - `gap` (string): Espacio entre los elementos de la cuadrícula (ej. '20px', '1rem'). Por defecto: '20px'.
    │       - `class` (string): Clases CSS adicionales para el contenedor de la cuadrícula.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor de la cuadrícula. 
[C] ├── `Flex`
    │   └── **Uso:** Para crear contenedores flexbox, permitiendo un control flexible sobre la alineación y distribución de los elementos hijos.
    │       ```blade
    │       <x-gcore::flex direction="row" justify="space-between" align="center" gap="15px">
    │           <div>Elemento 1</div>
    │           <div>Elemento 2</div>
    │           <div>Elemento 3</div>
    │       </x-gcore::flex>
    │       ```
    │   └── **Parámetros Obligatorios:**
    │       - Contenido (slot): Los elementos hijos del contenedor flex.
    │   └── **Parámetros Opcionales:**
    │       - `direction` (string): Dirección de los elementos ('row', 'column', 'row-reverse', 'column-reverse'). Por defecto: 'row'.
    │       - `justify` (string): Alineación de los elementos a lo largo del eje principal ('flex-start', 'flex-end', 'center', 'space-between', 'space-around', 'space-evenly'). Por defecto: 'flex-start'.
    │       - `align` (string): Alineación de los elementos a lo largo del eje transversal ('flex-start', 'flex-end', 'center', 'baseline', 'stretch'). Por defecto: 'stretch'.
    │       - `wrap` (string): Comportamiento de ajuste de línea ('nowrap', 'wrap', 'wrap-reverse'). Por defecto: 'nowrap'.
    │       - `gap` (string): Espacio entre los elementos flex (ej. '10px', '1rem'). Por defecto: '0'.
    │       - `class` (string): Clases CSS adicionales para el contenedor flex.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor flex.
[C] ├── `FormInput`
    │   └── **Uso:** Para crear campos de entrada de texto estándar en formularios.
    │       ```blade
    │       <x-gcore::form-input name="email" type="email" placeholder="tu@ejemplo.com" required />
    │       ```
    │   └── **Parámetros Obligatorios:**
    │       - `name` (string): El atributo `name` del input.
    │   └── **Parámetros Opcionales:**
    │       - `id` (string): El atributo `id` del input. Por defecto: el mismo valor que `name`.
    │       - `type` (string): El tipo de input ('text', 'email', 'password', 'number', etc.). Por defecto: 'text'.
    │       - `value` (string): El valor por defecto del input. Por defecto: `''`.
    │       - `placeholder` (string): El texto de marcador de posición. Por defecto: `''`.
    │       - `required` (boolean): Si el campo es obligatorio. Por defecto: `false`.
    │       - `disabled` (boolean): Si el campo está deshabilitado. Por defecto: `false`.
    │       - `readonly` (boolean): Si el campo es de solo lectura. Por defecto: `false`.
    │       - `class` (string): Clases CSS adicionales para el input.
    │       - `style` (string): Estilos CSS inline adicionales para el input.
[C] ├── `Grid`
    │   └── **Uso:** Para crear contenedores de cuadrícula CSS, permitiendo diseños complejos y responsivos.
    │       ```blade
    │       <x-gcore::grid columns="repeat(auto-fit, minmax(250px, 1fr))" gap="20px">
    │           <div>Elemento de la cuadrícula 1</div>
    │           <div>Elemento de la cuadrícula 2</div>
    │           <div>Elemento de la cuadrícula 3</div>
    │       </x-gcore::grid>
    │       ```
    │   └── **Parámetros Obligatorios:**
    │       - Contenido (slot): Los elementos hijos del contenedor de la cuadrícula.
    │   └── **Parámetros Opcionales:**
    │       - `columns` (string): Valor CSS para `grid-template-columns` (ej. '2', '3', '1fr 1fr', 'repeat(auto-fit, minmax(200px, 1fr))'). Por defecto: '1fr'.
    │       - `gap` (string): Valor CSS para el espacio entre elementos de la cuadrícula (ej. '10px', '1rem', '20px 10px'). Por defecto: '20px'.
    │       - `class` (string): Clases CSS adicionales para el contenedor de la cuadrícula.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor de la cuadrícula.
[C] ├── `Heading`
    │   └── **Uso:** Para crear encabezados HTML (h1-h6) con estilos personalizables desde la base de datos o mediante parámetros directos.
    │       ```blade
    │       <x-gcore::heading level="h1" text="Título Principal de la Página" />
    │
    │       <x-gcore::heading level="h2" text="Subtítulo Personalizado" font-size="2.2rem" color="hsl(var(--color-acento))" />
    │       ```
    │   └── **Parámetros Obligatorios:**
    │       - `text` (string): El contenido de texto del encabezado. También se puede pasar contenido complejo a través del slot.
    │   └── **Parámetros Opcionales:**
    │       - `level` (string): El nivel del encabezado ('h1', 'h2', 'h3', 'h4', 'h5', 'h6'). Por defecto: 'h1'.
    │       - `fontFamily` (string): Familia de la fuente. Por defecto: configurado en la base de datos.
    │       - `fontSize` (string): Tamaño de la fuente. Por defecto: configurado en la base de datos.
    │       - `fontWeight` (string): Grosor de la fuente. Por defecto: configurado en la base de datos.
    │       - `fontStyle` (string): Estilo de la fuente ('normal', 'italic'). Por defecto: 'normal'.
    │       - `color` (string): Color del texto. Por defecto: configurado en la base de datos.
    │       - `textAlign` (string): Alineación del texto ('left', 'center', 'right', 'justify'). Por defecto: 'left'.
    │       - `textTransform` (string): Transformación del texto ('none', 'uppercase', 'lowercase', 'capitalize'). Por defecto: 'none'.
    │       - `textDecoration` (string): Decoración del texto ('none', 'underline', 'overline', 'line-through'). Por defecto: 'none'.
    │       - `lineHeight` (string): Altura de línea. Por defecto: configurado en la base de datos.
    │       - `letterSpacing` (string): Espaciado entre letras. Por defecto: configurado en la base de datos.
    │       - `marginTop` (string): Margen superior. Por defecto: configurado en la base de datos.
    │       - `marginBottom` (string): Margen inferior. Por defecto: configurado en la base de datos.
    │       - `padding` (string): Relleno. Por defecto: configurado en la base de datos.
    │       - `class` (string): Clases CSS adicionales para el encabezado.
    │       - `style` (string): Estilos CSS inline adicionales para el encabezado.
    │       - Contenido (slot): Contenido alternativo al parámetro `text` para HTML más complejo.
[C] ├── `HeroSection`
    │   └── **Uso:** Para crear una sección de héroe destacada con título, subtítulo, imagen de fondo y superposición.
    │       ```blade
    │       <x-gcore::hero-section title="Bienvenido a Governetix" subtitle="La plataforma definitiva para la gestión de módulos." 
    │                                  image-url="/modules/gcore/images/hero-bg.jpg" overlay-color="rgba(0,0,0,0.6)" height="500px">
    │           <x-gcore::button variant="light" size="lg">Explorar Módulos</x-gcore::button>
    │       </x-gcore::hero-section>
    │       ```
    │   └── **Parámetros Obligatorios:**
    │       - `title` (string): El título principal de la sección de héroe.
    │   └── **Parámetros Opcionales:**
    │       - `subtitle` (string): El subtítulo o texto descriptivo. Por defecto: `''`.
    │       - `imageUrl` (string): URL opcional de la imagen de fondo. Por defecto: `''`.
    │       - `overlayColor` (string): Color de superposición (ej. 'rgba(0,0,0,0.5)'). Por defecto: 'rgba(0,0,0,0.4)'.
    │       - `height` (string): Altura de la sección de héroe (ej. '400px', '50vh'). Por defecto: '400px'.
    │       - `textColor` (string): Color del texto del título y subtítulo. Por defecto: `var(--color-fondo-principal)`.
    │       - `class` (string): Clases CSS adicionales para la sección.
    │       - `style` (string): Estilos CSS inline adicionales para la sección.
    │       - Contenido (slot): Cualquier contenido adicional (ej. botones) a mostrar dentro de la sección de héroe.
[C] ├── `InfoBox`
    │   └── **Uso:** Para mostrar cuadros de información con un título, mensaje y un ícono opcional, con diferentes tipos de alerta.
    │       ```blade
    │       <x-gcore::info-box type="success" title="Éxito" message="Los datos se han guardado correctamente." icon="fas fa-check-circle" />
    │       ```
    │   └── **Parámetros Obligatorios:**
    │       - `title` (string): El título del cuadro de información.
    │       - `message` (string): El contenido del mensaje.
    │   └── **Parámetros Opcionales:**
    │       - `type` (string): El tipo de cuadro de información ('info', 'success', 'warning', 'error'). Por defecto: 'info'.
    │       - `icon` (string): Clase de ícono de Font Awesome (ej. 'fas fa-info-circle'). Por defecto: `''`.
    │       - `class` (string): Clases CSS adicionales para el cuadro de información.
    │       - `style` (string): Estilos CSS inline adicionales para el cuadro de información.
[C] ├── `Kpi`
    │   └─�� **Uso:** Para mostrar indicadores clave de rendimiento (KPIs) con un valor, etiqueta, unidad, ícono y un indicador de cambio.
    │       ```blade
    │       <x-gcore::kpi label="Ingresos Totales" value="150000" unit="$" icon="fas fa-dollar-sign" change="+10%" change-type="positive" />
    │       ```
    │   └── **Parámetros Obligatorios:**
    │       - `label` (string): La etiqueta para el KPI.
    │       - `value` (string): El valor principal del KPI.
    │   └── **Parámetros Opcionales:**
    │       - `unit` (string): Unidad opcional para el valor (ej. '%', '
). Por defecto: `''`.
    │       - `icon` (string): Clase de ícono de Font Awesome (ej. 'fas fa-chart-line'). Por defecto: `''`.
    │       - `change` (string): Valor de cambio opcional (ej. '+5%', '-2.1'). Por defecto: `''`.
    │       - `changeType` (string): Tipo de cambio para el estilo ('positive', 'negative', 'neutral'). Por defecto: 'neutral'.
    │       - `class` (string): Clases CSS adicionales para el contenedor del KPI.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor del KPI.
