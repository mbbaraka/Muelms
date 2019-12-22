			<div class="card-header">
				<h5 class="card-title text-center">Assign Roles to Staff</>
			 </div><br>
			 <table id ="muelms_table" class="table table-responsive table-hover col-lg-12">
				<thead>
					<tr>
						<th>S/n</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Designation</th>
						<th>Department</th>
						<th>Role</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Mark</td>
						<td>Bright</td>
						<td>Academics</td>
						<td>Nursing</td>
						<td>
							<select class="form-control">
								<option>Select Role</option>
								<option>Head of Department</option>
								<option>Human Resource</option>
								<option>University Secretary</option>
							</select>
						</td>
						<td>
							<form method="post" action="process.php">
							<input type="hidden" name="staff_id" value="">
							<button class="btn btn-outline-primary" name="assign-role">Assign</button>
							</form>
						</td>
					</tr>
				</tbody>
			</table>