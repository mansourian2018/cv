@extends('layouts.app')
@section('title','تبلیغات')
@section('content')
<div class="row" id="app">
    <div class="col-3"></div>
    <div class="col-6" dir="rtl" style="text-align: right">
        <form action="{{route('ads.store')}}" enctype="multipart/form-data" method="POST">
            <div class="form-group">
              <label >توضیحات :</label>
              <textarea cols="3" class="form-control" name="description"></textarea>
            </div>
            {{ csrf_field() }}
            <div class="form-group">
                <label for="email">تصویر :</label>
                <input type="file" class="form-control" name="file" id="file">
            </div>
            <div class="form-group">
              <label for="priority">اولویت:</label>
              <select type="password" class="form-control" name="priority" id="priority">
                  <option value="0">اولویت بالا</option>
                  <option value="1">اولویت پایین</option>
              </select>
            </div>
            <input type="submit" class="btn btn-primary" value="ثبت">
            <label style="width: 5px"></label>
        <a href="{{route('ads.index')}}" class="btn btn-light">لغو</a>
        </form>
    </div>
</div>

@endsection
