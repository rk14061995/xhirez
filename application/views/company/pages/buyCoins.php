<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="//geodata.solutions/includes/countrystatecity.js"></script>

 <div class="container-fluid">
 	<div class="card shadow mb-4">
	    <div class="card-body">
	      	<!-- <form class="" action="<?=base_url('Agency/filterResumes')?>" method="post"> -->
		 		
	      		<label>Coins</label>
	      		<div class="row">
	      			<div class="col-md-4">
	      				<select class="form-control" name="coin_" id="coin_">
				 			<option>Select</option>
				 			<?php for($i=1; $i < 20; $i++): ?>
				 				<option value="<?=$i?>"><?=$i?></option>
				 			<?php endfor; ?>
				 		</select>
	      			</div>
	      			<div class="col-md-1">
	      				<input type="submit" name="" class="btn btn-info" value="Buy ">
	      			</div>
	      			<div class="col-md-1">
	      				<span id="coin_price"></span>
	      			</div>
	      		</div>
		 		
		 		
		 		
			<!-- </form> -->
	    </div>
	    <script type="text/javascript">
	    	$(document).on('change','#coin_',function(){
	    		var coin=$(this).val();
	    		$('#coin_price').text(' ₹ '+coin*500);

	    	});
	    </script>
	</div>
</div>
 <br>
