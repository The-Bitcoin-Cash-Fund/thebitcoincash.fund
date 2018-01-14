/*global $ */
$(document).ready(function () {

  /*
  This started as a Vanilla JS Push Menu inspired by:
  https://codepen.io/razitazi/pen/WbZaOq/

  The code now relies on jQuery, so there may be some junk
  code from the transition.

  Body scrolling prevented by info found here:
  https://stackoverflow.com/questions/9280258/prevent-body-scrolling-but-allow-overlay-scrolling
  */

  var startY = 0;
  var mobileNavToggleState = "closed";
  var cartSlideToggleState = "closed";
  var speedMultiplier = 0.1;

  /*
   * Scroll the main menu to a specific target
   */
  function scrollMenuTo(panelToScroll, targetY) {
    console.log("Scrolling " + panelToScroll + " to: " + targetY);
    $(panelToScroll).scrollTop(targetY);
  }

  /*
   * Scroll the main menu only
   */
  function scrollMenu(deltaY) {
    var panelToScroll;
    if (mobileNavToggleState === "closed" && cartSlideToggleState === "closed") {
      console.log('Error. Called scrollMenu function when both panels were closed.');
      enableWindowScroll();
    } else if (mobileNavToggleState === "open" && cartSlideToggleState === "open") {
      console.log('Error. Called scrollMenu function when both panels were opened.');
      enableWindowScroll();
    } else if (mobileNavToggleState === "open" && cartSlideToggleState === "closed") {
      panelToScroll = "#mobile-nav-panel";
    } else if (mobileNavToggleState === "closed" && cartSlideToggleState === "open") {
      panelToScroll = "#cart-slide-panel";
    }
    var targetY = $(panelToScroll).scrollTop() - deltaY;
    scrollMenuTo(panelToScroll, targetY);
  }

  /*
   * Prevents the default functionality.
   */
  function preventDefault(e) {
    if (e.preventDefault) {
      if (e.stopImmediatePropagation) {
        e.stopImmediatePropagation();
      }
      e.preventDefault();
      e.stopPropagation();
      return false;
      // This is strictly for old IE
    } else {
      e.returnValue = false;
    }
  }

  /*
   * On touch start we get the vertical location of the touch.
   */
  function onTouchStart(e) {
    startY = e.touches[0].clientY;
  }

  /*
   * Find out how far the mobile user scrolled
   * and move the menu accordingly
   */
  function onTouchMove(e) {
    preventDefault(e);
    var deltaY = (e.touches[0].clientY - startY) * speedMultiplier;
    scrollMenu(deltaY);
  }

  /*
   * Find out how far the mouse wheel was scrolled
   * and move the menu accordingly
   */
  function onMouseWheel(e) { /* rename */
    preventDefault(e);
    e = window.e || e;
    var deltaY = 0;
    if (e.detail) {
      deltaY = -40 * e.detail;
    } else {
      deltaY = e.wheelDeltaY;
    }
    scrollMenu(deltaY);
  }

  /*
   * Wrap the page in an overlay that disallows clicks
   */
  function addPageWrapOverlay() {
    $(".page-wrap a").on('click.pageWrap', function (e) { e.preventDefault(); });
    $('.page-wrap').click(closeAllMenus);
    $('.page-wrap').css('opacity', 0.7);
  }

  /*
   * Remove the click shield
   */
  function removePageWrapOverlay() {
    $('.page-wrap a').off('click.pageWrap');
    $('.page-wrap').off('click');
    $('.page-wrap').css('opacity', 1);
  }

  /*
   * Set up event handlers for all scroll events
   */
  function disableWindowScroll() {
    if (window.addEventListener) {
      window.addEventListener("DOMMouseScroll", onMouseWheel, false);
      window.addEventListener("touchstart", onTouchStart, {passive: false});
      window.addEventListener("touchmove", onTouchMove, {passive: false});
    }
    window.onmousewheel = document.onmousewheel = onMouseWheel;
  }

  /*
   * Remove event handlers for all scroll events
   */
  function enableWindowScroll() {
    if (window.removeEventListener) {
      window.removeEventListener("DOMMouseScroll", onMouseWheel, false);
      window.removeEventListener("touchstart", onTouchStart, {passive: false});
      window.removeEventListener("touchmove", onTouchMove, {passive: false});
    }
    window.onmousewheel = document.onmousewheel = null;
  }

  /*
   * Open the side navigation
   */
  function openMobileNavPanel() {
    $('body').addClass('mobile-nav-open');
    addPageWrapOverlay();
    disableWindowScroll();
    $('#navbar-xs-menu-toggle').addClass('open');
    $('#burger-menu').addClass('open');
    mobileNavToggleState = "open";
    console.log("The mobile nav panel has been opened");
  }

  /*
   * Close the side navigation
   */
  function closeMobileNavPanel() {
    $('body').removeClass('mobile-nav-open');
    removePageWrapOverlay();
    enableWindowScroll();
    scrollMenuTo(0);
    $('#navbar-xs-menu-toggle').removeClass('open');
    $('#burger-menu').removeClass('open');
    mobileNavToggleState = "closed";
    console.log("The mobile nav panel has been closed");
  }

  /*
   * Open the cart slide
   */
  function openCartSlidePanel(allowScroll) {
    $('body').addClass('cart-slide-open');
    if (!allowScroll) {
      addPageWrapOverlay();
      disableWindowScroll();
    }
    $('#navbar-xs-cart-toggle').addClass('open');
    $('#ico-cart-xs').addClass('hidden');
    $('#ico-cart-xs-active').removeClass('hidden');
    cartSlideToggleState = "open";
    console.log("The cart slide panel has been opened");
  }

  /*
   * Close the cart slide
   */
  function closeCartSlidePanel(allowScroll) {
    $('body').removeClass('cart-slide-open');
    if (!allowScroll) {
      removePageWrapOverlay();
      enableWindowScroll();
    }
    scrollMenuTo(0);
    $('#navbar-xs-cart-toggle').removeClass('open');
    $('#ico-cart-xs').removeClass('hidden');
    $('#ico-cart-xs-active').addClass('hidden');
    cartSlideToggleState = "closed";
    console.log("The cart slide has been closed");
  }

  /*
   * Toggle the mobile navigation menu state
   */
  function toggleMobileNav() {
    console.log("Entered toggle menu. Mobile Nav toggle state is " + mobileNavToggleState);
    if (mobileNavToggleState === "open") {
      closeMobileNavPanel();
    } else if (mobileNavToggleState === "closed") {
      if (cartSlideToggleState === "open") {
        toggleCartSlide();
      }
      openMobileNavPanel();
    }
  }

  /*
   * Toggle the shopping cart slide state
   */
  function toggleCartSlide(allowScroll) {
    console.log("Entered toggle menu. Cart slide toggle state is " + cartSlideToggleState);
    if (cartSlideToggleState === "open") {
      closeCartSlidePanel(allowScroll);
      $('#navbar-xs-cart-toggle').removeClass('open');
    } else if (cartSlideToggleState === "closed") {
      if (mobileNavToggleState === "open") {
        toggleMobileNav();
      }
      openCartSlidePanel(allowScroll);
    }
  }

  /*
   * Closes any open slide menus
   */
  function closeAllMenus() {
    closeMobileNavPanel();
    closeCartSlidePanel();
  }

  /*
   * Add the listener for the mobile menu button
   */
  $('#navbar-xs-menu-toggle').click(function (e) {
    e.preventDefault();
    toggleMobileNav();
  });
  
  /*
   * Add the listener for the mobile cart button
   */
  $('#navbar-xs-cart-toggle').click(function (e) {
    e.preventDefault();
    toggleCartSlide(false);
  });
  
  /*
   * Add the listener for our desktop cart button
   */
  /*
  $('#navbar-md-cart-btn').click(function (e) {
    e.preventDefault();
    toggleCartSlide(false);
  });
  */

});
