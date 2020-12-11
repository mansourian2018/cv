<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Content;
use Illuminate\Support\Facades\Validator;
use App\Event\NewContent;
use Response;

class ContentController extends Controller
{
    public function create(Request $request){
       $validator = Validator::make($request->all(),[
            "name"    => "required|max:200",
            "email"  => "required|max:200|email",
            'description' => 'required',
           'g-recaptcha-response' => 'required|captcha'
       ]);
        if($validator->fails()){
            return Response::json(array(
            'code'      =>  401,
            'message'   =>  $validator->messages()->get('*')
        ), 401);
        }
        $content = new Content();
        $content->name = $request['name'];
        $content->email = $request['email'];
        $content->description = $request['description'];
        $content->save();
        event(new NewContent($content->name,$content->email,$content->description));
        return response()->json(['success'=> 'با موفقیت ارسال شد.'],200);
    }
}
