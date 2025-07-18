# Convención de Íconos

    [I] Pendiente por implementar
    [I] Creación del Componente
    [B] Componente con funcionalidades básicas pero sin probar.
    [E] Componente con errores
    [C] Componente implementado con todas las funcionalidades completamente probado y aceptado

# Lista de Componentes

[C] ├── `Alert`
    │   ├── **Uso:** Para mostrar mensajes de alerta personalizables.
    │   │   ```blade
    │   │   <x-gcore::alert message="¡Operación exitosa!" type="success" dismissible />
    │   │   ```
    │   ├── **Parámetros Obligatorios:**
    │   │   - `message` (string): El contenido del mensaje de alerta.
    │   └── **Parámetros Opcionales:**
    │       - `type` (string): El tipo de alerta ('info', 'success', 'warning', 'danger'). Por defecto: 'info'.
    │       - `dismissible` (boolean): Si la alerta puede ser cerrada por el usuario. Por defecto: `false`.
    │       - `class` (string): Clases CSS adicionales para el contenedor de la alerta.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor de la alerta.
[C] ├── `Blockquote`
    │   ├── **Uso:** Para mostrar citas o bloques de texto destacados.
    │   │   ```blade
    │   │   <x-gcore::blockquote cite="Autor de la Cita">
    │   │       "Este es un ejemplo de una cita importante."
    │   │   </x-gcore::blockquote>
    │   │   ```
    │   ├── **Parámetros Obligatorios:**
    │   │   - Contenido (slot): El texto de la cita.
    │   └── **Parámetros Opcionales:**
    │       - `cite` (string): La fuente o autor de la cita. Por defecto: `''`.
    │       - `class` (string): Clases CSS adicionales para el blockquote.
    │       - `style` (string): Estilos CSS inline adicionales para el blockquote.
[C] ├── `Breadcrumbs`
    │   ├── **Uso:** Para mostrar una navegación de tipo "ruta de navegación".
    │   │   ```blade
    │   │   <x-gcore::breadcrumbs :links="[['url' => '/dashboard', 'label' => 'Dashboard'], ['url' => '/users', 'label' => 'Usuarios']]" />
    │   │   ```
    │   ├── **Parámetros Obligatorios:**
    │   │   - `links` (array): Un array de objetos, donde cada objeto representa un enlace y debe contener:
    │   │       - `url` (string): La URL del enlace.
    │   │       - `label` (string): El texto a mostrar para el enlace.
    │   └── **Parámetros Opcionales:**
    │       - `class` (string): Clases CSS adicionales para el contenedor de las migas de pan.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor de las migas de pan.
[C] ├── `Button`
    │   ├── **Uso:** Para crear botones interactivos con diferentes estilos y funcionalidades.
    │   │   ```blade
    │   │   <x-gcore::button type="submit" variant="success" size="lg" icon="fas fa-check">
    │   │       Guardar Cambios
    │   │   </x-gcore::button>
    │   │   ```
    │   ├── **Parámetros Obligatorios:**
    │   │   - Contenido (slot): El texto o HTML dentro del botón.
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
    │   ├── **Uso:** Para agrupar contenido de forma visualmente distintiva, con opciones de título, cabecera y pie de página.
    │   │   ```blade
    │   │   <x-gcore::card title="Título de la Tarjeta">
    │   │       <p>Contenido principal de la tarjeta.</p>
    │   │       <x-slot:footer>
    │   │           <small>Información adicional en el pie.</small>
    │   │       </x-slot:footer>
    │   │   </x-gcore::card>
    │   │   ```
    │   ├── **Parámetros Obligatorios:**
    │   │   - Contenido (slot): El contenido principal del cuerpo de la tarjeta.
    │   └── **Parámetros Opcionales:**
    │       - `title` (string): Título opcional para la tarjeta. Si se usa, se renderiza dentro de un `h3` en la cabecera.
    │       - `header` (string): Contenido opcional para la sección de la cabecera de la tarjeta. Puede ser HTML o un componente Blade.
    │       - `footer` (string): Contenido opcional para la sección del pie de página de la tarjeta. Puede ser HTML o un componente Blade.
    │       - `class` (string): Clases CSS adicionales para el contenedor de la tarjeta.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor de la tarjeta.
[C] ├── `ChartContainer`
    │   ├── **Uso:** Para envolver y estilizar gráficos, proporcionando un contenedor con título y descripción.
    │   │   ```blade
    │   │   <x-gcore::chart-container title="Ventas Mensuales" description="Gráfico de barras de las ventas del último trimestre."
    │   │                             width="80%" height="400px" background-color="#f9f9f9">
    │   │       {{-- Aquí iría el código de tu librería de gráficos (ej. <canvas id="myChart"></canvas>) --}}
    │   │   </x-gcore::chart-container>
    │   │   ```
    │   ├── **Parámetros Obligatorios:**
    │   │   - Contenido (slot): El código HTML/JS de la librería de gráficos.
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
    │   ├── **Uso:** Para mostrar bloques de código con resaltado de sintaxis (requiere librería externa para el resaltado real).
    │   │   ```blade
    │   │   <x-gcore::code-block language="php">
    │   │       <?php
    │   │       echo "Hello, World!";
    │   │       ?>
    │   │   </x-gcore::code-block>
    │   │   ```
    │   ├── **Parámetros Obligatorios:**
    │   │   - Contenido (slot): El código a mostrar.
    │   └── **Parámetros Opcionales:**
    │       - `language` (string): El lenguaje de programación para el resaltado. Por defecto: 'php'.
    │       - `class` (string): Clases CSS adicionales para el bloque de código.
    │       - `style` (string): Estilos CSS inline adicionales para el bloque de código.
