(function() {
  
  var languageBar = {
    container : $('.notification-bar'),
    span : $('.noty-trigger i'),

    init: function() {
      languageBar.span.on( 'click', this.show );
    },
    show: function() {
      var lb = languageBar,
          container = lb.container,
          span = lb.span;

      //languageBar.container.slideToggle();
      if ( container.is(':hidden') ) {
        languageBar.container.slideDown();
        languageBar.span.removeClass('icon-plus-sign');
        languageBar.span.addClass('icon-minus-sign');
      } else {
        languageBar.close.call(container);
      }
      
    },
    close: function() {
      if ( container.is(':visible') ) {
        $("span.noty-trigger").on("click", function() {
          languageBar.container.slideUp();
        });
      }
    }
  };

languageBar.init();

})();