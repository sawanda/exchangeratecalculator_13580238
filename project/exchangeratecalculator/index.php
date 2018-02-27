<!DOCTYPE html>
	<html>
	<head>
		<title>Calculator</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		  <script type="text/javascript" src="js/bootstrap.min.js"></script>
		  <script  src="js/bootstrap-select.js"></script>
	</head>
	<body>

		<!-- <form action="calculate-result.php" method="post">
			<label>จำนวนเงินไทย</label>
			<input type="text" name="thb">
			<label>สกุลเงินที่ต้องการคำนวณ</label>
			<select name="type">
				<option value="usd">USD</option>
				<option value="jyp">JYP</option>
				<option value="krw">KRW</option>
				<option value="gbp">GBP</option>
				<option value="eur">EUR</option>
			</select>

				<!-- <button type="submit">Calculate</button> -->
				
		<!-- </form>  -->
		<div class="container">

			<form  action="calculate-result.php" method="post" >
				  <div class="form-group">
				  	<p style="height:50px; font-size :30px; font-color:#75BDDB;">Exchange Calculate (อัตราแลกเปลี่ยนเงินไทย)</p>
				  	<br>
				    <label>จำนวนเงินไทย</label>
				    <input type="text" name="thb" class="form-control">

				    <div class="alert alert-danger alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong></strong> กรุณากรอกจำนวนเงินเป็นตัวเลขเท่านั้น
  </div>

				  </div>
				  <div class="form-group">

				    <label>สกุลเงินที่ต้องการคำนวณ</label>
				    
				  </div>

				  <div class="row">
					  <div class="col-xs-3">
					    <div class="form-group">
					      <select class="selectpicker form-control" name="type" >
					      	<!-- <select  name="type" class="selectpicker" id="exampleselect1"> -->
					        <option value="usd" data-icon="usd">USD</option>
							<option value="jyp" data-icon="jyp">JYP</option>
							<option value="krw" data-icon="krn">KRW</option>
							<option value="gbp" data-icon="gbp">GBP</option>
							<option value="eur" data-icon="eur">EUR</option>
					      </select>

					    </div>
					  </div>
					</div>

					
					

  					<br>
				  
				  <button type="submit" class="btn btn-info">คำนวณเงิน</button>
				  <br><br>
				 <a href="https://www.bot.or.th/thai/_layouts/application/exchangerate/exchangerate.aspx"> <button type="button" class="btn btn-warning">ดูอัตราการแลกเปลี่ยนเงินตรา</button></a>
				 
	</form>
</div>

	</body>
</html>


