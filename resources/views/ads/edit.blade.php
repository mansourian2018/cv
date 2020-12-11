@extends('layouts.app')
@section('title','تبلیغات')
@section('content')
<div class="row" id="app">
    <div class="col-3"></div>
    <div class="col-6" dir="rtl" style="text-align: right">
        <form action="{{route('ads.update',$ads->id)}}" enctype="multipart/form-data" method="POST">
            <div class="form-group">
              <label >توضیحات :</label>
            <textarea cols="3" class="form-control" name="description">{{$ads->text}}</textarea>
            </div>
            {{ csrf_field() }}{{ method_field('PUT') }}
            <div class="form-group">
                <label for="email">تصویر :</label>
                <input type="file" class="form-control" name="file" id="file">
                @error('file')
                   <label>{{$message}}</label>
                @enderror
            </div>
            <div class="form-group">
              <label for="priority">اولویت:</label>
              <select type="password" class="form-control" name="priority" id="priority">
                @if($ads->priority)
                  <option value="0">اولویت بالا</option>
                  <option value="1" selected>اولویت پایین</option>
                  @else
                  <option value="0" selected>اولویت بالا</option>
                  <option value="1" >اولویت پایین</option>
                  @endif
              </select>
            </div>
            <input type="submit" class="btn btn-primary" value="ثبت"><label style="width: 10px"></label>
            <a class="btn btn-light" href="{{route('ads.index')}}" >خروج</a>
        </form>
    </div>
</div>
@endsection
