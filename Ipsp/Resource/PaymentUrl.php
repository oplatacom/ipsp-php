<?

/**
 * Class Ipsp_Resource_PaymentUrl
 */
class Ipsp_Resource_PaymentUrl extends Ipsp_Resource{

    protected $path   = '/checkout/url';

    protected $fields = array(
        'merchant_id'=>array(
            'type'    => 'string',
            'required'=>TRUE
        ),
        'order_id'=>array(
            'type'    => 'string',
            'required'=>TRUE
        ),
        'order_desc'=>array(
            'type' => 'string',
            'required'=>TRUE
        ),
        'currency' => array(
            'type' => 'string',
            'required'=>TRUE
        ),
        'amount' => array(
            'type' => 'integer',
            'required'=>TRUE
        ),
        'signature' => array(
            'type' => 'string',
            'required'=>TRUE
        )
    );

    public function redirectToCheckout(){

        print_r($this->getResponse()->checkout_url);

        $this->getResponse()->redirectTo('checkout_url');


    }

}