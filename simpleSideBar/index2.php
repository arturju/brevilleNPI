<?php error_reporting(0);?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Brevillel NPI</title>

		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" >
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
		
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		
		
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="tableSorter/jquery.tablesorter.js"></script> 
		 <link href="css/simple-sidebar.css" rel="stylesheet">
		 
		
		<!-- To resize based on screen size -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
			
		<!-- styling the table -->
		<link rel="stylesheet" href="tableSorter/themes/blue/style.css">

	
<script>

$(document).ready(function() { 
        $("#myTable").tablesorter(); 
    } 
); 

    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
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
		
		td { min-width: 120px; }
		
	
</style>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
				<h3> Select Columns </h3>
                </li>
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

		
		
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
					
					
		<!-- BUTTONS -->
		<button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#info" aria-label="Left Align"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> </button>
		
		<a href="#menu-toggle" class="btn btn-warning" id="menu-toggle"><span class="glyphicon glyphicon-resize-horizontal" aria-hidden="true"></span> </a>		
		<!-- end of buttons -->
		
		<!-- Modal -->
		<div class="modal fade" id="info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			
			  <div class="modal-header">			  
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>				
				<h4 class="modal-title" style="text-align:center" id="myModalLabel">
				<strong> Legend </strong>				</h4> 
			  </div>	<!-- end of header -->	  
			  
			  <div class="modal-body">					  
				... disambiguation ...

				
				
			  </div><!-- end of modal Body -->
			  
			  
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			  
			  
			</div>
		  </div>
		</div>
		<!-- end of Sample modal -->
		
		
		<h2 style="text-align:center; font-family:Verdana, Geneva, sans-serif;"> Breville NPI Status </h2>
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
				<th class="text-center">PPI  </th>
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
			echo '		<td class= "text-center '.$PPIclass.' " >'.$PPIvalue."</td>			</tr>" ;	
		?>
			
			
		<!-- SAMPLE SKUS.. DELETE!!! -->	
				<tr>
					<td class="neutralCell"> JE98XL </td>
					<td class="completed"> Completed </td>
					<td class="brevillePending"> Pending </td>
					<td class="completed"> Approved </td>
					<td class="completed"><a href="#" data-toggle="modal" data-target="#detailLvl3"> Approved </a></td>
					<td class="completed"> Approved </td>
					<td class="completed"> Approved </td>
					<td class="neutralCell text-center"> 345 </td>
				</tr>
				
				<tr>
					<td class="neutralCell"> BJE510XL </td>
					<td class="brevillePending"> Waiting for Approval </td>
					<td class="completed"> Completed </td>								
					<td class="completed"> Approved </td>
					<td class="completed"> Approved </td>
					<td class="completed"> Approved </td>
					<td class="completed"> Approved </td>
					<td class="neutralCell text-center"> 678 </td>
				</tr>
				
				<tr>
					<td class="neutralCell"> randSKU </td>
					<td class="brevillePending"> Waiting for Approval </td>
					<td class="brevillePending"> Incomplete </td>								
					<td class="brevillePending"> Waiting for Approval </td>
					<td class="brevillePending"> Waiting for Approval </td>
					<td class="brevillePending"> Incomplete </td>
					<td class="brevillePending"> Waiting for Approval </td>
					<td class="neutralCell text-center"> 999 </td>
				</tr>
				
				<tr>
					<td class="neutralCell"> randSKU2 </td>
					<td class="completed"> Completed </td>
					<td class="completed"> Completed </td>								
					<td class="completed"> Approved </td>
					<td class="completed"> Approved </td>
					<td class="completed"> Approved </td>
					<td class="completed"> Approved </td>
					<td class="neutralCell text-center"> 222 </td>
				</tr>
		<!--- end of sample SKUS -->
		
		</tbody>		
		</table>		
		
		<!-- LVL 3 MODAL WINDOW -->
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
	
			// Packaging Dimensions & Weight (?)
			$length = '25';
			$width = '24';
			$height  = '23';
			$weight = '22';			
	
			// Documentation
			$documentArray = array('OnyxFiles.docx', 'dropTestPassed.pdf', 'Test.test' );		
			
			// Comments
			$comments = 'This is a sample comment';
		?>
		
		<!-- Modal -->
		<div class="modal fade" id="detailLvl3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<!-- modal window title and img -->
				<img class="pull-left modalWindowIcon" src=<?php echo '/img/'.$iconFileName.'.png' ?> >
				<h4 class="modal-title" style="text-align:center" id="myModalLabel">
				<strong> <?php echo $SKUdetail.': </strong>'.$SKUcolumnSelected ?>
				</h4> 
				<h4 style="text-align: center" > Status: <i <?php echo 'class='.$detailClass.'>'.$detailStatus ?> </i></h4>				
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
				
				<!-- if packaging information exists -->
				<?php
					if( isset($length)){
						echo '<p><strong>Packaging Dimensions:  </strong>'.$length.'L x '.$width.'W x '.$height.'H </p>';						
					}
					
					if (isset($weight)){
						echo '<p><strong>Finished Good Weight:  </strong>'.$weight.'lbs</p>';
						echo '<hr>';
					}				
				?>				
				
				<h4> <u>Documentation </u> </h4>
				<ul><?php
					 for($i = 0; $i< count($documentArray); $i++){
						echo '<li>'.$documentArray[$i].'</li>';
					} ?>				
				</ul>
				
				<hr>
				
				<h4> <u>Comments: </u> </h4>
					<?php
						echo $comments;
					?>
					
				<br><br>

			  </div><!-- end of modal Body -->
			  
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			  
			  
			</div>
		  </div>
		</div>
		<!-- end of Sample modal -->
		
		
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
