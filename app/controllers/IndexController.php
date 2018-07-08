<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 06/07/2018
 * Time: 07:53 PM
 */

class IndexController extends \Phalcon\Mvc\Controller

{
   public function indexAction()
   {
       echo '<h1> hello mostafa  <h1>';
   }
   public function registerAction($param)
{
    echo "register page =". $param;
}


}