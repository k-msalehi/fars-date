function fd_date2jalali(dateString) {
    return (new Date(dateString).toLocaleDateString('fa-IR', {
        day: "numeric",
        month: "short",
        year: "numeric",
      //  hour: "numeric",
     //   minute: "2-digit",
        timeZone: "Asia/Tehran"
    }));

}

var list = document.querySelectorAll(".comment-date,.entry-date");
for (var i = 0; i < list.length; i++) {
    list[i].innerHTML = list[i].innerHTML.replace(
        /([0-9]+-[0-9]+-[0-9]+)/,
        function ($0) { return fd_date2jalali([$0]) }
    );
}
