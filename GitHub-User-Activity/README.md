```markdown
# GitHub User Activity Tracker

Este es un script PHP que permite obtener y mostrar las actividades más recientes de un usuario de GitHub. Para ello, consulta la API de GitHub y cuenta la frecuencia de cada tipo de evento relacionado con los repositorios del usuario. El resultado es un conteo de los eventos asociados a cada repositorio en el perfil del usuario.

## Requisitos

- PHP 7.0 o superior.
- Acceso a la API de GitHub con una clave de autenticación.
  
## Funcionalidades

- Consulta de eventos recientes de un usuario en GitHub.
- Conteo de la frecuencia de cada tipo de evento (como "Push", "Fork", "Issue", etc.) por repositorio.
- Muestra los resultados en la consola.

## Instalación

1. Clona o descarga el repositorio.
2. Asegúrate de tener PHP instalado en tu máquina. Puedes verificarlo ejecutando `php -v` en la terminal.
3. Ejecuta el script PHP con el siguiente comando:

```bash
php github_activity.php
```

## Uso

1. Al ejecutar el script, se te pedirá que ingreses tu nombre de usuario de GitHub:
    ```bash
    > ENTER YOUR GITHUB USERNAME
    > github-activity <username>
    ```
2. El script hará una solicitud a la API de GitHub para obtener los eventos recientes de ese usuario.
3. El conteo de los eventos por repositorio se imprimirá en la consola.

## Ejemplo de Salida

```bash
> WELCOME TO GITHUB USER ACTIVITY
> ENTER YOUR GITHUB USERNAME
> github-activity <username>
Array
(
    [PushEvent - example-repo] => 5
    [ForkEvent - another-repo] => 3
    ...
)
```

## Detalles Técnicos

El script hace uso de la función `file_get_contents` para realizar una solicitud HTTP a la API de GitHub. Para cada evento encontrado en la respuesta, se utiliza la función `newEvent` para contar la ocurrencia de cada tipo de actividad en los repositorios del usuario.

## Consideraciones

- Asegúrate de proporcionar un token de autenticación de GitHub válido si es necesario (el token se debe insertar en la línea `Authorization: key` en el código).
- La API de GitHub puede tener limitaciones de tasa, así que asegúrate de no exceder las peticiones permitidas.

## Contribuciones

Si deseas contribuir, abre un pull request con tus mejoras o correcciones.

## Licencia

Este proyecto está bajo la Licencia MIT - ver el archivo [LICENSE](LICENSE) para más detalles.
```