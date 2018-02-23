<?php
if (! defined ( 'ABSPATH' ))
	exit ();

add_action ( 'wp_enqueue_scripts', 'wpse_load_scripts' );
function wpse_load_scripts() {
	wp_enqueue_script ( 'jquery' );
	wp_enqueue_script ( 'jquery', '/wp-content/plugins/pdf-export/assets/js/jquery-1.12.4.min.js', array (
			'jquery' 
	), null, true );
}

add_action ( 'init', 'button_action');
function button_action() {
	$country = $port = $company = $speciality = '';
	if(!empty ($_POST)) {
		if (! empty ( $_POST ['country'] )) 	 $country = $_POST ['country'];
		if (! empty ( $_POST ['port'] )) 		 $port = $_POST ['port'];
		if (! empty ( $_POST ['company'] )) 	 $port = $_POST ['company'];
		if (! empty ( $_POST ['specialities'] )) $speciality = $_POST ['specialities'];
	}
	if (is_user_logged_in () && !empty ($_POST) && ( $_POST ['action'] == 'Download' || $_POST ['action'] == 'Download All' ) ){
		export_pdf ( $country, $port, $company, $speciality );

	} elseif (!empty ($_POST) && ($_POST ['action'] == 'Download' || $_POST ['action'] == 'Save' || $_POST ['action'] == 'Download All') && !is_user_logged_in ()) {
		auth_redirect ();
	}
}

add_action ( 'search_download', 'download_clicked' );
function download_clicked() {
	global $wpdb;
	$searchData = array();
	$querySearch = array();	
	$country = $port = $company = $speciality = '';
	if (!empty ($_POST)) {
		
		if (! empty ( $_POST ['country'] ))      $country = $_POST ['country'];
		if (! empty ( $_POST ['port'] )) 		 $port = $_POST ['port'];
		if (! empty ( $_POST ['company'] )) 	 $company = $_POST ['company'];
		if (! empty ( $_POST ['specialities'] )) $speciality = $_POST ['specialities'];
	}
	elseif (!empty($_GET) && !empty($_GET['sup'])){
		$searchID = $_GET['sup'];
		$querySearch = $wpdb->get_results( "SELECT * FROM Tbl_Search_Detail WHERE Search_ID = ".$searchID."");
		$searchData = json_decode(urldecode(stripslashes($querySearch[0]->Search_Data)));
		
		if (! empty ( $searchData->country ))      $country = $searchData->country;
		if (! empty ( $searchData->port )) 		 $port = $searchData->port;
		if (! empty ( $searchData->company )) 	 $company = $searchData->company;
		if (! empty ( $searchData->specialities )) $speciality = $searchData->specialities;
	}
		
	if ( (!empty($_POST['action']) && $_POST ['action'] == 'Search') || (!empty($_GET['action']) && $_GET['action'] == 'Search') ) {
			$suppliers = query_data ( $country, $port, $company, $speciality );
		$cnt = 1;
		echo '<table id="search_results">';
		echo '<tr><td colspan=4><b>Seach Results:</b> <br>Total Number of results: ' . count($suppliers). '</td></tr>';
		foreach($suppliers as $supplier) {
			echo '<tr><td>' . $cnt++ . '.</td><td>' . $supplier->Company_Name . '<br />' . $supplier->Port_Name . ', ' . $supplier->Country . '</td><td>' . $supplier->General_Ship_Supplier . '</td><td>' . $supplier->Specialized_In . '</td></tr>';
		}
		if (count($suppliers) != 0){
			echo '<tr><td></td><td colspan=3><input id="exportSupply" type="submit" name="action" value="Download" /></td></tr>';
		}
		echo '</table>';
	}
}

