<?php error_reporting(0);?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Brevillel NPI</title>
	
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" >
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
		
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		
		<!-- for Table -->
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="tableSorter/jquery.tablesorter.js"></script> 
		<script src="tableSorter/jquery.tablesorter.widgets.js"></script>
		<link rel="stylesheet" href="tableSorter/themes/blue/style.css">	

		<!-- sidebar -->
		 <link href="css/simple-sidebar.css" rel="stylesheet">
		 
		
		<!-- To resize based on screen size -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">		
			
		<!-- for js Tree -->
		<link rel="stylesheet" href="jsTree/dist/themes/default/style.min.css" />
		<script src="jsTree/dist/jstree.min.js"></script>		
			
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
					
		th { text-align: center;}
		
		table.tablesorter { background-color: #D0DAE0; }

</style>
<style>
/* REQUIRED in CUSTOM THEMES!
 This is the only definition that MUST BE added to any custom themes.
 This is how rows are hidden by filtering (included in provided themes) */
.tablesorter .filtered {
  display: none;
}

</style>


<script>

$(document).ready(function() { 
        $("#myTable").tablesorter({

		theme: 'blue',
		widthFixed : true,
		widgets: ['filter', 'group'],
		ignoreCase: false,

		    widgetOptions : {

		      filter_childRows : false,
		      filter_childByColumn : false,
			  filter_hideFilters : true,
			  filter_cssFilter : "tablesorter-filter"
		    }
		       	
		}); 
		
}); // end of documentReady function

$(document).ready(function() { 
   $("#treeData").jstree({
		"plugins": ["checkbox"]
	
	}); 
});

		


</script>
	
</head>

<body style="background-color:#F9F8F6 ;">
    <div id="wrapper" class="toggled" >

        <!-- Sidebar -->
        <div id="sidebar-wrapper" style="background-color:black;">		
            <div style="color:white;"> <!--class =  sidebar- nav (?)-->
				<div class="text-center">
					<h2>Pick Columns:</h2>
					<hr>
						<a class="btn btn-default btn-sm" href="#"> Summary View </a>	
						<a class="btn btn-default btn-sm" href="#"> Detailed View   </a> 
						<br><br>
				</div>
			
				<div id="treeData" >
					<ul>
						<li data-jstree='{ "opened" : true }'>Work Instruction
							<ul >
								<li>Draft </li>
								<li>To be approved  </li>
								<li>Approved </li>
							</ul>
						</li>
						
						<li data-jstree='{ "opened" : true }'>ETL Certification
							<ul>
								<li>Section General </li>
								<li>Report Section </li>
								<li>Testing Section </li>
							</ul>
						</li data-jstree='{ "opened" : true }'>
						
						<li data-jstree='{ "opened" : true }'>Art Work
							<ul>
								<li>ETL Label Design </li>
								<li>Litho on FTP </li>
								<li>Litho Draft </li>
							</ul>
						</li>	
						<li data-jstree='{ "opened" : true }'>Packaging
							<ul>
								<li>Sample Received</li>
								<li>Drop Test Passed </li>
								<li>Drop Test Reviewed </li>
								<li>Part Names Created </li>
							</ul>
						</li>
						<li data-jstree='{ "opened" : true }'>FAR
							<ul>
								<li>Draft Criteria </li>
								<li>Criteria Finalized </li>
								<li>Report Completed </li>
							</ul>
						</li>
						<li data-jstree='{ "opened" : true }'>TRACS
							<ul>
								<li>Draft Criteria </li>
								<li>Criteria Finalized </li>
								<li>Verified and Translated </li>
							</ul>
						</li>



						
					</ul>
				</div>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
         <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

				<!-- BUTTONS: Expand and help -->
				<button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#info" aria-label="Left Align"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Help </button>
				
				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><span class="glyphicon glyphicon glyphicon-tasks" aria-hidden="true"></span> Expand </a>		
				<!-- end of buttons -->
		
				</div>
			</div> <!-- end of row1 -->
			
		<!-- LEGEND Modal -->
		<div class="modal fade" id="info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			
			  <div class="modal-header">			  
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>				
				<h4 class="modal-title" style="text-align:center" id="myModalLabel">
				<strong> Legend </strong>				</h4> 
			  </div>	<!-- end of header -->	  
			  
			  <div class="modal-body">					  
				<img style="text-align:center;" src="img/Legend.jpg" alt="Mountain View"> </img>

				
				
			  </div><!-- end of modal Body -->
			  
			  
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			  
			  
			</div>
		  </div>
		</div>
		<!-- end of LEGEND modal -->
		
		<hr>
		
		<!-- page data; table -->
		<div class="col-sm-12" >
		
		<h2 style="text-align:left; font-family:Helvetica, Arial;"> Breville NPI Status </h2>
		<table  id="myTable" class="tablesorter table table-striped table-bordered table-condensed hasFilters" role="grid">
		<thead id="theadId">
			<tr role="row" class="tablesorter-headerRow">
				<th class="filter-select">SKU</th>
				<th class="filter-match">Work Instruction </th>
				<th>ETL Certification </th>
				<th>Art Work </th>
				<th>Packaging </th>
				<th >FAR </th>
				<th >TRACS</th>
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
		
		
		</div>
		<!-- end of col-lg-12; table -->
		
		
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
		
		<!-- LVL 3 Detail -->
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
		<!-- end LVL 3 Detail modal -->
		
		<footer><hr>
		
		  <p style="text-align:left; font-family:Helvetica, Arial; "> © PRC Industries</p>
		  
		</footer>
		
		
                        
                    </div> <!-- end of  <div class="col-lg-12"> -->
                </div>
            </div>
		
		</div>     <!-- "container-fluid" -->
		</div> <!-- "page-content-wrapper" -->

	
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
	
	$.jstree.defaults.core.themes.icons = false;
	$('#treeData').jstree({
		"plugins" : [ "checkbox" ]
	
	
	});
	
	
	
    </script>

	
	
	
</body>

</html>
