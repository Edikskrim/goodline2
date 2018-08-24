setInterval(function () {
    var img = document.getElementById("not_available");
    var lamp = document.getElementById("lampOff");
    var xhr = new XMLHttpRequest();
    xhr.open('GET', window.location.pathname, true);
    xhr.addEventListener('readystatechange', function () {
        if (xhr.status === 200) {
            img.src = "img/available.png";
            img.useMap = "#map";
            lamp.style.display = "block";
        }
    });
    xhr.send();
}, 5000);
