<?php namespace Niceweb\Shopping\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Products extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController'
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'shopping' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Niceweb.Shopping', 'main-shopping', 'shopping-products');
    }
}
