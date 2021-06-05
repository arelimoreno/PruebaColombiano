$(document).ready(function () {
  createProperties();
  createProspects();
  createCustomers();
  editProperties();
  editCustomers();
  delateProperties();
  delateCustomers();
  autoCustomers();

  // slider
  $(".slider-hero").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 1000,
      fade: true,
  });

  // datepicker
  $("#date").datepicker();
});

// Properties
function createProperties() {
  $("#createProperties").submit(function (e) {
  e.preventDefault();
    $(".message").hide();
    var settings = {
      url: "/crud/create_properties.php",
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      data: {
        name: $("#name").val(),
        address: $("#address").val(),
        description: $("#description").val(),
        builder: $("#builder").val(),
        contact: $("#contact").val(),
      },
    };

    $.ajax(settings).done(function (response) {
      console.log(response);
      if (response === "error") {
        $("#alertDanger").fadeIn();
      } else {
        $("#alertSaved").fadeIn();
        // clear form inputs
        $("#name").val();
        $("#address").val();
        $("#description").val();
        $("#builder").val();
        $("#contact").val();
      }
    });
  });
}

function editProperties() {
  $("#editProperties").submit(function (e) {
    e.preventDefault();
    var settings = {
      url: "/crud/edit_properties.php",
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      data: {
        id: $("#propertiesId").val(),
        name: $("#name").val(),
        address: $("#address").val(),
        description: $("#description").val(),
        builder: $("#builder").val(),
        contact: $("#contact").val(),
      },
    };

    $.ajax(settings).done(function (response) {
      console.log(response);
      if (response === "error") {
        $("#alertDanger").fadeIn();
      } else {
        $("#alertSaved").fadeIn();

        setTimeout(function () {
          window.location.href = "index.php";
        }, 3000);
      }
    });
  });
}

function delateProperties() {
  $(".delated").on("click", function (e) {
    e.preventDefault();
    $id = $(this).data("id");
    var conf = confirm("¿Está seguro, realmente desea eliminar el registro?");
    if (conf == true) {
      var settings = {
        url: "/crud/delate_properties.php",
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
      data: {
        id: $id,
      },
    };

    $.ajax(settings).done(function (response) {
    console.log(response);

      if (response === "error") {
        alert("Lo sentimos hubo un error");
      } else {
        $("#alertSaved").fadeIn();
        setTimeout(function () {
          $("#alertSaved").fadeOut();
          }, 4000);
        }
      })
    }
  });
}

// Customers
function createCustomers() {
  $("#createCustomers").submit(function (e) {
    e.preventDefault();
    $(".message").hide();
    var settings = {
        url: "/crud/create_customers.php",
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
      },
      data: {
        first: $("#first").val(),
        last: $("#last").val(),
        email: $("#email").val(),
        phone: $("#phone").val(),
        city: $("#city").val(),
        date: $("#date").val(),
      },
    };

    $.ajax(settings).done(function (response) {
    console.log(response);
    if (response === "error") {
    $("#alertDanger").fadeIn();
    } else {
    $("#alertSaved").fadeIn();
    // clear form inputs
    $("#first").val(), $("#last").val(), $("#email").val(), $("#phone").val(), $("#city").val(), $("#date").val();
    }
    });
  });
}


function editCustomers() {
  $("#updateCustomers").submit(function (e) {
    e.preventDefault();
    var settings = {
      url: "/crud/edit_customers.php",
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      data: {
        id: $("#customersId").val(),
        first: $("#first").val(),
        last: $("#last").val(),
        email: $("#email").val(),
        phone: $("#phone").val(),
        city: $("#city").val(),
        date: $("#date").val(),
      },
    };

    $.ajax(settings).done(function (response) {
    console.log(response);
      if (response === "error") {
        $("#alertDanger").fadeIn();
      } else {
      $("#alertSaved").fadeIn();
        setTimeout(function () {
        window.location.href = "view_customers.php";
        }, 3000);
      }
    });
  });
}

function delateCustomers() {
  $(".delatedCustomers").on("click", function (e) {
    e.preventDefault();
    $id = $(this).data("id");
    var conf = confirm("¿Está seguro, realmente desea eliminar el registro?");
    if (conf == true) {
    var settings = {
      url: "/crud/delate_customers.php",
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      data: {
        id: $id,
      },
    };

    $.ajax(settings).done(function (response) {
      console.log(response);
        if (response === "error") {
          alert("Lo sentimos hubo un error");
        } else {
          $("#alertSaved").fadeIn();
          setTimeout(function () {
          $("#alertSaved").fadeOut();
          }, 4000);
        }
      });
    }
  });
}

// Autocomplete
function autoCustomers() {
  $("#nameCustomers").on("keyup", function () {
    var name = $(this).val();

    if (name.length !== "") {
      var settings = {
        url: "/crud/autocomplete_customers.php",
        method: "POST",
        timeout: 0,
        headers: {
         "Content-Type": "application/x-www-form-urlencoded",
        },
        data: {
          first_name: $(this).val(),
        },
     };

      $.ajax(settings).done(function (response) {
        $("#resultList").html(response);
        $("#resultList").fadeIn();
      });
      } else {
        $("#resultList").html("");
        $("#resultList").fadeOut();
      }
  });

    $(document).on("click", "li", function () {
      var idCustomers = $(this).data("id");
      $("#nameCustomers").val($(this).text());
      $("#idCustomers").val(idCustomers);
      $("#resultList").fadeOut("fast");
    });
}

// Prospects

function createProspects() {
  $("#autocomplete").submit(function (e) {
    e.preventDefault();
    $(".message").hide();
    var settings = {
      url: "/crud/attach.php",
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      data: {
        customers: $("#idCustomers").val(),
        properties: $("#propertiesId").val(),
      },
    };

    $.ajax(settings).done(function (response) {
      console.log(response);
      if (response === "error") {
      $("#alertDanger").fadeIn();
      } else {
      $("#alertSaved").fadeIn();
      }
    });
  });
}
