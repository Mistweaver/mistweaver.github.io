(self.webpackChunkbryce_egley_dot_com=self.webpackChunkbryce_egley_dot_com||[]).push([[64,986],{838:function(e,t,n){"use strict";var a=n(1253),i=n(2122),r=n(7294),o=n(5505),c=n(4621),s=[0,1,2,3,4,5,6,7,8,9,10],l=["auto",!0,1,2,3,4,5,6,7,8,9,10,11,12];function d(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:1,n=parseFloat(e);return"".concat(n/t).concat(String(e).replace(String(n),"")||"px")}var m=r.forwardRef((function(e,t){var n=e.alignContent,c=void 0===n?"stretch":n,s=e.alignItems,l=void 0===s?"stretch":s,d=e.classes,m=e.className,f=e.component,u=void 0===f?"div":f,x=e.container,g=void 0!==x&&x,p=e.direction,v=void 0===p?"row":p,w=e.item,y=void 0!==w&&w,h=e.justify,b=void 0===h?"flex-start":h,E=e.lg,M=void 0!==E&&E,S=e.md,C=void 0!==S&&S,j=e.sm,W=void 0!==j&&j,I=e.spacing,k=void 0===I?0:I,N=e.wrap,Z=void 0===N?"wrap":N,D=e.xl,z=void 0!==D&&D,F=e.xs,P=void 0!==F&&F,_=e.zeroMinWidth,G=void 0!==_&&_,q=(0,a.Z)(e,["alignContent","alignItems","classes","className","component","container","direction","item","justify","lg","md","sm","spacing","wrap","xl","xs","zeroMinWidth"]),T=(0,o.default)(d.root,m,g&&[d.container,0!==k&&d["spacing-xs-".concat(String(k))]],y&&d.item,G&&d.zeroMinWidth,"row"!==v&&d["direction-xs-".concat(String(v))],"wrap"!==Z&&d["wrap-xs-".concat(String(Z))],"stretch"!==l&&d["align-items-xs-".concat(String(l))],"stretch"!==c&&d["align-content-xs-".concat(String(c))],"flex-start"!==b&&d["justify-xs-".concat(String(b))],!1!==P&&d["grid-xs-".concat(String(P))],!1!==W&&d["grid-sm-".concat(String(W))],!1!==C&&d["grid-md-".concat(String(C))],!1!==M&&d["grid-lg-".concat(String(M))],!1!==z&&d["grid-xl-".concat(String(z))]);return r.createElement(u,(0,i.Z)({className:T,ref:t},q))})),f=(0,c.Z)((function(e){return(0,i.Z)({root:{},container:{boxSizing:"border-box",display:"flex",flexWrap:"wrap",width:"100%"},item:{boxSizing:"border-box",margin:"0"},zeroMinWidth:{minWidth:0},"direction-xs-column":{flexDirection:"column"},"direction-xs-column-reverse":{flexDirection:"column-reverse"},"direction-xs-row-reverse":{flexDirection:"row-reverse"},"wrap-xs-nowrap":{flexWrap:"nowrap"},"wrap-xs-wrap-reverse":{flexWrap:"wrap-reverse"},"align-items-xs-center":{alignItems:"center"},"align-items-xs-flex-start":{alignItems:"flex-start"},"align-items-xs-flex-end":{alignItems:"flex-end"},"align-items-xs-baseline":{alignItems:"baseline"},"align-content-xs-center":{alignContent:"center"},"align-content-xs-flex-start":{alignContent:"flex-start"},"align-content-xs-flex-end":{alignContent:"flex-end"},"align-content-xs-space-between":{alignContent:"space-between"},"align-content-xs-space-around":{alignContent:"space-around"},"justify-xs-center":{justifyContent:"center"},"justify-xs-flex-end":{justifyContent:"flex-end"},"justify-xs-space-between":{justifyContent:"space-between"},"justify-xs-space-around":{justifyContent:"space-around"},"justify-xs-space-evenly":{justifyContent:"space-evenly"}},function(e,t){var n={};return s.forEach((function(a){var i=e.spacing(a);0!==i&&(n["spacing-".concat(t,"-").concat(a)]={margin:"-".concat(d(i,2)),width:"calc(100% + ".concat(d(i),")"),"& > $item":{padding:d(i,2)}})})),n}(e,"xs"),e.breakpoints.keys.reduce((function(t,n){return function(e,t,n){var a={};l.forEach((function(e){var t="grid-".concat(n,"-").concat(e);if(!0!==e)if("auto"!==e){var i="".concat(Math.round(e/12*1e8)/1e6,"%");a[t]={flexBasis:i,flexGrow:0,maxWidth:i}}else a[t]={flexBasis:"auto",flexGrow:0,maxWidth:"none"};else a[t]={flexBasis:0,flexGrow:1,maxWidth:"100%"}})),"xs"===n?(0,i.Z)(e,a):e[t.breakpoints.up(n)]=a}(t,e,n),t}),{}))}),{name:"MuiGrid"})(m);t.Z=f},9652:function(e,t,n){"use strict";n.r(t),n.d(t,{default:function(){return c}});var a=n(838),i=n(7294),r=n(2199),o=n(1933);function c(){return i.createElement(r.Z,null,i.createElement(a.Z,{container:!0,spacing:2},i.createElement(a.Z,{item:!0,xs:5},i.createElement("div",{className:"box",style:{padding:20}},i.createElement("div",{className:"titleText secondary"},"PacFrog")),i.createElement("div",{style:{padding:20,color:"white"}},"In a previous iteration of my website, I wrote a script where a Pac-Man figure would chase around your cursor inside a div.  It is quite rudimentary.  Not sure what I'll do with it yet...")),i.createElement(a.Z,{item:!0,xs:12},i.createElement(o.PacMan,null))))}},1933:function(e,t,n){"use strict";n.r(t),n.d(t,{PacMan:function(){return i}});var a=n(7294),i=function(){var e=0,t=0,n=.2,i=0,r=0,o=1e3/60,c=60,s=0,l=0,d=200,m=23,f=!1;function u(a){f?(n=.2,e,t,d>e?e+=n*a:e-=n*a,m>t?t+=n*a:t-=n*a):((e+=n*a)>=300||e<=0)&&(n=-n)}var x=0;var g="";return requestAnimationFrame((function n(a){if(a<i+1e3/60)requestAnimationFrame(n);else{r+=a-i,i=a,a>l+1e3&&(c=.25*s+.75*c,l=a,s=0),s++;for(var f=0;r>=o;)if(u(o),r-=o,++f>=240){r=0;break}e,t,x=Math.atan2(d-e,m-t)*(180/Math.PI)*-1+90,function(e){e<25?g="black":e>30&&(g="red")}(c),requestAnimationFrame(n)}})),a.createElement("div",{id:"arenacontainer",className:"box"},a.createElement("div",{id:"fpsDisplay",style:{color:g}},Math.round(c)+" FPS"),a.createElement("div",{id:"lifeDisplay"}),a.createElement("div",{id:"arena",onMouseMove:function(e){d=e.offsetX,m=e.offsetY},onMouseEnter:function(e){f=!0,d=-1,m=-1},onMouseLeave:function(e){f=!1,d=-1,m=-1}},a.createElement("div",{id:"pacman",className:"pacman",style:{left:"314.667px",top:"108.984px",transform:"rotate(221.977deg)"}},a.createElement("div",{id:"pacmanDisplay",style:{transform:"rotate("+x+"deg)",WebkitTransform:"rotate("+x+"deg)",msTransform:"rotate("+x+"deg)",OTransform:"rotate("+x+"deg)"}},a.createElement("div",{className:"pacman-top"}),a.createElement("div",{className:"pacman-bottom"}))),a.createElement("div",{id:"centerDot"}),a.createElement("div",{id:"positionDot"}),a.createElement("div",{id:"arenatitlebox"},a.createElement("h3",null,"Video Games"))))}}}]);
//# sourceMappingURL=component---src-pages-games-pac-frog-tsx-ea263391050ca47e83f4.js.map