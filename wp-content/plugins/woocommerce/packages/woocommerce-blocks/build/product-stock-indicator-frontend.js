(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[66],{114:function(t,e,c){"use strict";c.d(e,"a",(function(){return n})),c(103);var o=c(44);const n=()=>o.m>1},136:function(t,e,c){"use strict";c.d(e,"c",(function(){return i})),c.d(e,"d",(function(){return u})),c.d(e,"b",(function(){return l})),c.d(e,"a",(function(){return b}));var o=c(70),n=c(114),r=c(52),s=c(61);const a=t=>Object(r.a)(t)?JSON.parse(t)||{}:Object(s.a)(t)?t:{},i=t=>{if(!Object(n.a)()||"function"!=typeof o.__experimentalGetSpacingClassesAndStyles)return{style:{}};const e=Object(s.a)(t)?t:{},c=a(e.style);return Object(o.__experimentalGetSpacingClassesAndStyles)({...e,style:c})},u=t=>{const e=Object(s.a)(t)?t:{},c=a(e.style),o=Object(s.a)(c.typography)?c.typography:{};return{style:{fontSize:e.fontSize?`var(--wp--preset--font-size--${e.fontSize})`:o.fontSize,lineHeight:o.lineHeight,fontWeight:o.fontWeight,textTransform:o.textTransform,fontFamily:e.fontFamily}}},l=t=>{if(!Object(n.a)())return{className:"",style:{}};const e=Object(s.a)(t)?t:{},c=a(e.style);return Object(o.__experimentalUseColorProps)({...e,style:c})},b=t=>{if(!Object(n.a)())return{className:"",style:{}};const e=Object(s.a)(t)?t:{},c=a(e.style);return Object(o.__experimentalUseBorderProps)({...e,style:c})}},354:function(t,e){},406:function(t,e,c){"use strict";c.r(e);var o=c(0),n=c(1),r=c(4),s=c.n(r),a=c(43),i=c(120),u=(c(354),c(136));e.default=Object(i.withProductDataContext)(t=>{const{className:e}=t,{parentClassName:c}=Object(a.useInnerBlockLayoutContext)(),{product:r}=Object(a.useProductDataContext)(),i=Object(u.b)(t),l=Object(u.d)(t);if(!r.id||!r.is_purchasable)return null;const b=!!r.is_in_stock,d=r.low_stock_remaining,p=r.is_on_backorder;return Object(o.createElement)("div",{className:s()(e,i.className,"wc-block-components-product-stock-indicator",{[c+"__stock-indicator"]:c,"wc-block-components-product-stock-indicator--in-stock":b,"wc-block-components-product-stock-indicator--out-of-stock":!b,"wc-block-components-product-stock-indicator--low-stock":!!d,"wc-block-components-product-stock-indicator--available-on-backorder":!!p}),style:{...i.style,...l.style}},d?(t=>Object(n.sprintf)(
/* translators: %d stock amount (number of items in stock for product) */
Object(n.__)("%d left in stock","woocommerce"),t))(d):((t,e)=>e?Object(n.__)("Available on backorder","woocommerce"):t?Object(n.__)("In Stock","woocommerce"):Object(n.__)("Out of Stock","woocommerce"))(b,p))})},61:function(t,e,c){"use strict";c.d(e,"a",(function(){return o})),c.d(e,"b",(function(){return n}));const o=t=>!(t=>null===t)(t)&&t instanceof Object&&t.constructor===Object;function n(t,e){return o(t)&&e in t}}}]);