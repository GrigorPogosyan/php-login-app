$(document).ready(function () {
    $("#nav-login-button-js").on("click", function (event) {
        event.preventDefault();
        if (getLastUrl() != "index.php") {
            location.href = "index.php";
        }
    });

    $("#nav-signup-button-js").on("click", function (event) {
        event.preventDefault();
        if (getLastUrl() != "register.php") {
            location.href = "register.php";

        }

    });

});

function getLastUrl() {
    last_url = window.location.pathname.split("/").pop()
    return last_url;
}
