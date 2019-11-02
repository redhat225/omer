<?php
/* This section can be removed if you would like to reuse the PHP example outside of this PHP sample application */
require_once("lib/config.php");
require_once("lib/common.php");

$configManager = new Config();
if($configManager->getConfig('admin.password')==null){
	$url = 'setup.php';
	header("Location: $url");
	exit;
}
?>

<!doctype html>
    <head>
        <title>FlowPaper AdaptiveUI PHP Example</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width" />

        <style type="text/css" media="screen">
			html, body	{ height:100%; }
			body { margin:0; padding:0; overflow:auto; }
			#flashContent { display:none; }
        </style>

		<link rel="stylesheet" type="text/css" href="css/flowpaper.css" />
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.extensions.min.js"></script>
        <!--[if gte IE 10 | !IE ]><!-->
        <script type="text/javascript" src="js/three.min.js"></script>
        <!--<![endif]-->
		<script type="text/javascript" src="js/flowpaper.js"></script>
		<script type="text/javascript" src="js/flowpaper_handlers.js"></script>
    </head>
    <body>
		<div id="documentViewer" class="flowpaper_viewer" style="position:absolute;left:10px;top:10px;width:770px;height:500px"></div>

	        <script type="text/javascript">
		        function getDocQueryServiceUrl(document){
		        	return "services/swfsize.php?doc={doc}&page={page}".replace("{doc}",document);
		        }

		        var startDocument = "<?php if(isset($_GET["doc"])){echo $_GET["doc"];}else{?>Paper.pdf<?php } ?>";

	            $('#documentViewer').FlowPaperViewer(
				 { config : {

						 PDFFile                    : "services/view.php?doc="+startDocument+"&format=pdf&page={page}&subfolder=<?php echo $_GET["subfolder"] ?>",
						 Scale                      : 0.6,
						 ZoomTransition             : 'easeOut',
						 ZoomTime                   : 0.5,
						 ZoomInterval               : 0.1,
						 FitPageOnLoad              : true,
						 FitWidthOnLoad             : false,
						 FullScreenAsMaxWindow      : false,
						 ProgressiveLoading         : false,
						 MinZoomSize                : 0.2,
						 MaxZoomSize                : 5,
						 SearchMatchAll             : false,
						 InitViewMode               : '',
						 EnableWebGL                : true,
						 RenderingOrder             : '<?php echo ($configManager->getConfig('renderingorder.primary') . ',' . $configManager->getConfig('renderingorder.secondary')) ?>',

						 ViewModeToolsVisible       : true,
						 ZoomToolsVisible           : true,
						 NavToolsVisible            : true,
						 CursorToolsVisible         : true,
						 SearchToolsVisible         : true,

  						 DocSizeQueryService        : 'services/swfsize.php?doc=' + startDocument,

						 JSONDataType               : 'jsonp',
						 key                        : '<?php echo $configManager->getConfig('licensekey') ?>',

                         WMode                      : 'transparent',
  						 localeChain                : 'en_US'
						 }}
			    );
	        </script>
   </body>
</html>