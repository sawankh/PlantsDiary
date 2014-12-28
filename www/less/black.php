/* ==|== HelpLess - LESS Helpers Library (http://m6tt.github.com/HelpLess) = */
@import 'libs/helpless.0.0.3.less';

/* ==|== Import HTML5 ✰ Boilerplate LESS library =========================== */
@import 'libs/boilerplate.less';
@import 'elements.less';

/* Normalize */
#blr.normalize(#0abbcd, #555);

/* ==|== primary styles =====================================================
   Author: Rahul Vagadiya (theunexpected1)
  ========================================================================== */

























/* my reset */

.gradient(@color1, @color2){
  background: -moz-linear-gradient(top,  @color1 0%, @color2 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,@color1), color-stop(100%,@color2)); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top,  @color1 0%,@color2 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top,  @color1 0%,@color2 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top,  @color1 0%,@color2 100%); /* IE10+ */
  background: linear-gradient(to bottom,  @color1 0%,@color2 100%); /* W3C */
  
}



.transitioner(@params){
  transition:@params;
  -moz-transition:@params; /* Firefox 4 */
  -webkit-transition:@params; /* Safari and Chrome */
  -o-transition:color @params; /* Opera */
}


.ellipsify(@height){
  overflow: hidden;
  o-text-overflow: ellipsis;
  -o-text-overflow: ellipsis;  
  text-overflow: ellipsis;
  white-space: nowrap;
  height: @height;
}

.shadowMe(@params){
  box-shadow: @params;
  -webkit-box-shadow: @params;
  -moz-box-shadow: @params;
  -o-box-shadow: @params;
  
}


.borderRadiusMe(@params){
  border-radius: @params;
  -webkit-border-radius: @params;
  -moz-border-radius: @params;
  -o-border-radius: @params;
}

.flipMe{
   -moz-transform: scaleX(-1);
   -o-transform: scaleX(-1);
   -webkit-transform: scaleX(-1);
   transform: scaleX(-1);
   filter: FlipH;
   -ms-filter: "FlipH";
}











@red :#e51400;
@blue: #0076a3;
@yellow: #E0931B;
@green: #689913;
@carrotOrange: #bc3f16;
@purple: #6426BC;
@pink: #BC5D8E;
@brown: #72411E;
@black: #393939;
@maroon: #800000;


/*
use predefined colors from above, or you can even use urs like this:
@themeColor: #f0f0f0;
*/

@themeColor: @black;


@bgColor: #f8f8f8;
@textColor :#222222;
@inputBorderColor: #c3c3c3;

@bgColorReverse: #000;
@textColorReverse: #fff;

@h2BgColor: #252525;

@inputBgColor: #fff;

/*general css */

::selection
{
background-color: @themeColor;
color:@textColorReverse;
}
::-moz-selection
{
background-color: @themeColor;
color:@textColorReverse;
}


.left{
   float: left;
}
.right{
   float: right;
}




h1,h2,h3,h4,h5,h6,ul,li,p{
  margin: 0;
  padding: 0;
}

ul, li{
  list-style: none;
}

a, a:active, a:visited, a:focus, a:hover{
  text-decoration: none;
  color: @textColor;
  /*color: @textColor;*/
}


body, .page, .ui-overlay-c{
   
   font-family: 'Source Sans Pro', sans-serif;
   font-size: 14px;
   font-weight: normal;
   overflow: hidden;
   margin: 0 auto;
   /*
   background: @bgColorReverse;
   color: @textColorReverse;
   */
   background: @bgColor !important;
}
h1{
   
   font-size: 27.5px;
   font-weight: 200;
   margin-bottom: 10px;
   text-align: left;
   a{
      font-size: 27.5px;
      font-weight: 200;
      &.back img{
         width: 23px;
      }
   }
}

   a.next{
      img{
         width: 23px;
      }
   }
   
h2{
   background-color: @h2BgColor;
   line-height: 30px;
   font-size: 19px;
   font-weight: 200;

   position: absolute;
   left: 0;
   width: 100%;
   height: 30px;
   /*
   padding-left: 13.5%;
   margin-left: -13.5%;
   display: inline;
   */
}
span.h2{
   position: relative;
   display: block;
   line-height: 30px;
   font-size: 19px;
   color: @textColorReverse;
   font-weight: 200;
   margin-bottom: 14px;
}

