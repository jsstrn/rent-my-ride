# Paypal IPN plugin  (Paypal Instant Payment Notification)
* Version 4.0.0
* Author: Nick Baker (nick@webtechnick.com)
* Website: http://www.webtechnick.com

# Get it
* GIT: git@github.com:webtechnick/CakePHP-Paypal-IPN-Plugin.git

# Required:
CakePHP 2.x

Note: CakePHP 1.3 use the cakephp1.3 branch

# More From WebTechNick
http://github.com/webtechnick

# CHANGELOG:
* 1.0: Initial release
* 1.1: Added cleaner routes
* 2.0: Helper added
* 2.1: Added cake schema install script
* 2.2: Added paypal unsubscribe type
* 2.2.1: Bug fix with subscription issues
* 2.2.2: Fixed validation issues with paypal button in strict doctype
* 3.0: Added new basic Paypal IPN email capabality.
* 3.5 Added checkout feature for multiple items paypal button.  Documentation bellow
* 3.5.1: Renamed columns option_name_1 and option_name_2 to option_name1 and option_name2 respectively
* 3.5.2: Updating to latest conventions in CakePHP 1.3, no longer requires Auth, all cart items will be reviewable in paypal_items table
* 3.6.0: Adding View Cart button option
* 4.0.0: CakePHP 2.x ready.

# Install:
1. Copy plugin into your `app/Plugin/PaypalIpn` directory
2. Load the plugin in `bootstrap.php`

		CakePlugin::load('PaypalIpn');

2. Run the schema to create the required tables.

		$ cake schema create --plugin PaypalIpn
		
3. Add the following into your /app/Config/Routes.php file (optional):

		/* Paypal IPN plugin */
		Router::connect('/paypal_ipn/process', array('plugin' => 'paypal_ipn', 'controller' => 'instant_payment_notifications', 'action' => 'process'));
		/* Optional Route, but nice for administration */
		Router::connect('/paypal_ipn/:action/*', array('admin' => 'true', 'plugin' => 'paypal_ipn', 'controller' => 'instant_payment_notifications', 'action' => 'index'));
		/* End Paypal IPN plugin */
  
# Paypal Setup:
1. I suggest you start a sandbox account at https://developer.paypal.com
2. Enable IPN in your account.
  
## Administration: (optional) If you want to use the built in admin access to IPNs:
1. Make sure you're logged in as an Administrator via the Auth component.
2. Navigate to `www.yoursite.com/paypal_ipn`


## Paypal Button Helper: (optional) if you plan on using the paypal helper for your PayNow or Subscribe Buttons
1. Update `Config/paypal_ipn_config.php` with your paypal information
2. Add `PaypalIpn.Paypal` to your helpers list in `AppController.php`

		public $helpers = array('Html','Form','PaypalIpn.Paypal');
	
### Usage: (view the actual Plugin/PaypalIpn/View/Helper/PaypalHelper.php for more information)

		$this->Paypal->button(String tittle, Options array); 
	 
		$this->Paypal->button('Pay Now', array('amount' => '12.00', 'item_name' => 'test item'));
		$this->Paypal->button('Subscribe', array('type' => 'subscribe', 'amount' => '60.00', 'term' => 'month', 'period' => '2'));
		$this->Paypal->button('Donate', array('type' => 'donate', 'amount' => '60.00'));
		$this->Paypal->button('Add To Cart', array('type' => 'addtocart', 'amount' => '15.00'));
		$this->Paypal->button('View Cart', array('type' => 'viewcart', 'amount' => '15.00'));
		$this->Paypal->button('Unsubscribe', array('type' => 'unsubscribe'));
		$this->Paypal->button('Checkout', array(
			'type' => 'cart',
			'items' => array(
				array('item_name' => 'Item 1', 'amount' => '120', 'quantity' => 2, 'item_number' => '1234'),
				array('item_name' => 'Item 2', 'amount' => '50'),
				array('item_name' => 'Item 3', 'amount' => '80', 'quantity' => 3),
			)
		));
		
		//Test Example
		$this->Paypal->button('Pay Now', array('test' => true, 'amount' => '12.00', 'item_name' => 'test item'));
       
## Alternatively to Paypal Helper 
Instead of the Paypal Helper you can use your custom buttons but make sure to set notify_url to your configured route.

	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
		...
		<input type="hidden" name="notify_url" value="http://www.yoursite.com/paypal_ipn/process" />
		...
	</form>

It is generally recommened to use the paypal helper as it will generate everything for you based on your configurations

# Paypal Notification Callback:
Create a function in your `app/Controller/AppController.php` like so:

	function afterPaypalNotification($txnId){
		//Here is where you can implement code to apply the transaction to your app.
		//for example, you could now mark an order as paid, a subscription, or give the user premium access.
		//retrieve the transaction using the txnId passed and apply whatever logic your site needs.
		
		$transaction = ClassRegistry::init('PaypalIpn.InstantPaymentNotification')->findById($txnId);
		$this->log($transaction['InstantPaymentNotification']['id'], 'paypal');
		
		//Tip: be sure to check the payment_status is complete because failure 
		//     are also saved to your database for review.
		
		if ($transaction['InstantPaymentNotification']['payment_status'] == 'Completed') {
			//Yay!  We have monies!
		}	else {
			//Oh no, better look at this transaction to determine what to do; like email a decline letter.
		}
	} 
  
## Basic Email Feature:
Utility method to send basic emails based on a paypal IPN transaction.
This method is very basic, if you need something more complicated I suggest
creating your own method in the afterPaypalNotification function you build
in the `app_controller.php`

	$IPN = ClassRegistry::init('PaypalIpn.InstantPaymentNotification');
	$IPN->id = '4aeca923-4f4c-49ec-a3af-73d3405bef47';
	$IPN->email('Thank you for your transaction!');
	
	//OR passed in as an array of options
	$IPN->email(array(
		'id' => '4aeca923-4f4c-49ec-a3af-73d3405bef47',
		'subject' => 'Donation Complete!',
		'message' => 'Thank you for your donation!',
		'sendAs' => 'text'
	));

Hint: use this in your afterPaypalNotification callback in your `AppController.php`
   
	function afterPaypalNotification($txnId){
		ClassRegistry::init('PaypalIpn.InstantPaymentNotification')->email(array(
			'id' => $txnId,
			'subject' => 'Thanks!',
			'message' => 'Thank you for the transaction!'
		));
	}

### Email Options:
* id: id of instant payment notification to base email off of
* subject: subject of email (default: Thank you for your paypal transaction)
* sendAs: html | text (default: html)
* to: email address to send email to (default: ipn payer_email)
* from: from email address (default: ipn business)
* cc: array of email addresses to carbon copy to (default: array())
* bcc: array of email addresses to blind carbon copy to (default: array())
* layout: layout of email to send (default: default)
* template: template of email to send (default: null)
* log: boolean true | false if you'd like to log the email being sent. (default: true)
* message: actual body of message to be sent (default: null)