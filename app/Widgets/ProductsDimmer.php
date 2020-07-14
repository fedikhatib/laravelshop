<?php

namespace App\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use Arrilot\Widgets\AbstractWidget;
use App\Product;

class ProductsDimmer extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Product::count();
        $string = trans_choice('Product', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-news',
            'title'  => "{$count} {$string}",
            'text'   => "You have {$count} Products",
            'button' => [
                'text' => 'View all',
                'link' => route('voyager.products.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Voyager::model('Post'));
    }
}
