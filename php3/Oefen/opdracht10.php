<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<h1>opdracht_10</h1>

    <?php
     echo "<h1>code 1</h1>";
      /*   class User {
          protected $_username;

            public function __construct($name) {
              $this->_username = $name;
          }

          public function getUsername() {
              return $this->_username;
          }
      }
      $class = new User;
      $class->getUsername();*/

      echo "<h1>code 2</h1>";
      /*  class User {
      protected $_username;

        public function __construct($name) {
          $this->_username = $name;
      }

      public function getUsername() {
          return $this->_username;
      }
    }

      class Customer extends User {
          private $_customerId;

          public function __construct($username, $customerId) {
              $this->_username = $username;
              $this->_customerId = $customerId;
          }
      }

      $customer = new Customer('jan', 1);
      echo $customer->getUsername();*/

    echo "<h1>code 3</h1>";

      /*class User {
      protected $_username;

        public function __construct($name) {
          $this->_username = $name;
      }

      public function getUsername() {
          return $this->_username;
      }
  }

  class Customer extends User {
      private $_customerId;

      public function __construct($username, $customerId) {
          $this->_username = $username;
          $this->_customerId = $customerId;
      }

      public function getUsername() {
          return 'De gebruikersnaam is: '.$this->_username;
      }
  }

  $customer = new Customer('jan', 1);
  echo $customer->getUsername();*/
  echo "<h1>code 4</h1>";

    class User {
      protected $_username;

        public function __construct($name) {
          $this->_username = $name;
      }

      public function getUsername() {
          return $this->_username;
      }
  }

  class Customer extends User {
      private $_customerId;

      public function __construct($username, $customerId) {
          $this->_username = $username;
          $this->_customerId = $customerId;
      }

      public function getUsername() {
          if($this->_username == 'jan') {
              return parent::getUsername();
          }
          else {
              return 'De gebruikersnaam is: '.$this->_username;
          }
      }
  }

  $jan = new Customer('jan', 1);
  $inge = new Customer('inge', 2);

  echo $jan->getUsername(). '<br />' .$inge->getUsername();

    echo "<h1>alle codes getest</h1>";




     ?>
  </body>
</html>
