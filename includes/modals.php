<!--- Univesity Secretary View Modal ---->
<div class="modal fade show" id="us_view_form">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<div class="modal-title">
					<h5>Leave Application Application</h5>
				</div>
			</div>
			<div class="modal-body">
				<p>This is the leave application form as viewed by the university secretary</p>
			</div>
			<div class="modal-footer justify-content-between">
				<button class="btn btn-dark">Print Form</button>
				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>


<!--- Univesity Secretary accept leave Modal ---->
<div class="modal fade show" id="us_accept">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="modal-title">
					<h5>Approve Leave Application</h5>
				</div>
			</div>
			<div class="modal-body">
				<p>Any reason for Approving Leave?</p>
				<form>
					<div class="form-group">
						<textarea class="form-control">
							
						</textarea>
					</div>
			</div>
			<div class="modal-footer justify-content-between">
				<button class="btn btn-success">Approve</button>
				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</form>
		</div>
	</div>
</div>

<!--- Univesity Secretary delete leave Modal ---->
<div class="modal fade show" id="us_reject">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="modal-title">
					<h5>Reject Leave Application</h5>
				</div>
			</div>
			<div class="modal-body">
				<p>Any reason for Rejecting Leave?</p>
				<form>
					<div class="form-group">
						<textarea class="form-control">
							
						</textarea>
					</div>
			</div>
			<div class="modal-footer justify-content-between">
				<button class="btn btn-danger">Reject</button>
				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</form>
		</div>
	</div>
</div>

<!--- Univesity Secretary accept leave which was once rejcted Modal ---->
<div class="modal fade show" id="us_accept_again">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="modal-title">
					<h5>Approve Leave Application</h5>
				</div>
			</div>
			<div class="modal-body">
				<h5>You have considered Accepting this leave</h5>
				<p>Any reason for Accepting Leave?</p>
				<form>
					<div class="form-group">
						<textarea class="form-control" placeholder="Should not exceed 100 words">
							
						</textarea>
					</div>
			</div>
			<div class="modal-footer justify-content-between">
				<button class="btn btn-success">Approve</button>
				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</form>
		</div>
	</div>
</div>

<!--- Univesity Secretary delete leave which was rejected Modal ---->
<div class="modal fade show" id="us_ignore">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="modal-title">
					<h5>Ignore Rejected Leave Form</h5>
				</div>
			</div>
			<div class="modal-body">
				<p>You will not see this application again!! Select Ignore to Continue</p>
				<form>
			</div>
			<div class="modal-footer justify-content-between">
				<button class="btn btn-danger">Ignore</button>
				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</form>
		</div>
	</div>
</div>












<!--Modals for Leave Application Edit --->
<div class="modal fade show" id="leave_application_edit">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<div class="modal-title">
					<h5>Edit Your Leave Application</h5>
				</div>
			</div>
			<div class="modal-body">
				<form class="container">
				<div class="form-group">
					<div class="row">
						<label class="col-lg-4" for="leave type">Select Leave Type</label>
						<select class="form-control col-lg-8" name="leave_type">
							<option>Sick Leave</option>
							<option>Annual Leave</option>
							<option>Maternal Leave</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						 <label class="col-lg-4" for="leave start date">Select When Leave Should start</label>
						 <input type="date" name="leave_start_date" class="form-control col-lg-8">
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						 <label class="col-lg-4" for="number_of_days">Number of days to be taken</label>
						 <input type="number" name="leave_duration" class="form-control col-lg-8">
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						 <label class="col-lg-4" for="leave_end_date">Your Leave will end on</label>
						 <input type="date" name="leave_end_date" class="form-control col-lg-8">
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						 <label class="col-lg-4" for="leave_reason">Reason for Leave</label>
						 <textarea class="form-control col-lg-8" name="leave_reason">
						 	
						 </textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						 <label class="col-lg-4" for="address_on_leave">Contact Address while on Leave</label>
						 <input type="text" name="address_on_leave" class="form-control col-lg-8">
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						 <label class="col-lg-4" for="person_responsible">Person to be responsible while on Leave</label>
						 <input type="text" name="person_responsible" class="form-control col-lg-8">
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						 <label class="col-lg-4" for="signature">Applicant's Signature</label>
						 <input type="text" name="signature" class="form-control col-lg-8">
					</div>
				</div>
			</div>
			<div class="modal-footer justify-content-between">
				<button class="btn btn-success" type="submit" name="edit_application">Submit Application</button>
				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</form>
		</div>
	</div>
</div>


<!--- delete pending leave modal by the staff -->
<div class="modal fade show" id="leave_application_delete">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="modal-title">
					<h5>Delete Leave Application</h5>
				</div>
			</div>
			<div class="modal-body">
				<p>Are you sure you want to delete this leave?</p>
				<form>
			</div>
			<div class="modal-footer justify-content-between">
				<button class="btn btn-danger">Ignore</button>
				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</form>
		</div>
	</div>
</div>

<!-- Select Login type modal --->

<div class="modal fade show" id="select-login">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-body">
			  <form method="post" action="processor.php">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="username">Password</label>
                  <input type="password" name="username" class="form-control" required>
                </div>
                <input type="submit" name="other_login" value="Login" class="container btn btn-primary">
              </form> 
            </div>
		</div>
	</div>
</div>