// filterable gallery popup make by ferdaus sk
(function ($) {
  "use strict";
  $(window).on("elementor/frontend/init", function () {
    elementorFrontend.hooks.addAction(
      "frontend/element_ready/NameFilterableGallery.default",
      function ($scope) {
        $('.bwdfg-content a.bwdfg-popup-image').click(function(e) {
          e.preventDefault();
          var imageUrl = $(this).attr('href');
          $('.bwdfg-popup-image').attr('src', imageUrl);
          $('.bwdfg-popup-overlay').fadeIn();
      });
    
      $('.bwdfg-popup-overlay, .bwdfg-popup-close').click(function() {
          $('.bwdfg-popup-overlay').fadeOut();
      });

      }
    );
  });
})(jQuery);

// CodEntor elementor mode design make by ferdaus sk
(function ($) {
  "use strict";
  $(window).on("elementor/frontend/init", function () {
    elementorFrontend.hooks.addAction(
      "frontend/element_ready/CodEntorSyntaxHighlighter.default",
      function ($scope) {
        window.Prism.highlightAll();
			  jQuery('pre[data-show-toolbar="no"]').siblings('div.codentor_toolbar').hide();
      }
    );
  });
})(jQuery);