[C] ├── `CtaSection`
    │   ├── **Uso:** Para crear secciones de llamada a la acción (Call to Action) con un título, subtítulo y opciones de color.
    │   │   ```blade
    │   │   <x-gcore::cta-section title="¡Únete a Nuestra Comunidad!" subtitle="No te pierdas las últimas actualizaciones y ofertas."
    │   │                             background-color="hsl(var(--color-secundario))" text-color="hsl(var(--color-fondo-principal))">
    │   │       <x-gcore::button variant="light">Regístrate Ahora</x-gcore::button>
    │   │   </x-gcore::cta-section>
    │   │   ```
    │   ├── **Parámetros Obligatorios:**
    │   │   - `title` (string): El título principal de la sección CTA.
    │   └── **Parámetros Opcionales:**
    │       - `subtitle` (string): El subtítulo o texto descriptivo. Por defecto: `''`.
    │       - `backgroundColor` (string): Color de fondo de la sección. Por defecto: `var(--color-primario)`.
    │       - `textColor` (string): Color del texto de la sección. Por defecto: `var(--color-fondo-principal)`.
    │       - `class` (string): Clases CSS adicionales para la sección.
    │       - `style` (string): Estilos CSS inline adicionales para la sección.
    │       - Contenido (slot): Cualquier contenido adicional dentro de la sección (ej. botones).
[C] ├── `Divider`
    │   ├── **Uso:** Para crear una línea divisoria horizontal o vertical.
    │   │   ```blade
    │   │   <x-gcore::divider orientation="horizontal" />
    │   │   ```
    │   ├── **Parámetros Obligatorios:**
    │   │   - Ninguno.
    │   └── **Parámetros Opcionales:**
    │       - `orientation` (string): La orientación del divisor ('horizontal' o 'vertical'). Por defecto: 'horizontal'.
    │       - `class` (string): Clases CSS adicionales para el divisor.
    │       - `style` (string): Estilos CSS inline adicionales para el divisor.
[C] ├── `Dropdown`
    │   ├── **Uso:** Para crear menús desplegables interactivos.
    │   │   ```blade
    │   │   <x-gcore::dropdown label="Opciones" align="right">
    │   │       <a href="#">Opción 1</a>
    │   │       <a href="#">Opción 2</a>
    │   │   </x-gcore::dropdown>
    │   │   ```
    │   ├── **Parámetros Obligatorios:**
    │   │   - Contenido (slot): Los elementos del menú desplegable (ej. enlaces `<a>`).
    │   └── **Parámetros Opcionales:**
    │       - `label` (string): El texto del botón que activa el desplegable. Por defecto: 'Dropdown'.
    │       - `align` (string): La alineación del menú desplegable ('left' o 'right'). Por defecto: 'left'.
    │       - `class` (string): Clases CSS adicionales para el contenedor del desplegable.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor del desplegable.
[C] ├── `EmptyState`
    │   ├── **Uso:** Para mostrar un mensaje cuando no hay contenido disponible, a menudo con un ícono y un llamado a la acción.
    │       ```blade
    │       <x-gcore::empty-state title="No hay productos aún" message="Comienza añadiendo nuevos productos a tu inventario."
    │                             icon="fas fa-box-open">
    │           <x-gcore::button variant="primary">Añadir Producto</x-gcore::button>
    │       </x-gcore::empty-state>
    │       ```
    │   ├── **Parámetros Obligatorios:**
    │       - Ninguno.
    │   └── **Parámetros Opcionales:**
    │       - `title` (string): El título para el estado vacío. Por defecto: 'No Data Available'.
    │       - `message` (string): El mensaje de contenido. Por defecto: 'There is no content to display yet.'.
    │       - `icon` (string): Clase de ícono de Font Awesome. Por defecto: 'fas fa-box-open'.
    │       - `class` (string): Clases CSS adicionales para el contenedor.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor.
    │       - Contenido (slot): Cualquier contenido adicional a mostrar dentro del estado vacío (ej. un botón).
