/**
 * jQuery Plugin for formatting thousand number to has separator
 * @requires jQuery 1.4 or later and autoNumeric (http://www.decorplanit.com/plugin/)
 *
 * Copyright (c) 2016 Lucky
 * Licensed under the GPL license:
 * http://www.gnu.org/licenses/gpl.html
 */

(function($) {
  function lazzynumeric(settings, element) {
    var _settings = settings;
    var _element = element;

    this.initNumeric = function () {
      // Format all selected elements to have thousand separator.
      _element.autoNumeric('init', _settings);
    }

    this.cleanNumeric = function () {
      // Get closest form element.
      _element.closest("form").submit(function() {
        _element.each(function(index) {
          try {
            // Clean all value to be pure number before submitting.
            var _obj = $(this);
            _obj.val(_obj.autoNumeric('get'));
          }
          catch(e) {
            // Do nothing on error.
            // Error can be caused if we remove the element dynamically.
          }
        });
        return true;
      });
    }
  }

  $.fn.lazzynumeric = function (opts) {
    var options = {
      aSep: ",",
      aDec: "."
    };
    $.extend(options, opts);

    return this.each(function() {
      var obj = new lazzynumeric(options, $(this));
      obj.initNumeric();
      obj.cleanNumeric();
    });
  }
})(jQuery);
