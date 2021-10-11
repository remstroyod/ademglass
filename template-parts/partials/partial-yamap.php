<?php
/*
 * Yandex Map
 */
if ( ! defined('ABSPATH')) :
    exit();
endif;

$coords = json_decode(get_field('contacts-map', 'options'));
$coords_doors = json_decode(get_field('contacts-doors-map', 'options'));

?>
<!-- Yandex Map -->
<script src="//api-maps.yandex.ru/2.0/?load=package.standard,package.geoObjects&lang=ru-RU&onload=initMapFooter"></script>

<script>
    var initMapFooter = function(){
        var myMap = new ymaps.Map("footer-map", {
                center: [ <?= $coords->center_lat ?>,<?= $coords->center_lng ?> ],
                zoom: 11
            });

        var myPlacemark1 = new ymaps.Placemark([ <?= $coords->center_lat ?>,<?= $coords->center_lng ?> ], {
            hintContent: 'Основной офис',
            balloonContent: 'Основной офис',
            iconCaption: '',
        }, {
            iconLayout: "default#image",
            iconImageHref: "<?= get_template_directory_uri() ?>/assets/css/images/map-marker-footer.png",
            iconImageSize: [39, 39],
            iconImageOffset: [-20, -20],
            preset: 'islands#redDotIconWithCaption',
        });

        var myPlacemark2 = new ymaps.Placemark([ <?= $coords_doors->center_lat ?>,<?= $coords_doors->center_lng ?> ], {
            hintContent: 'Стеклянные перегородки и двери',
            balloonContent: 'Стеклянные перегородки и двери',
            iconCaption: '',
        }, {
            iconLayout: "default#image",
            iconImageHref: "<?= get_template_directory_uri() ?>/assets/css/images/map-marker-footer.png",
            iconImageSize: [39, 39],
            iconImageOffset: [-20, -20],
            preset: 'islands#redDotIconWithCaption',
        });



        myMap.geoObjects.add(myPlacemark1);
        myMap.geoObjects.add(myPlacemark2);

        myMap.setBounds(myMap.geoObjects.getBounds(),{checkZoomRange:true, zoomMargin:9});

        if(document.getElementById('contacts-map')) {
            var myMapContacts = new ymaps.Map("contacts-map", {
                    center: [ <?= $coords->center_lat ?>,<?= $coords->center_lng ?> ],
                    zoom: 11
                }),
                myPlacemarkContacts = new ymaps.Placemark([ <?= $coords->center_lat ?>,<?= $coords->center_lng ?> ], {
                    hintContent: 'Основной офис',
                    balloonContent: 'Основной офис',
                    iconCaption: '',
                }, {
                    iconLayout: "default#image",
                    iconImageHref: "<?= get_template_directory_uri() ?>/assets/css/images/map-marker-contacts.png",
                    iconImageSize: [63, 76],
                    iconImageOffset: [-32, -76]
                }),
                myPlacemarkContactsDoors = new ymaps.Placemark([ <?= $coords_doors->center_lat ?>,<?= $coords_doors->center_lng ?> ], {
                    hintContent: 'Стеклянные перегородки и двери',
                    balloonContent: 'Стеклянные перегородки и двери',
                    iconCaption: '',
                }, {
                    iconLayout: "default#image",
                    iconImageHref: "<?= get_template_directory_uri() ?>/assets/css/images/map-marker-contacts.png",
                    iconImageSize: [63, 76],
                    iconImageOffset: [-32, -76]
                });
            myMapContacts.geoObjects.add(myPlacemarkContacts);
            myMapContacts.geoObjects.add(myPlacemarkContactsDoors);

            myMapContacts.setBounds(myMapContacts.geoObjects.getBounds(),{checkZoomRange:true, zoomMargin:9});
        }

    };
</script>
