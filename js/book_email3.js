;var MonsterInsights=function(){var t=[];this.setLastClicked=function(e,n,i){e=typeof e!=='undefined'?e:[];n=typeof n!=='undefined'?n:[];i=typeof i!=='undefined'?i:!1;t.valuesArray=e;t.fieldsArray=n};this.getLastClicked=function(){return t};function l(){if(monsterinsights_frontend.is_debug_mode==='true'||window.monsterinsights_debug_mode){return!0}
else{return!1}};function e(e,n){e=typeof e!=='undefined'?e:[];n=typeof n!=='undefined'?n:{};__gaTracker('send',n);t.valuesArray=e;t.fieldsArray=n;t.tracked=!0;i('Tracked: '+e.type);i(t)};function n(e){e=typeof e!=='undefined'?e:[];t.valuesArray=e;t.fieldsArray=[];t.tracked=!1;i('Not Tracked: '+e.exit);i(t)};function i(e){if(l()){console.dir(e)}};function a(e){return e.replace(/^\s+|\s+$/gm,'')};function s(){var n=0,e=document.domain,i=e.split('.'),t='_gd'+(new Date()).getTime();while(n<(i.length-1)&&document.cookie.indexOf(t+'='+t)==-1){e=i.slice(-1-(++n)).join('.');document.cookie=t+'='+t+';domain='+e+';'};document.cookie=t+'=;expires=Thu, 01 Jan 1970 00:00:01 GMT;domain='+e+';';return e};function f(e){e=e.toString();e=e.substring(0,(e.indexOf('#')==-1)?e.length:e.indexOf('#'));e=e.substring(0,(e.indexOf('?')==-1)?e.length:e.indexOf('?'));e=e.substring(e.lastIndexOf('/')+1,e.length);if(e.length>0&&e.indexOf('.')!==-1){e=e.substring(e.indexOf('.')+1);return e}
else{return''}};function h(){return typeof(__gaTracker)!=='undefined'&&__gaTracker&&__gaTracker.hasOwnProperty('loaded')&&__gaTracker.loaded==!0};function p(e){return e.which==1||e.which==2||e.metaKey||e.ctrlKey||e.shiftKey||e.altKey};function d(){var e=[];if(typeof monsterinsights_frontend.download_extensions=='string'){e=monsterinsights_frontend.download_extensions.split(',')};return e};function u(){var e=[];if(typeof monsterinsights_frontend.inbound_paths=='string'){e=monsterinsights_frontend.inbound_paths.split(',')};return e};function v(e){if(e.which==1){return'event.which=1'}
else if(e.which==2){return'event.which=2'}
else if(e.metaKey){return'metaKey'}
else if(e.ctrlKey){return'ctrlKey'}
else if(e.shiftKey){return'shiftKey'}
else if(e.altKey){return'altKey'}
else{return''}};function m(e){var r=d(),h=u(),n='unknown',c=e.href,g=f(e.href),p=s(),o=e.hostname,i=e.protocol,v=e.pathname;c=c.toString();var t,l;if(c.match(/^javascript\:/i)){n='internal'}
else if(i&&i.length>0&&(a(i)=='tel'||a(i)=='tel:')){n='tel'}
else if(i&&i.length>0&&(a(i)=='mailto'||a(i)=='mailto:')){n='mailto'}
else if(o&&p&&o.length>0&&p.length>0&&!o.endsWith(p)){n='external'}
else if(v&&h.length>0&&v.length>0){for(t=0,l=h.length;t<l;++t){if(h[t].length>0&&v.startsWith(h[t])){n='internal-as-outbound';break}}}
else if(o&&window.monsterinsights_experimental_mode&&o.length>0&&document.domain.length>0&&o!==document.domain){n='cross-hostname'};if(g&&n==='unknown'&&r.length>0&&g.length>0){for(t=0,l=r.length;t<l;++t){if(r[t].length>0&&(c.endsWith(r[t])||r[t]==g)){n='download';break}}};if(n==='unknown'){n='internal'};return n};function y(e,t){var n=(e.target&&!e.target.match(/^_(self|parent|top)$/i))?e.target:!1;if(t.ctrlKey||t.shiftKey||t.metaKey||t.which==2){n='_blank'};return n};function c(i){var a=i.srcElement||i.target,t=[],o;t.el=a;t.ga_loaded=h();t.click_type=v(i);if(!h()||!p(i)){t.exit='loaded';n(t);return}
while(a&&(typeof a.tagName=='undefined'||a.tagName.toLowerCase()!='a'||!a.href)){a=a.parentNode};if(a&&a.href&&!a.hasAttribute('xlink:href')){var c=a.href,C=f(a.href),L=d(),K=u(),O=monsterinsights_frontend.home_url,w=monsterinsights_frontend.track_download_as,b='outbound-link-'+monsterinsights_frontend.internal_label,E=s(),r=m(a),x=y(a,i);t.el=a;t.el_href=a.href;t.el_protocol=a.protocol;t.el_hostname=a.hostname;t.el_port=a.port;t.el_pathname=a.pathname;t.el_search=a.search;t.el_hash=a.hash;t.el_host=a.host;t.debug_mode=l();t.download_extensions=L;t.inbound_paths=K;t.home_url=O;t.track_download_as=w;t.internal_label=b;t.link=c;t.extension=C;t.type=r;t.target=x;t.title=a.title||a.textContent||a.innerText;if(r!=='internal'&&r!=='javascript'){var k=!1,g=function(){if(k){return};k=!0;window.location.href=c},T=function(){t.exit='external';n(t)},A=function(){t.exit='internal-as-outbound';n(t)};if(x||r=='mailto'||r=='tel'){if(r=='download'){if(w=='pageview'){o={hitType:'pageview',page:c,};e(t,o)}
else{o={hitType:'event',eventCategory:'download',eventAction:c,eventLabel:t.title,};e(t,o)}}
else if(r=='tel'){o={hitType:'event',eventCategory:'tel',eventAction:c,eventLabel:t.title.replace('tel:',''),};e(t,o)}
else if(r=='mailto'){o={hitType:'event',eventCategory:'mailto',eventAction:c,eventLabel:t.title.replace('mailto:',''),};e(t,o)}
else if(r=='internal-as-outbound'){o={hitType:'event',eventCategory:b,eventAction:c,eventLabel:t.title,};e(t,o)}
else if(r=='external'){o={hitType:'event',eventCategory:'outbound-link',eventAction:c,eventLabel:t.title,};e(t,o)}
else if(r=='cross-hostname'){o={hitType:'event',eventCategory:'cross-hostname',eventAction:c,eventLabel:t.title,};e(t,o)}
else{t.exit='type';n(t)}}
else{if(r!='cross-hostname'&&r!='external'&&r!='internal-as-outbound'){if(!i.defaultPrevented){if(i.preventDefault){i.preventDefault()}
else{i.returnValue=!1}}};if(r=='download'){if(w=='pageview'){o={hitType:'pageview',page:c,hitCallback:g,};e(t,o)}
else{o={hitType:'event',eventCategory:'download',eventAction:c,eventLabel:t.title,hitCallback:g,};e(t,o)}}
else if(r=='internal-as-outbound'){window.onbeforeunload=function(n){if(!i.defaultPrevented){if(i.preventDefault){i.preventDefault()}
else{i.returnValue=!1}};o={hitType:'event',eventCategory:b,eventAction:c,eventLabel:t.title,hitCallback:g,};if(navigator.sendBeacon){o.transport='beacon'};e(t,o);setTimeout(g,1000)}}
else if(r=='external'){window.onbeforeunload=function(n){if(!i.defaultPrevented){if(i.preventDefault){i.preventDefault()}
else{i.returnValue=!1}};o={hitType:'event',eventCategory:'outbound-link',eventAction:c,eventLabel:t.title,hitCallback:g,};if(navigator.sendBeacon){o.transport='beacon'};e(t,o);setTimeout(g,1000)}}
else if(r=='cross-hostname'){window.onbeforeunload=function(n){if(!i.defaultPrevented){if(i.preventDefault){i.preventDefault()}
else{i.returnValue=!1}};o={hitType:'event',eventCategory:'cross-hostname',eventAction:c,eventLabel:t.title,hitCallback:g,};if(navigator.sendBeacon){o.transport='beacon'};e(t,o);setTimeout(g,1000)}}
else{t.exit='type';n(t)};if(r!='external'&&r!='internal-as-outbound'){setTimeout(g,1000)}
else{if(r=='external'){setTimeout(T,1100)}
else{setTimeout(A,1100)}}}}
else{t.exit='internal';n(t)}}
else{t.exit='notlink';n(t)}};var r=window.location.hash;function g(){if(monsterinsights_frontend.hash_tracking==='true'&&r!=window.location.hash){r=window.location.hash;__gaTracker('set','page',location.pathname+location.search+location.hash);__gaTracker('send','pageview');i('Hash change to: '+location.pathname+location.search+location.hash)}
else{i('Hash change to (untracked): '+location.pathname+location.search+location.hash)}};var o=window;if(o.addEventListener){o.addEventListener('load',function(){document.body.addEventListener('click',c,!1)},!1);window.addEventListener('hashchange',g,!1)}
else{if(o.attachEvent){o.attachEvent('onload',function(){document.body.attachEvent('onclick',c)});window.attachEvent('onhashchange',g)}};if(typeof String.prototype.endsWith!=='function'){String.prototype.endsWith=function(e){return this.indexOf(e,this.length-e.length)!==-1}};if(typeof String.prototype.startsWith!=='function'){String.prototype.startsWith=function(e){return this.indexOf(e)===0}};if(typeof Array.prototype.lastIndexOf!=='function'){Array.prototype.lastIndexOf=function(e){'use strict';if(this===void 0||this===null){throw new TypeError()};var t,n,o=Object(this),i=o.length>>>0;if(i===0){return-1};t=i-1;if(arguments.length>1){t=Number(arguments[1]);if(t!=t){t=0}
else if(t!=0&&t!=(1/0)&&t!=-(1/0)){t=(t>0||-1)*Math.floor(Math.abs(t))}};for(n=t>=0?Math.min(t,i-1):i-Math.abs(t);n>=0;n--){if(n in o&&o[n]===e){return n}};return-1}}},MonsterInsightsObject=new MonsterInsights();
;/*! iFrame Resizer (iframeSizer.min.js ) - v3.5.5 - 2016-06-16
 *  Desc: Force cross domain iframes to size to content.
 *  Requires: iframeResizer.contentWindow.min.js to be loaded into the target frame.
 *  Copyright: (c) 2016 David J. Bradshaw - dave@bradshaw.net
 *  License: MIT
 */

