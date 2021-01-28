<?php


namespace App\Modules\contact\Http\Controller;


use App\Http\Controllers\Controller;
use App\Modules\contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Validator;


class ContactController extends Controller
{

    public function index(){

        return view('contact::index');
    }


    public function create(Request $request) {

        Validator::make($request->all(),Contact::$createRules,Contact::$errorMessage)->validate();


        Contact::create($request->all());
        $request->session()->flash('success_contact','YOUR MESSAGE WAS SEND');
        return redirect()->back();

    }

}
