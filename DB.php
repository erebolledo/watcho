<?php
   class DB extends SQLite3 {
      function __construct() {
         $this->open('watchoDB');
      }
   }