'use strict';(function(c){"object"==typeof exports&&"object"==typeof module?c(require("../../lib/codemirror")):"function"==typeof define&&define.amd?define(["../../lib/codemirror"],c):c(CodeMirror)})(function(c){function l(a,c,b){a=a.getWrapperElement().appendChild(document.createElement("div"));a.className=b?"CodeMirror-dialog CodeMirror-dialog-bottom":"CodeMirror-dialog CodeMirror-dialog-top";"string"==typeof c?a.innerHTML=c:a.appendChild(c);return a}function m(a,c){a.state.currentNotificationClose&&
a.state.currentNotificationClose();a.state.currentNotificationClose=c}c.defineExtension("openDialog",function(a,g,b){function e(a){if("string"==typeof a)d.value=a;else if(!h&&(h=!0,f.parentNode.removeChild(f),k.focus(),b.onClose))b.onClose(f)}b||(b={});m(this,null);var f=l(this,a,b.bottom),h=!1,k=this,d=f.getElementsByTagName("input")[0];if(d){d.focus();b.value&&(d.value=b.value,!1!==b.selectValueOnOpen&&d.select());if(b.onInput)c.on(d,"input",function(a){b.onInput(a,d.value,e)});if(b.onKeyUp)c.on(d,
"keyup",function(a){b.onKeyUp(a,d.value,e)});c.on(d,"keydown",function(a){if(!(b&&b.onKeyDown&&b.onKeyDown(a,d.value,e))){if(27==a.keyCode||!1!==b.closeOnEnter&&13==a.keyCode)d.blur(),c.e_stop(a),e();13==a.keyCode&&g(d.value,a)}});if(!1!==b.closeOnBlur)c.on(d,"blur",e)}else if(a=f.getElementsByTagName("button")[0]){c.on(a,"click",function(){e();k.focus()});if(!1!==b.closeOnBlur)c.on(a,"blur",e);a.focus()}return e});c.defineExtension("openConfirm",function(a,g,b){function e(){h||(h=!0,f.parentNode.removeChild(f),
k.focus())}m(this,null);var f=l(this,a,b&&b.bottom);a=f.getElementsByTagName("button");var h=!1,k=this,d=1;a[0].focus();for(b=0;b<a.length;++b){var n=a[b];(function(a){c.on(n,"click",function(b){c.e_preventDefault(b);e();a&&a(k)})})(g[b]);c.on(n,"blur",function(){--d;setTimeout(function(){0>=d&&e()},200)});c.on(n,"focus",function(){++d})}});c.defineExtension("openNotification",function(a,g){function b(){f||(f=!0,clearTimeout(h),e.parentNode.removeChild(e))}m(this,b);var e=l(this,a,g&&g.bottom),f=
!1,h;a=g&&"undefined"!==typeof g.duration?g.duration:5E3;c.on(e,"click",function(a){c.e_preventDefault(a);b()});a&&(h=setTimeout(b,a));return b})});
