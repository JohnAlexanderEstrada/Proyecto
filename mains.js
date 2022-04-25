function initMap() {
    const ubicacion = new Localizacion(() => {

        const options = {
            center: {
                lat: ubicacion.latitude,
                lng: ubicacion.longitude
            },
            zoom: 10
        }

        var map = document.getElementById('map');
        const mapa = new google.maps.Map(map, options);

    });
}
