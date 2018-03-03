<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header ();

?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="../wp-content/plugins/pdf-export/assets/js/bootstrap.min.js"></script>
<script type="text/css" src="../wp-content/plugins/pdf-export/assets/css/bootstrap.min.css"></script>
<script type="text/css" src="../wp-content/plugins/pdf-export/assets/css/bootstrap-grid.min.css"></script>

<div class="wrap">

	<header class="page-header">
		<h1>Search Register</h1>
	</header>
	<!-- .page-header -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			$message = '';
			$data_search = '';
			$url 		= site_url ( '/search', 'http' );
			global $wpdb;
			$countries 	= $wpdb->get_results ( 'SELECT Country_Code, Country FROM Country ORDER BY Country ASC' );
			$ports 		= $wpdb->get_results ( 'SELECT Country_Code, Port_Name FROM Port' );
			
			foreach ( $ports as $key => $port ) {
				$portslist[$key]['Port_Name'] 	 = $port->Port_Name;
				$portslist[$key]['Country_Code'] = $port->Country_Code;
			}
			
			if (isset($_POST)) {
				$country_data = (isset($_POST['country']))? $_POST['country']:'';
				$port_data = (isset($_POST['port']))? $_POST['port']:'';
				$company = (isset($_POST['company']))? $_POST['company']: '';
				$specialities = (isset($_POST['specialities']))? $_POST['specialities']: '';
			}
			if (!empty($_GET['sup'])) {
				$searchID = $_GET['sup'];
				$querySearch = $wpdb->get_results( "SELECT * FROM Tbl_Search_Detail WHERE Search_ID = ".$searchID."");
				$searchData = json_decode(urldecode(stripslashes($querySearch[0]->Search_Data)));
				$country_data = !empty( $searchData->country ) ? $searchData->country : '';
				$port_data = !empty ( $searchData->port ) ? $searchData->port : '';
				$company = !empty( $searchData->company ) ? $searchData->company : '';
				$specialities = !empty( $searchData->specialities ) ? $searchData->specialities : '';
			}
			?>
			
			<div id="reg-search">
				<form method="post" action="<?php echo $url; ?>" id="searchForm" name="searchCriteria">
					<table>
						<tr>
							<td><label>Country</label></td>
							<td><select name=country class="abc">
								<option value="">--select--</option>
								<?php foreach ($countries as $key=>$cntry) { 
									if ($cntry->Country_Code == $country_data) {?>
									<option selected="selected" value=<?php echo $cntry->Country_Code;?>><?php echo $cntry->Country;?></option>
								<?php } else { ?>
									<option value=<?php echo $cntry->Country_Code;?>><?php echo $cntry->Country;?></option>
								<?php } }?>
								</select></td>
						</tr>
						<tr>
							<td><label>Port</label></td>
							<td><select name="port" class="port_abc">
								<option selected disabled value=''>--select--</option>
							</select></td>
						</tr>
						<tr>
							<td><label>Company</label></td>
							<td><input type="text" name="company" value="<?php echo $company; ?>" /></td>
						</tr>
						<tr>
							<td><label>Specialities</label></td>
							<td><input type="text" name="specialities" value="<?php echo $specialities; ?>" /></td>
						</tr>
						<tr>
							<td></td>
							<td><input id="searchSupply" type="submit" name="action" value="Search" /></td>
						</tr>
						<tr>
							<td></td>
							<td><input id="downloadallSupply" type="submit" name="action" value="Download All" /></td>
						</tr>
					</table>
					<?php do_action('search_download'); ?>
				</form>
			</div>
			<?php if (isset($_POST) && !empty($_POST)) {?>
			<div id="sa-search">
				<form method="post">
					<table>
						<tr>
							<td><label>Description</label></td>
							<td><input type="text" name="searchdesc" required></td>
							<td><input id="saveSearch" type="submit" name="action" value="Save" /></td>
							<?php if ( isset($_POST['country']) || isset($_POST['port']) || isset($_POST['company']) || isset($_POST['specialities']) ){
								$search_data = array('country'=> $country_data,
														'port' => $port_data,
														'company' => $company,
														'specialities' => $specialities
														);
								$data_search = urlencode(json_encode($search_data));
								}?>
							<input type="hidden" name="search_data" value=<?php echo $data_search ;?>>
						</tr>
					</table>
					<?php do_action('search_save'); ?>
				</form>
			</div>
				<?php } if (is_user_logged_in()) { ?>
			<div>
				<table>
					<tr>
						<td><b>Search Description</b></td>
						<td><b>Search Date</b></td>
					</tr>
					<?php
					$results = $wpdb->get_results ( "SELECT * FROM Tbl_Search_Detail WHERE Search_Registration_ID =  ". get_current_user_id () ." ORDER BY Search_Date DESC");
					foreach ( $results as $key => $result ) {
						echo '<tr><td><a class="searchSelect" href="'.$url.'?sup='.$result->Search_ID.'&action=Search">' . $result->Search_Desc . '</a></td><td>' . $result->Search_Date . '</td></tr>';
					}
					?>
				</table>
			</div>
				<?php } ?>
		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->
</div>
<!-- .wrap -->
<script type="text/javascript">
var port_data = "<?php echo $port_data;?>";
	jQuery(document).ready(function(){
		var options = '';
		jQuery('.abc').change(function(){
			var countryCode = jQuery(this).val();
			var ports = <?php echo json_encode($portslist);?>;
			options = '<option selected disabled value="">--select--</option>';
			$.each(ports, function(i, obj){
		  		if (obj['Country_Code'] == countryCode) {
		  			options += '<option value='+obj['Port_Name']+'>'+obj['Port_Name']+'</option>';
		  		}
		  	});
		  	$('.port_abc').html(options);
	 	});

	 	jQuery('.abc').trigger('change');
	 	if (port_data != '') {
 			$('.port_abc').val(port_data);
	 	}
	});
</script>

<?php get_footer(); ?>