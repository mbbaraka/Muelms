			 <?php $min = date("Y-m-d"); ?>
			 <div class="card-header">
				<h5 class="card-title text-center">Leave Application Form</>
			 </div><br>
			<div class="card-body">
				<form class="container">
					<div class="form-group">
						<div class="row">
							<label class="col-lg-4" for="leave type">Select Leave Type</label>
							<select class="form-control col-lg-8" name="leave_type">
								<option>--Select Leave Type--</option>
								<option>Sick Leave</option>
								<option>Annual Leave</option>
								<option>Maternal Leave</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							 <label class="col-lg-4" for="leave start date">Select When Leave Should start</label>
							 <input type="date" name="leave_start_date" class="form-control col-lg-8" id="start" min="<php echo $min; ?>" onchange="setSecondDate();" >
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							 <label class="col-lg-4">Duration of Leave</label><br>
        					<input type='number' name='duration' required class='form-control col-lg-8' id='duration'>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							 <label class="col-lg-4" for="leave_end_date">Your Leave will end on</label>
							 <input type="date" name="leave_end_date" class="form-control col-lg-8" readonly>
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
					<hr>
					<div class="form-group float-right">
						<div>
							<button class="btn btn-outline-success" type="submit">Submit Application</button>
						</div>
					</div>
				</form>
			</div>