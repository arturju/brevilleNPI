<?php error_reporting(0);?>

<html lang="en">
	<head>
		<title> Breville NPI </title>
		<meta http-equiv="description" content="Projects page" />
		<meta http-equiv="pragma" content="no-cache" />
		
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" >
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
		
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		
		
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="tableSorter/jquery.tablesorter.js"></script> 
		
		<!-- To resize based on screen size -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
			
		<!-- styling the table -->
		<link rel="stylesheet" href="tableSorter/themes/blue/style.css">
		
		
				<!-- Auto refresh -->
				<!-- <meta http-equiv="refresh" content="3"> -->
					
					
<script>
$(document).ready(function() 
    { 
        $("#myTable").tablesorter(); 
    } 
); 
</script>
		
		
	</head>
	
	<style>	
		.prcNoAction{
			background-color: red;
			text-align: center;
		}
		
		.prcPending{
			background-color: #FFCE85;
			text-align: center;
		}
		
		.brevillePending{
			background-color: #BC9CFF;
			font-weight: bold;
			text-align: center;
		}
		
		.completed{
			background-color: #ACC875;
			text-align: center;
		}
		
		.neutralCell{
			background-color: white;
			font-weight: bold;
			font-size: 120%;

		}
		
		.modalWindowIcon{
			max-height: 65px;
		}
		
	</style>
	
	
<!-- MAIN CONTENT -->

<br>

<body>
	<div class="container-fluid">
		<div class="col-md-11">
		
		<!-- Information -->
		<button type="button" class="btn btn-default" aria-label="Left Align">
		  <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
		</button>
		
    </script>
		
		
		
		<table id="myTable" class="tablesorter table table-striped table-bordered table-condensed" >
		<thead id="theadId">
			<tr>
				<th class="text-center">SKU</th>
				<th>Work Instruction </th>
				<th>ETL Certification </th>
				<th>Art Work </th>
				<th>Packaging </th>
				<th class="text-center">FAR </th>
				<th class="text-center">TRACS</th>
				<th>PPI  </th>
			</tr>
		</thead>
		
		<tbody id="tbodyId">
		
		<!-- Loop getting values from DB -->
		<?php	
			$SKU = 'BBL560XL';					// query from DB
			$SKUclass = neutralCell;	
			
			$WIstatus = 'Draft';				// query from DB
			$WIclass = prcPending;				// query from DB
			
			$etlCertStatus = 'Approved'; 			// query from DB
			$etlClass = completed;					// query from DB
			
			$artWorkStatus = 'Pending';				
			$artWorkClass = brevillePending;	
			
			$packagingStatus = 'Approved';
			$packagingClass = completed;
			
			$farStatus = ' No criteria Available';
			$farClass = brevillePending;
			
			$tracsStatus = 'Verifying & Translating';
			$tracsClass = prcPending;
			
			$PPIvalue = '123';
			$PPIclass = neutralCell;
			
			// print Row for SKU
			echo "<tr>  <td class=".$SKUclass.">".$SKU."</td>" ;		
			echo "		<td class=".$WIclass.">".$WIstatus."</td>" ;	
			echo "		<td class=".$etlClass.">".$etlCertStatus."</td>" ;	
			echo "		<td class=".$artWorkClass.">".$artWorkStatus."</td>" ;	
			echo "		<td class=".$packagingClass.">".$packagingStatus."</td>" ;	
			echo "		<td class=".$farClass.">".$farStatus."</td>" ;	
			echo "		<td class=".$tracsClass.">".$tracsStatus."</td>" ;	
			echo "		<td class=".$PPIclass.">".$PPIvalue."</td>			</tr>" ;	
		?>
			
			
		<!-- SAMPLE SKUS.. DELETE!!! -->	
				<tr>
					<td class="neutralCell"> JE98XL </td>
					<td class="completed"> Completed </td>
					<td class="brevillePending"> Pending </td>
					<td class="completed"> Approved </td>
					<td class="completed"> Approved </td>
					<td class="completed"> Approved </td>
					<td class="completed"> Approved </td>
					<td class="neutralCell"> 345 </td>
				</tr>
				
				<tr>
					<td class="neutralCell"> BJE510XL </td>
					<td class="brevillePending"> Waiting for Approval </td>
					<td class="completed"> Completed </td>								
					<td class="completed"> Approved </td>
					<td class="completed"> Approved </td>
					<td class="completed"> Approved </td>
					<td class="completed"> Approved </td>
					<td class="neutralCell"> 678 </td>
				</tr>
		<!--- end of sample SKUS -->
		
		</tbody>		
		</table>		
		
		<!-- MODAL WINDOW -->
		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
		  Lvl3 Packaging (sample)  
		</button>
		
		<!-- Modal -->
		<?php
			// SKU detail, status and picture
			$SKUdetail = 'JE98XL';					// query from DB
			$SKUcolumnSelected = 'Packaging';
			$iconFileName = 'packaging';			// always .png and in /img/ folder
			$detailStatus = 'Approved';
			$detailClass = 'completed';				// same as class from cell
			
			// Check box Table
			$checkBoxDescArray =	 array('Received Sample Packaging', 'Drop Test Passed', 'Part Names Created');
			$checkBoxStatusArray =	 array('checked', 					'checked');
			$dateArray = 			array('9/10/2015', 					'9/11/2015');
			$modifiedByArray =		 array('Arturo Jumpa',				'Kent Fu');
	
			
			// Documentation
			$documentArray = array('file1.docx', 'file2.pdf', 'file3.test' );			
		?>
		
		
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<!-- modal window title and img -->
				<img class="pull-left modalWindowIcon" src=<?php echo '/img/'.$iconFileName.'.png' ?> >
				<h4 class="modal-title" style="text-align:center" id="myModalLabel">
				<strong> <?php echo $SKUdetail.': </strong>'.$SKUcolumnSelected ?>
				</h4> 
				<h4 style="text-align: center" > Status: <i <?php echo 'class='.$detailClass.'>'.$detailStatus ?></i></h4>				
			  </div>
			  
			  
			  <div class="modal-body">					  
				<table id="modalTable" class="table table-hover table-bordered table-condensed">				
				<thead style="background-color: #e6EEEE;">
					<tr>
						<th>Description</th>
						<th>Date Modified</th>
						<th>Modified By:</th>
					</tr>
				</thead>
				
				<tbody>
						<?php
							for ($i = 0; $i < count($checkBoxDescArray); $i++){
								echo '<tr>';
									echo '<td><input type="checkbox" onclick="return false"'.$checkBoxStatusArray[$i].' >'.$checkBoxDescArray[$i].'</td>';
									echo '<td>'.$dateArray[$i].'</td>';
									echo '<td>'.$modifiedByArray[$i].'</td>';
								echo '</tr>';
							} ?>
				</tbody>
				</table>

				<hr>
				
				<h4> <u>Documentation </u> </h4>
				<ul><?php
					 for($i = 0; $i< count($documentArray); $i++){
						echo '<li>'.$documentArray[$i].'</li>';
					} ?>				
				</ul>
				
				<hr>
				
				<h4> <u>Packaging BOM </u> </h4>
				<br><br><br>
				
				<hr>
				
				<h4> <u>Comments: </u> </h4>
				<br><br>
				
				
				
			  </div><!-- end of modal Body -->
			  
			  
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			  
			  
			</div>
		  </div>
		</div>
		<!-- end of Sample modal -->
		
		
		</div>	<!-- end of table div -->
		
		
		
	</div>	<!-- end of 'container-fluid' -->
	

</body>
	
	
	
	
</html>