[C] ├── `FeatureGrid`
    │   ├── **Uso:** Para mostrar una cuadrícula de características o puntos destacados con íconos, títulos y descripciones.
    │       ```blade
    │       <x-gcore::feature-grid :features="[
    │           ['icon' => 'fas fa-shield-alt', 'title' => 'Seguridad Avanzada', 'description' => 'Protegemos tus datos con encriptación de última generación.'],
    │           ['icon' => 'fas fa-tachometer-alt', 'title' => 'Rendimiento Óptimo', 'description' => 'Disfruta de una velocidad y eficiencia inigualables.'],
    │           ['icon' => 'fas fa-headset', 'title' => 'Soporte 24/7', 'description' => 'Nuestro equipo está disponible para ayudarte en cualquier momento.']
    │       ]" columns="3" gap="30px" />
    │       ```
    │   ├── **Parámetros Obligatorios:**
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
    │   ├── **Uso:** Para crear contenedores flexbox, permitiendo un control flexible sobre la alineación y distribución de los elementos hijos.
    │       ```blade
    │       <x-gcore::flex direction="row" justify="space-between" align="center" gap="15px">
    │           <div>Elemento 1</div>
    │           <div>Elemento 2</div>
    │           <div>Elemento 3</div>
    │       </x-gcore::flex>
    │       ```
    │   ├── **Parámetros Obligatorios:**
    │       - Contenido (slot): Los elementos hijos del contenedor flex.
    │   └── **Parámetros Opcionales:**
    │       - `direction` (string): Dirección de los elementos ('row', 'column', 'row-reverse', 'column-reverse'). Por defecto: 'row'.
    │       - `justify` (string): Alineación de los elementos a lo largo del eje principal ('flex-start', 'flex-end', 'center', 'space-between', 'space-around', 'space-evenly'). Por defecto: 'flex-start'.
    │       - `align` (string): Alineación de los elementos a lo largo del eje transversal ('flex-start', 'flex-end', 'center', 'baseline', 'stretch'). Por defecto: 'stretch'.
    │       - `wrap` (string): Comportamiento de ajuste de línea ('nowrap', 'wrap', 'wrap-reverse'). Por defecto: 'nowrap'.
    │       - `gap` (string): Espacio entre los elementos flex (ej. '10px', '1rem'). Por defecto: '0'.
    │       - `class` (string): Clases CSS adicionales para el contenedor flex.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor flex.
[C] ├── `FormCheckbox`
    │   ├── **Uso:** Para crear un campo de checkbox.
    │   │   ```blade
    │   │   <x-gcore::form-checkbox name="remember_me" id="remember_me" label="Recordarme" checked="true" />
    │   │   ```
    │   ├── **Parámetros Obligatorios:**
    │   │   - `name` (string): El atributo `name` del checkbox.
    │   │   - `id` (string): El atributo `id` del checkbox.
    │   └── **Parámetros Opcionales:**
    │       - `label` (string): El texto de la etiqueta para el checkbox. Por defecto: `''`.
    │       - `checked` (boolean): Si el checkbox está marcado. Por defecto: `false`.
    │       - `disabled` (boolean): Si el checkbox está deshabilitado. Por defecto: `false`.
    │       - `class` (string): Clases CSS adicionales para el checkbox.
    │       - `style` (string): Estilos CSS inline adicionales para el checkbox.
[C] ├── `FormError`
    │   ├── **Uso:** Para mostrar mensajes de error de validación asociados a un campo de formulario.
    │   │   ```blade
    │   │   <x-gcore::form-error :messages="$errors->get('email')" />
    │   │   ```
    │   ├── **Parámetros Obligatorios:**
    │   │   - `messages` (array|string): Un array de mensajes de error o un solo mensaje.
    │   └── **Parámetros Opcionales:**
    │       - Ninguno.
[C] ├── `FormFileInput`
    │   ├── **Uso:** Para crear un campo de entrada de archivo.
    │   │   ```blade
    │   │   <x-gcore::form-file-input name="avatar" accept="image/*" multiple />
    │   │   ```
    │   ├── **Parámetros Obligatorios:**
    │   │   - `name` (string): El atributo `name` del input de archivo.
    │   └── **Parámetros Opcionales:**
    │       - `id` (string): El atributo `id` del input. Por defecto: el mismo valor que `name`.
    │       - `accept` (string): Tipos de archivo aceptados (ej. 'image/*', '.pdf'). Por defecto: `''`.
    │       - `multiple` (boolean): Si se permiten múltiples archivos. Por defecto: `false`.
    │       - `disabled` (boolean): Si el campo está deshabilitado. Por defecto: `false`.
[C] ├── `FormInput`
    │   ├── **Uso:** Para crear campos de entrada de texto estándar en formularios.
    │       ```blade
    │       <x-gcore::form-input name="email" type="email" placeholder="tu@ejemplo.com" required />
    │       ```
    │   ├── **Parámetros Obligatorios:**
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
[C] ├── `FormLabel`
    │   ├── **Uso:** Para crear una etiqueta asociada a un campo de formulario.
    │   │   ```blade
    │   │   <x-gcore::form-label for="email" value="Correo Electrónico" />
    │   │   ```
    │   ├── **Parámetros Obligatorios:**
    │   │   - Ninguno (el contenido puede ser pasado por `value` o por el slot).
    │   └── **Parámetros Opcionales:**
    │       - `for` (string): El `id` del campo de formulario al que se asocia la etiqueta. Por defecto: `null`.
    │       - `value` (string): El texto de la etiqueta. Por defecto: `null`.
[C] ├── `FormRadio`
    │   ├── **Uso:** Para crear un campo de radio button.
    │   │   ```blade
    │   │   <x-gcore::form-radio name="gender" id="male" value="male" label="Masculino" checked="true" />
    │   │   ```
    │   ├── **Parámetros Obligatorios:**
    │   │   - `name` (string): El atributo `name` del radio button.
    │   │   - `id` (string): El atributo `id` del radio button.
    │   │   - `value` (string): El valor del radio button.
    │   └── **Parámetros Opcionales:**
    │       - `label` (string): El texto de la etiqueta para el radio button. Por defecto: `''`.
    │       - `checked` (boolean): Si el radio button está marcado. Por defecto: `false`.
    │       - `disabled` (boolean): Si el radio button está deshabilitado. Por defecto: `false`.
