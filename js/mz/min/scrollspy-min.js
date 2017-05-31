/**
 * Extend jquery with a scrollspy plugin.
 * This watches the window scroll and fires events when elements are scrolled into viewport.
 *
 * throttle() and getTime() taken from Underscore.js
 * https://github.com/jashkenas/underscore
 *
 * @author Copyright 2013 John Smart
 * @license https://raw.github.com/thesmart/jquery-scrollspy/master/LICENSE
 * @see https://github.com/thesmart
 * @version 0.1.2
 */
!function($){function t(t,e,r,i){var n=$();return $.each(o,function(o,l){if(l.height()>0){var a=l.offset().top,s=l.offset().left,c=s+l.width(),f=a+l.height(),u=!(s>e||c<i||a>r||f<t);u&&n.push(l)}}),n}function e(e){++s;var r=n.scrollTop(),i=n.scrollLeft(),o=i+n.width(),a=r+n.height(),c=t(r+f.top+e||200,o+f.right,a+f.bottom,i+f.left);$.each(c,function(t,e){var r=e.data("scrollSpy:ticks");"number"!=typeof r&&e.triggerHandler("scrollSpy:enter"),e.data("scrollSpy:ticks",s)}),$.each(l,function(t,e){var r=e.data("scrollSpy:ticks");"number"==typeof r&&r!==s&&(e.triggerHandler("scrollSpy:exit"),e.data("scrollSpy:ticks",null))}),l=c}function r(){n.trigger("scrollSpy:winSize")}/**
	 * Returns a function, that, when invoked, will only be triggered at most once
	 * during a given window of time. Normally, the throttled function will run
	 * as much as it can, without ever going more than once per `wait` duration;
	 * but if you'd like to disable the execution on the leading edge, pass
	 * `{leading: false}`. To disable execution on the trailing edge, ditto.
	 * @license https://raw.github.com/jashkenas/underscore/master/LICENSE
	 * @param {function} func
	 * @param {number} wait
	 * @param {Object=} options
	 * @returns {Function}
	 */
function i(t,e,r){var i,n,o,l=null,a=0;r||(r={});var s=function(){a=r.leading===!1?0:u(),l=null,o=t.apply(i,n),i=n=null};return function(){var c=u();a||r.leading!==!1||(a=c);var f=e-(c-a);return i=this,n=arguments,f<=0?(clearTimeout(l),l=null,a=c,o=t.apply(i,n),i=n=null):l||r.trailing===!1||(l=setTimeout(s,f)),o}}var n=$(window),o=[],l=[],a=!1,s=0,c=1,f={top:0,right:0,bottom:0,left:0},u=Date.now||function(){return(new Date).getTime()};$.scrollSpy=function(t,r){var l={throttle:100,scrollOffset:200};r=$.extend(l,r);var s=[];t=$(t),t.each(function(t,e){o.push($(e)),$(e).data("scrollSpy:id",t),$('a[href="#'+$(e).attr("id")+'"]').click(function(t){t.preventDefault();var e=$(Materialize.escapeHash(this.hash)).offset().top+1;$("html, body").animate({scrollTop:e-r.scrollOffset},{duration:400,queue:!1,easing:"easeOutCubic"})})}),f.top=r.offsetTop||0,f.right=r.offsetRight||0,f.bottom=r.offsetBottom||0,f.left=r.offsetLeft||0;var c=i(function(){e(r.scrollOffset)},r.throttle||100),u=function(){$(document).ready(c)};return a||(n.on("scroll",u),n.on("resize",u),a=!0),setTimeout(u,0),t.on("scrollSpy:enter",function(){s=$.grep(s,function(t){return 0!=t.height()});var t=$(this);s[0]?($('a[href="#'+s[0].attr("id")+'"]').removeClass("active"),t.data("scrollSpy:id")<s[0].data("scrollSpy:id")?s.unshift($(this)):s.push($(this))):s.push($(this)),$('a[href="#'+s[0].attr("id")+'"]').addClass("active")}),t.on("scrollSpy:exit",function(){if(s=$.grep(s,function(t){return 0!=t.height()}),s[0]){$('a[href="#'+s[0].attr("id")+'"]').removeClass("active");var t=$(this);s=$.grep(s,function(e){return e.attr("id")!=t.attr("id")}),s[0]&&$('a[href="#'+s[0].attr("id")+'"]').addClass("active")}}),t},$.winSizeSpy=function(t){return $.winSizeSpy=function(){return n},t=t||{throttle:100},n.on("resize",i(r,t.throttle||100))},$.fn.scrollSpy=function(t){return $.scrollSpy($(this),t)}}(jQuery);