<?php
	/**
	* 
	*/
	class customer{
		private $name;
		private $email;
		private $contact_number;
		private $product;
		private $amount_order;
		private $total_price;
		private $country;
		private $address;
		private $locality;
		
		function getName(){
			return $this->$name;
		}
		function getEmail(){
			return $this->$email;	
		}
		function getContactNumber(){
			return $this->$contact_number;	
		}
		function getProduct(){
			return $this->$product;
		}
		function getAmountOrder(){
			return $this->$amount_order;
		}
		function getTotalPrice(){
			return $this->$total_price;
		}
		function getCountry(){
			return $this->$country;
		}
		function getAddress(){
			return $this->$address;
		}
		function getLocality(){
			return $this->$local();
		}
		//setters
		function __set($name,$value){
			switch ($name) {
				case 'name':
					$this->name = $value;
					break;
				case 'email':
					$this->email = $value;
					break;
				case 'contact_number':
					$this->contact_number = $value;
					break;
				case 'product':
					$this->product = $value;
					break;
				case 'amount_order':
					$this->amount_order = $value;
					break;
				case 'total_price':
					$this->total_price = $value;
					break;
				case 'country':
					$this->country = $value;
					break;
				case 'address':
					$this->address = $value;
					break;
				case 'locality':
					$this->locality = $value;
					break;
			}
		}

		function display_info(){
			echo "<br>Name: ";
			echo $this->name;
			echo "<br>Email: "; 
			echo $this->email;
			echo "<br>contact: ";
			echo $this->contact_number;
			echo "<br>Product: ";
			echo $this->product;
			echo "<br>Amount order: ";
			echo $this->amount_order;
			echo "<br>Total price: ";
			echo $this->total_price;
			echo "<br>Country: ";
			echo $this->country;
			echo "<br>Address: ";
			echo $this->address;
			echo "<br>Locality: ";
			echo $this->locality;
			echo "<br>";
		}
	}
?>