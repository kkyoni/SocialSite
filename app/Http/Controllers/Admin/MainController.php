<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Cms;
use App\Models\Faq;
use App\Models\Slider;
use App\Models\Contact;
use Carbon\Carbon;
use Response;
class MainController extends Controller{
    protected $authLayout = '';
    protected $pageLayout = 'admin.pages.';
    /**
     * * * Create a new controller instance.
     * * *
     * * * @return void
     * * */
    public function __construct(){
        $this->authLayout = 'admin.auth.';
        $this->pageLayout = 'admin.pages.';
        $this->middleware('auth');
    }

    /*------------------------------------------------------------------------------------
    @Description: Function Index Page
    ----------------------------------------------------------------------------------- */
    public function index(){
        return view('front.auth.login');
    }

    /*-----------------------------------------------------------------------------------
    @Description: Function Dashboard Page
    ----------------------------------------------------------------------------------- */
    public function dashboard(){
        $totalSetting = Setting::count();
        $totalCms = Cms::count();
        $totalContact = Contact::count();
        $totalFaq = Faq::count();
        $totalSlider = Slider::count();
        return view('admin.pages.dashboard',compact('totalSetting','totalCms','totalContact','totalFaq','totalSlider'));
    }
}
