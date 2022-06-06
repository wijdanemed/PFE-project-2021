/*!
    * Start Bootstrap - Agency v6.0.3 (https://startbootstrap.com/theme/agency)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
    */



 /*document.onload =  document.addEventListener("DOMContentLoaded", function() {
    alert('im loading baby');
  });*/
    (function ($) {
    "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
        if (
            location.pathname.replace(/^\//, "") ==
                this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length
                ? target
                : $("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
                $("html, body").animate(
                    {
                        scrollTop: target.offset().top - 72,
                    },
                    1000,
                    "easeInOutExpo"
                );
                return false;
            }
        }
    });
function copy(){
    
        /* Get the text field */
        var copyText = document.getElementById("mail");
      
        /* Select the text field */
        copyText.select();

        /* Copy the text inside the text field */
        document.execCommand("copy");
}
    // Closes responsive menu when a scroll trigger link is clicked
    $(".js-scroll-trigger").click(function () {
        $(".navbar-collapse").collapse("hide");
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $("body").scrollspy({
        target: "#mainNav",
        offset: 74,
    });

    // Collapse Navbar
    var navbarCollapse = function () {
        if ($("#mainNav").offset().top > 100) {
            $("#mainNav").addClass("navbar-shrink");
        } else {
            $("#mainNav").removeClass("navbar-shrink");
        }
    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);
})(jQuery); // End of use strict

$("#loginbutton").click(function () {

    $("#login")[0].reset();
    $('#loginModal').modal('show');

    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    })
});

  $("#creation").click(function () {
    $('#loginModal').modal('hide');

    $("#create")[0].reset();
    $('#createmodal').modal('show');
    });
    document.getElementById("modifier").onclick(
        function () {
        $('#modifymodal').modal('show');
    
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        })
    });
    document.getElementById("confirmer").onclick(
      function () {
      $('#confirmmodal').modal('show');
  
      $(function () {
          $('[data-toggle="tooltip"]').tooltip();
      })
  });
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
      function myFunction2() {
        var x = document.getElementById("myInput2");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
        y = document.getElementById("myInput3");
        if (y.type === "password") {
          y.type = "text";
        } else {
          y.type = "password";
        }
        z = document.getElementById("myInput4");
        if (z.type === "password") {
          z.type = "text";
        } else {
         z.type = "password";
        }
        }
        
