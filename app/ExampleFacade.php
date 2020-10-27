<?php

namespace App;

class ExampleFacade extends Facade
{
   protected static function getFacadeAccessor()
   {
       return 'example';
   }
}
