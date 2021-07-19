<?php 
include('header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
	header('location:news.php');
	die();
}
?>
<div class="container-fluid">
   <!-- DataTables Example -->
   <div class="card mb-3">
	  <div class="card-header">
		 <i class="fa fa-fw fa-user"></i>
		 Student Table
	  </div>
	  <div class="card-body">
		 <div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			   <thead>
				  <tr>
					 <th>Name</th>
					 <th>City</th>
					 <th>Email</th>
				  </tr>
			   </thead>
			   <tfoot>
				  <tr>
					 <th>Name</th>
					 <th>City</th>
					 <th>Email</th>
				  </tr>
			   </tfoot>
			   <tbody>
				  <tr>
					 <td>Tamal Chakraborty</td>
					 <td>Howrah</td>
					 <td>tamal@gmail.com</td>
				  </tr>
				  <tr>
					 <td>Kuntal Bera</td>
					 <td>Kolkata</td>
					 <td>kuntal@gmail.com</td>
				  </tr>
			   </tbody>
			</table>
		 </div>
	  </div>
   </div>
</div>
<?php include('footer.php')?>