[C] ├── `FormSelect`
    │   ├── **Uso:** Para crear campos de selección desplegables en formularios.
    │       ```blade
    │       <x-gcore::form-select name="group" label="Grupo" :options="['i18n' => 'i18n']" value="{{ old('group') }}" required />
    │       ```
    │   ├── **Parámetros Obligatorios:**
    │       - `name` (string): El atributo `name` del select.
    │       - `options` (array): Un array asociativo donde las claves son los valores de las opciones y los valores son las etiquetas a mostrar (ej. `['value1' => 'Label 1', 'value2' => 'Label 2']`).
    │   └── **Parámetros Opcionales:**
    │       - `id` (string): El atributo `id` del select. Por defecto: el mismo valor que `name`.
    │       - `label` (string): La etiqueta del campo de selección. Por defecto: `''`.
    │       - `selected` (string): El valor de la opción seleccionada por defecto. Por defecto: `null`.
    │       - `required` (boolean): Si el campo es obligatorio. Por defecto: `false`.
    │       - `disabled` (boolean): Si el campo está deshabilitado. Por defecto: `false`.
    │       - `class` (string): Clases CSS adicionales para el select.
    │       - `style` (string): Estilos CSS inline adicionales para el select.
[C] ├── `FormSwitch`
    │   ├── **Uso:** Para crear un campo de switch (toggle).
    │   │   ```blade
    │   │   <x-gcore::form-switch name="notifications" id="notifications" label="Habilitar Notificaciones" checked="true" />
    │   │   ```
    │   ├── **Parámetros Obligatorios:**
    │   │   - `name` (string): El atributo `name` del switch.
    │   └── **Parámetros Opcionales:**
    │       - `id` (string): El atributo `id` del switch. Por defecto: el mismo valor que `name`.
    │       - `label` (string): El texto de la etiqueta para el switch. Por defecto: `''`.
    │       - `checked` (boolean): Si el switch está activado. Por defecto: `false`.
    │       - `disabled` (boolean): Si el switch está deshabilitado. Por defecto: `false`.
[C] ├── `FormTextarea`
    │   ├── **Uso:** Para crear un campo de área de texto.
    │   │   ```blade
    │   │   <x-gcore::form-textarea name="description" placeholder="Escribe tu descripción aquí..." rows="5" />
    │   │   ```
    │   ├── **Parámetros Obligatorios:**
    │   │   - `name` (string): El atributo `name` del textarea.
    │   └── **Parámetros Opcionales:**
    │       - `id` (string): El atributo `id` del textarea. Por defecto: el mismo valor que `name`.
    │       - `value` (string): El valor por defecto del textarea. Por defecto: `''`.
    │       - `placeholder` (string): El texto de marcador de posición. Por defecto: `''`.
    │       - `rows` (int): El número de filas visibles del textarea. Por defecto: `3`.
    │       - `required` (boolean): Si el campo es obligatorio. Por defecto: `false`.
    │       - `disabled` (boolean): Si el campo está deshabilitado. Por defecto: `false`.
    │       - `readonly` (boolean): Si el campo es de solo lectura. Por defecto: `false`.
[C] ├── `Grid`
    │   ├── **Uso:** Para crear contenedores de cuadrícula CSS, permitiendo diseños complejos y responsivos.
    │       ```blade
    │       <x-gcore::grid columns="repeat(auto-fit, minmax(250px, 1fr))" gap="20px">
    │           <div>Elemento de la cuadrícula 1</div>
    │           <div>Elemento de la cuadrícula 2</div>
    │           <div>Elemento de la cuadrícula 3</div>
    │       </x-gcore::grid>
    │       ```
    │   ├── **Parámetros Obligatorios:**
    │       - Contenido (slot): Los elementos hijos del contenedor de la cuadrícula.
    │   └── **Parámetros Opcionales:**
    │       - `columns` (string): Valor CSS para `grid-template-columns` (ej. '2', '3', '1fr 1fr', 'repeat(auto-fit, minmax(200px, 1fr))'). Por defecto: '1fr'.
    │       - `gap` (string): Valor CSS para el espacio entre elementos de la cuadrícula (ej. '10px', '1rem', '20px 10px'). Por defecto: '20px'.
    │       - `class` (string): Clases CSS adicionales para el contenedor de la cuadrícula.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor de la cuadrícula.
