"use strict";

(() => {
  // timeUnitRendering
  function timeUnitRendering(unitWrapper, unitVal, itemNo) {
    if (
      itemNo.classList.contains("bwdwi-count-down-1") ||
      itemNo.classList.contains("bwdwi-count-down-2")
    ) {
      for (let unitItem of unitWrapper) {
        if (unitItem.classList.contains("bwdwi-num-before")) {
          unitItem.classList.add("bwdwi-before-num-anim");
          setTimeout(() => {
            unitItem.classList.remove("bwdwi-before-num-anim");
          }, 450);
        }
        if (unitItem.classList.contains("bwdwi-num-after")) {
          unitItem.classList.add("bwdwi-after-num-anim");
          setTimeout(() => {
            unitItem.classList.remove("bwdwi-after-num-anim");
          }, 900);
        }

        if (unitItem.classList.contains("bwdwi-f-cng")) {
          setTimeout(() => {
            unitItem.innerHTML = unitVal;
          }, 50);
        }
        if (unitItem.classList.contains("bwdwi-s-cng")) {
          setTimeout(() => {
            unitItem.innerHTML = unitVal;
          }, 850);
        } else {
          setTimeout(() => {
            unitItem.innerHTML = unitVal;
          }, 500);
        }
      }
    } else if (itemNo.classList.contains("bwdwi-count-down-3")) {
      for (let unitItem of unitWrapper) {
        if (unitItem.classList.contains("bwdwi-bottom-num")) {
          unitItem.classList.add("topToBottomAnim");
          setTimeout(() => {
            unitItem.classList.remove("topToBottomAnim");
          }, 600);
        }
        unitItem.innerHTML = unitVal;
      }
    } else {
      unitWrapper.innerHTML = unitVal;
    }
  }
  // count down main function
  let countDownMain = (unitContainer) => {
    let expiredDate = unitContainer.querySelector(".bwdwi-expired-time").value;
    // time unites wrapper
    let dayWrap = unitContainer.querySelector(".bwdwi-day");
    let hourWrap = unitContainer.querySelector(".bwdwi-hour");
    let minWrap = unitContainer.querySelector(".bwdwi-min");
    let secWrap = unitContainer.querySelector(".bwdwi-sec");

    if (
      unitContainer.classList.contains("bwdwi-count-down-1") ||
      unitContainer.classList.contains("bwdwi-count-down-2") ||
      unitContainer.classList.contains("bwdwi-count-down-3")
    ) {
      dayWrap = unitContainer.querySelectorAll(".bwdwi-day .bwdwi-num-inner");
      hourWrap = unitContainer.querySelectorAll(".bwdwi-hour .bwdwi-num-inner");
      minWrap = unitContainer.querySelectorAll(".bwdwi-min .bwdwi-num-inner");
      secWrap = unitContainer.querySelectorAll(".bwdwi-sec .bwdwi-num-inner");
    }
    let count = 0;
    let expiredIntervalId;
    let countdownCalculator = function () {
      let now = new Date().getTime() / 1000;
      let distance = expiredDate - now;
      var days = Math.floor(distance / (60 * 60 * 24));
      var hours = Math.floor((distance % (60 * 60 * 24)) / (60 * 60));
      var minutes = Math.floor((distance % (60 * 60)) / 60);
      var seconds = Math.floor(distance % 60);

      if (seconds < 10) {
        seconds = "0" + seconds;
      }
      if (minutes < 10) {
        minutes = "0" + minutes;
      }
      if (hours < 10) {
        hours = "0" + hours;
      }
      if (days < 10) {
        days = "0" + days;
      }
      // when time unit will be render=================
      timeUnitRendering(secWrap, seconds, unitContainer);
      // for one time call
      if (count < 1) {
        timeUnitRendering(minWrap, minutes, unitContainer);
        timeUnitRendering(hourWrap, hours, unitContainer);
        timeUnitRendering(dayWrap, days, unitContainer);
        count++;
      }
      if (seconds === 59) {
        timeUnitRendering(minWrap, minutes, unitContainer);
      }

      if (minutes === 59 && seconds === 59) {
        timeUnitRendering(hourWrap, hours, unitContainer);
      }

      if (hours === 23 && minutes === 59 && seconds === 59) {
        timeUnitRendering(dayWrap, days, unitContainer);
      }
      //=================
      // if due date is expired
      if (days <= "00" && minutes <= "00" && seconds <= "00") {
        // last call
        timeUnitRendering(secWrap, "00", unitContainer);
        timeUnitRendering(minWrap, "00", unitContainer);
        timeUnitRendering(hourWrap, "00", unitContainer);
        timeUnitRendering(dayWrap, "00", unitContainer);

        if (unitContainer.querySelector(".bwdwi-ex-event")) {
          (() => {
            let afterExEvent = unitContainer.querySelector(".bwdwi-ex-event");
            if (afterExEvent.getAttribute("value") === "hide") {
              unitContainer.style.display = "none";
            } else if (
              afterExEvent.getAttribute("value") === "message" &&
              afterExEvent.getAttribute("data-ex-msg")
            ) {
              let exMsg = afterExEvent
                .getAttribute("data-ex-msg")
                .toUpperCase();
              let msgDiv = document.createElement("h3");
              msgDiv.innerHTML = exMsg;
              msgDiv.style.color = "#BA2802";
              unitContainer.innerHTML = "";
              let childA = unitContainer.appendChild(msgDiv);
            } else if (
              afterExEvent.getAttribute("value") === "redirect" &&
              afterExEvent.getAttribute("data-ex-url")
            ) {
              let exUrl = afterExEvent.getAttribute("data-ex-url");
              let linkBtn = document.createElement("a");
              linkBtn.setAttribute("href", exUrl);
              linkBtn.innerHTML = "Redirect";
              linkBtn.classList.add("bwdwi-expired-btn");
              unitContainer.innerHTML = "";
              unitContainer.appendChild(linkBtn);
            }
          })();
        }
        clearInterval(expiredIntervalId);
      }
    };
    countdownCalculator();
    expiredIntervalId = setInterval(countdownCalculator, 1000);
  };
  // all countDown player
  const countDownPlayer = () => {
    let allcountDownCommon = document.querySelectorAll(
      ".bwdwi-count-down-common"
    );
    for (let item of allcountDownCommon) {
      countDownMain(item);
    }
  };
  // editMode active or not
  let editModeObserver = (getEditMode) => {
    // elementor render observing
    const observer = new MutationObserver((mutations) => {
      mutations.map((record) => {
        if (record.addedNodes.length) {
          record.addedNodes.forEach((singleItem) => {
            if (singleItem.nodeName == "DIV") {
              if (singleItem.querySelector(".bwdwi-count-down-common")) {
                let observedItem = singleItem.querySelector(
                  ".bwdwi-count-down-common"
                );
                countDownMain(observedItem);
              }
            }
          });
        }
      });
    });

    observer.observe(getEditMode, {
      subtree: true,
      childList: true,
    });
  };
  let editModeChecker = () => {
    let myInterValId;
    if (
      document.querySelector(".elementor-edit-area") ||
      document.querySelector(".bwdwi-count-down-common")
    ) {
      countDownPlayer();
    } else {
      myInterValId = setInterval(() => {
        let myElementorEditArea = document.querySelector(
          ".elementor-edit-area"
        );
        if (myElementorEditArea) {
          clearInterval(myInterValId);
          // play ===============
          editModeObserver(myElementorEditArea);
        }
      }, 300);
    }
  };
  editModeChecker();
})();
