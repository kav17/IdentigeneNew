ymaps.ready(init);

function init() {
    // Данные о местоположении, определённом по IP
    var geolocation = ymaps.geolocation;
    // координаты
    //    coords = [geolocation.latitude, geolocation.longitude],
    //    myMap = new ymaps.Map('map', {
    //        center: coords,
    //        zoom: 10
    //    });
    //myMap.geoObjects.add(
    //    new ymaps.Placemark(
    //        coords,
    //        {
                // В балуне: страна, город, регион.
    //            balloonContentHeader: geolocation.country,
     //           balloonContent: geolocation.city,
    //            balloonContentFooter: geolocation.region
    //        }
    //    )
    //);
    
    //$('#city').html(geolocation.city);

    var city = geolocation.city;


    if (city === 'Винница') {
       window.location.href = "/ru/dnk-test-v-g-vinnitsa";       
    } else if (city === 'Днепропетровск' || city === 'Днепр' || city === 'Синельниково') {
       window.location.href = "/ru/dnk-test-v-g-dnepropetrovsk";
    } else if (city === 'Мариуполь') {
       window.location.href = "/ru/dnk-test-v-g-mariupol";
    } else if (city === 'Житомир') {
       window.location.href = "/ru/dnk-test-v-g-zhitomir";
    } else if (city === 'Запорожье') {
       window.location.href = "/ru/dnk-test-v-g-zaporozhe";
    } else if (city === 'Ивано-Франковск') {
       window.location.href = "/ru/dnk-test-v-g-ivano-frankovsk";
    } else if (city === 'Кировоград') {
       window.location.href = "/ru/dnk-test-v-g-kirovograd";
    } else if (city === 'Северодонецк') {
       window.location.href = "/ru/dnk-test-v-g-severodonetsk";
    } else if (city === 'Луцк') {
       window.location.href = "/ru/dnk-test-v-g-lutsk";
    } else if (city === 'Львов') {
       window.location.href = "/ru/dnk-test-v-g-lvov";
    } else if (city === 'Николаев') {
       window.location.href = "/ru/dnk-test-v-g-nikolaev";
    } else if (city === 'Одесса') {
       window.location.href = "/ru/dnk-test-v-g-odessa";
    } else if (city === 'Полтава') {
       window.location.href = "/ru/dnk-test-v-g-poltava";
    } else if (city === 'Ровно') {
       window.location.href = "/ru/dnk-test-v-g-rovno";
    } else if (city === 'Суммы') {
       window.location.href = "/ru/dnk-test-v-g-summy";
    } else if (city === 'Тернополь') {
       window.location.href = "/ru/dnk-test-v-g-ternopol";
    } else if (city === 'Ужгород') {
       window.location.href = "/ru/dnk-test-v-g-uzhgorod";
    } else if (city === 'Харьков') {
       window.location.href = "/ru/dnk-test-v-g-harkov";
    } else if (city === 'Херсон') {
       window.location.href = "/ru/dnk-test-v-g-herson";
    } else if (city === 'Хмельницкий') {
       window.location.href = "/ru/dnk-test-v-g-hmelnitskij";
    } else if (city === 'Черкассы') {
       window.location.href = "/ru/dnk-test-v-g-cherkassy";
    } else if (city === 'Чернигов') {
       window.location.href = "/ru/dnk-test-v-g-chernigov";
    } else if (city === 'Черновцы') {
       window.location.href = "/ru/dnk-test-v-g-chernovtsy";
    } else {
        window.location.href = "/ru/dnk-test-v-g-kiev";
    }



}