[C] ├── `Heading`
    │   ├── **Uso:** Para crear encabezados HTML (h1-h6) con estilos personalizables desde la base de datos o mediante parámetros directos.
    │       ```blade
    │       <x-gcore::heading level="h1" text="Título Principal de la Página" />
    │
    │       <x-gcore::heading level="h2" text="Subtítulo Personalizado" font-size="2.2rem" color="hsl(var(--color-acento))" />
    │       ```
    │   ├── **Parámetros Obligatorios:**
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
    │   ├── **Uso:** Para crear una sección de héroe destacada con título, subtítulo, imagen de fondo y superposición.
    │       ```blade
    │       <x-gcore::hero-section title="Bienvenido a Governetix" subtitle="La plataforma definitiva para la gestión de módulos." 
    │                                  image-url="/modules/gcore/images/hero-bg.jpg" overlay-color="rgba(0,0,0,0.6)" height="500px">
    │           <x-gcore::button variant="light" size="lg">Explorar Módulos</x-gcore::button>
    │       </x-gcore::hero-section>
    │       ```
    │   ├── **Parámetros Obligatorios:**
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
    │   ├── **Uso:** Para mostrar cuadros de información con un título, mensaje y un ícono opcional, con diferentes tipos de alerta.
    │       ```blade
    │       <x-gcore::info-box type="success" title="Éxito" message="Los datos se han guardado correctamente." icon="fas fa-check-circle" />
    │       ```
    │   ├── **Parámetros Obligatorios:**
    │       - `title` (string): El título del cuadro de información.
    │       - `message` (string): El contenido del mensaje.
    │   └── **Parámetros Opcionales:**
    │       - `type` (string): El tipo de cuadro de información ('info', 'success', 'warning', 'error'). Por defecto: 'info'.
    │       - `icon` (string): Clase de ícono de Font Awesome (ej. 'fas fa-info-circle'). Por defecto: `''`.
    │       - `class` (string): Clases CSS adicionales para el cuadro de información.
    │       - `style` (string): Estilos CSS inline adicionales para el cuadro de información.
[C] ├── `Kpi`
    │   ├── **Uso:** Para mostrar indicadores clave de rendimiento (KPIs) con un valor, etiqueta, unidad, ícono y un indicador de cambio.
    │       ```blade
    │       <x-gcore::kpi label="Ingresos Totales" value="150000" unit="$" icon="fas fa-dollar-sign" change="+10%" change-type="positive" />
    │       ```
    │   ├── **Parámetros Obligatorios:**
    │       - `label` (string): La etiqueta para el KPI.
    │       - `value` (string): El valor principal del KPI.
    │   └── **Parámetros Opcionales:**
    │       - `unit` (string): Unidad opcional para el valor (ej. '%', '$').
    │       - `icon` (string): Clase de ícono de Font Awesome. Por defecto: `''`.
    │       - `change` (string): Texto que indica el cambio (ej. '+5%', '-$100'). Por defecto: `''`.
    │       - `changeType` (string): Tipo de cambio ('positive', 'negative', 'neutral'). Afecta el color del texto de cambio. Por defecto: 'neutral'.
    │       - `class` (string): Clases CSS adicionales para el contenedor del KPI.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor del KPI.
[C] ├── `List`
    │   ├── **Uso:** Para crear listas ordenadas o desordenadas con elementos definidos por un array o por el slot.
    │       ```blade
    │       <x-gcore::list type="ul" :items="['Item 1', 'Item 2', 'Item 3']" />
    │
    │       <x-gcore::list type="ol">
    │           <li>Primer elemento</li>
    │           <li>Segundo elemento</li>
    │       </x-gcore::list>
    │       ```
    │   ├── **Parámetros Obligatorios:**
    │       - Ninguno (el contenido puede ser pasado por `items` o por el slot).
    │   └── **Parámetros Opcionales:**
    │       - `type` (string): El tipo de lista ('ul' para desordenada, 'ol' para ordenada). Por defecto: 'ul'.
    │       - `items` (array): Un array de elementos de la lista. Si se proporciona, los elementos se renderizarán como `<li>`.
    │       - `class` (string): Clases CSS adicionales para el contenedor de la lista.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor de la lista.
    │       - Contenido (slot): Contenido HTML para los elementos de la lista. Si se usa, anula el parámetro `items`.
[C] ├── `Matrix`
    │   ├── **Uso:** Para mostrar datos tabulares con encabezados de columna y filas, con una opción para hacerla responsiva.
    │       ```blade
    │       <x-gcore::matrix :headers="['', 'Columna A', 'Columna B']" :rows="[['Fila 1', 'Dato 1A', 'Dato 1B'], ['Fila 2', 'Dato 2A', 'Dato 2B']]" responsive />
    │       ```
    │   ├── **Parámetros Obligatorios:**
    │       - Ninguno (el componente puede ser usado sin `headers` ni `rows`, pero es su propósito principal).
    │   └── **Parámetros Opcionales:**
    │       - `headers` (array): Un array de cadenas para los encabezados de las columnas. El primer elemento suele ser vacío si la primera columna es para encabezados de fila. Por defecto: `[]`.
    │       - `rows` (array): Un array de arrays, donde cada array interno representa una fila de datos. El primer elemento de cada array interno suele ser el encabezado de la fila. Por defecto: `[]`.
    │       - `responsive` (boolean): Si la tabla debe ser responsiva (permite desplazamiento horizontal si el contenido excede el ancho). Por defecto: `false`.
    │       - `class` (string): Clases CSS adicionales para el contenedor de la tabla.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor de la tabla.
