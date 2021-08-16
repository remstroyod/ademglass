<?php
/*
 * Yandex Map
 */
if ( ! defined('ABSPATH')) :
    exit();
endif;

$coords = json_decode(get_field('contacts-map', 'options'));

?>
<!-- Yandex Map -->
<script src="//api-maps.yandex.ru/2.0/?load=package.standard,package.geoObjects&lang=ru-RU&onload=initMapFooter"></script>

<script>
    var initMapFooter = function(){
        var myMap = new ymaps.Map("footer-map", {
                center: [ <?= $coords->center_lat ?>,<?= $coords->center_lng ?> ],
                zoom: 11
            }),
            myPlacemark1 = new ymaps.Placemark([ <?= $coords->center_lat ?>,<?= $coords->center_lng ?> ], {
                iconContent: "",
                balloonContent: "",
                hintContent: ""
            }, {
                iconLayout: "default#image",
                iconImageHref: "<?= get_template_directory_uri() ?>/assets/css/images/map-marker-footer.png",
                iconImageSize: [39, 39],
                iconImageOffset: [0, 0]
            });
        myMap.geoObjects.add(myPlacemark1);

        if(document.getElementById('contacts-map')) {
            var myMapContacts = new ymaps.Map("contacts-map", {
                    center: [ <?= $coords->center_lat ?>,<?= $coords->center_lng ?> ],
                    zoom: 11
                }),
                myPlacemarkContacts = new ymaps.Placemark([ <?= $coords->center_lat ?>,<?= $coords->center_lng ?> ], {
                    iconContent: "",
                    balloonContent: "",
                    hintContent: ""
                }, {
                    iconLayout: "default#image",
                    iconImageHref: "<?= get_template_directory_uri() ?>/assets/css/images/map-marker-contacts.png",
                    iconImageSize: [63, 76],
                    iconImageOffset: [0, 0]
                });
            myMapContacts.geoObjects.add(myPlacemarkContacts);
        }

    };
</script>
