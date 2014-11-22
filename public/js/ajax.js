$("document").ready(function () {
    $("#save_url").click(function () {
        $('#new_url').remove();
        $.ajax({
            type: "POST",
            url: "create",
            data: {url: $("#url").val()}
        })
        .done(function (msg) {
            $("#short_url").append("<h3 id=\"new_url\"><a href=\"" + msg + "\">" + msg + "</a></h3>");
        });
    });
});
        