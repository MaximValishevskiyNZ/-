<?php

class dbh 
   {
   
   protected function connect() {
      return new PDO('mysql:server=localhost;dbname=form', 'root', '');
   }
   
  
}