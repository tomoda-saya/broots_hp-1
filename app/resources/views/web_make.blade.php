@extends('layouts.app')

@section('content')

@include('header')


<link rel="stylesheet" href="css/web2.css">

<div class="wrapper2">
     <div class="web_make_img"><!--1P---->
            <img src="images/hp1.png" alt="HP説明" class="hp1" width="100%" height="1200px">
            <div class="web_make_under">
                <img src="images/hp2.png" alt="HP説明" class="hp2" width="100%" height="500px">
                <a href="tyuumon_form" class="btn btn--blue btn--border-double">注文フォームはこちら！</a>
            </div>
     </div>
</div>


@include('footer')

@endsection
