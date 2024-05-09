$(document).ready(function() {
    activateCurrentMenu();

});

function activateCurrentMenu() {
    try {
        var path = window.location.pathname + window.location.search;
        var page = path.split("/").pop();

        $(".allpagesview-left ul li").each(function() {
            if ($(this).find("a").attr("href").split("/").pop() == page) {
                $(this).addClass("active");
            }
        });
    } catch (err) {

    }
}