[C] ├── `Modal`
    │   ├── **Uso:** Para crear ventanas modales (pop-ups) interactivas y personalizables.
    │       ```blade
    │       <x-gcore::modal id="myModal" title="Título del Modal" size="lg" :backdrop="true" :keyboard="true">
    │           <p>Contenido del cuerpo del modal.</p>
    │           <x-slot:footer>
    │               <x-gcore::button variant="secondary" data-dismiss="modal">Cerrar</x-gcore::button>
    │               <x-gcore::button variant="primary">Guardar Cambios</x-gcore::button>
    │           </x-slot:footer>
    │       </x-gcore::modal>
    │       ```
    │   ├── **Parámetros Obligatorios:**
    │       - `id` (string): Un ID único para el modal. Necesario para controlarlo con JavaScript.
    │   └── **Parámetros Opcionales:**
    │       - `title` (string): El título que se mostrará en la cabecera del modal. Por defecto: `''`.
    │       - `size` (string): El tamaño del modal ('sm', 'md', 'lg', 'xl'). Por defecto: 'md'.
    │       - `backdrop` (boolean): Si se debe mostrar un fondo oscuro detrás del modal. Por defecto: `true`.
    │       - `keyboard` (boolean): Si el modal se puede cerrar presionando la tecla ESC. Por defecto: `true`.
    │       - `class` (string): Clases CSS adicionales para el contenedor principal del modal.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor principal del modal.
    │       - Contenido (slot): El contenido principal del cuerpo del modal.
    │       - `footer` (slot): Contenido opcional para el pie de página del modal (ej. botones de acción).
[C] ├── `Navbar`
    │   ├── **Uso:** Para crear barras de navegación con una marca y elementos de navegación.
    │       ```blade
    │       <x-gcore::navbar brand="Mi Aplicación">
    │           <a href="#">Inicio</a>
    │           <a href="#">Acerca de</a>
    │           <a href="#">Contacto</a>
    │       </x-gcore::navbar>
    │       ```
    │   ├── **Parámetros Obligatorios:**
    │       - `brand` (string): El texto o HTML para la marca/logo de la barra de navegación.
    │   └── **Parámetros Opcionales:**
    │       - `class` (string): Clases CSS adicionales para el contenedor de la barra de navegación.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor de la barra de navegación.
    │       - Contenido (slot): Los elementos de navegación (ej. enlaces `<a>`).
[C] ├── `Notification`
    │   ├── **Uso:** Para mostrar notificaciones temporales o persistentes en la pantalla.
    │       ```blade
    │       <x-gcore::notification type="success" title="Éxito" message="Datos guardados correctamente." position="top-right" duration="3000" />
    │
    │       <x-gcore::notification type="info" position="bottom-left">
    │           Nueva actualización disponible.
    │       </x-gcore::notification>
    │       ```
    │   ├── **Parámetros Obligatorios:**
    │       - Ninguno (el contenido puede ser pasado por `message` o por el slot).
    │   └── **Parámetros Opcionales:**
    │       - `type` (string): El tipo de notificación ('info', 'success', 'warning', 'danger'). Por defecto: 'info'.
    │       - `message` (string): El contenido del mensaje de la notificación. Por defecto: `''`.
    │       - `title` (string): Título opcional para la notificación. Por defecto: `''`.
    │       - `position` (string): La posición en la pantalla ('top-right', 'top-left', 'bottom-right', 'bottom-left'). Por defecto: 'top-right'.
    │       - `duration` (int): La duración en milisegundos antes de ocultarse automáticamente (0 para persistente). Por defecto: `5000`.
    │       - `class` (string): Clases CSS adicionales para el contenedor de la notificación.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor de la notificación.
    │       - Contenido (slot): Contenido alternativo al parámetro `message` para HTML más complejo.
[C] ├── `Pagination`
    │   ├── **Uso:** Para mostrar controles de paginación para colecciones de datos de Laravel.
    │       ```blade
    │       {{ $users->links('gcore::components.pagination') }}
    │       ```
    │   ├── **Parámetros Obligatorios:**
    │       - `paginator` (LengthAwarePaginator|Paginator): Una instancia del paginador de Laravel (ej. `$users` después de llamar a `paginate()`).
    │   └── **Parámetros Opcionales:**
    │       - `class` (string): Clases CSS adicionales para el contenedor de la paginación.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor de la paginación.
[C] ├── `Paragraph`
    │   ├── **Uso:** Para crear párrafos de texto con opciones de estilo.
    │       ```blade
    │       <x-gcore::paragraph text="Este es un párrafo de ejemplo." class="text-gray-700" />
    │
    │       <x-gcore::paragraph>
    │           Este es otro párrafo con <strong>contenido HTML</strong>.
    │       </x-gcore::paragraph>
    │       ```
    │   ├── **Parámetros Obligatorios:**
    │       - Ninguno (el contenido puede ser pasado por `text` o por el slot).
    │   └── **Parámetros Opcionales:**
    │       - `text` (string): El contenido de texto del párrafo. Por defecto: `''`.
    │       - `class` (string): Clases CSS adicionales para el párrafo.
    │       - `style` (string): Estilos CSS inline adicionales para el párrafo.
    │       - Contenido (slot): Contenido alternativo al parámetro `text` para HTML más complejo.
[C] ├── `ProgressBar`
    │   ├── **Uso:** Para mostrar el progreso de una tarea.
    │       ```blade
    │       <x-gcore::progress-bar value="75" max="100" variant="success" striped animated show-label />
    │       ```
    │   ├── **Parámetros Obligatorios:**
    │       - `value` (int): El valor actual del progreso (entre 0 y `max`).
    │   └── **Parámetros Opcionales:**
    │       - `max` (int): El valor máximo del progreso. Por defecto: `100`.
    │       - `variant` (string): El estilo visual de la barra de progreso ('primary', 'success', 'warning', 'danger', 'info'). Por defecto: 'primary'.
    │       - `striped` (boolean): Si la barra de progreso debe tener un patrón de rayas. Por defecto: `false`.
    │       - `animated` (boolean): Si la barra de progreso debe tener una animación de rayas. Por defecto: `false`.
    │       - `showLabel` (boolean): Si se debe mostrar el porcentaje de progreso como texto. Por defecto: `false`.
    │       - `class` (string): Clases CSS adicionales para el contenedor de la barra de progreso.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor de la barra de progreso.
