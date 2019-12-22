			<div class="card-header">
				<h5 class="card-title text-center">Pending Leaves</>
			 </div><br>
			 <table id ="muelms_table" class="table table-responsive table-hover col-lg-12">
						<thead>
							<tr>
								<th>S/n</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Leave Type</th>
								<th>Department</th>
								<th>HOD Approval</th>
								<th>HR Approval</th>
								<th>View Form</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Mark</td>
								<td>Bright</td>
								<td>Sick Leave</td>
								<td>CIS</td>
								<td>Recommended</td>
								<td>Approved</td>
								<td><button class="btn btn-outline-info col-lg-12" data-toggle ="modal" data-target="#us_view_form"><i class="fa fa-eye"></button></i></td>
								<td>
									<div class="btn-group btn-group-toggle" data-toggle = "buttons">
										<label class="btn btn-outline-info" data-toggle="modal" data-target="#us_accept">
					                       <input type="radio" id="5" name="" checked="" autocomplete="off">
					                       Accept
					                    </label>
					                    <label class="btn btn-outline-danger" data-toggle="modal" data-target="#us_reject">
					                       <input type="radio" id="5" name="" checked="" autocomplete="off">
					                       Delete
					                    </label>
									</div>
								</td>
							</tr>
						</tbody>
					</table>