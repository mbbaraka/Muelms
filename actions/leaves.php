			<?php $main_title = "Leave Manager"; ?>

			<div class="card-header">
				<h5 class="card-title text-center">Leaves Management</h5>
			 </div>
			<div class="card-body">
				<div class="row">
					<div class="col-lg-7">
						<table class="table table-responsive table-hover">
							<thead>
								<tr>
									<th>S/n</th>
									<th>Leave Type</th>
									<th colspan="3">Entitled Number of Days per Year</th>
									<th>Action</th>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td>Academics</td>
									<td>Support</td>
									<td>Administrative</td>
								</tr>
							</thead>
							<tbody>
							<?php 
							$select_leaves = $db_con->query("SELECT * FROM leaves_tb");
							$Sn = 1; //Serial Number
							if ($select_leaves->num_rows > 0) {
								while ($rows = $select_leaves->fetch_object()) {
							?>
								<tr>
									<td><?php echo $Sn; ?></td>
									<td><?php echo $rows->leave_type; ?></td>
									<td><?php echo $Sn; ?></td>
									<td>100</td>
									<td>100</td>
									<td>
										<div class="btn-group btn-group-toggle" data-toggle = "buttons">
											<label data-toggle="modal" data-target="#admin_edit_leave_type" class="btn btn-light" style="cursor:pointer;"><i data-toggle ="tooltip" title="Edit" class="fa fa-pencil-alt text-primary"></i></label>
											<label class="btn btn-light" style="cursor:pointer;"><i data-toggle ="tooltip" title="Delete" class="fa fa-trash text-danger"></i></label>
										</div>
									</td>
								</tr>
								<?php $Sn++; }} ?>
							</tbody>

						</table>
					</div>
					<div class="col-lg-5">
						<div class="card">
							<div class="card-header">
								<div class="card-title">
									<h5 class="text-center">Add new Leave Type</h5>
								</div>
							</div>
							<div class="card-body">
								<form method="post" action="process.php">
									<div class="form-group">
										<label for="leave_type">Leave Type</label>
										<input type="text" name="leave_type" class="form-control">
									</div>
									<div class="form-group">
										<label for="designation">Select Designation</label>
										<select class="form-control" name="designation">
											<option>All</option>
											<option>Academics</option>
											<option>Administrative</option>
											<option>Support</option>
										</select>
									</div>
									<div class="form-group">
										<label for="leave_type">Allowed Number of Days</label>
										<input type="number" name="number_days" class="form-control">
									</div>
									<button class="container btn btn-primary" type="submit" name="new_leave">Add</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>