[C] ├── `Section`
    │   ├── **Uso:** Para crear secciones de contenido con un título opcional y estilos personalizables.
    │       ```blade
    │       <x-gcore::section title="Título de la Sección" class="bg-gray-100 p-8">
    │           <p>Contenido principal de la sección.</p>
    │       </x-gcore::section>
    │       ```
    │   ├── **Parámetros Obligatorios:**
    │       - Contenido (slot): El contenido principal de la sección.
    │   └── **Parámetros Opcionales:**
    │       - `title` (string): Título opcional para la sección. Por defecto: `''`.
    │       - `class` (string): Clases CSS adicionales para el contenedor de la sección.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor de la sección.
[I] ├── `SeoMeta`
    │   ├── **Uso:** Para generar meta etiquetas SEO dinámicamente.
    │   │   ```blade
    │   │   <x-gcore::seo-meta title="Mi Título SEO" description="Descripción de mi página." keywords="palabra1, palabra2" />
    │   │   ```
    │   ├── **Parámetros Obligatorios:**
    │   │   - Ninguno.
    │   └── **Parámetros Opcionales:**
    │       - `title` (string): El título de la página.
    │       - `description` (string): La descripción de la página.
    │       - `keywords` (string): Palabras clave de la página (separadas por comas).
    │       - `ogTitle` (string): Título para Open Graph.
    │       - `ogDescription` (string): Descripción para Open Graph.
    │       - `ogImage` (string): URL de la imagen para Open Graph.
    │       - `ogUrl` (string): URL canónica para Open Graph.
    │       - `twitterCard` (string): Tipo de tarjeta de Twitter (ej. 'summary_large_image').
    │       - `twitterSite` (string): Cuenta de Twitter del sitio.
    │       - `twitterCreator` (string): Cuenta de Twitter del creador.
    │       - `twitterTitle` (string): Título para Twitter.
    │       - `twitterDescription` (string): Descripción para Twitter.
    │       - `twitterImage` (string): URL de la imagen para Twitter.
[C] ├── `Spinner`
    │   ├── **Uso:** Para mostrar un indicador de carga o actividad.
    │       ```blade
    │       <x-gcore::spinner size="lg" color="#007bff" type="border" />
    │       ```
    │   ├── **Parámetros Obligatorios:**
    │       - Ninguno.
    │   └── **Parámetros Opcionales:**
    │       - `size` (string): El tamaño del spinner ('sm', 'md', 'lg'). Por defecto: 'md'.
    │       - `color` (string): El color del spinner (valor CSS o variable). Por defecto: `var(--color-primario)`.
    │       - `type` (string): El tipo de spinner ('border' o 'grow'). Por defecto: 'border'.
    │       - `class` (string): Clases CSS adicionales para el spinner.
    │       - `style` (string): Estilos CSS inline adicionales para el spinner.
[C] ├── `Table`
    │   ├── **Uso:** Para mostrar datos en formato tabular con varias opciones de estilo.
    │       ```blade
    │       <x-gcore::table :headers="['Nombre', 'Edad', 'Ciudad']" :rows="[['Juan', '30', 'Madrid'], ['Ana', '24', 'Barcelona']]" striped bordered hoverable responsive />
    │
    │       <x-gcore::table headers="['Producto', 'Precio']">
    │           <tr><td>Laptop</td><td>$1200</td></tr>
    │           <tr><td>Mouse</td><td>$25</td></tr>
    │       </x-gcore::table>
    │       ```
    │   ├── **Parámetros Obligatorios:**
    │       - Ninguno (el contenido puede ser pasado por `rows` o por el slot).
    │   └── **Parámetros Opcionales:**
    │       - `headers` (array): Un array de cadenas para los encabezados de la tabla. Por defecto: `[]`.
    │       - `rows` (array): Un array de arrays para los datos de las filas de la tabla. Por defecto: `[]`.
    │       - `striped` (boolean): Si las filas de la tabla deben tener un estilo alterno. Por defecto: `false`.
    │       - `bordered` (boolean): Si la tabla debe tener bordes en todas las celdas. Por defecto: `false`.
    │       - `hoverable` (boolean): Si las filas de la tabla deben tener un efecto al pasar el ratón. Por defecto: `false`.
    │       - `responsive` (boolean): Si la tabla debe ser responsiva (permite desplazamiento horizontal). Por defecto: `false`.
    │       - `class` (string): Clases CSS adicionales para el contenedor de la tabla.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor de la tabla.
    │       - Contenido (slot): Contenido HTML para las filas de la tabla. Si se usa, anula el parámetro `rows`.
