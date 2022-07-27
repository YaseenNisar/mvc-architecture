<?php
include "Book.php";

class Model{

public function getBookDetails(){

  		 return array(
  				"xyz"=>new Book('xyz', 'Yaseen', 'classic Book'),
  				"Jungle"=>new Book('Jungle', 'R.Kipling', 'A Classic Book')
  			);
}

		public function getBook($title){
			$allbooks=$this->getBookDetails();
			return $allbooks[$title];
		}

}

?>