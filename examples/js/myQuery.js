function myQuery(selector, factory) {
  this.elements = null;
  this.selector = selector;
  
  if (typeof factory == "undefined") {
  
    // See if selector starts with a #. If so we're looking for an ID
    if (selector[0] == '#') {
      // Strip off the # sign
      var idName = selector.substring(1, selector.length);
      var element = document.getElementById(idName);
    
      myQobj = new myQuery(selector, true);
      myQobj.elements = [element];
      return myQobj;
    }
    
  } else {
    return this;
  }
}

$ = myQuery;

myQuery.prototype = {
   ready:           function(myFunciton) {
                      if (window.attachEvent) {
                          window.attachEvent('onload', myFunciton);
                          console.log("IE");
                      } else if (window.addEventListener) {
                          window.addEventListener('load', myFunciton);
                          console.log("Modern");
                      } else {
                          console.log("Legacy");
                          if(window.onload) {
                              var curronload = window.onload;
                              var newonload = function() {
                                  curronload();
                                  myFunciton();
                              };
                              window.onload = newonload;
                          } else {
                              window.onload = myFunciton;
                          }
                      }
                    },
                    
  getElements:      function() {
                      return this.elements;
                    },
                    
  getSelector:      function() {
                      return this.selector;
                    },
}
