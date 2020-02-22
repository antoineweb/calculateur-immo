function toCdnUrl(e){var t=pfData.config.hosts.cdn;return 0===e.indexOf(t)?e:t+e}Element.prototype.matches||(Element.prototype.matches=Element.prototype.matchesSelector||Element.prototype.mozMatchesSelector||Element.prototype.msMatchesSelector||Element.prototype.oMatchesSelector||Element.prototype.webkitMatchesSelector||function(e){for(var t=(this.document||this.ownerDocument).querySelectorAll(e),n=t.length;--n>=0&&t.item(n)!==this;);return n>-1}),String.prototype.startsWith||(String.prototype.startsWith=function(e,t){return t=!t||t<0?0:+t,this.substring(t,t+e.length)===e});var commonUtils={getImageWidth:function(e,t){e.jquery&&(e=e[0]);var n=null;if(t){var i=e.getAttribute("pf-data-width");i&&(n=parseInt(i,10))}else e.dataset.pf_rect_width&&(n=parseInt(e.dataset.pf_rect_width,10));return null===n&&(n=e.getBoundingClientRect().width),n},getImageHeight:function(e,t){e.jquery&&(e=e[0]);var n=null;if(t){var i=e.getAttribute("pf-data-height");i&&(n=parseInt(i,10))}else e.dataset.pf_rect_height&&(n=parseInt(e.dataset.pf_rect_height,10));return null===n&&(n=e.getBoundingClientRect().height),n},getTopWrapper:function(e){var t=e.parentNode;return t.childNodes.length>1?e:this.getTopWrapper(t)},isDeletableElement:function(){return function(e){return!e.classList.contains("non-delete")&&(e.matches("small, footer, header, aside, details, dialog, figure, nav, summary, twitter-widget, p, img, blockquote, h1, h2, h3, h4, h5, h6, ol, ul, li, a, table, td, pre, span, code, dl, dt, dd, hr, div.pf-caption, video, figcaption, data")||$(e).find("*:visible").length<=15)}}(),resizeImageCssClass:function(e){return"pf-size-"+e.replace("-size","").replace("-images","")},addCSS:function(e,t,n){var i=n?"body":"head",r=t.getElementsByTagName(i)[0],o=t.createElement("style");o.type="text/css",o.setAttribute("name","pf-style"),o.styleSheet?o.styleSheet.cssText=e:o.appendChild(t.createTextNode(e)),r.appendChild(o)},createIframe:function(e){var t=e.createElement("iframe");return t.frameBorder="0",t.allowTransparency="true",t},loadHtmlInIframe:function(e,t,n){var i,r;try{r=t.contentWindow.document}catch(n){i=e.domain,t.src="javascript:var d=document.open();d.domain='"+i+"';void(0);",r=t.contentWindow.document}r.write(n),r.close()}},analytics=function(){var e=null;return{setCoreWindow:function(t){e=t},sendEvent:function(t,n,i){e.postMessage({type:"PfGaEvent",payload:{category:t,action:n,label:i}},"*")}}}(),exTracker=function(){function e(){return"production"===h.environment}function t(){return"development"===h.environment}function n(){return!!d.Raven}function i(){try{d.frames["pf-core"]&&d.frames["pf-core"].document&&(d=d.frames["pf-core"],l=d.document)}catch(e){}}function r(){if(f)return!0;if(f=!0,i(),null===l)return!1;var e=l.createElement("script"),t=l.getElementsByTagName("script")[0];e.src=this.config.urls.js.raven,t.parentNode.appendChild(e),o()}function o(){if(!n())return setTimeout(o,100);s(),a()}function a(){for(var e=0,t=u.length;e<t;e++){var n=u[e];c(n.err,n.opts)}}function s(){var e={dataCallback:function(e){try{var t=e.stacktrace.frames[0];t.filename.match(p)&&"onload"!==t["function"]||e.stacktrace.frames.shift()}catch(e){}return e},shouldSendCallback:function(e){return!!(e&&e.extra&&e.extra.file)},release:g};d.Raven.config(h.hosts.ravenDsn,e).install()}function c(t,n){n=n?{file:n.file}:{file:"printfriendly.js"},n.usingBM=h.usingBM,n.url=h.urls.page,e()&&d.Raven.captureException(t,{extra:n})}var d=window.top,l=null,f=!1,p=/d3nekkt1lmmhms|printfriendly\.com|printnicer\.com|algo\.js|printfriendly\.js|core\.js/,u=[],m=[],h={},g=null;return{init:function(e,t){h=e.config,g=e.version,"production"!==e.config.environment||e.onServer?t():Raven.context(t)},log:function(e,i){t()&&(console.error(e),console.error(e.stack)),i=i||{file:"printfriendly.js"};try{n()?c(e,i):(u.push({err:e,opts:i}),r(),m.push(e.name+" : "+e.message),m.push(e.stack))}catch(e){}}}}(),persistComputedStylesAndRect=function(){function e(e,t,n,r){for(var o=0,a=n.length;o<a;o++){var s=n[o],c=[i,r,s].join("_");e.dataset[c]=t[s]}}var t=["display","visibility"],n=["width","height"],i="pf";return function(i){var r=i.currentStyle||window.getComputedStyle(i);r&&e(i,r,t,"style");var o=i.getBoundingClientRect&&i.getBoundingClientRect();return o&&e(i,o,n,"rect"),{style:r,rect:o}}}(),PF_VERSION="client";!function(){var e=document.getElementById("printfriendly-data");if(e){var t=JSON.parse(e.getAttribute("data"));window.pfstyle=t.pfstyle,window.pfOptions=t.pfOptions}if(window.wrappedJSObject&&window.wrappedJSObject.extensionPath){var n=window.wrappedJSObject;window.extensionPath=n.extensionPath,window.pfstyle=n.pfstyle,window.pfOptions=n.pfOptions}}();var pfMod=window.pfMod||function(e){function t(e){coreIframe.contentWindow.postMessage(e,"*")}var n=e.document,r="https:";e.addEventListener("message",function(i){try{if(i.data){var r=i.data.payload;switch(i.data.type){case"PfCoreLoaded":t({type:"PfStartCore",payload:{pfData:p.pfData}});break;case"PfExtensionCoreLoaded":t({type:"PfLoadCore",payload:{pfData:p.pfData}});break;case"PfClosePreview":p.closePreview();break;case"PfAddCSS":commonUtils.addCSS(r.css,n,r.useBody);break;case"PfRestoreStyles":d.restoreStyles();break;case"PfAddViewPortTag":d.addViewPortTag();break;case"PfScrollTop":e.scrollTo(0,0);break;case"PfTwitterCopyEmbeded":m.copyEmbeded();break;case"PfCreateByAdType":a.createAdByType(r.adType);break;case"PfShowAds":a.show();break;case"PfHideAds":a.hide();break;case"PfFinished":p.hasContent=r.hasContent,p.finished=!0;break;case"PfRedirectIfNecessary":p.dsData=r.dsData;p.runRedirectChecks().redirect?p.redirect():t({type:"PfLaunchCore"})}}}catch(e){exTracker.log(e),p.finished=!0}});var o={};o.uncategorized="https://cdn.printfriendly.com/assets/client/ads/uncategorized-8cd74113af2855731c5b75938172da3748759d78c84fea3a68928a7d42163b4f.html",o.uncategorized_mobile="https://cdn.printfriendly.com/assets/client/ads/uncategorized_mobile-8aac370da8046299a07b03d3e07b75b3a7c7628da554239a421cd49b7134d761.html";var a={createAdByType:function(e){if(!document.getElementById("gaiframe")){var t=a.isMobile()?"_mobile":"",i=o[e+t];i.startsWith("/assets")&&(i=p.config.hosts.cdn+i);var r=document.createElement("iframe");r.id="gaiframe",r.name="gaiframe",r.style="border: 0!important; position:absolute!important; height:280px!important; margin-left: auto!important; margin-right: auto!important; left: 0!important; right:0!important; z-index: 2147483647!important; display:none;",r.src=i,r.scrolling="no",n.body.appendChild(r),a.setupSetStyle()}},isMobile:function(){return e.innerWidth<=700},setupSetStyle:function(){a.setStyle(),e.addEventListener("resize",function(){a.setStyle()})},setStyle:function(){var t=document.getElementById("gaiframe");if(t){var n=e.innerWidth>860?"284px":"250px",i=e.innerWidth>730?"700px":e.innerWidth;t.style.removeProperty("width"),t.style.removeProperty("top"),t.style.setProperty("width",i,"important"),t.style.setProperty("top",n,"important")}},show:function(){var e=document.getElementById("gaiframe");e&&(e.style.display="block")},hide:function(){var e=document.getElementById("gaiframe");e&&(e.style.display="none")}},s={environment:"production",disableUI:!1,protocol:r,dir:"ltr",usingBM:!1,maxImageWidth:750,filePath:"/assets/",platform:"unknown",enablePrintOnly:!1,hosts:{cdn:r+"//cdn.printfriendly.com",pf:"https://www.printfriendly.com",ds:"https://www.printfriendly.com",translations:"https://www.printfriendly.com",ds_cdn:"https://ds-4047.kxcdn.com",pdf:"https://pdf.printfriendly.com",email:"https://www.printfriendly.com",page:e.location.host.split(":")[0],ravenDsn:"https://5463b49718cd4266911eab9e5c0e114d@sentry.io/22091"},domains:{page:e.location.host.split(":")[0].split("www.").pop()}},c={isBookmarklet:function(){return e.pfstyle&&"wp"!=e.pfstyle},removeEmailsFromUrl:function(e){e=e.split("?")[0];for(var t=e.split("/"),n=t.length;n-- >0;){t[n].indexOf("@")>0&&t.splice(n,1)}return t.join("/")},isDynamicPage:function(){return!!(e.React||e.ko||e.Polymer||e.m||e.angular||e.ng&&e.ng.coreTokens||e.Backbone||e.Ember||e.Vue||document.querySelector&&document.querySelector('[ng-version],[data-reactroot],[data-bind],[class*="svelte-"],.__meteor-css__'))},ogImageUrl:function(){var e="",t=document.querySelector&&document.querySelector('meta[property="og:image"]');return t&&t.content&&(e=t.content),e},isWix:function(){return-1!==c.ogImageUrl().indexOf("wixstatic.com")},isOverBlog:function(){return-1!==c.ogImageUrl().indexOf("over-blog-kiwi.com")},isLocalHost:function(){var t=e.location.host,n=e.location.hostname;return-1!==t.indexOf(":")||!!n.match(/\d+\.\d+\.\d+\.\d+/)||"localhost"===n||!!n.split(".").pop().match(/invalid|test|example|localhost|dev/)}},d={addViewPortTag:function(){var e=n.getElementsByTagName("head")[0],t=n.querySelector("meta[name=viewport]");t||(t=n.createElement("meta"),t.name="viewport"),t.content="width=device-width, initial-scale=1",e.appendChild(t)},restoreStyles:function(){for(var e=document.getElementsByName("pf-style"),t=e.length-1;t>=0;t--)e[t].parentNode.removeChild(e[t])}},l={isReady:!1,readyBound:!1,ready:function(){if(!l.isReady){if(!document.body)return setTimeout(l.ready,13);l.isReady=!0,l.readyFunc.call()}},doScrollCheck:function(){if(!l.isReady){try{document.documentElement.doScroll("left")}catch(e){return setTimeout(l.doScrollCheck,50)}l.detach(),l.ready()}},detach:function(){document.addEventListener?(document.removeEventListener("DOMContentLoaded",l.completed,!1),e.removeEventListener("load",l.completed,!1)):document.attachEvent&&"complete"===document.readyState&&(document.detachEvent("onreadystatechange",l.completed),e.detachEvent("onload",l.completed))},completed:function(e){(document.addEventListener||"load"===e.type||"complete"===document.readyState)&&(l.detach(),l.ready())},bindReady:function(){if(!l.readyBound){if(l.readyBound=!0,"complete"===document.readyState)return l.ready();if(document.addEventListener)document.addEventListener("DOMContentLoaded",l.completed,!1),e.addEventListener("load",l.completed,!1);else if(document.attachEvent){document.attachEvent("onreadystatechange",l.completed),e.attachEvent("onload",l.completed);var t=!1;try{t=null==e.frameElement&&document.documentElement}catch(e){}t&&t.doScroll&&l.doScrollCheck()}}},domReady:function(e){this.readyFunc=e,this.bindReady()},canonicalize:function(e){if(e){var t=document.createElement("div");return t.innerHTML="<a></a>",t.firstChild.href=e,t.innerHTML=t.innerHTML,t.firstChild.href}return e}},f={headerImageUrl:l.canonicalize(e.pfHeaderImgUrl),headerTagline:e.pfHeaderTagline,imageDisplayStyle:e.pfImageDisplayStyle,customCSSURL:l.canonicalize(e.pfCustomCSS),disableClickToDel:e.pfdisableClickToDel,disablePDF:e.pfDisablePDF,encodeImages:1===parseInt(e.pfEncodeImages),disablePrint:e.pfDisablePrint,disableEmail:e.pfDisableEmail};-1!=="|full-size|remove-images|large|medium|small|".indexOf("|"+e.pfImagesSize+"|")?f.imagesSize=e.pfImagesSize:f.imagesSize=1==e.pfHideImages?"remove-images":"full-size";var p={version:PF_VERSION,initialized:!1,finished:!1,onServer:!1,hasContent:!1,messages:[],errors:[],waitDsCounter:0,autoStart:!1,stats:{},init:function(t){try{this.initialized=!0,this.configure(t),this.onServerSetup(),p.onServer||this.config.isExtension||this.getAdSettingsFromPFServer(),this.setVariables(),this.detectBrowser(),this.setStats(),this.startIfNecessary(),e.print=function(){p.start()}}catch(e){exTracker.log(e),p.finished=!0}},configure:function(t){if(this.config=s,t){this.config.environment=t.environment||"development";for(var n in t.hosts)this.config.hosts[n]=t.hosts[n];t.filePath&&(this.config.filePath=t.filePath),t.ssLocation&&(this.config.ssLocation=t.ssLocation),t.ssStyleSheetHrefs&&(this.config.ssStyleSheetHrefs=t.ssStyleSheetHrefs),t.enablePrintOnly&&(this.config.enablePrintOnly=t.enablePrintOnly)}this.config.isExtension=!!e.extensionPath},getVal:function(e,t){for(var n=t.split(".");void 0!==e&&n.length;)e=e[n.shift()];return e},startIfNecessary:function(){(e.pfstyle||this.autoStart)&&this.start()},urlHasAutoStartParams:function(){return-1!==this.config.urls.page.indexOf("pfstyle=wp")},start:function(){if(p.onServer||p.config.isExtension)p.launch();else{if(p.waitDsCounter+=1,p.waitDsCounter<20&&!p.dsData)return setTimeout(function(){p.start()},100);p.runRedirectChecks().redirect?p.redirect():p.supportedSiteType()&&p.launch()}},launch:function(){l.domReady(function(){try{p.startTime=(new Date).getTime(),h.run(),p.pfData=u.get(),p.config.disableUI||("debug-page.manujanardhanan.repl.co"!==p.config.domains.page&&p.sanitizeLocation(),p.createMask()),p.loadCore()}catch(e){exTracker.log(e),p.finished=!0}})},sanitizeLocation:function(){url=document.location.href.split("?")[0],url=c.removeEmailsFromUrl(url),url!==document.location.href&&(history&&"function"==typeof history.pushState?history.pushState({pf:"sanitized"},document.title,url):p.urlHasPII=!0)},unsanitizeLocation:function(){history&&history.state&&"sanitized"==history.state.pf&&history.back()},onServerSetup:function(){e.onServer&&(this.onServer=!0,this.config.disableUI=!0)},setVariables:function(){var t,n=this,i=n.config.hosts.cdn+n.config.filePath+n.version,r=this.config.disableUI?"":"https://cdn.printfriendly.com/assets/pf-app/main-06d5be382d0b220c84fdc21affc7d900523058bb9603a9e63c57edd4fbe54d06.css",o=this.config.disableUI?"":"https://cdn.printfriendly.com/assets/content/main-3af2c415fb1f845083ca54b17abb3adc68b2cbf2243091e33cd242a9b3743d68.css";this.config.urls={version:i,js:{jquery:"https://cdn.printfriendly.com/assets/unversioned/jquery/1.12.4.min-7a013c86d0ba65c7bd1d6eae163d1245b0d02ed1122b8cc47c1144b1d8426c53.js",raven:"https://cdn.printfriendly.com/assets/unversioned/raven/3.19.1.min-4615298b8370384c06482f8da1411b3762d9046b1e0c812b795f7c6c6a4d1cd9.js",core:"https://cdn.printfriendly.com/assets/client/core-d6e63071a358c792b2f8016b2affb1d973cfb4a578c65a2d47029a2b4f50dc72.js",algo:"https://cdn.printfriendly.com/assets/client/algo-64d2c5f3f39250e718577479f5326b1fc1b960afb05df42db66caa30272c8465.js"},css:{pfApp:r,content:o},pdfMake:n.config.hosts.pdf+"/pdfs/make",email:n.config.hosts.email+"/email/new"};try{t=top.location.href}catch(n){t=e.location.href}this.config.urls.page=t,this.userSettings=f,this.config.pfstyle=e.pfstyle,!e.pfstyle||"bk"!==e.pfstyle&&"nbk"!==e.pfstyle&&"cbk"!==e.pfstyle||(this.config.usingBM=!0),this.autoStart=this.urlHasAutoStartParams()},detectBrowser:function(){this.browser={};var e=navigator.appVersion;e&&-1!==e.indexOf("MSIE")?(this.browser.version=parseFloat(e.split("MSIE")[1]),this.browser.isIE=!0):this.browser.isIE=!1},loadScript:function(e,t){var n=document.getElementsByTagName("head")[0],i=document.createElement("script");i.type="text/javascript",i.src=e,i.onreadystatechange=t,i.onload=t,n.appendChild(i)},redirect:function(){var e=["source=cs","url="+encodeURIComponent(top.location.href)];for(var t in f)"undefined"!=typeof f[t]&&e.push(t+"="+encodeURIComponent(f[t]));var n=this.config.hosts.pf+"/print/?"+e.join("&");this.autoStart?top.location.replace(n):top.location.href=n},supportedSiteType:function(){return"about:blank"!==p.config.urls.page&&("http:"===p.config.protocol||"https:"===p.config.protocol)},setStats:function(){p.stats.page={bm:c.isBookmarklet(),dynamic:c.isDynamicPage(),local:c.isLocalHost(),unSupported:c.isWix()||c.isOverBlog()}},skipRedirectReasons:[{name:"noApiResponse",check:function(){return!p.dsData}},{name:"adFree",check:function(){return p.dsData.domain_settings.ad_free}},{name:"isDynamicPage",check:function(){return c.isDynamicPage()}},{name:"isLocalHost",check:function(){return c.isLocalHost()}},{name:"unSupportedBySS",check:function(){return c.isWix()||c.isOverBlog()}},{name:"ApiButtonOrExtensionRedirectFalse",check:function(){return!c.isBookmarklet()&&!p.dsData.domain_settings.redirect}},{name:"BMExt",check:function(){return c.isBookmarklet()}}],forceRedirectReasons:[{name:"unSupportedBrowser",check:function(){try{var t=navigator.userAgent.match(/Edge\/(\d+.\d+)/),n=["fullforlife.com"];return!!(t&&n.indexOf(p.config.domains.page)>=0)||!(c.isBookmarklet()||!(!history||"function"!=typeof history.pushState||navigator.userAgent.match(/(ipod|opera.mini|blackberry|playbook|bb10)/i)||p.browser.isIE&&p.browser.version<11||p.browser.isIE&&e.adsbygoogle||"undefined"!=typeof $&&$.jcarousel&&p.browser.isIE||t&&t[1]&&parseFloat(t[1])<13.10586))}catch(e){return exTracker.log(e),!1}}},{name:"printRestrictedByCSP",check:function(){return p.config.domains.page.match(/yahoo\.com|techcrunch\.com/)}}],runChecksFor:function(e){for(var t=0,n=e.length;t<n;t++){var i=e[t];if(i.check())return i}},__redirectChecksResult:null,runRedirectChecks:function(){if(this.__redirectChecksResult)return this.__redirectChecksResult;var e=this.runChecksFor(this.skipRedirectReasons);if(!e)return{redirect:!0};var t=this.runChecksFor(this.forceRedirectReasons);return t?{reason:t.name,redirect:!0}:(this.__redirectChecksResult={reason:e.name,redirect:!1},this.__redirectChecksResult)},createMask:function(){var e=document.createElement("div");e.innerHTML='<div id="pf-mask" style="z-index: 2147483627!important; position: fixed !important; top: 0pt !important; left: 0pt !important; background-color: rgb(0, 0, 0) !important; opacity: 0.8 !important;filter:progid:DXImageTransform.Microsoft.Alpha(opacity=80); height: 100% !important; width: 100% !important;"></div>',document.body.appendChild(e.firstChild)},closePreview:function(){l.readyBound=!1,l.isReady=!1,p.unsanitizeLocation();var e=document.getElementById("pf-core");e&&e.parentElement&&e.parentElement.removeChild(e);var t=document.getElementById("pf-mask");t&&t.parentElement&&t.parentElement.removeChild(t);var n=document.getElementById("gaiframe");n&&n.parentElement&&n.parentElement.removeChild(n)},removeDoubleSemiColon:function(e){return e.replace(/;{2}/g,";")},loadCore:function(){e.coreIframe=commonUtils.createIframe(document),coreIframe.id="pf-core",coreIframe.name="pf-core",document.body.appendChild(coreIframe);var t=coreIframe.style.cssText+";width: 100% !important;max-width:100% !important;height: 100% !important; display: block !important; overflow: hidden !important; position: absolute !important; top: 0px !important; left: 0px !important; background-color: transparent !important; z-index: 2147483647!important";if(coreIframe.style.cssText=this.removeDoubleSemiColon(t),this.config.isExtension)coreIframe.src=extensionPath+"/core.html";else{var n='<!DOCTYPE html><html><head><base target="_parent"><meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta name="viewport" content="width=device-width, initial-scale=1"><script src="'+this.config.urls.js.jquery+'"></script>';p.onServer||(n+='<script src="'+this.config.urls.js.raven+'"></script>'),n+='<script src="'+this.config.urls.js.core+'"></script><link media="screen" type="text/css" rel="stylesheet" href="'+this.config.urls.css.pfApp+'"></head><body class="cs-core-iframe" style="visibility: hidden;" onload="core.init();"></body>',commonUtils.loadHtmlInIframe(document,coreIframe,n)}analytics.setCoreWindow(e.coreIframe.contentWindow)},getAdSettingsFromPFServer:function(){var e=document.createElement("script");e.src=p.config.hosts.ds_cdn+"/api/v3/domain_settings/a?callback=pfMod.saveAdSettings&hostname="+p.config.hosts.page+"&client_version="+p.version,document.getElementsByTagName("head")[0].appendChild(e)},saveAdSettings:function(n){p.dsData=n,e.coreIframe&&coreIframe.contentWindow&&t({type:"PfConfigureAdSettings",payload:{dsData:n}})}},u={emailText:function(){var e=document.getElementsByClassName("pf-email");return e.length?e[0].textContent:""},csStyleSheetHrefs:function(){var e=[];for(i=0;i<n.styleSheets.length;i++)e.push(n.styleSheets[i].href);return e},metas:function(){var e=n.getElementsByTagName("meta"),t=[];for(i=0;i<e.length;i++)t.push({name:e[i].getAttribute("name"),content:e[i].getAttribute("content"),property:e[i].getAttribute("property"),itemprop:e[i].getAttribute("itemprop")});return t},screen:function(){return{x:"undefined"!=typeof e.top.screenX?e.top.screenX:e.top.screenLeft,y:"undefined"!=typeof e.top.screenY?e.top.screenY:e.top.screenTop,width:"undefined"!=typeof e.top.outerWidth?e.top.outerWidth:e.top.document.documentElement.clientWidth,height:"undefined"!=typeof e.top.outerHeight?e.top.outerHeight:e.top.document.documentElement.clientHeight-22}},language:function(){var e=document.getElementsByTagName("html")[0].getAttribute("lang");if(!e){var t=document.querySelector("meta[http-equiv=Content-Language]");t&&(e=t.getAttribute("content"))}return e},canvasDataUrls:function(){for(var e=[],t=n.getElementsByTagName("canvas"),i=0;i<t.length;i++)try{var r=t[i],o=r.toDataURL("image/png");r.setAttribute("pf-dataurl-index",e.length),e.push(o)}catch(e){}return e},favicon:function(){return"https://s2.googleusercontent.com/s2/favicons?domain="+e.location.host},enablePrintOnly:function(e){return!!e.querySelector('.at-svc-printfriendly, a[href*="printfriendly.com"], script[src*="cdn.printfriendly.com"], img[src*="cdn.printfriendly.com"]')||p.config.enablePrintOnly},get:function(){p.config.extensionPath=e.extensionPath;var t=this.canvasDataUrls(),i=document.location;return page={dir:n.body.getAttribute("dir")||n.querySelector("html").getAttribute("dir")||getComputedStyle(n.body).getPropertyValue("direction")||"ltr",bodyClassList:[].slice.call(n.body.classList),emailText:this.emailText(),screen:this.screen(),metas:this.metas(),csStyleSheetHrefs:this.csStyleSheetHrefs(),location:{href:i.href,host:i.host,pathname:i.pathname,protocol:i.protocol},enablePrintOnly:this.enablePrintOnly(n),hasPrintOnly:!!n.querySelector("#print-only, .print-only"),title:document.title,body:document.body.innerHTML,language:this.language(),canvasDataUrls:t,favicon:this.favicon()},{startTime:p.startTime,config:p.config,userSettings:p.userSettings,version:p.version,onServer:p.onServer,browser:p.browser,urlHasPII:p.urlHasPII,dsData:p.dsData,stats:p.stats,page:page}}},m={copyEmbeded:function(){var e,i,r;for(e=n.querySelectorAll("twitter-widget.twitter-tweet-rendered"),r=e.length-1;r>=0;r--)i=e[r],t({type:"PfTwitterWidgetShadowDom",payload:{id:i.id,innerHTML:i.shadowRoot.innerHTML,cssText:i.style.cssText}});for(e=n.querySelectorAll("iframe.twitter-tweet-rendered"),r=e.length-1;r>=0;r--)e=e[r],t({type:"PfTwitterTweetRendered",payload:{id:i.id,head:i.contentDocument.head.innerHTML,body:i.contentDocument.body.innerHTML,cssText:i.style.cssText}})}},h={LARGE_IMAGE_WIDTH:300,LARGE_IMAGE_HEIGHT:200,run:function(){this.processChildren(document.body)},processChildren:function(e){var t,n,i=[];if(e.children&&e.children.length)for(var r=0,o=e.children.length;r<o;r++)i.push(e.children[r]);for(var a=null;a=i.shift();)if(!a.classList||!a.classList.contains("comment-list")){if(a.nodeType===Node.ELEMENT_NODE)try{t=a.nodeName.toLowerCase();var s=persistComputedStylesAndRect(a);if(n=s.style,"none"===n.display||"hidden"===n.visibility?a.classList.add("hidden-originally"):a.classList.contains("hidden-originally")&&a.classList.remove("hidden-originally"),"a"===t)href=a.getAttribute("href"),href&&"#"!==href.charAt(0)&&(a.href=a.href);else if("input"!==t&&"textarea"!==t||pfMod.onServer)if("select"!==t||pfMod.onServer){if(("img"===t||"svg"===t)&&(a.src=a.src,"img"===t&&!a.classList.contains("hidden-originally"))){var c=commonUtils.getImageHeight(a,pfMod.onServer),d=commonUtils.getImageWidth(a,pfMod.onServer);d*c>this.LARGE_IMAGE_WIDTH*this.LARGE_IMAGE_HEIGHT&&a.classList.add("pf-large-image")}}else a.options[a.selectedIndex].setAttribute("selected","selected");else"radio"===a.type||"checkbox"===a.type?a.checked&&a.setAttribute("checked","checked"):a.setAttribute("value",a.value)}catch(e){}if(a.children&&a.children.length)for(var r=0,o=a.children.length;r<o;r++)i.push(a.children[r])}}};return p}(window);window.pfMod=pfMod;var priFri=pfMod;pfMod.initialized&&(document.getElementById("printfriendly-data")||window.extensionPath)?pfMod.start():"algo"===window.name||"pf-core"===window.name||pfMod.initialized||pfMod.init(window.pfOptions);