[C] ├── `Tabs`
    │   ├── **Uso:** Para organizar contenido en paneles con pestañas navegables.
    │   │   ```blade
    │   │   <x-gcore::tabs :tabs="[['id' => 'tab1', 'label' => 'Información General', 'icon' => 'fas fa-info-circle'], ['id' => 'tab2', 'label' => 'Configuración', 'icon' => 'fas fa-cog']]" active-tab="tab1">
    │   │       <div id="tab1" class="gcore-tab-panel">
    │   │           <p>Contenido de la pestaña de Información General.</p>
    │   │       </div>
    │   │       <div id="tab2" class="gcore-tab-panel">
    │   │           <p>Contenido de la pestaña de Configuración.</p>
    │   │       </div>
    │   │   </x-gcore::tabs>
    │   │   ```
    │   ├── **Parámetros Obligatorios:**
    │   │   - `tabs` (array): Un array de objetos, donde cada objeto representa una pestaña y debe contener:
    │   │       - `id` (string): Un ID único para la pestaña y su panel asociado.
    │   │       - `label` (string): El texto que se mostrará en la pestaña.
    │   │       - `icon` (string, opcional): Clase de ícono de Font Awesome para mostrar junto al texto.
    │   │   - `activeTab` (string): El ID de la pestaña que estará activa por defecto al cargar el componente.
    │   └── **Parámetros Opcionales:**
    │       - `width` (string): Ancho del contenedor de las pestañas (ej. '100%', '500px'). Por defecto: '100%'.
    │       - `height` (string): Alto del contenedor de las pestañas (ej. '300px', 'auto'). Por defecto: 'auto'.
    │       - `backgroundColor` (string): Color de fondo del contenedor. Por defecto: `var(--color-fondo-principal)`.
    │       - `borderColor` (string): Color del borde del contenedor. Por defecto: `var(--color-borde-base)`.
    │       - `textColor` (string): Color del texto de las etiquetas de las pestañas. Por defecto: `var(--color-texto-principal)`.
    │       - `tabColor` (string): Color de fondo para las pestañas inactivas. Por defecto: 'transparent'.
    │       - `tabActiveColor` (string): Color de fondo para la pestaña activa. Por defecto: `var(--color-primario)`.
    │       - `tabHoverColor` (string): Color de fondo para las pestañas al pasar el ratón. Por defecto: `var(--color-primario)`.
    │       - `borderWidth` (string): Ancho del borde del contenedor. Por defecto: '1px'.
    │       - `borderRadius` (string): Radio del borde del contenedor. Por defecto: '5px'.
    │       - `boxShadow` (string): Sombra de la caja del contenedor. Por defecto: 'none'.
    │       - `class` (string): Clases CSS adicionales para el contenedor de las pestañas.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor de las pestañas.
    │       - Contenido (slot): Los paneles de contenido de las pestañas. Cada panel debe tener un `id` que coincida con el `id` de la pestaña correspondiente.
[I] ├── `TestimonialSlider`
    │   ├── **Uso:** Para mostrar testimonios de clientes en un carrusel o slider.
    │   │   ```blade
    │   │   <x-gcore::testimonial-slider :testimonials="[
    │   │       ['quote' => '¡Excelente producto y soporte!', 'author' => 'Juan Pérez', 'title' => 'CEO de Empresa X'],
    │   │       ['quote' => 'Ha transformado nuestra forma de trabajar.', 'author' => 'Ana García', 'title' => 'Gerente de Proyectos']
    │   │   ]" />
    │   │   ```
    │   ├── **Parámetros Obligatorios:**
    │   │   - `testimonials` (array): Un array de objetos, donde cada objeto representa un testimonio y debe contener:
    │   │       - `quote` (string): El texto del testimonio.
    │   │       - `author` (string): El nombre del autor del testimonio.
    │   │       - `title` (string, opcional): El título o cargo del autor.
    │   │       - `avatar` (string, opcional): URL de la imagen del avatar del autor.
    │   └── **Parámetros Opcionales:**
    │       - `autoplay` (boolean): Si el slider debe avanzar automáticamente. Por defecto: `true`.
    │       - `interval` (int): Intervalo en milisegundos para el avance automático. Por defecto: `5000`.
    │       - `showNavigation` (boolean): Si se deben mostrar los botones de navegación (flechas). Por defecto: `true`.
    │       - `showPagination` (boolean): Si se deben mostrar los indicadores de paginación (puntos). Por defecto: `true`.
    │       - `class` (string): Clases CSS adicionales para el contenedor del slider.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor del slider.
[I] ├── `Tooltip`
    │   ├── **Uso:** Para mostrar información adicional al pasar el ratón sobre un elemento.
    │   │   ```blade
    │   │   <x-gcore::tooltip text="Este es un tooltip de ejemplo." position="top">
    │   │       <button>Pasa el ratón por aquí</button>
    │   │   </x-gcore::tooltip>
    │   │   ```
    │   ├── **Parámetros Obligatorios:**
    │   │   - Contenido (slot): El elemento HTML sobre el cual se mostrará el tooltip.
    │   │   - `text` (string): El texto que se mostrará en el tooltip.
    │   └── **Parámetros Opcionales:**
    │       - `position` (string): La posición del tooltip respecto al elemento ('top', 'bottom', 'left', 'right'). Por defecto: 'top'.
    │       - `delay` (int): Retraso en milisegundos antes de mostrar el tooltip. Por defecto: `100`.
    │       - `class` (string): Clases CSS adicionales para el contenedor del tooltip.
    │       - `style` (string): Estilos CSS inline adicionales para el contenedor del tooltip.
