/*global $ */
$(document).ready(function () {

  var debugPreopen = false;

  /*
   * Toggles the state (open / closed) of a subnav item
   */
  function toggleSubnavState(listItem, levelPrefix) {
    var id = $(listItem).attr('id');
    var buttonPrefix = levelPrefix + '-btn-';
    var itemPrefix = levelPrefix + '-itm-';
    var listHandle = id.replace(buttonPrefix, '');
    var itemClass = '.' + itemPrefix + listHandle;

    if (debugPreopen) {
      console.log('About to toggle subnav state');
      console.log('id:        ' + id);
      console.log('itemClass: ' + itemClass);
    }
    $(itemClass).toggleClass('item-closed');
    $(listItem).find('.mobile-nav-expand-btn').toggleClass('open');
  }


  /*
   * Opens the first subnav item labeled to be open by default
   */
  function preopenItem() {
    var preopenedItems = $('.preopen').length;

    if (preopenedItems > 1) {
      if (debugPreopen) {
        console.log('Pre-opening subnav item failed. More than one items are tagged with .preopen class.');
      }
    } else if (preopenedItems === 0) {
      if (debugPreopen) {
        console.log('Pre-opening subnav item failed. No items are tagged with .preopen class.');
      }
    } else if (preopenedItems === 1) {
      if (debugPreopen) {
        console.log('Found exactly one item with class preopen.');
      }
      toggleSubnavState($('.preopen').first(), 'sn');
    } else {
      console.log('Unknown error while trying to preopen mobile subnav item.');
    }
  }


  /*
   * Opens and closes subnav and subsubnav items
   */
  function toggleMobileNavSubmenu(e) {
    var listItem = e.delegateTarget;
    var id = $(listItem).attr('id');
    var levelPrefix = id.substr(0, id.indexOf('-'));

    e.preventDefault();
    e.stopPropagation();
    
    if (debugPreopen) {
      console.log('Subnav button clicked');
    }
    toggleSubnavState(listItem, levelPrefix);
  }

  
  // Attach all subnav buttons to the handler function
  $('[id^=sn-btn-]').click(toggleMobileNavSubmenu);
  $('[id^=ssn-btn-]').click(toggleMobileNavSubmenu);

  
  // Open the subnav item marked to be open by default
  preopenItem();
  
});
