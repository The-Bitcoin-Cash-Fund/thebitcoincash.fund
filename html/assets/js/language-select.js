/*global $ */
$(document).ready(function () {

  var debugLang = false;
  var languageSelectToggleState = "closed";

  /*
   * Just a short method to keep the code free of extra ifs
   */
  function debugLog(msg) {
    if (debugLang) {
      console.log(msg);
    }
  }

  /*
   * Writes a console message an changes the menu state
   */
  function changeState(newState) {
    debugLog("Changing state to " + newState);
    languageSelectToggleState = newState;
  }

  /*
   * Show the menu when hovering over the button
   */
  $('.languageSelect-opener').mouseenter(function() {
    debugLog("Mouse is over the button");
    changeState("open");
    $('.languageSelect-list').addClass('languageSelect-list-open');
  });

  /*
   * Handles the gap between the language button and the menu list
   */
  $('.languageSelect-opener').mouseleave(function() {
    setTimeout(function(){
      debugLog("Checking to see if the mouse is on the language drop down");
      if (languageSelectToggleState == "on-menu") {
        debugLog("Ready to close the menu, but we are in the menu");
      }
      else {
        debugLog("Closing the menu");
        $('.languageSelect-list').removeClass('languageSelect-list-open');
        changeState("closed");
      }
    }, 500);
  });

  /*
   * Change the state when the mouse enters the language menu
   */
  $('.languageSelect-list').mouseenter(function() {
    debugLog("Just got into the language drop down");
    changeState("on-menu");
  });

  /*
   * Close the menu when leaving the language menu
   */
  $('.languageSelect-list').mouseleave(function() {
    setTimeout(function(){
      debugLog("Checking to see if the mouse is on the language button");
      if (languageSelectToggleState == "open") {
        debugLog("Ready to close the menu, but we are back on the language button");
      }
      else {
        debugLog("Closing the menu");
        $('.languageSelect-list').removeClass('languageSelect-list-open');
        changeState("closed");
      }
    }, 500);
  });

});
