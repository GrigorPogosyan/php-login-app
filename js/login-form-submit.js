$(document).ready(function () {
    $("#form").on("submit", function (event) {
        event.preventDefault();
        $("#oculto").addClass("invisible-1");
        $("#alert").removeClass("fade-in-div");
        $("form-submit-js").attr("disabled", "true");
        $.ajax({
            type: "POST",
            url: "form-request.php",
            data: $(this).serialize(),
            success: function (response) {
                var jsonData = JSON.parse(response); // Parse the JSON response into a JavaScript object
                if (jsonData.status == "success") {
                    location.href = "me.php";
                } else {
                    $("#oculto").removeClass("invisible-1");
                    $("#alert").addClass("fade-in-div");
                    $("#passinput-js").val("");
                }
                $("form-submit-js").removeAttr("disabled");
            },
        });
    });
});
