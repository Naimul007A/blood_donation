/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/admin.js ***!
  \*******************************/
$(document).ready(function () {
  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
    }
  });
  $("#addGroup").on("click", function (e) {
    $("#addGroupModal").modal("show").fadeIn();
  });
  //form data save in database
  $("#addGroupForm").on("submit", function (e) {
    e.preventDefault();
    var name = $("#group_name").val();
    if (name === "") {
      $("#group_name").addClass("is-invalid");
    } else {
      var form = $(this)[0];
      var data = new FormData(form);
      $.ajax({
        url: "/admin/group",
        type: "POST",
        data: data,
        processData: false,
        contentType: false,
        success: function success(response) {
          if (response == true) {
            $("#addGroupForm")[0].reset();
            $("#addGroupModal").modal("hide").fadeOut();
            swal({
              title: "Group add successfully!.",
              icon: "success",
              buttons: "Ok"
            }).then(function () {
              window.location.reload();
            });
          }
        }
      });
    }
  });
  //delete group
  $(document).on("click", "#deleteGroup", function (e) {
    var _this = this;
    e.preventDefault();
    swal({
      title: "Are you sure?",
      text: "You will not be able to recover this imaginary file!",
      icon: "warning",
      buttons: true,
      dangerMode: true
    }).then(function (willDelete) {
      if (willDelete) {
        var id = $(_this).data("id");
        $.ajax({
          url: "/admin/group/" + id,
          type: "DELETE",
          success: function success(response) {
            if (response == true) {
              swal({
                title: "Group Delete successfuly!.",
                icon: "success",
                buttons: "Ok"
              }).then(function () {
                window.location.reload();
              });
            }
          }
        });
      }
    });
  });
  //edit modal show
  $(document).on("click", "#editGroup", function (e) {
    e.preventDefault();
    var id = $(this).data("id");
    $.ajax({
      url: "/admin/group/" + id + "/edit",
      type: "GET",
      success: function success(response) {
        // console.log(response)
        $("#up_group_name").val(response.name);
        $("#up_group_id").val(response.id);
        $("#editGroupModal").modal("show").fadeIn;
      }
    });
  });
  $("#editGroupForm").on("submit", function (e) {
    e.preventDefault();
    var name = $("#up_group_name").val();
    var id = $("#up_group_id").val();
    if (name == "") {
      $("#up_group_name").addClass("is-invalid");
    } else {
      var form = $("#editGroupForm")[0];
      var formdata = new FormData(form);
      $.ajax({
        url: "/admin/group/" + id,
        type: "POST",
        data: formdata,
        contentType: false,
        processData: false,
        success: function success(response) {
          console.log(response);
          if (response == true) {
            $("#editGroupForm")[0].reset();
            $("#editGroupModal").modal("hide");
            swal({
              title: "Group Update successfully!.",
              icon: "success",
              buttons: "Ok"
            }).then(function () {
              window.location.reload();
            });
          }
        }
      });
    }
  });
});
/******/ })()
;