<script type="text/javascript" src="../wp-content/plugins/pdf-export/assets/js/bootstrap.min.js"></script>
<script type="text/css" src="../wp-content/plugins/pdf-export/assets/css/bootstrap.min.css"></script>
<script type="text/javascript" src="../wp-content/plugins/pdf-export/assets/js/paging.js"></script>

<html>
<head>
	<title></title>
</head>
<body>
	<div class="portlet-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover" id= "search-history">
				<thead>
					<tr>							
						<th><?php echo ('Search Date'); ?></th>
						<th><?php echo ('Search Desc'); ?></th>
						<th><?php echo ('Suppliers Matched'); ?></th>
						<th><?php echo ('Actions'); ?></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Search Date:</td>
					</tr>
					<tr>
						<td>Search Desc</td>
					</tr>
					<tr>
						<td>Suppliers Matched</td>
					</tr>
					<tr>
						<td></td>
					</tr>
					<tr>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	$('#search-history').paging({limit:1});
</script>