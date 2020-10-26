<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use App\Ads;
use Ramsey\Uuid\Uuid;
use Laracasts\Utilities\JavaScript\JavaScriptFacade;
class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ads::get();
        JavaScriptFacade::put([
            'ads' => $ads
        ]);
        return view('ads.index')->with('ads',$ads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ads.creaet');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'description' => 'required|string',
            'file' => 'required|image',
            'priority' => 'required'
        ]);
        $ads = new Ads();
        $ads->text = $request->description;
        $ads->img = $this->uploadFile($request->file);
        $ads->priority = $request->priority;
        $ads->save();
        return redirect()->route('ads.index')->with('success','عملیات با موفقیت انجام شد.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ads = Ads::findOrfail($id);
        if($ads){
            return view('ads.edit')->with(['ads' => $ads]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'description' => 'required|string',
            'file' => 'required|image',
            'priority' => 'required'
        ]);
        $ads = Ads::findOrfail($id);
        ($ads->img)?$this->deleteFile($ads->img):'';
        $fileName = $this->uploadFile($request->file);
        $ads->text = $request->description;
        $ads->img = $fileName;
        $ads->priority = $request->priority;
        $ads->save();
        return redirect()->route('ads.index')->with('success','عملیات با موفقیت انچام شد.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ads = Ads::find($id);
        if($ads){
            ($ads->img)?$this->deleteFile($ads->img):'';
            $ads->delete();
            return response()->json(['success'=>'با موفقیت حذف شد.'],200);
        }
        return response()->json(['error'=> 'با خطا مواجه شد.'],400);
    }

    public function uploadFile($file,$dst = '/ads/image/'){
        $fileName = 'file-' . Uuid::uuid4()->toString() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path($dst), $fileName);
        return $fileName;
    }
    public function deleteFile($fileName){
        unlink(public_path('/ads/image/'.$fileName));
        return;
    }
}