h3{
   font-size: 18px;
   font-weight: 200;
   max-height: 43px;
   padding-bottom: 4px;
   overflow: hidden;
}


h4{
   color: @themeColor;
   font-size: 17px;
   font-weight: 200;
   margin-bottom: 14px;
   a{
      color: @themeColor !important;
   }
}

p{
   margin-bottom: 14px;
}

.ui-loader {
   opacity: 0.4 !important;
   filter: alpha(opacity=40) !important;
   .ui-icon{
      background-color: transparent !important;
   }
   
}
#twitter_update_list{
   li{
      .rounded(5px);
      margin: 0 0 10px;
      padding: 7px;
      background: #fff;

      span{
         color: @textColor;         
         a{
            display: inline !important;
            margin: 0;
            float: none;
         }
      }
      a{
         color: @themeColor;
         display: block;
         margin-top: 5px;
         .transitioner(all 0.2s);
         &:hover{
            color: darken(@themeColor, 10%);
         }
      }
   }
}

.ui-mobile, .ui-mobile .ui-page{
   min-height: 0;
   
}

.padpage{
   padding-left: 10.5%;
   padding-right: 10.5%;
   
   &.padtop{
      padding-top: 10.5%
   }
   &.padbottom{
      padding-bottom: 10.5%;
   }
}

.successMessage{
    display: none;
    background: lighten(@themeColor, 15%);
    color: white;
    padding: 5px;
    margin-bottom: 20px;
    p{
        margin: 0;
    }
}


::-webkit-input-placeholder  { color:lighten(@themeColor, 35%); }
input:-moz-placeholder { color:lighten(@themeColor, 35%); }


.invalid{
   background-color: #fff !important;
   border-color: @themeColor !important;
}

.textbox, .textarea{
   font-size: 12px;
   line-height: 26px;
   background: @inputBgColor;
   border-width: 0 1px 1px 0;
   border-style: solid;
   border-color: #DADADA;
   color: @themeColor;
   width: 100%;
   padding: 0 5px;
   box-sizing: border-box;
   -webkit-box-sizing: border-box;
   -moz-box-sizing: border-box;
   .rounded(0);
}

.button {
   background: @themeColor;
   padding: 0 10px;
   line-height: 26px;
   width: 100%;
   &.inline{
      width: auto;
   }
   font-size: 12px;
   border: 0;
   color: @inputBgColor;
   font-weight: 200;
   .transitioner(all 0.4s);
   &:hover{
      background: lighten(@themeColor, 10%);
   }
   .rounded(0);
}

form li{
   margin-bottom: 10px;
}

.innerPage{
   background: @bgColor;
   color: @textColor;
   text-align: justify;
   font-weight: 200;
   
   box-sizing: border-box;
   -webkit-box-sizing: border-box;
   -moz-box-sizing: border-box;
   min-height: 100% !important;
   .topGrahic{
      position: absolute;
      width: 60%;
      height: 4px;
      background: @themeColor;
      top: 0;
      left: 0;
   }
   
   .menuButton{
      position: absolute;
      display: block;
      right: 15px;
      top: 15px;
      &:hover img{
         transform: rotate(90deg);
         -webkit-transform: rotate(90deg);
         -moz-transform: rotate(90deg);
         -o-transform: rotate(90deg);
      }
      
      img{
         .transitioner(all 0.2s);
         width: 15px;
      }
   }
   

   .sliderContainer{
      
   }
   
   .flexslider{
      
      max-height: 200px;
      margin-bottom: 14px;
      overflow: hidden;
      .shadowMe(0 0 0 0);
      
      .flex-viewport{
         overflow: visible !important;
      }
      li{
         /*margin: 0 0 0 1%;*/
         text-align: left;
         box-sizing: border-box;
         -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
         
      }
      img{
         width: 100%;
      }
   }
   
   .footer{
      margin-top: 25px;
      .social{
         box-sizing: border-box;
         -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
         -o-box-sizing: border-box;
         
         a{
            display: block;
            background-color: @themeColor;
            margin-right: 5px;
            float: left;
            &:last-child{
               margin-right: 0;
            }
            img{
               width: 24px;
            }
         }
         /*end a*/
      }
      /*end social*/
      
      .copyright{
         color: @themeColor;
         font-size: 12px;
         box-sizing: border-box;
         -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
         -o-box-sizing: border-box;
         width: 60%;
         line-height: 24px;   
      }
   }
   /*end footer*/
   
}








