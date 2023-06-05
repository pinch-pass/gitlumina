<?php

define('_PS_ROOT_DIR_', '/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru');
define('_PS_ADMIN_DIR_', '/var/www/luminadecoshop.ru/data/www/luminadecoshop.ru/admin843ifpurg');

require(_PS_ADMIN_DIR_.'/../config/config.inc.php');
require(_PS_ADMIN_DIR_.'/functions.php');

class Employee2 extends EmployeeCore
{
  public function isSuperAdmin()
  {
    return true;
  }
  public function isLoggedBack()
  {
    return true;
  }
}

class AdminImagesController extends AdminImagesControllerCore
{
  function regenerate()
  {
    $this->_regenerateThumbnails('all', true);
  }
}


$context = Context::getContext();

$context->employee = new Employee2(1);
$aic = new AdminImagesController();

echo "Starting regeneration\n";
print_r("Start");
$aic->regenerate();
echo "Done regenerating\n";
?>                                                                              
