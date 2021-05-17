(function($) {
  "use strict";

  $(window).scroll(function() {
    if ($(this).scrollTop() > 500) {
      $('.go-top').fadeIn(500);
    } else {
      $('.go-top').fadeOut(500);
    }
  });
  
  // Animate the scroll to top
  $('.go-top').click(function(event) {
    event.preventDefault();
    
    $('html, body').animate({scrollTop: 0}, 300);
  })



})(jQuery);

(function($) {
  "use strict";

  

  // ------------------------------------------------------------------------
    // Classie Script
    // ------------------------------------------------------------------------
    (function(window) {

        function classReg(className) {
            return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
        }
        var hasClass, addClass, removeClass;
        if ('classList' in document.documentElement) {
            hasClass = function(elem, c) {
                return elem.classList.contains(c);
            };
            addClass = function(elem, c) {
                elem.classList.add(c);
            };
            removeClass = function(elem, c) {
                elem.classList.remove(c);
            };
        } else {
            hasClass = function(elem, c) {
                return classReg(c).test(elem.className);
            };
            addClass = function(elem, c) {
                if (!hasClass(elem, c)) {
                    elem.className = elem.className + ' ' + c;
                }
            };
            removeClass = function(elem, c) {
                elem.className = elem.className.replace(classReg(c), ' ');
            };
        }

        function toggleClass(elem, c) {
            var fn = hasClass(elem, c) ? removeClass : addClass;
            fn(elem, c);
        }
        var classie = {
            hasClass: hasClass,
            addClass: addClass,
            removeClass: removeClass,
            toggleClass: toggleClass,
            has: hasClass,
            add: addClass,
            remove: removeClass,
            toggle: toggleClass
        };
        if (typeof define === 'function' && define.amd) {
            define(classie);
        } else {
            window.classie = classie;
        }

    })(window);

  /**
   * All functions to be called on $(document).ready() should be in this function
   */

    document.addEventListener("DOMContentLoaded", function() {
      var mn = $(".fixed-header"),
        core = $(".change-class").eq(0),
        mns = "is-fixed",
        bit,
        hdr;

      $(window)
        .resize(function() {
          bit = mn.outerHeight();
          hdr = $(".above-header").outerHeight();
        })
        .resize()
        .scroll(function() {
          if ($(this).scrollTop() > hdr) {
            mn.addClass(mns);
            core.css("margin-top", bit);
          } else {
            mn.removeClass(mns);
            core.attr("style", "");
          }
        })
        .on("load", function() {
          $(this).scroll();
        });
    });


     // Close menu
    $("#close-menu").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Open menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });





})(jQuery);

(function($) {
  "use strict";

  $(document).ready(onDocumentReady);

  /**
   * All functions to be called on $(document).ready() should be in this function
   */
  function onDocumentReady() {
    mobileMenu();
  }

  function mobileMenu() {
    var openMobileNav = $("#menu-show-mobile-nav"),
      mobileNav = $(".mobile-nav-wrapper"),
      overlay = $(".mobile-menu-overlay"),
      dropdownOpener = $(
        "ul.mobile-menu .sub-icon, ul.mobile-menu .has-sub > a"
      ),
      ps = new PerfectScrollbar(".mobile-menu-inner", {
        wheelPropagation: true,
        scrollYMarginOffset: 20,
        suppressScrollX: true
      });

    // Open Mobile Nav
    if (openMobileNav.length && mobileNav.length) {
      openMobileNav.on("tap click", function(e) {
        e.stopPropagation();
        e.preventDefault();

        openMobileNav.addClass("active");
        mobileNav.addClass("is-open");
        overlay.addClass("is-open");
      });
    }

    // Close Mobile Nav
    if (overlay.length) {
      overlay.on("tap click", function() {
        openMobileNav.removeClass("active");
        mobileNav.removeClass("is-open");
        overlay.removeClass("is-open");
      });
    }

    // Open/Close Submenus
    if (dropdownOpener.length) {
      dropdownOpener.each(function() {
        var _this = $(this);

        _this.on("tap click", function(e) {
          var thisItemParent = _this.parent("li"),
            thisItemParentSiblingswithDrop = thisItemParent.siblings(
              ".has-sub"
            );

          if (thisItemParent.hasClass("has-sub")) {
            var submenu = thisItemParent.find("> ul.sub-menu");

            if (submenu.is(":visible")) {
              submenu.slideUp(450, "easeInOutQuad");
              thisItemParent.removeClass("is-open");
            } else {
              thisItemParent.addClass("is-open");

              if (thisItemParentSiblingswithDrop.length === 0) {
                thisItemParent
                  .find(".sub-menu")
                  .slideUp(400, "easeInOutQuad", function() {
                    submenu.slideDown(250, "easeInOutQuad");
                  });
              } else {
                thisItemParent
                  .siblings()
                  .removeClass("is-open")
                  .find(".sub-menu")
                  .slideUp(250, "easeInOutQuad", function() {
                    submenu.slideDown(250, "easeInOutQuad");
                  });
              }
            }
          }
        });
      });
    }

    $(window).on("resize", function() {
      ps.update();
    });
  }
})(jQuery);
