<?php
class ProductsController extends AppController {
	public $helpers = array('Html', 'Form');

	public function index() {
		$this->set('products', $this->Product->find('all'));
	}

	public function view($id = null) {
		$this->Product->id = $id;
		$this->set('product', $this->Product->read());
	}

	public function confirm() {
		if ($this->request->is('post')) {
			$keys = array_keys($this->request->data);
			$results = array();
			$subtotal = 0;
			foreach ($keys as $key) {
				$q = $this->Product->find('all', array('conditions' => array('Product.id =' => $key)));
				$subtotal = $subtotal + $q[0]['Product']['price'];
				array_push($results, $q);
			}
			$this->set('products', $results); 
			$this->set('subtotal', $subtotal); 
			$taxed = .0775 * $subtotal;
			$this->set('taxes', number_format($taxed, 2));
			$this->set('grandtotal', number_format($subtotal + $taxed, 2));
		}
	}
}