.blog{
   margin-top: 20px;
   .head{
      .image{
         box-sizing: border-box;
         -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
         -0-box-sizing: border-box;
         
         width: 25%;
         margin-right: 4%;
         text-align: left;
         display: block;
         max-height: 150px;
         
         &.icon{
            text-align: center;
            background: @themeColor;
            padding: 2%;
         }
         img{
            max-width: 100%;
         }
         
      }
      /*end image*/
      .date{
         /*position: absolute;*/
         /*bottom: 0;*/
      }
      /*end date*/

   }
   /*end head*/
}



.blogDetail{
   .head{
      .image{
         box-sizing: border-box;
         -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
         -0-box-sizing: border-box;
         width: 100%;
         text-align: center;
         display: block;
         max-height: 150px;
         &.icon{
            padding: 2%;
            background: @themeColor;
         }
         img{
            width: 100%;
         }
         
      }
      /*end image*/
   }
   /*end head*/
}

.blogPost{
   margin-bottom: 20px;
   padding-bottom: 4%;
   .head{
      overflow: hidden;
      position: relative;
      margin-bottom: 2%;
      
      .title{
         box-sizing: border-box;
         -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
         -0-box-sizing: border-box;
         width: 71%;
         
         h3{
            font-size: 18px;
            font-weight: 200;
            max-height: 43px;
            padding-bottom: 4px;
            overflow: hidden;
         }
      }
      
      .date{
         font-size: 85%;
         color: @themeColor;
         margin-bottom: 14px;
      }
      
      
      /* comment bubble */
      .comments{
         position: relative;
         width: 28px;
         height: 25px;
         img{
            position: absolute;
            width: 28px;
            z-index: 1;
         }
         .count{
            text-align: center;
            display: block;
            width: 23px;
            left: 4px;
            position: absolute;
            z-index: 2;
            font-size: 15px;
            line-height: 25px;
            font-weight: 200;
            color: @themeColor;
            border-bottom: 1px solid @themeColor;
         }
      }
      
      
      
   }
   
   .description{
      margin-bottom: 10px;
   }
   
   .foot{
      font-size: 85%;
      padding-bottom: 15px;
      border-bottom: 1px solid @themeColor;
      .author{
         color:@themeColor;
      }
      .category{
         background: @themeColor;
         color: @textColorReverse;
         padding: 2px;
      }
   }
   
   
      
      
   /*comments list*/
   .comments-list{
      margin-top: 10px;
      margin-bottom: 15px;
      padding-bottom: 15px;
      border-bottom: 1px solid @themeColor;
      
      ul{
         margin-bottom: 30px;
         li{
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px dashed @themeColor;
            &:last-child{
               border-bottom: 0;
               padding-bottom: 0;
            }
            .author{
               font-size: 14px;
               font-weight: 400;
            }
            .date{
               font-size: 11px;
               font-weight: 400;
               line-height: 20px;
            }
            .comment{
               font-size: 13px;
               font-weight: 200;
               margin-top: 5px;
            }
         }
      }
      /*end ul*/
      
   }
   
   .postComment{
      padding-bottom: 10px;
      /*border-bottom: 1px solid @themeColor;*/
   }
   
}
/*end blog post*/



.pagination{
   margin: 0 0 30px;
   padding-bottom: 30px;
   border-bottom: 1px solid @themeColor;
   .page-description{
      color: @themeColor;
      line-height: 21px;
   }
   ul li{
      float: left;
      margin-right: 14px;
      &:last-child{
         margin-right: 0;
      }
      a{
         background: @themeColor;
         display: block;
         width: 21px;
         color: @textColorReverse;
         font-size: 15px;
         font-weight: 200;
         text-align: center;
         line-height: 21px;
         .transitioner(all 0.4s);
         &:hover{
            background: lighten(@themeColor, 10%);
         }
         &.next{
            /*background-color: transparent;*/
            img{
               height: 16px;
               width: auto;
               
            }
         }
         
         &.active{
            background-color: darken(@themeColor, 10%);
         }
      }
   }
}

















