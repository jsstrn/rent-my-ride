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
						<p>&nbsp;&nbsp; License plate number</p>
						<h5>Payment details</h5>
						<p>&nbsp;&nbsp; Hourly rate</p>
						<p>&nbsp;&nbsp; Number of hours</p>
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
				<script src="/rentmyride/theme/Cakestrap/js/paypal-button.min.js?merchant=DQPBZRHZUP7C8" 
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

<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
<input type="hidden" name="cmd" value="_s-xclick">
<table>
<tr><td><input type="hidden" name="on0" value="Insurance">Insurance</td></tr><tr><td><select name="os0">
    <option value="Normal coverage">Normal coverage $50.00 SGD</option>
    <option value="Premium coverage">Premium coverage $100.00 SGD</option>
    <option value="Malaysia">Malaysia $200.00 SGD</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="SGD">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIIEQYJKoZIhvcNAQcEoIIIAjCCB/4CAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYCC8tP19DG/yNu58e/yVCNjPjZvdNSBZQI0ItIu3bLwz9o5H/mT9fLjcP8TLVizFyZwDAabZJ33nnI+kV+7CeLiqMNZ3PEheo6DXyGJKxuopEce0CikRz9j3ggvMyIyRtLaS+5Jb2QSJcghTeKBift0qHk85v/5OEI9jgaxP2nfnTELMAkGBSsOAwIaBQAwggGNBgkqhkiG9w0BBwEwFAYIKoZIhvcNAwcECKVmjLtZRKfUgIIBaCT3zEtI0DJxcF2woKA+0IlvF7XjZJuAOkfDZCITKDMlGEWbw73DMoZbYyq+u7uagMWw4UU1BvaRlo4hsHIfJK6xHyIXSS4sgW5C36qi4cVEc/mbSxV3F6A41kZi8ZHISXobM0hmTb9MD3IciCY8flKTgv80adY+AheNOxGYctvuUyycvFTLrT8TTgzX/8pnLqjYdne/6xL5ssZmpgeHzDfBogCKaZiRJce8dgxpfaZ9qKM9+x2qbgSFYqYxQzojIvt0CI4/LnlmrCaDIpZaRLq3WYPmfYBJy6YLuJy+8ewMr8bpSrI8eIywmbiLl5GFvzoP13MyFuA4MIgZf4Vqr18KGp+jesa0uV70pJ8pLXp66CN1lul8V5M6kTidRJ87+tAiDx7MoM8NL7D1wAclQkVmvz+oMoai6nAGmZabNpAE4jkEKhu9Omrk5A7Wx8BYzAtg3Di18FA0FqzFbsVA7uQnCevIAocOKqCCA4cwggODMIIC7KADAgECAgEAMA0GCSqGSIb3DQEBBQUAMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbTAeFw0wNDAyMTMxMDEzMTVaFw0zNTAyMTMxMDEzMTVaMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbTCBnzANBgkqhkiG9w0BAQEFAAOBjQAwgYkCgYEAwUdO3fxEzEtcnI7ZKZL412XvZPugoni7i7D7prCe0AtaHTc97CYgm7NsAtJyxNLixmhLV8pyIEaiHXWAh8fPKW+R017+EmXrr9EaquPmsVvTywAAE1PMNOKqo2kl4Gxiz9zZqIajOm1fZGWcGS0f5JQ2kBqNbvbg2/Za+GJ/qwUCAwEAAaOB7jCB6zAdBgNVHQ4EFgQUlp98u8ZvF71ZP1LXChvsENZklGswgbsGA1UdIwSBszCBsIAUlp98u8ZvF71ZP1LXChvsENZklGuhgZSkgZEwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tggEAMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQEFBQADgYEAgV86VpqAWuXvX6Oro4qJ1tYVIT5DgWpE692Ag422H7yRIr/9j/iKG4Thia/Oflx4TdL+IFJBAyPK9v6zZNZtBgPBynXb048hsP16l2vi0k5Q2JKiPDsEfBhGI+HnxLXEaUWAcVfCsQFvd2A1sxRr67ip5y2wwBelUecP3AjJ+YcxggGaMIIBlgIBATCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwCQYFKw4DAhoFAKBdMBgGCSqGSIb3DQEJAzELBgkqhkiG9w0BBwEwHAYJKoZIhvcNAQkFMQ8XDTE0MDExODA2Mzg1MFowIwYJKoZIhvcNAQkEMRYEFPv7HBzH+JWLz5A2wWJVmz3uXCXUMA0GCSqGSIb3DQEBAQUABIGAaKzouLQ4M9INs07qJle+C1QZ9qkLhSzVjPQTjQbk89LPMKvKGA5WNmX1juZcDtRFwUJVhSnkpwGuRIgFezNYV9Nu/xE2Drdkeg7VIZb9QICZN3FkD0Gak7OphrDZwCVxehFCYx0/85/yN3bWtTSuKatcy/pljFQ8H8UWIpCh+5Y=-----END PKCS7-----">
<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>

