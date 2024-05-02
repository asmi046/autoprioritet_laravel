<div class="contacts_page_blk">
    <p><strong>Адрес: </strong> {{ $contacts["adress"] }}</p>
    <p><strong>e-mail: </strong> {{ $contacts["email"] }}</p>
    <p><strong>Skype: </strong> {{ $contacts["skype"] }}</p>
    <p><strong>icq: </strong> {{ $contacts["icq"] }}</p>
    <h2>Телефоны</h2>
    <p><a href="tel:+7{{ phone_format($contacts['phone']) }}">{{ $contacts['phone'] }}</a></p>
    <p><a href="tel:+7{{ phone_format($contacts['phone2']) }}">{{ $contacts['phone2'] }}</a></p>
</div>


<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script>
    let all_contact_data = @json($contacts);
    let geo_mgeo = all_contact_data.map_geo.split(',')

    ymaps.ready(init);

    function init () {
        console.log(geo_mgeo);
        var myMap = new ymaps.Map("map_page", {
            // Координаты центра карты
            center: geo_mgeo,
            // Масштаб карты
            zoom: 17,
            // Выключаем все управление картой
            controls: ['geolocationControl','zoomControl']
        });

        let myGeoObjects = new ymaps.Placemark(geo_mgeo,
        {
            hintContent: '<div class="map-hint">'+all_contact_data.adress+'</div>',
            balloonContent: '<div class="map-hint"><b>'+all_contact_data.adress+'</b> <br/> '+all_contact_data.phone+' </div>',
            }
            ,{
                color:'#65B965'
            }
        );



        myMap.geoObjects.add(myGeoObjects);

        // Отключим zoom
        myMap.behaviors.disable('scrollZoom');

    }

</script>
<br>
<div id="map_page" class="map_page"></div>
<br>
