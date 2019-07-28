<?php

namespace App\Http\Section;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use SleepingOwl\Admin\Contracts\initializable;

/**
 * Class Wish
 *
 * @property \App\Wish $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Wish extends Section
{
    protected $model = '\App\Wish';

    public function initialize()
    {
        $this -> addToNavigation($priority = 500, function(){
            return \App\Wish::count();
        });

        $this ->creating(function($config, \Illuminate\database\Eloquent\Model $model){

        });
    }
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Пожелания';

    /**
     * @var string
     */
    protected $alias = 'wishes';

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return AdminDisplay::table() 
        -> setHtmlAttribute('class', 'table-primary')
        -> setColumns(
            AdminColumn::text('id', '#')->setWidth('30px'),
            AdminColumn::link('name', 'Имя')->setWidth('200px')
        )
        -> paginate (20) 
        ;
        // remove if unused
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
         return AdminForm::panel()->addBody([
            AdminFormElement::text('id', 'ID')->setReadonly(1),
            AdminFormElement::text('name', 'Имя пользователя')->required(),
            AdminFormElement::ckeditor('description', 'Пожелание')->required(),
            AdminFormElement::text('created_at', 'Дата создания')->setReadonly(1)
        ]);
        // remove if unused
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
         return AdminForm::panel()-> addBody ([
            AdminFormElement::text('name', 'Имя пользователя')->required(),
            AdminFormElement::text('description', 'Пожелание')->required()


        ]);

    }

    /**
     * @return void
     */
    public function onDelete($id)
    {
        // remove if unused
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }

    public function getCreateTitle()
    {
        return 'создание пожеланий';
    }

    public function getIcon()
    {
        return 'fa fa-gear';
    }
}
