<!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TechCo Prices13 - Slider Revolution</title>
        <meta name="description" content="Slider Revolution Example" />
        <meta name="keywords" content="fullscreen image, grid layout, flexbox grid, transition" />
        <meta name="author" content="ThemePunch" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- LOAD JQUERY LIBRARY -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>

                <!-- LOADING FONTS AND ICONS -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400%7CSource+Sans+Pro:600%2C400%2C700" rel="stylesheet" property="stylesheet" type="text/css" media="all">


        <link rel="stylesheet" type="text/css" href="/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" type="text/css" href="/fonts/font-awesome/css/font-awesome.css">

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" type="text/css" href="/css/tour/settings.css">
        <!-- REVOLUTION LAYERS STYLES -->
<style></style>
<style type="text/css">.tc-list{color:#fff; margin-right:5px;  font-size:20px; font-weight:600;  width:40px; height:40px; line-height:40px;  text-align:center !important; background:#2970ff; border-radius:20px; display:inline-block}</style>

        <!-- ADD-ONS CSS FILES -->
                                                                
                
        <!-- ADD-ONS JS FILES -->
                                                                                                
        <!-- REVOLUTION JS FILES -->
        <script type="text/javascript" src="/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="/js/jquery.themepunch.revolution.min.js"></script>

        
        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
        <script type="text/javascript" src="/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="/js/extensions/revolution.extension.video.min.js"></script>


        <script type="text/javascript">function setREVStartSize(e){
                try{ var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;                    
                    if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})                    
                }catch(d){console.log("Failure at Presize of Slider:"+d)}
            };</script>
    </head>
    
    <body style="margin: 0; padding: 0">
            
<?= $this->element('tour/testimonials') ?>



<!-- END REVOLUTION SLIDER -->
        <script type="text/javascript">
                        var revapi12,
                tpj=jQuery;
                        tpj(document).ready(function() {
                if(tpj("#prices").revolution == undefined){
                    revslider_showDoubleJqueryError("#prices");
                }else{
                    revapi12 = tpj("#prices").show().revolution({
                        sliderType:"hero",
                        sliderLayout:"fullwidth",
                        dottedOverlay:"none",
                        delay:9000,
                        navigation: {
                        },
                        viewPort: {
                            enable:true,
                            outof:"wait",
                            visible_area:"80%",
                            presize:true
                        },
                        responsiveLevels:[1240,1024,778,480],
                        visibilityLevels:[1240,1024,778,480],
                        gridwidth:[1240,1024,778,480],
                        gridheight:[800,800,500,500],
                        lazyType:"none",
                        shadow:0,
                        spinner:"off",
                        autoHeight:"off",
                        disableProgressBar:"on",
                        hideThumbsOnMobile:"off",
                        hideSliderAtLimit:0,
                        hideCaptionAtLimit:0,
                        hideAllCaptionAtLilmit:0,
                        debugMode:false,
                        fallbacks: {
                            simplifyAll:"off",
                            disableFocusListener:false,
                        }
                    });
                }
            }); /*ready*/
        </script>
        

        </body>
</html>
