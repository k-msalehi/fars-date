function en2faNumAll() {
    var map =
        [
            "۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹"
        ]
    var map2 = '/\d(?=[^<>]*(<|$))/g';
    document.body.innerHTML =
        document.body.innerHTML.replace(
            map2,
            function ($0) { return map[$0] }
        );

    var list = document.querySelectorAll("pre");
    for (var i = 0; i < list.length; i++) {
        list[i].innerHTML = list[i].innerHTML.replace(
            map,
            function ($0) { return map2[$0] }
        );
    }
}
en2faNumAll();