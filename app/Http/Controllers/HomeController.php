<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inquiry;
use App\schedule;
use App\newsletter;
use App\post;
use App\banner;
use App\imagetable;
use DB;
use Mail;use View;
use Session;
use App\Http\Helpers\UserSystemInfoHelper;
use App\Http\Traits\HelperTrait;
use Auth;
use App\Profile;


class HomeController extends Controller
{   
    use HelperTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     // use Helper;
     
    public function __construct()
    {
        //$this->middleware('auth');

        $logo = imagetable::
                     select('img_path')
                     ->where('table_name','=','logo')
                     ->first();
             
        $favicon = imagetable::
                     select('img_path')
                     ->where('table_name','=','favicon')
                     ->first(); 
        
        View()->share('logo',$logo);
        View()->share('favicon',$favicon);

    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $banner = DB::table('banners')->get();   
        
        $cms_home1 = DB::table('pages')->where('id', 1)->first();

        $products = DB::table('products')->get()->take(10);

        $partners = DB::table('partners')->get();

        return view('welcome', compact('banner', 'cms_home1', 'partners'));
    }

    public function aboutUs()
    {
        $whatWeDo = DB::table('pages')->where('id', 1)->first();
        $process = DB::table('pages')->where('id', 2)->first();
        $teams = DB::table('teams')->get();

        return view('aboutus', ['whatWeDo'=>$whatWeDo,'process'=>$process,'teams'=>$teams]);
    }

    public function contactUs()
    {
        return view('contactus');
    }

    public function gallery()
    {
         $images = DB::table('galleries')->get();
        return view('gallery', ['images'=>$images]);
    }

    public function mediaAndTestimonials()
    {
        $reviews = DB::table('testimonials')->get();
        $news = DB::table('blogs')->get();
        return view('media-and-testimonials', compact('reviews','news'));
    }

    public function shownewsdetail($id)
    {
        $detail = DB::table('blogs')->find($id);

        return view('news-detail',['detail' => $detail]);
    }


    public function productDetail()
    {
        return view('product-detail');
    }

    public function whoWeSupport()
    {
        $support1 = DB::table('pages')->where('id', 5)->first();
        $support2 = DB::table('pages')->where('id', 6)->first();   
        $support3 = DB::table('pages')->where('id', 7)->first();
        $support4 = DB::table('pages')->where('id', 8)->first();
        $certifications = DB::table('pages')->where('id', 9)->first();
        $donations = DB::table('pages')->where('id', 10)->first();
        $organization = DB::table('pages')->where('id', 11)->first();
        return view('who-we-support',compact('support1', 'support2', 'support3', 'support4', 'certifications', 'donations', 'organization'));
    }

    public function volunteerWithUs()
    {
        $volunteer = DB::table('pages')->where('id', 4)->first();
        $zippers = DB::table('volunteer__zippers')->get();

        return view('volunteer-with-us',compact('volunteer','zippers'));
    }

    public function sizeGuide()
    {
        $guide = DB::table('pages')->where('id', 3)->first();

        return view('size-guide',compact('guide'));
    }

    public function faq()
    {
        $faqs = DB::table('faqs')->get();
        return view('faq', ['faqs'=>$faqs]);
    }

    public function shop()
    {
        return view('shop');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function cart()
    {
        return view('cart');
    }

    public function contactUsSubmit(Request $request)
    {
        $inquiry = new inquiry;
        $inquiry->inquiries_fname = $request->name;
        $inquiry->inquiries_email = $request->email;
       $inquiry->inquiries_phone = $request->phone;
       $inquiry->zip_code = $request->zip_code;
        $inquiry->extra_content = $request->message;
        $inquiry->save();
            
        Session::flash('message', 'Thank you for contacting us. We will get back to you asap'); 
        Session::flash('alert-class', 'alert-success'); 
        return back();
    }

    public function newsletterSubmit(Request $request)
    {
        $is_email = newsletter::where('newsletter_email',$request->email)->count();
        
        if($is_email == 0) {
            
        $inquiry = new newsletter;
        //$inquiry->newsletter_name = $request->name;
        $inquiry->newsletter_email = $request->email;
        //$inquiry->newsletter_message = $request->comment;
        $inquiry->save();
        Session::flash('message', 'Thank you for contacting us. We will get back to you asap'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect('/');
        
        } else {
            Session::flash('flash_message', 'email already exists'); 
            Session::flash('alert-class', 'alert-success'); 
            return redirect('/');
        }
        
    }
   
}