.positions{
   li{
      margin-bottom: 35px;
      padding-bottom: 15px;
      border-bottom: 1px dashed @themeColor;
      
      li{
         border: 0;
         padding-bottom: 0;
         margin-bottom: 0;
         padding: 5px 0 0 0;
         list-style-position: inside;
         margin: 0;
         list-style-type: square;
      }
      
      .title{
         color: @themeColor;
         font-size: 15px;
         font-weight: 400;
         padding-bottom: 10px;
      }
      .description{
         padding-bottom: 10px;
      }
      .apply,
      .recommend{
         .transitioner(all 0.2s);
         &:hover{
            background: lighten(@themeColor, 5%);
         }
      }
      .apply{
         background: @themeColor;
         color: @textColorReverse;
         font-size: 13px;
         font-weight: 400;
         padding: 2px 5px;
         margin: 5px 0;
      }
      
      .recommend{
         background: @themeColor;
         color: @textColorReverse;
         font-size: 13px;
         padding: 2px 5px;
         font-weight: 400;
         margin: 5px 0;
      }
   }
   
}









.videosSlide{
   iframe{
      width: 100%;
   }
}



.videosGrid{
   padding: 0 2%;
   li{
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      -o-box-sizing: border-box;
      width: 47%;
      float: left;
      margin-right: 6%;
      margin-bottom: 6%;
      iframe{
         width: 100%;
         height: 82px;
      }
      
      &:nth-child(2n+2){
         margin-right:0;
      }
   }
}



.videosList{
   padding: 0 2% 15px;
   margin-bottom: 15px;
   border-bottom: 1px solid @themeColor;
   li{
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      -o-box-sizing: border-box;
      width: 100%;
      float: left;
      margin-bottom: 6%;
      iframe{
         width: 100%;
         height: 164px;
      }
      
   }
}










.projects, .clients{
   margin-bottom: 20px;
   padding-bottom: 20px;
   /*border-bottom: 1px solid @themeColor;*/
}



.list{
   margin: 0 0 0 17px;
   li{
      list-style-type: disc;
      padding-bottom: 5px;
      margin-bottom: 5px;
   }
}

.ui-li-has-thumb .ui-btn-inner a.ui-link-inherit, .ui-li-static.ui-li-has-thumb{
   min-height: 63px;
}








.columnContainer{
  .column{
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    width: 100%;
    padding: 0 5% 0 0;
    font-size: 13px;
  }
  
  &.column-1{
    .column{
    text-align: justify;
    }
  }
  
  &.column-2{
    .column{
      width: 50%;
      float: left;
    }
  }
  
  &.column-3{
    .column{
      width: 33%;
      float: left;
    }
  }
  
}







.services{
   
   li {
      margin-bottom: 8px;
      a.image, a.text{
         float: left;
         display: block;
         line-height: 64px;
      }
      a.image{
         width: 64px;
         height: 64px;
         background: @themeColor;
         text-align: center;
            margin-right: 10px;
         
         img{
            width: 64px;
         }
      }
      /*end .image*/
   }
   /*end li*/
   
   &.serviceDetail{
      a.image{
         margin-bottom: 14px;
      }
   }
   
}

















.cutContainer{
   position: relative;
   /*padding: 25px;
   border: 1px solid @themeColor;
   margin-bottom: 25px;
   */
   margin-bottom: 40px;
   margin-top: 20px;
   &.noBorder{
      border: 0 !important;
      .cutTop{
         left: -12px;
         top: -12px;
      }
      .cutBottom{
         right: -12px;
         bottom: -12px;
      }
   }
   &.noPadding{
      padding: 0 !important;
   }
   &.noMargin{
      margin-bottom: 0 !important;
   }
   
   &.moreUpperMargin{
      margin-top:60px;
   }
   
   /*.box-shadow(2px 2px 2px #bbb);*/
   .cutTop, .cutBottom{
      display: none;
      background-repeat: no-repeat;
      background-size: 18px;
      width: 24px;
      height: 24px;
      position: absolute;
      background-color: @bgColor;
      background-color: #F8F8F8;
      background-position: 0 0;
      -webkit-transform: rotate(45deg);
      z-index: 2;
   }
   .cutTop{
      left: -15px;
      top: -15px;
   }
   .cutBottom{
      right: -15px;
      bottom: -15px;
   }
   
   .link{
      color: @themeColor;
      padding-left: 5px;
   }
   .block{
      margin-bottom: 5px;
   }
   .mapPin{
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      -o-box-sizing: border-box;
      width: 30px;
      margin-right: 10px;
   }
   .text {
      font-size: 16px;
      font-weight: 200;
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      -o-box-sizing: border-box;
   }
   
   
   .map{
      height: 150px;
      &.large{
         height: 275px;
      }
      .transitioner(height 0.7s);
   }
}

