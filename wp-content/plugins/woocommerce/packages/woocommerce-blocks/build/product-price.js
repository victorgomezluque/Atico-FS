(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[27],{131:function(e,c){},152:function(e,c){},301:function(e,c,r){"use strict";r.r(c);var t=r(0),a=r(4),n=r.n(a),l=r(92),i=r(26),s=r(29),o=r(138),u=r(123),p=r(58);c.default=Object(p.withProductDataContext)(e=>{var c,r;const{className:a,textAlign:p}=e,{parentClassName:m}=Object(s.useInnerBlockLayoutContext)(),{product:d}=Object(s.useProductDataContext)(),b=Object(o.a)(e),y=Object(u.a)(e),g=n()("wc-block-components-product-price",a,b.className,{[m+"__product-price"]:m}),_={...y.style,...b.style};if(!d.id)return Object(t.createElement)(l.a,{align:p,className:g});const j=d.prices,O=Object(i.getCurrencyFromPriceResponse)(j),N=j.price!==j.regular_price,v=n()({[m+"__product-price__value"]:m,[m+"__product-price__value--on-sale"]:N});return Object(t.createElement)(l.a,{align:p,className:g,priceStyle:_,regularPriceStyle:_,priceClassName:v,currency:O,price:j.price,minPrice:null==j||null===(c=j.price_range)||void 0===c?void 0:c.min_amount,maxPrice:null==j||null===(r=j.price_range)||void 0===r?void 0:r.max_amount,regularPrice:j.regular_price,regularPriceClassName:n()({[m+"__product-price__regular"]:m})})})},38:function(e,c,r){"use strict";var t=r(6),a=r.n(t),n=r(0),l=r(126),i=r(4),s=r.n(i);r(131);const o=e=>({thousandSeparator:e.thousandSeparator,decimalSeparator:e.decimalSeparator,decimalScale:e.minorUnit,fixedDecimalScale:!0,prefix:e.prefix,suffix:e.suffix,isNumericString:!0});c.a=e=>{let{className:c,value:r,currency:t,onValueChange:i,displayType:u="text",...p}=e;const m="string"==typeof r?parseInt(r,10):r;if(!Number.isFinite(m))return null;const d=m/10**t.minorUnit;if(!Number.isFinite(d))return null;const b=s()("wc-block-formatted-money-amount","wc-block-components-formatted-money-amount",c),y={...p,...o(t),value:void 0,currency:void 0,onValueChange:void 0},g=i?e=>{const c=+e.value*10**t.minorUnit;i(c)}:()=>{};return Object(n.createElement)(l.a,a()({className:b,displayType:u},y,{value:d,onValueChange:g}))}},92:function(e,c,r){"use strict";var t=r(0),a=r(1),n=r(38),l=r(4),i=r.n(l),s=r(26);r(152);const o=e=>{let{currency:c,maxPrice:r,minPrice:l,priceClassName:o,priceStyle:u={}}=e;return Object(t.createElement)(t.Fragment,null,Object(t.createElement)("span",{className:"screen-reader-text"},Object(a.sprintf)(
/* translators: %1$s min price, %2$s max price */
Object(a.__)("Price between %1$s and %2$s","woocommerce"),Object(s.formatPrice)(l),Object(s.formatPrice)(r))),Object(t.createElement)("span",{"aria-hidden":!0},Object(t.createElement)(n.a,{className:i()("wc-block-components-product-price__value",o),currency:c,value:l,style:u})," — ",Object(t.createElement)(n.a,{className:i()("wc-block-components-product-price__value",o),currency:c,value:r,style:u})))},u=e=>{let{currency:c,regularPriceClassName:r,regularPriceStyle:l,regularPrice:s,priceClassName:o,priceStyle:u,price:p}=e;return Object(t.createElement)(t.Fragment,null,Object(t.createElement)("span",{className:"screen-reader-text"},Object(a.__)("Previous price:","woocommerce")),Object(t.createElement)(n.a,{currency:c,renderText:e=>Object(t.createElement)("del",{className:i()("wc-block-components-product-price__regular",r),style:l},e),value:s}),Object(t.createElement)("span",{className:"screen-reader-text"},Object(a.__)("Discounted price:","woocommerce")),Object(t.createElement)(n.a,{currency:c,renderText:e=>Object(t.createElement)("ins",{className:i()("wc-block-components-product-price__value","is-discounted",o),style:u},e),value:p}))};c.a=e=>{let{align:c,className:r,currency:a,format:l="<price/>",maxPrice:s,minPrice:p,price:m,priceClassName:d,priceStyle:b,regularPrice:y,regularPriceClassName:g,regularPriceStyle:_}=e;const j=i()(r,"price","wc-block-components-product-price",{["wc-block-components-product-price--align-"+c]:c});l.includes("<price/>")||(l="<price/>",console.error("Price formats need to include the `<price/>` tag."));const O=y&&m!==y;let N=Object(t.createElement)("span",{className:i()("wc-block-components-product-price__value",d)});return O?N=Object(t.createElement)(u,{currency:a,price:m,priceClassName:d,priceStyle:b,regularPrice:y,regularPriceClassName:g,regularPriceStyle:_}):void 0!==p&&void 0!==s?N=Object(t.createElement)(o,{currency:a,maxPrice:s,minPrice:p,priceClassName:d,priceStyle:b}):m&&(N=Object(t.createElement)(n.a,{className:i()("wc-block-components-product-price__value",d),currency:a,value:m,style:b})),Object(t.createElement)("span",{className:j},Object(t.createInterpolateElement)(l,{price:N}))}}}]);