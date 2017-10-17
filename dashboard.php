<?php require_once 'includes/header.php'; ?>

<?php 

$sql = "SELECT * FROM product WHERE status = 1";
$query = $connect->query($sql);
$countProduct = $query->num_rows;

$orderSql = "SELECT * FROM orders WHERE order_status = 1";
$orderQuery = $connect->query($orderSql);
$countOrder = $orderQuery->num_rows;

$totalRevenue = "";
while ($orderResult = $orderQuery->fetch_assoc()) {
	$totalRevenue += $orderResult['paid'];
}

$lowStockSql = "SELECT * FROM product WHERE quantity <= 3 AND status = 1";
$lowStockQuery = $connect->query($lowStockSql);
$countLowStock = $lowStockQuery->num_rows;

$connect->close();

?>


<style type="text/css">
.ui-datepicker-calendar {
	display: none;
}
</style>

<!-- fullCalendar 2.2.5-->
<link rel="stylesheet" href="assests/plugins/fullcalendar/fullcalendar.min.css">
<link rel="stylesheet" href="assests/plugins/fullcalendar/fullcalendar.print.css" media="print">

<div class="row space-top">
	
	<div class="col-md-3">
		<div class="metric">
			<span class="icon"><i class="fa fa-download"></i></span>
			<p>
				<span class="number"><?php echo $countProduct; ?></span>
				<span class="title">Total Product</span>
			</p>
		</div>
	</div>
	<div class="col-md-3">
		<div class="metric">
			<span class="icon"><i class="fa fa-shopping-bag"></i></span>
			<p>
				<span class="number"><?php echo $countOrder; ?></span>
				<span class="title">Total Orders</span>
			</p>
		</div>
	</div>
	<div class="col-md-3">
		<div class="metric">
			<span class="icon"><i class="fa fa-eye"></i></span>
			<p>
				<span class="number"><?php echo $countLowStock; ?></span>
				<span class="title">Low Stock</span>
			</p>
		</div>
	</div>
	<div class="col-md-3">
		<div class="metric">
			<span class="icon"><i class="fa fa-bar-chart"></i></span>
			<p>
				<span class="number">
					<?php if($totalRevenue) {
						echo $totalRevenue;
					} else {
						echo '0';
					} ?>
				</span>
				<span class="title"> Total Revenue</span>
			</p>
		</div>
	</div>

	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading"> <i class="glyphicon glyphicon-calendar"></i> Calendar</div>
			<div class="panel-body">
				<div id="calendar"></div>
			</div>	
		</div>
	</div>

	<div class="col-md-2">
		<div id="headline-chart" class="ct-chart"></div>
	</div>
	<div class="col-md-4">
		<div class="weekly-summary text-right">
			<span class="number">2,315</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 12%</span>
			<span class="info-label">Total Sales</span>
		</div>
		<div class="weekly-summary text-right">
			<span class="number">$5,758</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 23%</span>
			<span class="info-label">Monthly Income</span>
		</div>
		<div class="weekly-summary text-right">
			<span class="number">$65,938</span> <span class="percentage"><i class="fa fa-caret-down text-danger"></i> 8%</span>
			<span class="info-label">Total Income</span>
		</div>
	</div>
</div> <!--/row-->
<!-- fullCalendar 2.2.5 -->
<script src="assests/plugins/moment/moment.min.js"></script>
<script src="assests/plugins/fullcalendar/fullcalendar.min.js"></script>


<script type="text/javascript">
	$(function () {
			// top bar active
			$('#navDashboard').addClass('active');

      //Date for the calendar events (dummy data)
      var date = new Date();
      var d = date.getDate(),
      m = date.getMonth(),
      y = date.getFullYear();

      $('#calendar').fullCalendar({
      	header: {
      		left: '',
      		center: 'title'
      	},
      	buttonText: {
      		today: 'today',
      		month: 'month'          
      	}        
      });


  });
</script>

<?php require_once 'includes/footer.php'; ?>