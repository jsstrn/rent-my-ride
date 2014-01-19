<h2>Make Payment</h2>

<div class="row">
	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-md-8">
						<h5>Booking details</h5>
						<p>&nbsp;&nbsp; Date</p>
						<p>&nbsp;&nbsp; Time</p>
						<h5>Car details</h5>
						<p>&nbsp;&nbsp; Car brand</p>
						<p>&nbsp;&nbsp; License plate number</p>
						<h5>Payment details</h5>
						<p>&nbsp;&nbsp; Hourly rate</p>
						<p>&nbsp;&nbsp; Total hours booked</p>
						<p>&nbsp;&nbsp; Total (before GST)</p>
						<p>&nbsp;&nbsp; GST (7%)</p>
						<hr>
						<h4>Total</h4>
					</div>
					<div class="col-md-4 text-right">
						<h5>-</h5>
						<p><?php echo date('l, d F Y', $lastRecord['Event']['datetime_start']) ;?></p>
						<p><?php echo date('g:i a', $lastRecord['Event']['datetime_start']) . ' to ' . 
							date('g.i a', $lastRecord['Event']['datetime_end']) ;?></p>
						<h5>-</h5>
						<p><?php echo $lastRecord['Car']['brand'] ;?></p>
						<p><?php echo $lastRecord['Car']['license_plate'] ;?></p>
						<h5>-</h5>
						<p><?php echo '$' . $lastRecord['Car']['rate'] . '.00' ;?></p>
						<p><?php echo $lastRecord['Event']['interval'] . ' hours';?></p>
						<p><?php echo 'S$ ' . $english_format_number = number_format($amount, 2, '.', ',') ;?></p>
						<p><?php echo 'S$ ' . $english_format_number = number_format($gst, 2, '.', ',') ;?></p>
						<hr>
						<h4><?php echo 'S$ ' . $english_format_number = number_format($total, 2, '.', ',') ;?></h4>
						
					</div>
				</div>
			</div>
			<div class="panel-footer text-right">
				<script src="<?php echo $this->webroot . 'js/paypal-button.min.js?merchant=DQPBZRHZUP7C8' ;?>" 
				    data-button="buynow" 
				    data-name="Car Rental" 
				    data-quantity="1" 
				    data-amount="<?php echo $amount ;?>" 
				    data-currency="SGD" 
				    data-shipping="0" 
				    data-tax="<?php echo $gst ;?>"
				    data-callback="" 
				    data-env="sandbox"
				></script>
			</div>
		</div>
	</div>
</div>

