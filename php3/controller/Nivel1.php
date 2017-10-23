<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Nivel1
 *
 * @author ivan
 */
class Nivel1 {
      public function index() {
      if (!isset($_SESSION["nivel"])){
            $_SESSION["nivel"] = 0000;
      }
      }
}
