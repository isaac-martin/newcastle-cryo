!function($){$.fn.tooltip=function(o){var e=null,i=5,a={delay:350,tooltip:"",position:"bottom",html:!1};return"remove"===o?(this.each(function(){$("#"+$(this).attr("data-tooltip-id")).remove(),$(this).off("mouseenter.tooltip mouseleave.tooltip")}),!1):(o=$.extend(a,o),this.each(function(){var e=Materialize.guid(),a=$(this);a.attr("data-tooltip-id")&&$("#"+a.attr("data-tooltip-id")).remove(),a.attr("data-tooltip-id",e);var n,r,p,s,l,d,u=function(){n=a.attr("data-html")?"true"===a.attr("data-html"):o.html,r=a.attr("data-delay"),r=void 0===r||""===r?o.delay:r,p=a.attr("data-position"),p=void 0===p||""===p?o.position:p,s=a.attr("data-tooltip"),s=void 0===s||""===s?o.tooltip:s};u();var f=function(){var t=$('<div class="material-tooltip"></div>');return s=n?$("<span></span>").html(s):$("<span></span>").text(s),t.append(s).appendTo($("body")).attr("id",e),d=$('<div class="backdrop"></div>'),d.appendTo(t),t};l=f(),a.off("mouseenter.tooltip mouseleave.tooltip");var c=!1,h;a.on({"mouseenter.tooltip":function(o){var e=function(){u(),c=!0,l.velocity("stop"),d.velocity("stop"),l.css({display:"block",left:"0px",top:"0px"});var o=a.outerWidth(),e=a.outerHeight(),n=l.outerHeight(),r=l.outerWidth(),s="0px",f="0px",h=8,m=8,v,y,g;"top"===p?(v=a.offset().top-n-i,y=a.offset().left+o/2-r/2,g=t(y,v,r,n),s="-10px",d.css({bottom:0,left:0,borderRadius:"14px 14px 0 0",transformOrigin:"50% 100%",marginTop:n,marginLeft:r/2-d.width()/2})):"left"===p?(v=a.offset().top+e/2-n/2,y=a.offset().left-r-i,g=t(y,v,r,n),f="-10px",d.css({top:"-7px",right:0,width:"14px",height:"14px",borderRadius:"14px 0 0 14px",transformOrigin:"95% 50%",marginTop:n/2,marginLeft:r})):"right"===p?(v=a.offset().top+e/2-n/2,y=a.offset().left+o+i,g=t(y,v,r,n),f="+10px",d.css({top:"-7px",left:0,width:"14px",height:"14px",borderRadius:"0 14px 14px 0",transformOrigin:"5% 50%",marginTop:n/2,marginLeft:"0px"})):(v=a.offset().top+a.outerHeight()+i,y=a.offset().left+o/2-r/2,g=t(y,v,r,n),s="+10px",d.css({top:0,left:0,marginLeft:r/2-d.width()/2})),l.css({top:g.y,left:g.x}),h=Math.SQRT2*r/parseInt(d.css("width")),m=Math.SQRT2*n/parseInt(d.css("height")),l.velocity({marginTop:s,marginLeft:f},{duration:350,queue:!1}).velocity({opacity:1},{duration:300,delay:50,queue:!1}),d.css({display:"block"}).velocity({opacity:1},{duration:55,delay:0,queue:!1}).velocity({scaleX:h,scaleY:m},{duration:300,delay:0,queue:!1,easing:"easeInOutQuad"})};h=setTimeout(e,r)},"mouseleave.tooltip":function(){c=!1,clearTimeout(h),setTimeout(function(){c!==!0&&(l.velocity({opacity:0,marginTop:0,marginLeft:0},{duration:225,queue:!1}),d.velocity({opacity:0,scaleX:1,scaleY:1},{duration:225,queue:!1,complete:function(){d.css("display","none"),l.css("display","none"),c=!1}}))},225)}})}))};var t=function(t,o,e,i){var a=t,n=o;return a<0?a=4:a+e>window.innerWidth&&(a-=a+e-window.innerWidth),n<0?n=4:n+i>window.innerHeight+$(window).scrollTop&&(n-=n+i-window.innerHeight),{x:a,y:n}};$(document).ready(function(){$(".tooltipped").tooltip()})}(jQuery);