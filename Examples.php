<?php
//1) Single Level Inheritance
  class A {
      public function printItem($str) {
          echo "Hi : $str ";
      }
      public function printPHP() {
          echo "I am From WWE <br/>";      
      }

}

class B Extends A {
    public function printItem($str) {
        echo "Hi : $str";
    }
    public function printPHP() {
        echo "I am From UFC";
    }

}

$superstar = new A();
$fighter = new B();

$superstar->printItem('Roman Reigns');
$superstar->printPHP();

$fighter->printItem('Brock Lesnar');
$fighter->printPHP();
 
//Output Hi : Roman Reigns I am From WWE
Hi : Brock Lesnar I am From UFC

class A {
      public function printItem($str) {
          echo "Hi : $str ";
      }
      public function printPHP() {
          echo "I am From WWE <br/>";      
      }

}

class B Extends A {
    public function printPHP() {
        echo "I am From UFC";
    }

}

$superstar = new A();
$fighter = new B();

$superstar->printItem('Roman Reigns');
$superstar->printPHP();

$fighter->printItem('Brock Lesnar');
$fighter->printPHP();

//Output Hi : Roman Reigns I am From WWE
Hi : Brock Lesnar I am From UFC

//2) MultiLevel Inheritance

class MA {

  public function age() {
    echo "Class A age is 89 <br/>";
  }

}

class MB extends MA {
  public function sonage() {
    echo "Class B age is 50 <br/>";
  }

}

class MC Extends MB {
  public function grandsonage() {
    echo "Class C age is 20";
  }
  
  public function ageHistory() {
      $this->age();
      $this->sonage();
      $this->grandsonage();
  }

}

//MultiLevel Inheritance
$multi_obj = new MC();
$multi_obj->ageHistory();

// Output : Class A age is 89 Class B age is 50 Class C age is 20

?>
