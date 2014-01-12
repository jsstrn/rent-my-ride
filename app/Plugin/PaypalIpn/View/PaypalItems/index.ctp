<?php  //$this->Paypal->button(String tittle, Options array); 

    echo $this->Paypal->button('Pay Now', array('test' => true, 'amount' => '12.00', 'item_name' => 'test item'));
    echo $this->Paypal->button('Subscribe', array('test' => true, 'type' => 'subscribe', 'amount' => '60.00', 'term' => 'month', 'period' => '2'));
    echo $this->Paypal->button('Donate', array('test' => true, 'type' => 'donate', 'amount' => '60.00'));
    echo $this->Paypal->button('Add To Cart', array('test' => true, 'type' => 'addtocart', 'amount' => '15.00'));
    echo $this->Paypal->button('View Cart', array('test' => true, 'type' => 'viewcart', 'amount' => '15.00'));
    echo $this->Paypal->button('Unsubscribe', array('test' => true, 'type' => 'unsubscribe'));
    echo $this->Paypal->button('Checkout', array('test' => true, 
        'type' => 'cart',
        'items' => array(
            array('item_name' => 'Item 1', 'amount' => '120', 'quantity' => 2, 'item_number' => '1234'),
            array('item_name' => 'Item 2', 'amount' => '50'),
            array('item_name' => 'Item 3', 'amount' => '80', 'quantity' => 3),
        )
    ));