<?php
	session_start();
	
	require_once("lib/config.php");
	require_once("lib/common.php");
	$configManager = new Config();
	$path_to_pdf2swf 	= '';
	$path_to_pdf2json 	= '';
	$pdf2swf_exec		= '';
	$pdf2json_exec		= '';
	$path_to_pdftk		= '';
	$path_to_mudraw 	= '';
    $mudraw_exec        = '';
    $mode               = 'simple';

    if(isset($_GET['mode'])){
        $mode = $_GET['mode'];
    }else if(isset($_SESSION['SETUP_MODE'])){
        $mode = $_SESSION['SETUP_MODE'];
    }

    $_SESSION['SETUP_MODE'] = $mode;

	if(	PHP_OS == "WIN32" || PHP_OS == "WINNT"	){
		$path_to_pdf2swf 	= 'C:\Program Files\SWFTools\\';
		$path_to_pdf2json 	= 'C:\Program Files\PDF2JSON\\';
		$path_to_pdftk		= 'C:\Program Files\PDF Labs\PDFtk Server\bin\\';
		$path_to_mudraw     = 'C:\Program Files\MuPDF\\';
		$pdf2swf_exec 		= 'pdf2swf.exe';
		$pdf2json_exec 		= 'pdf2json.exe';
		$pdftk_exec			= 'pdftk.exe';
		$mudraw_exec        = 'mudraw.exe';
        $mudraw_exec_alt    = 'pdfdraw.exe';

		if(!pdf2swfEnabled($path_to_pdf2swf . $pdf2swf_exec)){
			$path_to_pdf2swf 	= 'C:\Program Files (x86)\SWFTools\\';
		}
		
		if(!pdf2jsonEnabled($path_to_pdf2json . $pdf2json_exec)){
			$path_to_pdf2json 	= 'C:\Program Files (x86)\PDF2JSON\\';
		}
		
		if(!pdftkEnabled($path_to_pdftk . $pdftk_exec)){
			$path_to_pdftk 	    = 'C:\Program Files (x86)\PDF Labs\PDFtk Server\bin\\';
		}
	}else{
		$path_to_pdf2swf 	= '';
		$path_to_pdf2json 	= '';
		$path_to_mudraw    = '';
		$pdf2swf_exec 		= 'pdf2swf';
		$pdf2json_exec 		= 'pdf2json';
		$pdftk_exec			= 'pdftk';
		$mudraw_exec        = 'pdfdraw';
		$mudraw_exec_alt    = 'mudraw';
	}
	
	if($configManager->getConfig('admin.password')!=null){
		$url = 'index.php';
		header("Location: $url");
		exit;
	}
	
	$pdf2swf = false;

	if (!isset($_GET['step']) && !isset($_POST['step'])) {
		$step = 1;
	} else if (isset($_POST['step'])) {
		$step = $_POST['step'];
	} else {
		$step = $_GET['step'];
	}
	
	$table_data = '';
	$warnings = 0;
	$fatals = 0;
	$warning_msg = array();
	$fatal_msg = array();
	
	
	/* PDF2SWF PATH */
	/* -------------------------------------------- */
	if(isset($_GET['PDF2SWF_PATH'])){
		$path_to_pdf2swf = $_GET['PDF2SWF_PATH'];
		$_SESSION['PDF2SWF_PATH'] = $path_to_pdf2swf; 
	}

	if(isset($_SESSION['PDF2SWF_PATH'])){
		$path_to_pdf2swf = $_SESSION['PDF2SWF_PATH'];
	}
	
	$_SESSION['PDF2SWF_PATH'] = $path_to_pdf2swf;
	/* -------------------------------------------- */


	/* MUDRAW PATH */
	/* -------------------------------------------- */
	if(isset($_GET['MUDRAW_PATH'])){
		$path_to_mudraw = $_GET['MUDRAW_PATH'];
		$_SESSION['MUDRAW_PATH'] = $path_to_mudraw;
	}

	if(isset($_SESSION['MUDRAW_PATH'])){
		$path_to_mudraw = $_SESSION['MUDRAW_PATH'];
	}

	$_SESSION['MUDRAW_PATH'] = $path_to_mudraw;
	/* -------------------------------------------- */


	/* PDF2JSON PATH */
	/* -------------------------------------------- */
	if(isset($_GET['PDF2JSON_PATH'])){
		$path_to_pdf2json = $_GET['PDF2JSON_PATH'];
		$_SESSION['PDF2JSON_PATH'] = $path_to_pdf2json; 
	}

	if(isset($_SESSION['PDF2JSON_PATH'])){
		$path_to_pdf2json = $_SESSION['PDF2JSON_PATH'];
	}
	
	$_SESSION['PDF2JSON_PATH'] = $path_to_pdf2json;
	/* -------------------------------------------- */


	/* PDFTK PATH */
    /* -------------------------------------------- */
    if(isset($_GET['PDFTK_PATH'])){
        $path_to_pdftk = $_GET['PDFTK_PATH'];
        $_SESSION['PDFTK_PATH'] = $path_to_pdftk;
    }

    if(isset($_SESSION['PDF2JSON_PATH'])){
        $path_to_pdf2json = $_SESSION['PDF2JSON_PATH'];
    }

    $_SESSION['PDFTK_PATH'] = $path_to_pdftk;
    /* -------------------------------------------- */
	
	if($step == 4){ // Save configuration
		$path_pdf							= $_POST['PDF_DIR'];
		$path_pdf_workingdir				= $_POST['PUBLISHED_PDF_DIR'];
	
		// check for trailing slash
		if(	PHP_OS == "WIN32" || PHP_OS == "WINNT"	){
			if(!endsWith($path_pdf,'\\')){
				$path_pdf = $path_pdf . '\\';
			}
			
			if(!endsWith($path_pdf_workingdir,'\\')){
				$path_pdf_workingdir = $path_pdf_workingdir . '\\';
			}
		}else{
			if(!endsWith($path_pdf,'/')){
				$path_pdf = $path_pdf . '/';
			}
			
			if(!endsWith($path_pdf_workingdir,'/')){
				$path_pdf_workingdir = $path_pdf_workingdir . '/';
			}
		}
	
		$configs = $configManager->getConfig();
		$configs['path.pdf'] 					= $path_pdf;
		$configs['path.swf']	 				= $path_pdf_workingdir;
		$configs['pdf2swf'] 					= (bool) pdf2swfEnabled($path_to_pdf2swf . $pdf2swf_exec);
		$configs['pdf2json'] 					= (bool) pdf2jsonEnabled($path_to_pdf2json . $pdf2json_exec);
		$configs['pdftk']						= (bool) pdftkEnabled($path_to_pdftk . $pdftk_exec);
		$configs['mupdfinstalled']              = (bool) mudrawEnabled($path_to_mudraw . $mudraw_exec) || mudrawEnabled($path_to_mudraw . $mudraw_exec_alt);

		$configs['admin.username'] 				= $_POST['ADMIN_USERNAME'];
		$configs['admin.password'] 				= $_POST['ADMIN_PASSWORD'];
		$configs['licensekey'] 					= $_POST['LICENSEKEY'];
		$configs['renderingorder.primary']		= $_POST['RenderingOrder_PRIM'];
		$configs['renderingorder.secondary']	= $_POST['RenderingOrder_SEC'];

        if($mode == "advanced"){
            $configs['splitmode']  					= $_POST['SPLITMODE'];
        }else{
            $configs['splitmode']  					= false;
        }


		if(	PHP_OS == "WIN32" || PHP_OS == "WINNT"	){
			$configs['cmd.conversion.singledoc'] 		= str_replace("pdf2swf.exe", "\"" . $path_to_pdf2swf . "pdf2swf.exe" . "\"",$configs['cmd.conversion.singledoc']);
			$configs['cmd.conversion.splitpages'] 		= str_replace("pdf2swf.exe", "\"" . $path_to_pdf2swf . "pdf2swf.exe" . "\"",$configs['cmd.conversion.splitpages']);
			$configs['cmd.conversion.renderpage'] 		= str_replace("swfrender.exe", "\"" . $path_to_pdf2swf . "swfrender.exe" . "\"",$configs['cmd.conversion.renderpage']);
			$configs['cmd.conversion.rendersplitpage'] 	= str_replace("swfrender.exe", "\"" . $path_to_pdf2swf . "swfrender.exe" . "\"",$configs['cmd.conversion.rendersplitpage']);	
			$configs['cmd.conversion.jsonfile'] 		= str_replace("pdf2json.exe", "\"" . $path_to_pdf2json . "pdf2json.exe" . "\"",$configs['cmd.conversion.jsonfile']);
			$configs['cmd.conversion.splitjsonfile'] 	= str_replace("pdf2json.exe", "\"" . $path_to_pdf2json . "pdf2json.exe" . "\"",$configs['cmd.conversion.splitjsonfile']);
			$configs['cmd.conversion.splitpdffile'] 	= str_replace("pdftk.exe", "\"" . $path_to_pdftk . "pdftk.exe" . "\"",$configs['cmd.conversion.splitpdffile']);
			$configs['cmd.searching.extracttext'] 		= str_replace("swfstrings.exe", "\"" . $path_to_pdf2swf . "swfstrings.exe" . "\"",$configs['cmd.searching.extracttext']);
		}else{
			$configs['cmd.conversion.singledoc'] 		= str_replace("pdf2swf", "\"" . $path_to_pdf2swf . "pdf2swf" . "\"",$configs['cmd.conversion.singledoc']);
			$configs['cmd.conversion.splitpages'] 		= str_replace("pdf2swf", "\"" . $path_to_pdf2swf . "pdf2swf" . "\"",$configs['cmd.conversion.splitpages']);
			$configs['cmd.conversion.renderpage'] 		= str_replace("swfrender", "\"" . $path_to_pdf2swf . "swfrender" . "\"",$configs['cmd.conversion.renderpage']);
			$configs['cmd.conversion.rendersplitpage'] 	= str_replace("swfrender", "\"" . $path_to_pdf2swf . "swfrender" . "\"",$configs['cmd.conversion.rendersplitpage']);
			$configs['cmd.conversion.jsonfile'] 		= str_replace("pdf2json", "\"" . $path_to_pdf2json . "pdf2json" . "\"",$configs['cmd.conversion.jsonfile']);
			$configs['cmd.conversion.splitjsonfile'] 	= str_replace("pdf2json", "\"" . $path_to_pdf2json . "pdf2json" . "\"",$configs['cmd.conversion.splitjsonfile']);
			$configs['cmd.conversion.splitpdffile'] 	= str_replace("pdftk", "\"" . $path_to_pdftk . "pdftk" . "\"",$configs['cmd.conversion.splitpdffile']);
			$configs['cmd.searching.extracttext'] 		= str_replace("swfstrings", "\"" . $path_to_pdf2swf . "swfstrings" . "\"",$configs['cmd.searching.extracttext']);

			if(mudrawEnabled($path_to_mudraw . $mudraw_exec_alt)){
                $configs['cmd.conversion.mudraw'] 		= str_replace("pdfdraw", "mudraw",$configs['cmd.conversion.mudraw']);
			}
		}	
		
		$configManager->saveConfig($configs);

		header("Location: index.php");
		exit;	
	}
	
	function exec_tests($tests) {
		global $table_data, $warning_msg, $fatal_msg, $fatals, $warnings;
		foreach($tests as $test) {
			$i = "<tr><td class=\"title\">{$test['desc']}</td>";
			if ($test['test']) { 
				if (!isset($test['msg'])) {
					$test['msg'] = 'Yes';
				}
				$i .= '<td class="pass">' . $test['msg'] . '</td>';
			} else {
				if (!isset($test['msg'])) {
					$test['nomsg'] = 'No';
				}
				if($test['sev']=='1'){
					$i .= '<td class="warn">' . $test['nomsg'] . '</td>';
				}else{
					$i .= '<td class="fail">' . $test['nomsg'] . '</td>';
				}
				
				$fatals++;
				array_push($fatal_msg, $test['failmsg']);
			}
			$i .= "</tr>"; 
			$table_data .= $i;
		}
	}

	function mudrawEnabled($path_to_mudraw){
	    if (function_exists('exec') && (DIRECTORY_SEPARATOR == '/' || (DIRECTORY_SEPARATOR == '\\'))) {
            if(	PHP_OS == "WIN32" || PHP_OS == "WINNT"	){
                exec('"' . $path_to_mudraw . '"' . ' 2>&1', $out);
            }else{
                exec($path_to_mudraw . ' 2>&1', $out);

                if (empty($out)) {
                    return false;
                } else {
                    if (strpos($out[0], 'usage: pdfdraw') !== false || strpos($out[0], 'usage: mudraw') !== false) {
                        return true;
                    } else {
                        return false;
                    }
                }
            }
        }
	}

	function pdf2swfEnabled($path_to_pdf2swf){
        if (function_exists('exec') && (DIRECTORY_SEPARATOR == '/' || (DIRECTORY_SEPARATOR == '\\' && $path_to_pdf2swf != 'pdf2swf'))) {
            if(	PHP_OS == "WIN32" || PHP_OS == "WINNT"	){
                exec('"' . $path_to_pdf2swf . '"' . ' --version 2>&1', $out);
            }else{
                exec($path_to_pdf2swf . ' --version 2>&1', $out);
            }
                if (empty($out)) {
                    return false;
                } else {
                    if (strpos($out[0], 'swftools') !== false) {
                        return true;
                    } else {
                        return false;
                    }
                }
            } else {
                return false;
        }
    }
	
	function pdf2jsonEnabled($path_to_pdf2json){
		if (function_exists('exec') && (DIRECTORY_SEPARATOR == '/' || (DIRECTORY_SEPARATOR == '\\' && $path_to_pdf2json != 'pdf2json'))) {
			if(	PHP_OS == "WIN32" || PHP_OS == "WINNT"	){
				exec('"' . $path_to_pdf2json . '"' . ' -help 2>&1', $out);
			}else{
				exec($path_to_pdf2json . ' -help 2>&1', $out);
			}
				if (empty($out)) {
					return false;
				} else {
					if (strpos($out[0], 'devaldi') !== false) {
						return true;
					} else {
						return false;
					}
				}
			} else {
				return false;
		}	
	}
	
	function pdftkEnabled($path_to_pdftk){
		if (function_exists('exec') && (DIRECTORY_SEPARATOR == '/' || (DIRECTORY_SEPARATOR == '\\' && $path_to_pdftk != 'pdf2json'))) {
			if(	PHP_OS == "WIN32" || PHP_OS == "WINNT"	){
				exec('"' . $path_to_pdftk . '"' . ' --version 2>&1', $out);
			}else{
				exec($path_to_pdftk . ' --version 2>&1', $out);
			}
				if (empty($out)) {
					return false;
				} else {
					if (strpos(arrayToString($out), 'Manipulating PDF Documents') !== false) {
						return true;
					} else {
						return false;
					}
				}
			} else {
				return false;
		}	
	}
	
	function exec_enabled() {
	    if (in_array('exec', array_map('trim', explode(',', ini_get('disable_functions'))))) {
            return 0;
        }
      	return 1;
	}

	function max_upload_gt_10(){
		$max_upload = (int)(ini_get('upload_max_filesize'));
		$max_post = (int)(ini_get('post_max_size'));
		$memory_limit = (int)(ini_get('memory_limit'));
		$upload_mb = min($max_upload, $max_post, $memory_limit);
		
		return $upload_mb >= 10;
	}
	
