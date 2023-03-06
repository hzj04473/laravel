<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Acontroller extends Controller
{
  // 클래스 안에서만 쓸 수 있는 내부 함수
  protected $result;
  protected $basecontroller;

  // 내부 함수의 가본값을 설정하는 __construct
  // 서비스 controller
  public function __construct(Basecontroller $basecontroller)
  {
    $this->basecontroller = $basecontroller;
  }

  public function multiple($num)
  {
    $this->result += $this->basecontroller->plus($num) * 10;
    return $this->result;
  }
}