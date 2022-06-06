
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
    $(document).data('keycount', 0).on('keydown.bs.select', '.bootstrap-select [data-toggle=dropdown], .bootstrap-select [role="listbox"], .bs-searchbox input', Selectpicker.prototype.keydown).on('focusin.modal', '.bootstrap-select [data-toggle=dropdown], .bootstrap-select [role="listbox"], .bs-searchbox input', function(e) 
    {
        e.stopPropagation();
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
    $('#loginModal').modal('show');

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
});
  $("#creation").click(function () {
    $('#loginModal').modal('hide');

        $('#createmodal').modal('show');
    
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

    });
    document.getElementById("modifier").onclick(
        function () {
        $('#modifymodal').modal('show');
    
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        })
    });
    function remisefct(price)
    {
        //  alert("im in remise");
        var remise;
        if(price < 4000)
         {
             remise = 0;
         }
        else if(price < 8000)
         {
             remise = 0.2;
         }
         else if(price < 12000)
         {
            remise = 0.4;
         }
         else 
         {
            remise = 0.6;
         }
         return remise;
    }
    function total(price)
    {
       var sale = remisefct(price);
       var total = price * (1- sale);
       return total;
    }
    

   
  
