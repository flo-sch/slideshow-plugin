<?php

namespace Flosch\Slideshow\Controllers;

use Flash;
use Lang;
use BackendMenu;
use Backend\Classes\Controller;

use Flosch\Slideshow\Models\Slideshow;

/**
 * Slideshow Back-end Controller
 */
class Slideshows extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.RelationController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yml';
    public $relationConfig = 'config_relations.yml';
    public $listConfig = 'config_list.yml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Flosch.Slideshow', 'slideshow', 'slideshows');
    }

    public function index_onDelete()
    {
        $checkedIds = post('checked');

        if ((is_array($checkedIds)) && (count($checkedIds) > 0)) {
            $haveSlideshowsBeenDeleted = Slideshow::whereIn('id', $checkedIds)->delete();

            if (!$haveSlideshowsBeenDeleted) {
                return Flash::error('The slideshows have not been deleted. Please try it again?');
            }
        }

        Flash::success(Lang::get('backend::lang.list.delete_selected_success', [
            'name' => Lang::get('flosch.slideshow::lang.controller.form.slideshows.title')
        ]));

        return $this->listRefresh();
    }
}
