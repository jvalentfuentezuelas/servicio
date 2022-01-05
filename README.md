# Ejemplo de Servicio donde se utilizan tres funciones: suma, adios y saludo.
# Se utiliza la libreria PHP2WDSL instalada con composer. El fichero crear_wdsl.php crea el fichero saludo.wdsl
# que es el define el servicio a partir de la clase HolaServicio.php.
# soap_cliente.php hace tres llamadas al servicio que está definido en soap_server. Aquí este hace uso de saludo.wsdl




# Utilizamos la opción --no-cache para que los cambios en el repositorio tengan efecto. De lo contario tira de cache y no se actualizan los últimos cambios
# docker build . --no-cache -t jvalent716/servicio:1.0
# docker run -d -it -p 9999:80   --disable-content-trust=true --name final jvalent716/servicio:1.0
