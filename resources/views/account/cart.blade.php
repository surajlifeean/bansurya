@extends('main')



@section('stylesheets')

<style>
.staticcontent{
    font-size: 16px;
    line-height: 28px;
    text-align: center;
    color: #818181;
    width: 800px;
    max-width: 94%;
    margin: 0 auto;

}

.rightPanelCartWrapper {
    border: 1px solid #dcdcdc;
    padding: 15px;
}

body {
    font-family: 'montserratLight';
    font-size: 12px;
    color: #5d5d5d;
    line-height: normal;
    background-color: #fff;
}
</style>

@endsection

@section('content')
    <h1 class="staticheading" style="text-align:center;">Shopping Bag</h1>

    @include('partials._billdetails')

@endsection