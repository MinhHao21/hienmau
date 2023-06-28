(function(angular) {
    var directiveContextMenu = angular.module('directive.contextMenu', []);
    directiveContextMenu.directive('cellHighlight', function(){
      var postLink = function(scope, iElement, iAttrs) {
        var td = iElement.find('td');
        td.mouseover(function() {
          $(this).parent('tr').css('opacity', '0.7');
        });
        td.mouseout(function() {
          $(this).parent('tr').css('opacity', '1.0');
        });
      };
      return {
        restrict: 'C',
        postLink: postLink
      };
    });
    directiveContextMenu.directive('context', function() {
      return {
        restrict    : 'A',
        scope       : '@&',
        compile: function compile(tElement, tAttrs, transclude) {
          return {
            post: function postLink(scope, iElement, iAttrs, controller) {
              var ul = $('#' + iAttrs.context);
              var last = null;
              ul.css({ 'display' : 'none'});
              $(iElement).click(function(event) {
                var X = event.clientX;
                var Y = event.clientY;
                ul.css({
                  display:  "block",
                  position: "fixed",
                  top:      Y + 'px',
                  left:     X + 'px'
                });
                last = event.timeStamp;
              });
              $(document).click(function(event) {
                var target = $(event.target);
                if(!target.is(".popover") && !target.parents().is(".popover")) {
                  if(last === event.timeStamp)
                    return;  
                  ul.css({
                    'display' : 'none'
                  });
                }
              });
            }
          };
        }
      };
    });
  })(window.angular);