.toggleMapHeight{
   font-size: 40px;
   color: @themeColor !important;
   margin-bottom: 25px;
   display: block;
   height: 50px;
   width: 50px;
   position: absolute;
   left: 50%;
   margin-left: -25px;
   /*display: block;*/
   
   text-align: center;
   .transitioner(all 0.4s ease-in-out);
   
   &:hover{
      color: @themeColor !important;
   }
   
   &.opened{
      transform: rotate(405deg);
      -webkit-transform: rotate(405deg);
      -moz-transform: rotate(405deg);
   }
   &.notransform{
      transform: rotate(0deg);
      -webkit-transform: rotate(0deg);
      -moz-transform: rotate(0deg);
   }
   
}












#menuPage{
   position: absolute;
   height: 100%;
   width: 100%;
   left: 0 !important;
   margin-left: 0 !important;
   
   background: @bgColorReverse !important;
   color: @textColorReverse;
}

#galleryScroller{
   
   position: absolute;
   height: 100%;
   width: 100%;
   left: 0 !important;
   margin-left: 0 !important;
   
   .menu li ul .square{
      height: 28% !important;      
      overflow: hidden;
      a.box{
         background: transparent !important;
      }
      img{
         width: 100%;
         height: 100%;
         margin: 0;
         position: static;
      }
   }
}

   .company{
      float: left;
      
      opacity: 0;
      filter: alpha(opacity=0);
      &.on{
         opacity: 1;
         filter: alpha(opacity=100);
      }
      
      img{
         height: 98.5%;
         /*
         min-height: 225px;
         min-width: 150px;
         */
      }
   }
   
   .scroller{
      float: left;
      height: 90%;
      margin: 5%;
      position: relative;
   }
   .menu{
      height: 100%;
      /*overflow: hidden;*/
      position: absolute;
      padding-right: 8%;
      padding-left: 5%;
      
      /*margin-left: 275px;*/
      
      transition-property:opacity, padding;
      transition-duration: 0.2s;
      transition-timing-function: ease-out;
      
      -moz-transition-property:opacity, padding;
      -moz-transition-duration: 0.2s;
      -moz-transition-timing-function: ease-out;
      
      -webkit-transition-property:opacity, padding;
      -webkit-transition-duration: 0.2s;
      -webkit-transition-timing-function: ease-out;
      
      -o-transition-property:opacity, padding;
      -o-transition-duration: 0.2s;
      -o-transition-timing-function: ease-out;
      
      opacity: 0;
      filter: alpha(opacity=0);
      
      &.on{
         opacity: 1;
         filter: alpha(opacity=100);
         padding-left: 0;
      }
      /*
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      */
      transform-origin: left center;
      -webkit-transform-origin: left center;
      -moz-transform-origin: left center;
      /*-webkit-transform: skewY(3deg) !important;*/
      /*.transitioner(all 2s ease-in-out);*/
      
      li{
         height: 100%;
         float: left;
         &:last-child ul{
            padding-right: 0 !important;
         }
         
         ul{
            height: 100%;
            
           .square{
               float: none;
               height: 31%;
               margin: 0 0 9% 0;
               position: relative;
               min-height: 70px;
               a.box{
                  display:block;
                  width: 100%;
                  background: @themeColor;
                  &:hover{
                     background: lighten(@themeColor, 5%);
                  }
                  .transitioner(all 0.4s);
                  height: 100%;
               }
               .text{
                  color: white;
                  position: absolute;
                  bottom: 5px;
                  font-size: 12px;
                  font-weight: 200;
                  left: 5px;
               }
               img{
                  width: 50%;
                  position: absolute;
                  top: 50%;
                  margin-top: -25%;
                  left: 50%;
                  margin-left: -25%;
                  display: none;
                  &.on{
                     display:block;
                  }
               }
            }
            /*end square li*/
         }
         /*end ul*/
      }
      /*end li*/
      
   }
   /*end menu*/
   
   
   
   
   
   
   /*
}
   */