!function(a){"use strict";function b(b,c,d){"addEventListener"in a?b.addEventListener(c,d,!1):"attachEvent"in a&&b.attachEvent("on"+c,d)}function c(b,c,d){"removeEventListener"in a?b.removeEventListener(c,d,!1):"detachEvent"in a&&b.detachEvent("on"+c,d)}function d(){var b,c=["moz","webkit","o","ms"];for(b=0;b<c.length&&!N;b+=1)N=a[c[b]+"RequestAnimationFrame"];N||h("setup","RequestAnimationFrame not supported")}function e(b){var c="Host page: "+b;return a.top!==a.self&&(c=a.parentIFrame&&a.parentIFrame.getId?a.parentIFrame.getId()+": "+b:"Nested host page: "+b),c}function f(a){return K+"["+e(a)+"]"}function g(a){return P[a]?P[a].log:G}function h(a,b){k("log",a,b,g(a))}function i(a,b){k("info",a,b,g(a))}function j(a,b){k("warn",a,b,!0)}function k(b,c,d,e){!0===e&&"object"==typeof a.console&&console[b](f(c),d)}function l(d){function e(){function a(){s(V),p(W)}g("Height"),g("Width"),t(a,V,"init")}function f(){var a=U.substr(L).split(":");return{iframe:P[a[0]].iframe,id:a[0],height:a[1],width:a[2],type:a[3]}}function g(a){var b=Number(P[W]["max"+a]),c=Number(P[W]["min"+a]),d=a.toLowerCase(),e=Number(V[d]);h(W,"Checking "+d+" is in range "+c+"-"+b),c>e&&(e=c,h(W,"Set "+d+" to min value")),e>b&&(e=b,h(W,"Set "+d+" to max value")),V[d]=""+e}function k(){function a(){function a(){var a=0,d=!1;for(h(W,"Checking connection is from allowed list of origins: "+c);a<c.length;a++)if(c[a]===b){d=!0;break}return d}function d(){var a=P[W].remoteHost;return h(W,"Checking connection is from: "+a),b===a}return c.constructor===Array?a():d()}var b=d.origin,c=P[W].checkOrigin;if(c&&""+b!="null"&&!a())throw new Error("Unexpected message received from: "+b+" for "+V.iframe.id+". Message was: "+d.data+". This error can be disabled by setting the checkOrigin: false option or by providing of array of trusted domains.");return!0}function l(){return K===(""+U).substr(0,L)&&U.substr(L).split(":")[0]in P}function w(){var a=V.type in{"true":1,"false":1,undefined:1};return a&&h(W,"Ignoring init message from meta parent page"),a}function y(a){return U.substr(U.indexOf(":")+J+a)}function z(a){h(W,"MessageCallback passed: {iframe: "+V.iframe.id+", message: "+a+"}"),N("messageCallback",{iframe:V.iframe,message:JSON.parse(a)}),h(W,"--")}function A(){var b=document.body.getBoundingClientRect(),c=V.iframe.getBoundingClientRect();return JSON.stringify({iframeHeight:c.height,iframeWidth:c.width,clientHeight:Math.max(document.documentElement.clientHeight,a.innerHeight||0),clientWidth:Math.max(document.documentElement.clientWidth,a.innerWidth||0),offsetTop:parseInt(c.top-b.top,10),offsetLeft:parseInt(c.left-b.left,10),scrollTop:a.pageYOffset,scrollLeft:a.pageXOffset})}function B(a,b){function c(){u("Send Page Info","pageInfo:"+A(),a,b)}x(c,32)}function C(){function d(b,c){function d(){P[g]?B(P[g].iframe,g):e()}["scroll","resize"].forEach(function(e){h(g,b+e+" listener for sendPageInfo"),c(a,e,d)})}function e(){d("Remove ",c)}function f(){d("Add ",b)}var g=W;f(),P[g].stopPageInfo=e}function D(){P[W]&&P[W].stopPageInfo&&(P[W].stopPageInfo(),delete P[W].stopPageInfo)}function E(){var a=!0;return null===V.iframe&&(j(W,"IFrame ("+V.id+") not found"),a=!1),a}function F(a){var b=a.getBoundingClientRect();return o(W),{x:Math.floor(Number(b.left)+Number(M.x)),y:Math.floor(Number(b.top)+Number(M.y))}}function G(b){function c(){M=g,H(),h(W,"--")}function d(){return{x:Number(V.width)+f.x,y:Number(V.height)+f.y}}function e(){a.parentIFrame?a.parentIFrame["scrollTo"+(b?"Offset":"")](g.x,g.y):j(W,"Unable to scroll to requested position, window.parentIFrame not found")}var f=b?F(V.iframe):{x:0,y:0},g=d();h(W,"Reposition requested from iFrame (offset x:"+f.x+" y:"+f.y+")"),a.top!==a.self?e():c()}function H(){!1!==N("scrollCallback",M)?p(W):q()}function I(b){function c(){var a=F(g);h(W,"Moving to in page link (#"+e+") at x: "+a.x+" y: "+a.y),M={x:a.x,y:a.y},H(),h(W,"--")}function d(){a.parentIFrame?a.parentIFrame.moveToAnchor(e):h(W,"In page link #"+e+" not found and window.parentIFrame not found")}var e=b.split("#")[1]||"",f=decodeURIComponent(e),g=document.getElementById(f)||document.getElementsByName(f)[0];g?c():a.top!==a.self?d():h(W,"In page link #"+e+" not found")}function N(a,b){return m(W,a,b)}function O(){switch(P[W].firstRun&&T(),V.type){case"close":n(V.iframe);break;case"message":z(y(6));break;case"scrollTo":G(!1);break;case"scrollToOffset":G(!0);break;case"pageInfo":B(P[W].iframe,W),C();break;case"pageInfoStop":D();break;case"inPageLink":I(y(9));break;case"reset":r(V);break;case"init":e(),N("initCallback",V.iframe),N("resizedCallback",V);break;default:e(),N("resizedCallback",V)}}function Q(a){var b=!0;return P[a]||(b=!1,j(V.type+" No settings for "+a+". Message was: "+U)),b}function S(){for(var a in P)u("iFrame requested init",v(a),document.getElementById(a),a)}function T(){P[W].firstRun=!1}var U=d.data,V={},W=null;"[iFrameResizerChild]Ready"===U?S():l()?(V=f(),W=R=V.id,!w()&&Q(W)&&(h(W,"Received: "+U),E()&&k()&&O())):i(W,"Ignored: "+U)}function m(a,b,c){var d=null,e=null;if(P[a]){if(d=P[a][b],"function"!=typeof d)throw new TypeError(b+" on iFrame["+a+"] is not a function");e=d(c)}return e}function n(a){var b=a.id;h(b,"Removing iFrame: "+b),a.parentNode.removeChild(a),m(b,"closedCallback",b),h(b,"--"),delete P[b]}function o(b){null===M&&(M={x:void 0!==a.pageXOffset?a.pageXOffset:document.documentElement.scrollLeft,y:void 0!==a.pageYOffset?a.pageYOffset:document.documentElement.scrollTop},h(b,"Get page position: "+M.x+","+M.y))}function p(b){null!==M&&(a.scrollTo(M.x,M.y),h(b,"Set page position: "+M.x+","+M.y),q())}function q(){M=null}function r(a){function b(){s(a),u("reset","reset",a.iframe,a.id)}h(a.id,"Size reset requested by "+("init"===a.type?"host page":"iFrame")),o(a.id),t(b,a,"reset")}function s(a){function b(b){a.iframe.style[b]=a[b]+"px",h(a.id,"IFrame ("+e+") "+b+" set to "+a[b]+"px")}function c(b){H||"0"!==a[b]||(H=!0,h(e,"Hidden iFrame detected, creating visibility listener"),y())}function d(a){b(a),c(a)}var e=a.iframe.id;P[e]&&(P[e].sizeHeight&&d("height"),P[e].sizeWidth&&d("width"))}function t(a,b,c){c!==b.type&&N?(h(b.id,"Requesting animation frame"),N(a)):a()}function u(a,b,c,d){function e(){var e=P[d].targetOrigin;h(d,"["+a+"] Sending msg to iframe["+d+"] ("+b+") targetOrigin: "+e),c.contentWindow.postMessage(K+b,e)}function f(){i(d,"["+a+"] IFrame("+d+") not found"),P[d]&&delete P[d]}function g(){c&&"contentWindow"in c&&null!==c.contentWindow?e():f()}d=d||c.id,P[d]&&g()}function v(a){return a+":"+P[a].bodyMarginV1+":"+P[a].sizeWidth+":"+P[a].log+":"+P[a].interval+":"+P[a].enablePublicMethods+":"+P[a].autoResize+":"+P[a].bodyMargin+":"+P[a].heightCalculationMethod+":"+P[a].bodyBackground+":"+P[a].bodyPadding+":"+P[a].tolerance+":"+P[a].inPageLinks+":"+P[a].resizeFrom+":"+P[a].widthCalculationMethod}function w(a,c){function d(){function b(b){1/0!==P[w][b]&&0!==P[w][b]&&(a.style[b]=P[w][b]+"px",h(w,"Set "+b+" = "+P[w][b]+"px"))}function c(a){if(P[w]["min"+a]>P[w]["max"+a])throw new Error("Value for min"+a+" can not be greater than max"+a)}c("Height"),c("Width"),b("maxHeight"),b("minHeight"),b("maxWidth"),b("minWidth")}function e(){var a=c&&c.id||S.id+F++;return null!==document.getElementById(a)&&(a+=F++),a}function f(b){return R=b,""===b&&(a.id=b=e(),G=(c||{}).log,R=b,h(b,"Added missing iframe ID: "+b+" ("+a.src+")")),b}function g(){h(w,"IFrame scrolling "+(P[w].scrolling?"enabled":"disabled")+" for "+w),a.style.overflow=!1===P[w].scrolling?"hidden":"auto",a.scrolling=!1===P[w].scrolling?"no":"yes"}function i(){("number"==typeof P[w].bodyMargin||"0"===P[w].bodyMargin)&&(P[w].bodyMarginV1=P[w].bodyMargin,P[w].bodyMargin=""+P[w].bodyMargin+"px")}function k(){var b=P[w].firstRun,c=P[w].heightCalculationMethod in O;!b&&c&&r({iframe:a,height:0,width:0,type:"init"})}function l(){Function.prototype.bind&&(P[w].iframe.iFrameResizer={close:n.bind(null,P[w].iframe),resize:u.bind(null,"Window resize","resize",P[w].iframe),moveToAnchor:function(a){u("Move to anchor","moveToAnchor:"+a,P[w].iframe,w)},sendMessage:function(a){a=JSON.stringify(a),u("Send Message","message:"+a,P[w].iframe,w)}})}function m(c){function d(){u("iFrame.onload",c,a),k()}b(a,"load",d),u("init",c,a)}function o(a){if("object"!=typeof a)throw new TypeError("Options is not an object")}function p(a){for(var b in S)S.hasOwnProperty(b)&&(P[w][b]=a.hasOwnProperty(b)?a[b]:S[b])}function q(a){return""===a||"file://"===a?"*":a}function s(b){b=b||{},P[w]={firstRun:!0,iframe:a,remoteHost:a.src.split("/").slice(0,3).join("/")},o(b),p(b),P[w].targetOrigin=!0===P[w].checkOrigin?q(P[w].remoteHost):"*"}function t(){return w in P&&"iFrameResizer"in a}var w=f(a.id);t()?j(w,"Ignored iFrame, already setup."):(s(c),g(),d(),i(),m(v(w)),l())}function x(a,b){null===Q&&(Q=setTimeout(function(){Q=null,a()},b))}function y(){function b(){function a(a){function b(b){return"0px"===P[a].iframe.style[b]}function c(a){return null!==a.offsetParent}c(P[a].iframe)&&(b("height")||b("width"))&&u("Visibility change","resize",P[a].iframe,a)}for(var b in P)a(b)}function c(a){h("window","Mutation observed: "+a[0].target+" "+a[0].type),x(b,16)}function d(){var a=document.querySelector("body"),b={attributes:!0,attributeOldValue:!1,characterData:!0,characterDataOldValue:!1,childList:!0,subtree:!0},d=new e(c);d.observe(a,b)}var e=a.MutationObserver||a.WebKitMutationObserver;e&&d()}function z(a){function b(){B("Window "+a,"resize")}h("window","Trigger event: "+a),x(b,16)}function A(){function a(){B("Tab Visable","resize")}"hidden"!==document.visibilityState&&(h("document","Trigger event: Visiblity change"),x(a,16))}function B(a,b){function c(a){return"parent"===P[a].resizeFrom&&P[a].autoResize&&!P[a].firstRun}for(var d in P)c(d)&&u(a,b,document.getElementById(d),d)}function C(){b(a,"message",l),b(a,"resize",function(){z("resize")}),b(document,"visibilitychange",A),b(document,"-webkit-visibilitychange",A),b(a,"focusin",function(){z("focus")}),b(a,"focus",function(){z("focus")})}function D(){function a(a,c){function d(){if(!c.tagName)throw new TypeError("Object is not a valid DOM element");if("IFRAME"!==c.tagName.toUpperCase())throw new TypeError("Expected <IFRAME> tag, found <"+c.tagName+">")}c&&(d(),w(c,a),b.push(c))}var b;return d(),C(),function(c,d){switch(b=[],typeof d){case"undefined":case"string":Array.prototype.forEach.call(document.querySelectorAll(d||"iframe"),a.bind(void 0,c));break;case"object":a(c,d);break;default:throw new TypeError("Unexpected data type ("+typeof d+")")}return b}}function E(a){a.fn?a.fn.iFrameResize=function(a){function b(b,c){w(c,a)}return this.filter("iframe").each(b).end()}:i("","Unable to bind to jQuery, it is not fully loaded.")}var F=0,G=!1,H=!1,I="message",J=I.length,K="[iFrameSizer]",L=K.length,M=null,N=a.requestAnimationFrame,O={max:1,scroll:1,bodyScroll:1,documentElementScroll:1},P={},Q=null,R="Host Page",S={autoResize:!0,bodyBackground:null,bodyMargin:null,bodyMarginV1:8,bodyPadding:null,checkOrigin:!0,inPageLinks:!1,enablePublicMethods:!0,heightCalculationMethod:"bodyOffset",id:"iFrameResizer",interval:32,log:!1,maxHeight:1/0,maxWidth:1/0,minHeight:0,minWidth:0,resizeFrom:"parent",scrolling:!1,sizeHeight:!0,sizeWidth:!1,tolerance:0,widthCalculationMethod:"scroll",closedCallback:function(){},initCallback:function(){},messageCallback:function(){j("MessageCallback function not defined")},resizedCallback:function(){},scrollCallback:function(){return!0}};a.jQuery&&E(jQuery),"function"==typeof define&&define.amd?define([],D):"object"==typeof module&&"object"==typeof module.exports?module.exports=D():a.iFrameResize=a.iFrameResize||D()}(window||{});
//# sourceMappingURL=iframeResizer.map