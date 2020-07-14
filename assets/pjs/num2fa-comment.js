function en2faNumPostTitle() {
    var map =
    [
      "۰","۱","۲","۳","۴","۵","۶","۷","۸","۹"
    ];
    var list = document.querySelectorAll(".comment-title,.comment,.comment-box");
    for (var i = 0; i < list.length; i++) {
      list[i].innerHTML = list[i].innerHTML.replace(
    /\d(?=[^<>]*(<|$))/g,
    function($0) { return map[$0] }
    );
      }
    
    }
    en2faNumPostTitle();