/*end menuPage*/



/* ==|== media queries ====================================================== */


@media only screen and (max-height: 280px) {
    .menu li ul .square{
        min-height:0 !important;
        img{
            top: 40% !important;
        }
        span.text{
            font-size: 70%;
        }
    }
}

/* Screen width <= 320px */
@media only screen and (max-width: 320px) {
        
}

/* Screen width > 320px */
@media only screen and (min-width: 321px) and (max-width: 480px) {
    
}

/* Screen width > 480px */
@media only screen and (min-width: 481px) and (max-width: 768px) {
   .innerPage{
      /*padding: 5%;*/
      .flexslider{
         max-height: 320px;
      }
   }
   
   .menuButton{
      img{
         width: 22px !important;
      }
   }
   
   
   .videosGrid{
      padding: 0 2%;
      li{
         iframe{
            width: 100%;
            height: 142px;
         }
      }
   }
   
   
}

/* Screen width > 768px */
@media only screen and (min-width: 769px) and (max-width: 1024px) {
   
   
   
   .innerPage{
      /*padding: 5%;*/
      .flexslider{
         max-height: 320px;
      }
   }
   
   
   .menuButton{
      img{
         width: 25px !important;
      }
   }
   
   .scroller{
      margin: 35px !important;
   }
   
   
   
   
   .videosGrid{
      padding: 0 2%;
      li{
         iframe{
            width: 100%;
            height: 242px;
         }
      }
   }
   
}

/* Screen width > 1024px */
@media only screen and (min-width: 1023px) and (max-width: 1280px) {
   body, .page, .ui-overlay-c,
   .ui-mobile [data-role="page"], .ui-mobile [data-role="dialog"], .ui-page
   {
      width: 1024px;
      left: 50%;
      margin-left: -512px;
      font-size: 16px;
   }
   
   .innerPage .topGrahic{
      height: 8px;
   }
   
   .scroller{
      margin: 45px !important;
   }
   
   h1{
      font-size: 31.5px;
      a{
         font-size: 31.5px;
      }
   }
   
   .innerPage{
      /*padding: 5%;*/
      .flexslider{
         max-height: 380px;
      }
   }
   
   .menuButton{
      img{
         width: 30px !important;
      }
   }
   
   
   .padpage{
      padding-left: 2.5%;
      padding-right: 2.5%;
      
      &.padtop{
         padding-top: 2.5%
      }
      &.padbottom{
         padding-bottom: 2.5%;
      }
   }
   
   
   
   .videosGrid{
      padding: 0 2%;
      li{
         iframe{
            width: 100%;
            height: 282px;
         }
      }
   }
   
}

/* Screen width > 1280px */
@media only screen and (min-width: 1281px) {
   body, .page, .ui-overlay-c,
   .ui-mobile [data-role="page"], .ui-mobile [data-role="dialog"], .ui-page{
      width: 1024px;
      left: 50%;
      margin-left: -512px;
      font-size: 16px;
   }
   
   .innerPage .topGrahic{
      height: 8px;
   }
   
   .scroller{
      margin: 55px !important;
   }
   
   h1{
      font-size: 31.5px;
      a{
         font-size: 31.5px;
      }
   }
   
   .innerPage{
      /*padding: 5%;*/
      .flexslider{
         max-height: 380px;
      }
   }
   
   .menuButton{
      img{
         width: 30px !important;
      }
   }
      
   
   .padpage{
      padding-left: 2.5%;
      padding-right: 2.5%;
      
      &.padtop{
         padding-top: 2.5%
      }
      &.padbottom{
         padding-bottom: 2.5%;
      }
   }


   
   
   .videosGrid{
      padding: 0 2%;
      li{
         iframe{
            width: 100%;
            height: 282px;
         }
      }
   }
   
}





/* ==|== endos ==============================================================
   Please define your styles before this section.
   ========================================================================== */
#blr.ns-helpers();
@media print { #blr.media-print(); }