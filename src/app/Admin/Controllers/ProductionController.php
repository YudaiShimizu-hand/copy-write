<?php

namespace App\Admin\Controllers;

use App\Models\Production;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Production';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Production());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('price', __('price'));
        $grid->column('detail', __('detail'));
        $grid->column('img', __('img'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(User::findOrFail($id));

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('price', __('price'));
        $grid->column('detail', __('detail'));
        $grid->column('img', __('img'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Production());

        $form->text('name', __('Name'));
        $form->text('price', __('detail'));
        $form->text('detail', __('detail'));
        $form->image('img', __('img'));

        return $form;
    }
}
