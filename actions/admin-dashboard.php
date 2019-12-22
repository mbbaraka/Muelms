<?php
	$date = date('d/m/Y');
	$username = $_SESSION['admin-user'];
	$select = "SELECT * FROM admin_tb WHERE username = '".mysqli_escape_string($db_con, $username)."'";
	$result = mysqli_query($db_con, $select);
	$row = mysqli_fetch_assoc($result);
	?>
		<div class="card-header">
			<small class="breadcrumb-item">You are here <a href="#">Home</a></small>
			<small class="btn btn-outline-info float-right"><?php echo $date; ?></small>
			<h4 class="card-title text-center">Dashboard</h4>
		</div>
		<div class="card-body">
			<fieldset>
				<legend>Quick Stats</legend>
				<div class="row">
			        <div class="col-lg-4">
			            <div class="bg-primary p-3 card">
			                <h3 class="text-light"> Registered Staff </h3>
			                <div class="">
			                    <div class="row">
			                    	<div class="icon col-lg-4">
			                        	<i class="fas fa-users"></i>
			                    	</div>
			                        <div class="col-lg-8 text-right">
			                        	<div class="figure">114</div>
				                        <div class="">
				                            <span class="desc">From last month</span><br>
				                            <a href="#" class="text-light link"><span>View All</span></a>
				                        </div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			        <div class="col-lg-4">
			            <div class="bg-info p-3 card">
			                <h3 class="text-light"> Leave Applications </h3>
			                <div class="">
			                    <div class="row">
			                    	<div class="icon col-lg-4">
			                        	<i class="fas fa-list-alt"></i>
			                    	</div>
			                        <div class="col-lg-8 text-right">
			                        	<div class="figure">114</div>
				                        <div class="">
				                            <span class="desc">Taken this year</span><br>
				                            <a href="#" class="text-light link"><span>View All</span></a>
				                        </div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			        <div class="col-lg-4">
			            <div class="bg-success p-3 card">
			                <h3 class="text-light"> Registered Staff </h3>
			                <div class="">
			                    <div class="row">
			                    	<div class="icon col-lg-4">
			                        	<i class="fas fa-users"></i>
			                    	</div>
			                        <div class="col-lg-8 text-right">
			                        	<div class="figure">114</div>
				                        <div class="">
				                            <span class="desc">From last month</span><br>
				                            <a href="#" class="text-light link"><span>View All</span></a>
				                        </div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
				</div>
				<hr>
				<div class="row">
					<div class="col-lg-6">
		                <div class="card">
		                    <div class="card-header">
		                        <div class="card-title">
		                        	<h5><i class="fa fa-bell">&nbsp</i>Recent Nofitications</h5>
		                        </div>
		                    </div>
		                    <div class="card-body">
		                    	<div class="alert alert-success">
		                    		<p>Your sick leave has been rejected .....more</p>
		                    		<small class="">20 mins ago</small>
		                    	</div>
		                    	<div class="alert alert-success">
		                    		<p>Your sick leave has been rejected .....more</p>
		                    		<small class="">20 mins ago</small>
		                    	</div>
		                    	<div class="alert alert-success">
		                    		<p>Your sick leave has been rejected .....more</p>
		                    		<small class="">20 mins ago</small>
		                    	</div>
		                    	<div class="alert alert-success">
		                    		<p>Your sick leave has been rejected .....more</p>
		                    		<small class="">20 mins ago</small>
		                    	</div>
		                    </div>
		                </div>
		            </div>
					<div class="col-lg-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Recent Applications Taken</h5>
							</div>
							<div class="card-body bg-dark">
								<table class="table table-dark table-hover">
								<thead>
									<tr>
										<th>S/n</th>
										<th>First Name</th>
										<th>Department</th>
										<th>Designation</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Baraka</td>
										<td>Nursing</td>
										<td>Support</td>
									</tr>
									<tr>
										<td>1</td>
										<td>Baraka</td>
										<td>Nursing</td>
										<td>Support</td>
									</tr>
									<tr>
										<td>1</td>
										<td>Baraka</td>
										<td>Nursing</td>
										<td>Support</td>
									</tr>
									<tr>
										<td>1</td>
										<td>Baraka</td>
										<td>Nursing</td>
										<td>Support</td>
									</tr>
									<tr>
										<td>1</td>
										<td>Baraka</td>
										<td>Nursing</td>
										<td>Support</td>
									</tr>
									<tr>
										<td>1</td>
										<td>Baraka</td>
										<td>Nursing</td>
										<td>Support</td>
									</tr>
									<tr>
										<td>1</td>
										<td>Baraka</td>
										<td>Nursing</td>
										<td>Support</td>
									</tr>
								</tbody>
							</table>
							</div>
							<div class="card-footer">
								<a href="#" class="text-dark"><span>View All Applications</span></a>
							</div>
						</div>
					</div>
				</div>
			</fieldset>
		</div>