<?php
ob_start();
$html = '';
$cover = (ISSAPDF_PLUGIN_DIR . 'templates/issa.jpg');
$html = <<<HTML
	<html>
	<head>
		<style>
			.squ-SupplierLHS {float: left;width: 49%;margin-right: 2%;}
			.squ-SupplierRHS {float: left;width: 49%;}
			.squ-SupplierGen {font-weight: bold;}
			#issaCover {page-break-after: always;width:100%; height:100%;position:absolute;padding:2.4cm !important;background-color:rgb(226,220,194) !important;}
			.issaCoverImage {max-width:100%; max-height:100%; display:block; margin-left:auto;margin-right:auto; background: none !important;border: none !important;}			
			#squ-reg-results {page-break-after: always;padding: 1.2cm !important;}
			#squ-reg-results:last-child {page-break-after: auto;}
			html * { background-color:rgb(251, 249, 242) !important; }
			@page {margin: 0px;}
		</style>
	</head>
<body>
HTML;
$html .= '<div class="pdfcover" id="issaCover">';
$html .= '<img src="'.$cover.'" class="issaCoverImage"> </div>';

foreach ($search_results as $key => $results) {
	if($key%2 == 0) { $html .= '<div class="supplier-content" id="squ-reg-results">'; }
	
	$html .= '<div style="font-size:18px;font-weight:bold;">' . $results->Company_Name . '</div>';
	$html .= '<div class="squ-SupplierOffice">' . $results->Office_Type . '</div>';
	$html .= '<div class="squ-SupplierMem">ISSA Membership Number : ' . $results->ISSA_Number . '</div>';
	$html .= '<div class="squ-SupplierWWW"><a href="' . $results->Weblink1 . '">' . $results->Weblink1 . '</a></div>';
	$html .= '<div class="squ-SupplierWWW"><a href="' . $results->Weblink2 . '">' . $results->Weblink2 . '</a></div>';
	$html .= '<br />';
	$html .= '<div class="squ-SupplierGen">' . $results->General_Ship_Supplier . '</div>';
	$html .= '<br />';
	$html .= '<div class="squ-SupplierSpec"><b>Specialized In :</b> ' . $results->Specialized_In . '</div>';
	$html .= '<br />';
	
	$html .= '<table style="width:100%;">';
	$html .= '<tr><td><b>Address:</b></td><td>' . $results->Postal_Addr1 . '<br />' . $results->Postal_Addr2 . '<br />' . $results->Postal_Addr3 . '</td></tr>';
	$html .= '<tr><td><b>Phone:</b></td><td>' . $results->Phone . '</td><td><b>Contact Name:</b></td><td>' . $results->Contact1 . '</td></tr>';
	$html .= '<tr><td><b>After Hrs:</b></td><td>' . $results->After_Hrs . '</td><td><b>Contact Mobile:</b></td><td>' . $results->Mobile1 . '</td></tr>';
	$html .= '<tr><td><b>Fax:</b></td><td>' . $results->Fax . '</td><td><b>Contact Name:</b></td><td>' . $results->Contact2 . '</td></tr>';
	$html .= '<tr><td><b>Telex:</b></td><td>' . $results->Telex . '</td><td><b>Contact Mobile:</b></td><td>' . $results->Mobile2 . '</td></tr>';
	$html .= '<tr><td><b>Skype:</b></td><td>' . $results->Skype . '</td><td><b>Legal Entity:</b></td><td>' . $results->Company_Legal_Entity . '</td></tr>';
	$html .= '<tr><td><b>E-Mail:</b></td><td><a href="#">' . $results->Email1 . '</a></td><td><b>Registration Number:</b></td><td>' . $results->Registration_Number . '</td></tr>';
	$html .= '<tr><td><b>E-Mail:</b></td><td><a href="#">' . $results->Email2 . '</a></td><td><b>Quality:</b></td><td>' . $results->Quality . '</td></tr>';
	$html .= '<tr><td><b>Other ISO:</b></td><td>' . $results->Other_ISO . '</td><td><b>Also Serves:</b></td><td>' . $results->Other_Ports . '</td></tr>';
	$html .= '</table>';

	if($key%2 == 1) { 
		$html .= '</div>'; 
	} else {
		$html .= '<br /><hr><br />';
	}
}
$html .= '</body>
</html>';
?>