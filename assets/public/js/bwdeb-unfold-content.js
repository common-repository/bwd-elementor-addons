
(function ($) {
  "use strict";
  $(window).on("elementor/frontend/init", function () {
    elementorFrontend.hooks.addAction(
      "frontend/element_ready/bwduf-unfoldcontent.default",
      function () {
        function unfoldContent(takenContent) {
          function unfoldContent() {
            const more_btn = takenContent.querySelector(
              ".bwduf-btn-wrapper .bwduf-show-btn"
            );
            const less_btn = takenContent.querySelector(
              ".bwduf-btn-wrapper .bwduf-hide-btn"
            );
            const content = takenContent.querySelector(".bwduf-content");
            const overlay_color = takenContent.querySelector(
              ".bwdhf-overlay-color"
            );

            const moreBtn = () => {
              let height = content.scrollHeight;
              content.style.height = height + "px";
              overlay_color.style.height = 0 + "px";
              more_btn.style.display = "none";
              less_btn.style.display = "inline-block";
            };
            const lessBtn = () => {
              content.removeAttribute("style");
              overlay_color.removeAttribute("style");
              less_btn.style.display = "none";
              more_btn.style.display = "inline-block";
            };

            more_btn.addEventListener("click", moreBtn);
            less_btn.addEventListener("click", lessBtn);
          }

          unfoldContent();
        }

        const switcherContentPlayer = () => {
          let allswitcherContentCommon =
            document.querySelectorAll(".bwduf-wrapper");

          for (let item of allswitcherContentCommon) {
            unfoldContent(item);
          }
        };
        switcherContentPlayer();
      }
    );
  });
})(jQuery);
