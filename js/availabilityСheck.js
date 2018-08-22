setInterval(function () {
    var img = document.getElementById("img_not_available");
    var xhr = new XMLHttpRequest();
    xhr.open('GET', window.location.pathname, true);
    xhr.addEventListener('readystatechange', function () {
        if (xhr.status === 200) {
            img.src = "/img/available.png";
            img.useMap = "#map";
        }
    });
    xhr.send();
}, 5000); // Проверка каждые 5 секунд
