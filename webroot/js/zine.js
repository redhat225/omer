angular.module('zine',[])
		.run(['$rootScope', function($rootScope){

		}])
		.controller('ZineCtrl',['$scope', function($scope){
			var self = this;

			self.emag = angular.element('#documentViewer');

			self.background = "dp.png";

			self.emag.FlowPaperViewer(
            { config : {
                PDFFile : '/emag/template.pdf',
                cssDirectory:"/flowpaper/css/",
                jsDirectory:"/flowpaper/js/",
                localeDirectory:"/flowpaper/locale/",
                Scale : 1,
                ZoomTransition : 'easeOut',
                ZoomTime : 0.5,
                ZoomInterval : 0.1,
                FitPageOnLoad : true,
                // FitWidthOnLoad : false,
                FullScreenAsMaxWindow : true,
                ProgressiveLoading : true,
                MinZoomSize : 1,
                MaxZoomSize : 5,
                SearchMatchAll : false,
                InitViewMode : '',
                RenderingOrder : 'html5,html',
                StartAtPage : '',

                EnableWebGL : true,
                ViewModeToolsVisible : true,
                ZoomToolsVisible : true,
                NavToolsVisible : true,
                CursorToolsVisible : true,
                SearchToolsVisible : true,
                WMode : 'transparent',
                localeChain: 'fr_FR'
                }}
           );


		}])