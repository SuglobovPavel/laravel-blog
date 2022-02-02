<?php 

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Services\Post\Service;

class BaseController extends Controller { 
   public $services;

   public function __construct(Service $servvice)
   {
      $this->service = $servvice;
   }
}