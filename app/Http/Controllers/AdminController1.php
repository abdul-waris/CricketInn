<?php
/**
 * Created by PhpStorm.
 * User: MUHAMMAD HAJIQ
 * Date: 27-Sep-17
 * Time: 10:47 PM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\postnews;

use Illuminate\Support\Facades\Input;


class AdminController1 extends Controller
{

    public function news(){


        return view('Admin.news');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        //show data
        $posts = postnews::all();
        dd($ticketbook = DB::table('ticketbooking')->where('match_date','<',date('Y-m-d'))->oderBy('match_date','des')->limit(3)->get());
        return view('Admin.home',compact($posts));
    }

    public function postnews(Request $request){
        //return view('/postnews');
     $this->validate($request,[
         'fixture'=>'required|string|max:255'
     ]);
        $news = new postnews;
        $news->fixture = Input::get("fixture");
        $news->news = Input::get("news");
        $news->des= Input::get("des");
        $news->image = Input::get("image");
       // $news->admin_id = Auth::admins()->id;
        $news->save();
      return view('/Admin.home');
        //echo "Data inserted";

    }

    public function adminlayout(){
        return view('/Admin.adminlayout');
    }

    /*
    *
    *About
    *
    *
    **/
    
    public function about()
        {
            return view('Admin.aboutus');
        }

        /*
        *
        *Contact Us
        *
        **/
        public function contact()
        {
            return view('Admin.contact');
        }
}
