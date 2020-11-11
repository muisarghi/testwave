<html>
<head>
<link rel="stylesheet" href="asset/css.css" type="text/css" media="screen">
<link rel="stylesheet" href="asset/css/bootstrap.css" type="text/css" media="screen">
<script src="asset/js/jquery.js"></script>
</head>

<body>

<div class="container" style="margin-top: 100px; margin-left: 10%; margin-right: 10%;">
	<div class="row">
		<div class="col-sm" id="acolumn">
			<h3 class="ah3">
			General Information
			</h3>
			
			<form id="form1" method="post" action="index.php">
				<div class="form-group">
					<select class="form-control" name="mtitle" id="mtitle" 
						style="border-bottom: solid 1px #cccccc;"
					>
					  <option value="">Title</option>
					  <option value="Bussinesman">Bussinesman</option>
					  <option value="Secretary">Secretary</option>
					  <option value="Reporter">Reporter</option>
					  
					</select>
				</div>
				
				<div class="form-group">
				<div class="form-row">
					<div class="col">
					  <input type="text" class="form-control" placeholder="First name" id="mfirstname">
					</div>
					<div class="col">
					  <input type="text" class="form-control" placeholder="Last name">
					</div>
				</div>
				</div>

				<div class="form-group">
					<select class="form-control" id="position" 
						style="border-bottom: solid 1px #cccccc;"
					>	
					  <option>Position</option>
					  <option>Director</option>
					  <option>Manager</option>
					  <option>Employee</option>
					  
					</select>
				</div>
				
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Company">
				</div>
			

		</div>
		
		<div class="col-sm" id="bcolumn">
			<h3 class="bh3">
				Contact Details
			</h3>

			<div class="form-group">
				<input type="text" class="form-control" placeholder="Company">
			</div>
		
			<div class="form-group">
			<div class="form-row">
				<div class="col">
					<input type="text" class="form-control" placeholder="Zip Code">
				</div>
				<div class="col">
					<select class="form-control" id="position" 
						style="border-bottom: solid 1px #cccccc;"
					>	
					  <option>Place</option>
					  <option>Street</option>
					  <option>District</option>
					  <option>City</option>
					  
					</select>
				</div>
			</div>
			</div>
		
			<div class="form-group">
			<select class="form-control" id="all_country" 
			style="border-bottom: solid 1px #cccccc;"
			>		  
			</select>
			</div>

			<div class="form-group">
			<div class="form-row">
				<div class="col-md-4">
					<input type="text" class="form-control" placeholder=" Code">
				</div>
				<div class="col-md-8">
					<input type="text" class="form-control" placeholder="Phone Number">
				</div>
			</div>
			</div>
		
			<div class="form-group">
			<input type="text" class="form-control" placeholder="Email">
			</div>
		
			
			<div class="form-group">
				<div class="form-check">
				<input class="form-check-input" type="checkbox" id="gridCheck">
				<label class="form-check-label" for="gridCheck">
				I do accept the <b>Terms and Conditions</b> of your site.
				</label>
				</div>
			</div>
			</form>
			<button type="submit" class="btn btn-primary" style="border-radius: 20px; width: 200px; background-color: #fff; color: #000000; font-weight: bold; border: solid 1px #fff;" 
			data-toggle="modal"
			data-target="#Mymodal"
			id="submitBtn"
			>Register</button>

			
		</div>
		
		

	</div>
</div>




<div class="modal fade" id="Mymodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Title</label>
            <input type="text" class="form-control" name="titles" id="titles" value="">
          </div>

		  <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" id="firstnames" name="firstnames" value="">
          </div>
         
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


<!-- <script>
$('#submitBtn').click(function() {
     $('#titles').text($('#mtitle').val());
     $('#firstnames').text($('#mfirstname').val());
});

$('#submit').click(function(){
    $('#form1').submit();
});

</script> -->

<script>
$(document).ready(function()
	{
	$('#Mymodal').on('show.bs.modal', function (event) 
		{
		var title = document.getElementById('mtitle');
		var firstname = document.getElementById('mfirstname');
		
		titles.addEventListener('input', function() {
		title.value = this.value;
		});
		
		firstnames.addEventListener('input', function() {
		firstname.value = this.value;
		});
		
        
		
		
    }
	);
</script>

<script>
$(document).ready(function(e) {
$("#all_country").click(function(){
$.ajax({
url:"https://restcountries.eu/rest/v2/all",
method:"get",
dataType:"json",
success: function(data, msg){
var text = "";
text+="<option value=''> Country </option>";
$.each(data, function(key, val){
text+="<option values="+val.alpha3Code+">"+val.name+"</option>";
});
$("#all_country").html(text);
},
error: function(msg){
console.table(msg);
}
})
});
});
</script>

<script src="asset/js/bootstrap.js" type="text/javascript"></script>
</body>

</html>