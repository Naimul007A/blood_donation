$(Document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    // User login process and check
    $("#User-login").on("submit", function (e) {
        e.preventDefault();
        const role = document.querySelector(
            'input[type="radio"]:checked'
        ).value;
        const email = document.querySelector('input[name="email"]').value;
        const password = document.querySelector('input[name="password"]').value;
        if (email == "") {
            alert("email value required");
        } else if (password == "") {
            alert("password value required");
        } else {
            const data = $(this)[0];
            const formdata = new FormData(data);
            if (role == 0) {
                var url = "/user/login";
            } else {
                var url = "/donor/login";
            }
            $.ajax({
                url: url,
                type: "POST",
                data: formdata,
                processData: false,
                contentType: false,
                success: function (data) {
                    window.location.href = "/";
                },
            });
        }
    });
});
