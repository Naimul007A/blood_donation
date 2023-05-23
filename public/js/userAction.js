/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/custom.js ***!
  \********************************/
$(Document).ready(function () {
  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
    }
  });
  //notification
  // message methods
  function messageHide(type) {
    $("#message").animate({
      opacity: 0,
      top: "0px"
    }, "slow");
    setTimeout(function () {
      $("#message").html("");
      $("#message").removeClass("bg-" + type + " p-2 fw-bold text-light");
    }, 1000);
  }
  function messageShow(data, type) {
    $("#message").html(data);
    $("#message").addClass("bg-" + type + " p-2 fw-bold text-light");
    $("#message").animate({
      opacity: 1,
      top: "70px"
    }, "slow");
    setTimeout(function () {
      messageHide(type);
    }, 3000);
  }
  // User login process and check
  $("#User-login").on("submit", function (e) {
    e.preventDefault();
    var role = document.querySelector('input[type="radio"]:checked').value;
    var email = document.querySelector('input[name="email"]').value;
    var password = document.querySelector('input[name="password"]').value;
    if (email == "") {
      messageShow("Email Field Required", "danger");
    } else if (password == "") {
      messageShow("Password Field Required", "danger");
    } else {
      var data = $(this)[0];
      var format = new FormData(data);
      if (role == 0) {
        var url = "/user/login";
      } else {
        var url = "/donor/login";
      }
      $.ajax({
        url: url,
        type: "POST",
        data: format,
        processData: false,
        contentType: false,
        success: function success(data) {
          if (data == true) {
            messageShow("Login Successfully", "success");
            setTimeout(function () {
              window.location.href = "/";
            }, 3000);
          } else {
            messageShow("Email or Password Incorrect!", "danger");
          }
        }
      });
    }
  });
});
/******/ })()
;