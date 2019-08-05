<?php 

namespace App\Http\ViewComposers;

use Response;
use App\Models\Company;
use App\Models\Investor;
use App\Models\Video;
use App\Models\Setting;
use App\Http\Requests;
use Illuminate\Contracts\View\View;

class GlobalComposer
{

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('companyCount',  Company::count());
        $view->with('investorCount',  Investor::count());
        $view->with('videoCount',  Video::count());
        $view->with('settings',  Setting::find(1));
    }
}
