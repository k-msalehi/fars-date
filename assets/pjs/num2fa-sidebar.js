function en2faSidebar() {
    var map =
    [
      "۰","۱","۲","۳","۴","۵","۶","۷","۸","۹"
    ];
    var list = document.querySelectorAll("aside");
    for (var i = 0; i < list.length; i++) {
      list[i].innerHTML = list[i].innerHTML.replace(
    /\d(?=[^<>]*(<|$))/g,
    function($0) { return map[$0] }
    );
      }
    
    }
    en2faSidebar();