?>
<?php require_once("admin_files/header.php"); ?>
		<div style="width:690px;clear:both;padding: 20px 10px 20px 10px;">
			<ul id="process" style="margin-bottom:10px;">
			<?php
			switch ($step):
			case 1:
			?>
				<li class="first active"><span>Step 1: Server Requirements</span></li>
				<li class=""><span>Step 2: Recommended Components</span></li>
				<li class=""><span>Step 3: Configuration</span></li>
			<?php 
			break;
			case 2:
			?>
				<li class="first prevactive"><span>Step 1: Server Essentials</span></li>
				<li class="active"><span>Step 2: Recommended Components</span></li>
				<li class=""><span>Step 3: Configuration</span></li>
			<?php break;?>
			<?php 
			break;
			default:
			?>
				<li class="first complete"><span>Step 1: Server Essentials</span></li>
				<li class="prevactive"><span>Step 2: Recommended Components</span></li>
				<li class="last active"><span>Step 3: Configuration</span></li>
			<?php break;?>
			
			<?php endswitch; ?>			
			</ul>
		</div>
		
		<div style="clear:both;background-color:#fff;padding: 20px 10px 20px 30px;border:0px;-webkit-box-shadow: rgba(0, 0, 0, 0.246094) 0px 4px 8px 0px;min-width:650px;float:left;width:650px;margin-left:10px;margin-bottom:50px;">
		<?php
        if($step == 1){
            ?>
            <h3>Configuration Style</h3>
            <table width="100%" cellspacing="0" cellpadding="0" class="sortable" style="width:100%;margin-bottom:60px;">
                <tr>
                    <td style="border-right:0;width:5%;background-color:#DEDEDE;">
                        <INPUT TYPE=RADIO NAME="CONFIG_TYPE" id="CONFIGMODE1" onclick="document.location.href='setup.php?mode=simple'" VALUE="basic" <?php if($mode == "simple") { ?>checked<?php } ?> style="vertical-align: middle">
                    </td>
                    <td style="border-left:0;width:10%;text-align:left;background-color:#DEDEDE;">
                        Basic configuration
                    </td>
                    <td style="border:0;background-color:transparent;width:1%">

                    </td>
                    <td style="border-right:0;width:5%;background-color:#DEDEDE;">
                        <INPUT TYPE=RADIO NAME="CONFIG_TYPE" id="CONFIGMODE2" onclick="document.location.href='setup.php?mode=advanced'" VALUE="advanced" <?php if($mode == "advanced") { ?>checked<?php } ?> style="vertical-align: middle">
                    </td>
                    <td style="border-left:0;width:10%;text-align:left;background-color:#DEDEDE;">
                        Advanced configuration
                    </td>
                    <td style="border:0;background-color:transparent;width:5%">

                    </td>
                    <td style="border:0;background-color:transparent;font-size:11px;text-align:left;">
                        <span style="<?php if($mode == "advanced") { ?>display:none<?php } ?>">This option does not require any server components to be installed on your server and will work with the majority of devices and platforms.</span>
                        <span style="<?php if($mode == "simple") { ?>display:none<?php } ?>">This options requires you to have root/Administrator privileges on your server. Increases browser and device coverage.</span>
                    </td>
                </tr>
            </table>
            <?php
        }
    ?>

    <?php

		switch ($step):
		case 1:
		
		if($mode == "simple"){
            $tests = array (						0 => array ("desc" => "PHP version 5 or higher",
                                                    "test" => (version_compare(PHP_VERSION, '5', 'ge')),
                                                    "msg"  => PHP_VERSION,
                                                    "nomsg" => PHP_VERSION,
                                                    "failmsg" => "FlowPaper requires a version of PHP greater than 4.3.7. The following versions of PHP are also not supported due to problems specific to those releases: 4.3.10 and 5.0.x",
                                                    "sev" => 1))
                                                    ;
        }

        if($mode == "advanced"){
            $tests = array (						0 => array ("desc" => "PHP version 5 or higher",
                                                    "test" => (version_compare(PHP_VERSION, '5', 'ge')),
                                                    "msg"  => PHP_VERSION,
                                                    "nomsg" => PHP_VERSION,
                                                    "failmsg" => "FlowPaper requires a version of PHP greater than 4.3.7. The following versions of PHP are also not supported due to problems specific to those releases: 4.3.10 and 5.0.x",
                                                    "sev" => 1),
                                                    1 => array ("desc" => "Safe mode disabled",
                                                    "test" => ((ini_get('safe_mode') == false || ini_get('safe_mode') == '' || strtolower(ini_get('safe_mode')) == 'off') || version_compare(PHP_VERSION, '5.4', 'ge')),
                                                    "failmsg" => "<b>safe_mode</b> must be disabled in php.ini",
                                                    "sev" => 1))
                                                    ;
        }
												
		exec_tests($tests);
		
		$table_data .= '<tr><td class="title">PHP can write to the config file</td>';
		
		$ini_file_name = 'config.ini.nix.php';
		if(	PHP_OS == "WIN32" || PHP_OS == "WINNT"	){
			$ini_file_name = 'config.ini.win.php';
		}
		
		if(is_writable($configManager->getConfigFilename())) {
			$table_data .= '<td class="pass">Yes</td>';
		}else{                               
			$table_data .= '<td class="fail">No</td>';
			$fatals++;
			if(	PHP_OS == "WIN32" || PHP_OS == "WINNT" ){
				array_push($fatal_msg, 'PHP does not have the ability to update the config file. Change the permissions on the config file (config/config.ini.win.php) and set its permissions to \'Modify\' and \'Write\' for \'Users\' / \'Everyone\' (see <a href=\'admin_files/images/config.ini.win.php.png\' target=\'_new\'>screen shot</a>). If you have any questions on how to set permissions, please contact your host.');
			}else{
				array_push($fatal_msg, 'PHP does not have the ability to update the config file. Change the permissions on the config folder and its contents to 777 and run the test again. If you have any questions on how to set permissions, please contact your host.');
			}
		}
		$table_data .= "</tr>";
		
		?>
			<h3>FlowPaper Configuration: Server Requirements</h3>
			<table width="100%" cellspacing="0" cellpadding="0" class="sortable">
					<tr>
						<th class="title">Test</th>
						<th class="tr">Result</th>
					</tr>
					<?php echo($table_data); ?>
			</table>
			
			<?php if ($fatals == 0): ?>
			
			<div style="margin-top:10px;float:right;">
				<button class="tiny main n_button" type="submit" onclick="location.href='setup.php?step=2'"><span></span><em style="min-width:150px">On to step 2 &rarr;</em></button>&nbsp;<br/>
			</div>
			<?php else: ?>
			
			<h4 class="warn">This server is not compatible with FlowPaper, here's why:</h4>
												
			<ul class="list">
			<?php foreach($fatal_msg as $msg):
				echo("<li>$msg</li>");
			endforeach; ?>
			</ul>			
			<?php endif; ?>
		
		<?php 
		break;
		case 2:

	    $mudraw     = mudrawEnabled($path_to_mudraw . $mudraw_exec) || mudrawEnabled($path_to_mudraw . $mudraw_exec_alt);
		$pdf2swf 	= pdf2swfEnabled($path_to_pdf2swf . $pdf2swf_exec);
		$pdf2json 	= pdf2jsonEnabled($path_to_pdf2json . $pdf2json_exec);
		$pdftk		= pdftkEnabled($path_to_pdftk . $pdftk_exec);
		$gdinfo 	= null;

        if($mode == "simple"){
            $tests = array(
            0 => array ("desc" => "Max upload size > 10 mb",
                        "test" => (max_upload_gt_10()),
                        "failmsg" => "Your max upload size for your server is restricted to less than 10 megabytes. You can still use FlowPaper but will be unable to upload large files through the admin interface. To allow larger files, please increase 'upload_max_filesize' and 'post_max_size' in your php.ini file. For more information on this please see <a href='http://www.php.net/manual/en/ini.core.php#ini.upload-max-filesize'>the PHP documentation</a>",
                        "sev" => 0));
		}

		if($mode == "advanced"){
            $tests = array(
            0 => array(
                        "desc" => "SWFTools or MuPDF Tools installed",
                        "test" => $pdf2swf || $mudraw,
                        "failmsg" => "Without SWFTools or MuPDF Tools installed, you won't be able to support all devices. On Linux-based systems these tools are typically installed using <pre>sudo apt-get install mupdf-tools<br/>sudo apt-get install swftools</pre>Please see <a href='http://flowpaper.com/download/'>flowpaper.com/download</a> on info about where to download these libraries manually.<br/><br/>If you have you installed SWFTools at a different location then enter the full path to your SWFTools installation below<br/><form class='devaldi'><div class='text' style='width:400px;float:left;'><input type='text' name='PDF2SWF_PATH' id='PDF2SWF_PATH' value='" . $path_to_pdf2swf . "' onkeydown='updatepdf2swfpath()'/><div class='effects'></div><div class='loader'></div></div></form><br/>",
                        "sev" => 0),
            1 => array ("desc" => "PDF2JSON installed",
                        "test" => $pdf2json,
                        "failmsg" => "Without PDF2JSON installed, FlowPaper won't be able to publish documents to HTML format. Please see its homepage on <a href='https://github.com/flexpaper/pdf2json'>GitHub</a> on how to download and install PDF2JSON<br/><br/>Have you installed PDF2JSON at a different location? Please enter the full path to your PDF2JSON installation below<br/><form class='devaldi'><div class='text' style='width:400px;float:left;'><input type='text' name='PDF2JSON_PATH' id='PDF2JSON_PATH' value='" . $path_to_pdf2json . "' onkeydown='updatepdf2jsonpath()'/><div class='effects'></div><div class='loader'></div></div></form><br/>",
                        "sev" => 0),
            2 => array ("desc" => "exec() enabled",
                        "test" => (exec_enabled()),
                        "failmsg" => "FlowPaper requires exec() to be enabled in order to be able to execute SWFTools and PDF2JSON on the fly. You will have to convert your documents manually if this is not enabled.",
                        "sev" => 0),
            3 => array ("desc" => "Max upload size > 10 mb",
                        "test" => (max_upload_gt_10()),
                        "failmsg" => "Your max upload size for your server is restricted to less than 10 megabytes. You can still use FlowPaper but will be unable to upload large files through the admin interface. To allow larger files, please increase 'upload_max_filesize' and 'post_max_size' in your php.ini file. For more information on this please see <a href='http://www.php.net/manual/en/ini.core.php#ini.upload-max-filesize'>the PHP documentation</a>",
                        "sev" => 0),
            4 => array ("desc" => "PDFTK installed",
                        "test" => $pdftk,
                        "failmsg" => "The HTML5 mode cannot be used in split mode without PDFTK installed. On Linux-based systems, pdftk is typically installed using <pre>sudo apt-get install pdftk</pre><br/><br/>Have you installed PDFTK at a different location? Please enter the full path to your PDFTK installation below<br/><form class='devaldi'><div class='text' style='width:400px;float:left;'><input type='text' name='PDFTK_PATH' id='PDFTK_PATH' value='" . $path_to_pdftk . "' onkeydown='updatepdftkpath()'/><div class='effects'></div><div class='loader'></div></div></form><br/>",
                        "sev" => 1));
        }
					
		exec_tests($tests);
		?>
		<script type="text/javascript">
			function updatepdf2jsonpath(){
				$('#bttn_final').hide();
				$('#bttn_updatepath_pdf2json').show();
			}
			
			function updatepdf2swfpath(){
				$('#bttn_final').hide();
				$('#bttn_updatepath_pdf2swf').show();				
			}
			
			function updatepdftkpath(){
				$('#bttn_final').hide();
				$('#bttn_updatepath_pdftk').show();				
			}
		</script>
		<h3>FlowPaper Configuration: Recommended Components</h3>
			<table width="100%" cellspacing="0" cellpadding="0" class="sortable">
					<tr>
						<th class="title">Test</th>
						<th class="tr">Result</th>
					</tr>
					<?php echo($table_data); ?>
			</table>
		
			<?php if ($fatals > 0): ?>
						
			<h4 class="warn">FlowPaper will work on this server, but its features will be limited as described below.</h4>
												
			<ul class="list" style="margin-top:30px">
			<?php foreach($fatal_msg as $msg):
				echo("<li>$msg</li>");
			endforeach; ?>
			</ul>			
			<?php endif; ?>
			
			<div style="margin-top:10px;float:right;display:block" id="bttn_final">
				<button class="tiny main n_button" type="submit" onclick="location.href='setup.php?step=3'"><span></span><em style="min-width:150px">final step &rarr;</em></button>&nbsp;<br/>
			</div>
			
			<div style="margin-top:10px;float:right;display:none;" id="bttn_updatepath_pdf2json">
				<button class="tiny main n_button" type="submit" onclick="location.href='setup.php?step=2&PDF2JSON_PATH='+$('#PDF2JSON_PATH').val()"><span></span><em style="min-width:150px">retry <img src='admin_files/images/reload.png' style='margin-top:3px'/></em></button>&nbsp;<br/>
			</div>
			
			<div style="margin-top:10px;float:right;display:none;" id="bttn_updatepath_pdf2swf">
				<button class="tiny main n_button" type="submit" onclick="location.href='setup.php?step=2&PDF2SWF_PATH='+$('#PDF2SWF_PATH').val()"><span></span><em style="min-width:150px">retry <img src='admin_files/images/reload.png' style='margin-top:3px'/></em></button>&nbsp;<br/>
			</div>
			
			<div style="margin-top:10px;float:right;display:none;" id="bttn_updatepath_pdftk">
				<button class="tiny main n_button" type="submit" onclick="location.href='setup.php?step=2&PDFTK_PATH='+$('#PDFTK_PATH').val()"><span></span><em style="min-width:150px">retry <img src='admin_files/images/reload.png' style='margin-top:3px'/></em></button>&nbsp;<br/>
			</div>			
		
			<?php 
			break;
			default:
			?>
			<script language="JavaScript">
				function validateConfiguration(){
					if($('#ADMIN_PASSWORD').val().length==0){
						$('#ADMIN_PASSWORD_RESULT').html('Admin password needs to be set');
						return false;
					}
					
					if($('#ADMIN_USERNAME').val().length==0){
						$('#ADMIN_USERNAME_RESULT').html('Admin username needs to be set');
						return false;
					}
					
					if($('#PDF_DIR').val().length==0){
						$('#PDF_DIR_ERROR').html('PDF storage directory needs to be set');
						return false;
					}
					<?php
					if($mode == "advanced") {
					?>
					if($('#PUBLISHED_PDF_DIR').val().length==0){
						$('#PUBLISHED_PDF_DIR_ERROR').html('Working directory needs to be set');
						return false;
					}
					<?php
					}
					?>
					
					/*if($('#LICENSEKEY').val().length==0){
						$('#LICENSEKEY_ERROR').html('License key needs to be set');
						return false;
					}*/
				}
			</script>
			<h3>FlowPaper: Configuration</h3>
			<?php 
			$pdf2swf 	= pdf2swfEnabled($path_to_pdf2swf . $pdf2swf_exec);
			$pdf2json 	= pdf2jsonEnabled($path_to_pdf2json . $pdf2json_exec);
			$pdftk		= pdftkEnabled($path_to_pdftk . $pdftk_exec);
			$mudraw     = mudrawEnabled($path_to_mudraw . $mudraw_exec) || mudrawEnabled($path_to_mudraw . $mudraw_exec_alt);
			?>
			<form class="devaldi" action="setup.php" method="post" onsubmit="return validateConfiguration()">
				<input type="hidden" id="step" name="step" value="4" />
				<table width="100%" cellspacing="0" cellpadding="0" class="sortable">
						<tr>
							<td>Admin Username</td>
							<td>
								<div class='text' style="width:150px;float:left;">
											<input type="text" name="ADMIN_USERNAME" id="ADMIN_USERNAME" value="<?php echo $configManager->getConfig('admin.username')?>"/>
											<div class="effects"></div><div class="loader"></div>
								</div>
								<div style="float:left;font-size:10px;padding-top:5px;">The admin username you want to use for the admin publishing interface.</div>
								<div id="ADMIN_USERNAME_RESULT" class="formError" style="float:right;"></div>
							</td>
						</tr>
						
						<tr>
							<td>Admin Password</td>
							<td>
								<div class='text' style="width:150px;float:left">
											<input type="text" name="ADMIN_PASSWORD" id="ADMIN_PASSWORD" value="<?php echo $configManager->getConfig('admin.password')?>"/>
											<div class="effects"></div><div class="loader"></div>
								</div>
								<div style="float:left;font-size:10px;padding-top:5px;">The admin password you want to use for the admin publishing interface.</div>
								<div id="ADMIN_PASSWORD_RESULT" class="formError" style="float:right;"></div>
							</td>
						</tr>
						
						<tr>
							<td style="vertical-align:top;padding-top:12px;">PDF Storage Directory</th>
							<td style="vertical-align:top;">
								<div class='text'>
											<input type="text" name="PDF_DIR" id="PDF_DIR" value=""/>
											<div class="effects"></div><div class="loader"></div>
								</div>
								<div style="float:left;font-size:10px;padding-top:5px;">Please enter the full absolute path to the directory where you want to store your PDF files</div>
								<div id="PDF_DIR_ERROR" class="formError" style="float:right;"></div>
							</td>
						</tr>

						<?php
                        if($mode == "advanced") {
                        ?>
						<tr>
							<td>Working Directory</th>
							<td>
								<div class='text'>
											<input type="text" name="PUBLISHED_PDF_DIR" id="PUBLISHED_PDF_DIR" value=""/>
											<div class="effects"></div><div class="loader"></div>
								</div>
								<div style="float:left;font-size:10px;padding-top:5px;">Please enter the full absolute path to the directory where you want to store your published files</div>
								<div id="PUBLISHED_PDF_DIR_ERROR" class="formError" style="float:right;"></div>
							</td>
						</tr>
                        <?php
                        }
                        ?>

						<tr>
							<td valign="top">
								Primary Format
							</td>
							<td>
								<div style="width:300px;float:left;">
									<select id="RenderingOrder_PRIM" name="RenderingOrder_PRIM" style="font-size:12pt;float:left;">
										<?php if($pdf2swf){ ?>
										<option value="flash" <?php if($configManager->getConfig('renderingorder.primary') == "flash") { ?>selected="true"<?php } ?>>flash</option>
										<?php }?>
										<?php if($pdf2json && ($pdf2swf || $mudraw)){ ?>
										<option value="html" <?php if($configManager->getConfig('renderingorder.primary') == "html") { ?>selected="true"<?php } ?>>html</option>
										<?php }?>										
										<option value="html5" <?php if($configManager->getConfig('renderingorder.primary') == "html5") { ?>selected="true"<?php } ?>>html5</option>
									</select>
								</div>
								<div style="float:left;font-size:10px;padding-top:5px;">This decides what to use as primary media format to use for your visitors. </div>
							</td>
						</tr>
						
						<tr>
							<td valign="top">
								Secondary Format
							</td>
							<td >
								<div style="width:300px;float:left;">
									<select id="RenderingOrder_SEC" name="RenderingOrder_SEC" style="font-size:12pt;float:left;">
										<?php if($pdf2swf){ ?>
										<option value="flash" <?php if($configManager->getConfig('renderingorder.secondary') == "flash") { ?>selected="true"<?php } ?>>flash</option>
										<?php } ?>
										<?php if($pdf2json && ($pdf2swf || $mudraw)){ ?>
										<option value="html" <?php if($configManager->getConfig('renderingorder.secondary') == "html") { ?>selected="true"<?php } ?>>html</option>
										<?php } ?>										
										<option value="html5" <?php if($configManager->getConfig('renderingorder.secondary') == "html5") { ?>selected="true"<?php } ?>>html5</option>
									</select>
								</div>	
								<div style="float:left;font-size:10px;padding-top:5px;">This decides what to use as secondary media format to use for your visitors. </div>
							</td>
						</tr>
						<?php if($pdf2json) { ?>
						<tr>
							<td>Split mode publishing? </th>
							<td>
									<INPUT TYPE=RADIO NAME="SPLITMODE" id="SPLITMODE1" VALUE="false" <?php if($configManager->getConfig('splitmode') == "false" || $configManager->getConfig('splitmode') == "0") { ?>checked="true"<?php } ?> style="vertical-align: middle"> No
									<INPUT TYPE=RADIO NAME="SPLITMODE" id="SPLITMODE2" VALUE="true" <?php if($configManager->getConfig('splitmode') == "true" || $configManager->getConfig('splitmode') == "" || $configManager->getConfig('splitmode') == "1") { ?>checked="true"<?php } ?> style="vertical-align: middle;margin-left:30px;"> Yes<BR>
								<div style="float:left;font-size:10px;padding-top:5px;">If you generally publish large PDF documents then running split mode is recommended.</div>
								
							</td>
						</tr>
						<?php } ?>
						<tr>
							<td>License Key</th>
							<td>
								<div class='text' style="width:300px;float:left;">
											<input type="text" name="LICENSEKEY" id="LICENSEKEY" value=""/>
											<div class="effects"></div><div class="loader"></div>
								</div>
								<div style="float:left;font-size:10px;padding-top:5px;">If using the commercial version, this is the key you recieved from our commercial download area.</div>
								<div id="LICENSEKEY_ERROR" class="formError" style="float:right;"></div>
							</td>
						</tr>
				</table>
				<script language="JavaScript">
					$(document).ready(function(){
						$("input#PDF_DIR").keyup(initTimer);
						$("input#PDF_DIR").change(checkDirectoryChangePermissionsHandler);
						
						$("input#PUBLISHED_PDF_DIR").keyup(initTimer);
						$("input#PUBLISHED_PDF_DIR").change(checkDirectoryChangePermissionsHandler);
					});
					
					var globalTimeout;
					var currentTimeoutField;
					
					function initTimer(event) {
						currentTimeoutField = $(this);
						
					    if (globalTimeout) clearTimeout(globalTimeout);
					    globalTimeout = setTimeout(checkDirectoryPermissionsHandler, 2000);
					}
					
					function checkDirectoryPermissions(obj){
						var infield = obj;
						if(infield.val().length<3){return;}
						
						$.ajax({
						  url: "checkdirpermissions.php?dir="+infield.val(),
						  context: document.body,
						  success: function(data){
						  	if(data=="0"){
								$('#'+infield.attr("id")+'_ERROR').html('Cannot write to directory. Please verify path & permissions (needs to be writable).<br/>Windows users: please wait a minute before trying again after changing permissions<br/><button class="tiny main n_button" type="submit" onclick="checkDirectoryPermissions(jQuery(\'input#'+infield.attr('id')+'\'));return false;"><span></span><em style="min-width:100px">retry <img src="admin_files/images/reload.png"  style="margin-top:3px"/></em></button>');
								return false;
							}else{
								$('#'+infield.attr("id")+'_ERROR').html('');
								return true;
							}
						  }
						});	
					}
					
					function checkDirectoryChangePermissionsHandler(event){
						var infield = $(this);
						checkDirectoryPermissions(infield);
					}
					
					function checkDirectoryPermissionsHandler(event){
						var infield = currentTimeoutField;
						checkDirectoryPermissions(infield);						
					}
				</script>
				<div style="margin-top:10px;float:right;">
					<button class="tiny main n_button" type="submit"><span></span><em style="min-width:150px">Save &amp; Complete Setup</em></button>&nbsp;<br/>
				</div>
			</form>
				
			<?php break;?>
			<?php endswitch; ?>
		</div>
	<?php require_once("admin_files/footer.php"); ?>
