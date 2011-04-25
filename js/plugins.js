
// usage: log('inside coolFunc', this, arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function(){
  log.history = log.history || [];   // store logs to an array for reference
  log.history.push(arguments);
  if(this.console) {
      arguments.callee = arguments.callee.caller;
      console.log( Array.prototype.slice.call(arguments) );
  }
};
// make it safe to use console.log always
(function(b){function c(){}for(var d="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),a;a=d.pop();)b[a]=b[a]||c})(window.console=window.console||{});


// place any jQuery/helper plugins in here, instead of separate, slower script files.
(function( $ ){
  $.fn.wpSidebar = function() {
	children = [];	
  	$(this).each(function() {
  		var theAside = $(this);
  		var theList = $(this).find('ul');
  		if (theList.length !== 0) {
	  		var theTitle = theAside.find("h3");
	  		
			theAside.css('clear','both');
	  		theTitle.wrapInner("<a href='javascript:;'/>");
	  		theTitle.css('float','left').after("&nbsp;»");
	  		
			theList.css('clear', 'both');
			theList.hide(); 		
	  		
	  		children.push(this);
  		} else {
  			theAside.before("<div class='clearfix'>&nbsp;</div>");
  			
  		}
  	});
  	
  	
  	$(this).click(function() {
  		var hover_target = this;
  		$(children).each(function() {
  			if (this != hover_target) {
  				$(this).find('ul').slideUp();
  			}
  		});
  		$(hover_target).find('ul').slideDown();
  	});
  };
  
  $.fn.touchSidebar = function() {
	children = [];	
  	$(this).each(function() {
  		var theAside = $(this);
  		var theList = $(this).find('ul');
  		if (theList.length !== 0) {
	  		var theTitle = theAside.find("h3");
	  		theList.find('li').css('margin-top', '16px');
	  		theList.find('li').css('margin-bottom', '16px');
	  		theList.find('li').css('list-style', 'none');
	  		
  		}
  	});
  };  
  
  
  
  
})( jQuery );