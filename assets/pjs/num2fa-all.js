function en2faNumAll() {
var map =
[
    "۰","۱","۲","۳","۴","۵","۶","۷","۸","۹"
]
document.body.innerHTML =
document.body.innerHTML.replace(
/\d(?=[^<>]*(<|$))/g,
function($0) { return map[$0] }
);
}
en2faNumAll();