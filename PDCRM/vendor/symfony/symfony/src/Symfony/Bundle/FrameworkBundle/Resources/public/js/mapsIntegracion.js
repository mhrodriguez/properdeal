/**
 * Created by davatar on 4/3/16.
 */

var map;
var markers = [];

try
{
    google.maps.event.addDomListener(window, 'load', inicializarMapa);
}
catch(error)
{
    alert('No fue posible cargar el componente Google Maps.\nNota: se requiere conexión a Internet para usar esta característica.');
}

function setMapControl(mapControl, mapOptions)
{
    map = new google.maps.Map(mapControl, mapOptions);
}

function inicializarMapa() {
    // Try HTML5 geolocation
    /*if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var pos = new google.maps.LatLng(position.coords.latitude,
                position.coords.longitude);
            map.setCenter(pos);
        }, function () {
            //handleNoGeolocation(true);
        });
    } else {
        // Browser doesn't support Geolocation
        //handleNoGeolocation(false);
    }*/
}

function geocodeDireccion(direccion, callbackFuncion) {
    var geocoder = new google.maps.Geocoder();
    var direcciones = [];

    geocoder.geocode({ 'address': direccion }, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK)
        {
            callbackFuncion(true, results, null);
        } else
        {
            if (status == google.maps.GeocoderStatus.ZERO_RESULTS)
            {
                callbackFuncion(false, null, "No se encontraron ubicaciones con la información de la dirección proporcionada.");
            }
            else
            {
                alert("Geocode was not successful for the following reason: " + status);
            }
        }
    });

    return direcciones;
}

function mostrarMarcadorEnMapa(marcador)
{
    map.setCenter(marcador.geometry.location);

    var marker = new google.maps.Marker({
        map: map,
        position: marcador.geometry.location
    });

    markers.push(marker);
}

function mostrarMarcadorEnMapa2(latitud, longitud, titulo) {

    var marker = new google.maps.Marker({
        map: map,
        position: new google.maps.LatLng(latitud, longitud),
        title: titulo
    });

    map.setCenter(new google.maps.LatLng(latitud, longitud));
    markers.push(marker);
}

function centrarEnMapa(position) {

    map.setCenter(position.geometry.location);
}

function removerTodosMarcadoresDeMapa() {
    for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(null);
    }

    markers = [];
}