function export_pdf($country = null, $port = null, $company = null, $speciality = null) {
	$search_results = array ();
	$search_results = query_data ( $country, $port, $company, $speciality );
	require_once ('' . ISSAPDF_PLUGIN_DIR . '/templates/pdf-layout.php');
	ob_end_clean ();
	include ('dompdf/dompdf_config.inc.php');
	$dompdf = new Dompdf();
	$dompdf->set_option('enable_php', true);
	$dompdf->load_html( $html );
	$dompdf->set_paper( 'A4', 'portrait' );
	$dompdf->render ();
	$canvas = $dompdf->get_canvas();
	$canvas->page_script('
	  if ($PAGE_NUM > 1) {
	    $font = Font_Metrics::get_font("helvetica", "bold");
	    $current_page = $PAGE_NUM-1;
	    $total_pages = $PAGE_COUNT-1;
	    $pdf->text(250, 15, "ISSA (www.shipsupply.org)", $font, 6, array(0,0,0));
	 	$pdf->text(500, 815, "Page: $current_page of $total_pages", $font, 6, array(0,0,0));
	  }
	');
	//print_r($html); exit;
	$dompdf->stream ( 'document.pdf' );
}

function query_data($country = null, $port = null, $company = null, $speciality = null) {
	global $wpdb;
	$search_results = array ();
	
	$condition = '';
	if (! empty ( $country )) 	 $condition .= ' AND c.Country_Code="' . $country . '"';
	if (! empty ( $port )) 		 $condition .= ' AND p.Port_Name="' . $port . '"';
	if (! empty ( $company )) 	 $condition .= ' AND s.Company_Name LIKE "%' . $company . '%"';
	if (! empty ( $speciality )) $condition .= ' AND s.Text LIKE "%' . $speciality . '%"';
	
	$supplier_list = 'SELECT  c.Country AS Country,  p.Port_Name AS Port_Name, c.Country_Code, s.aId, s.Company_Name,  CONCAT(s.Country_Code, LPAD(CONVERT(s.Mem_No, CHAR(4)), 4, "0")) AS ISSA_Number,  IF (s.logo_reg=1, CONCAT (CONVERT(s.CompanyId, CHAR), ".png"), "") AS Supplier_Logo,  IF (s.ISSAQuality=1, "quality.png", NULL) AS Quality_Logo,  IF ((s.Postal_Address1="" || ISNULL(s.Postal_Address1)), "", s.Postal_Address1) AS Postal_Addr1,  IF ((s.Postal_Address2="" || ISNULL(s.Postal_Address2)), "", s.Postal_Address2) AS Postal_Addr2,  IF ((s.Postal_Address3="" || ISNULL(s.Postal_Address3)), "", s.Postal_Address3) AS Postal_Addr3,   IF ((s.Location="" || ISNULL(s.Location)), "", s.Location) AS Location1,  IF ((s.Location2="" || ISNULL(s.Location2)), "", s.Location2) AS Location2,  IF ((s.Location3="" || ISNULL(s.Location3)), "", s.Location3) AS Location3,   IF ((s.Phone="" || ISNULL(s.Phone)), "", s.Phone) AS Phone,   IF ((s.AH_Phone="" || ISNULL(s.AH_Phone)), "", s.AH_Phone) AS After_Hrs,   IF ((s.Fax="" || ISNULL(s.Fax)), "", s.Fax) AS Fax,   IF ((s.Telex="" || ISNULL(s.Telex)), "", s.Telex) AS Telex,  IF ((s.Skype="" || ISNULL(s.Skype)), "", s.Skype) AS Skype,  IF ((s.email1="" || ISNULL(s.email1)), "", s.email1) AS Email1,  IF ((s.email2="" || ISNULL(s.email2)), "", s.email2) AS Email2,  IF ((s.WWW="" || ISNULL(s.WWW)), "", IF(INSTR(s.WWW, ";")=0, s.WWW, SUBSTRING_INDEX(s.WWW, ";", 1))) AS Weblink1,  IF ((s.WWW="" || ISNULL(s.WWW)), "", IF(INSTR(s.WWW, ";")=0, "", SUBSTRING(s.WWW, INSTR(s.WWW, ";")+1, Length(s.WWW)))) AS Weblink2,  IF ((s.Contact="" || ISNULL(s.Contact)), "", CONCAT("", s.Contact)) AS Contact1,  IF ((s.contact_phone="" || ISNULL(s.contact_phone)), "", s.contact_phone) AS Mobile1,  IF ((s.Other_contact="" || ISNULL(s.Other_contact)), "", s.Other_contact) AS Contact2,  IF ((s.Other_contact_phone="" || ISNULL(s.Other_contact_phone)), "", s.Other_contact_phone) AS Mobile2,  IF ((s.Legal_Entity="" || ISNULL(s.Legal_Entity)), "", s.Legal_Entity) AS Company_Legal_Entity,  IF ((s.Registration_Number="" || ISNULL(s.Registration_Number)), "", s.Registration_Number) AS Registration_Number,  IF ((ii.ISO_Description="" || ISNULL(ii.ISO_Description)), "", ii.ISO_Description) AS Quality,  IF ((s.OtherISO="" || ISNULL(s.OtherISO)), "", s.OtherISO) AS Other_ISO,   IF (s.Head_Office=1, "Head Office", "Branch Office") AS Office_Type,  IF (s.Ship_Supplier=1, "General Ship Supplier", "") AS General_Ship_Supplier,  IF (s.Specialist=1 ,  s.Text, "") AS Specialized_In,  IF ((s.Other_ports="" || ISNULL(s.Other_ports)), "", s.Other_ports) AS Other_Ports FROM Suppliers AS s  INNER JOIN ISO_Info AS ii ON s.ISOType=ii.ISO_Type  INNER JOIN Country AS c ON s.Country_Code=c.Country_Code INNER JOIN Port AS p ON s.Port=p.Port_Number WHERE s.IsVisible=1 AND s.Country_Code=p.Country_Code ' . $condition . ' ORDER BY c.Country, p.Port_Name, s.Company_Name;';
	$search_results = $wpdb->get_results ( $supplier_list );
	return $search_results;
}

add_action ( 'search_save', 'save_clicked' );
function save_clicked() {
	global $wpdb;
	$search_desc = '';
	
	if (is_user_logged_in () && !empty ( $_POST ) ) {
		
		$user = get_current_user_id ();
		$current_date = current_time ( 'Y-m-d' );

		if (!empty($_POST['search_data'])) {
			$search_data = $_POST['search_data'];
		}
		if (! empty ( $_POST ['searchdesc'] )) {
			$search_desc = $_POST ['searchdesc'];
		}
		$status = '';
		$message = '';
		if (! empty ( $search_desc ) || $search_desc != null) {
			$status = $wpdb->insert ( 'Tbl_Search_Detail', array (
					'Search_Registration_ID' => '' . $user . '',
					'Search_Date' 			 => '' . $current_date . '',
					'Search_Desc' 			 => '' . $search_desc . '',
					'Search_Data'			 => '' . $search_data. ''
			) );
		}
		if ($status == false && ! empty ( $status )) {
			$message = "The search couldn't be saved.";
		} elseif ($status != false && ! empty ( $status )) {
			$message = "The search has been saved.";
		}
		echo $message;
	}
}
?>