<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Basecontroller extends Controller
{
  protected $result;

  public function __construct()
  {
    $this->result + 0;
  }

  public function plus($num)
  {
    $this->result = $num + 5;
    return $this->result;
  }
}