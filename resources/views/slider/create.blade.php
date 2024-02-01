@extends('layouts/master')

@section('content')
    @empty($id)
        <h1>this page is create of data</h1>
     @else
            <h2>this is edit part for records</h2>
    @endempty
    <section class="data">
        <form action="{{route('slider.store')}}" method="POST"
        enctype="multipart/form-data">

            @csrf
            <label for="" >fullName</label>
            <input type="text" name="fullName" id="fullName">
            
            <label for="" >email</label>
            <input type="text" name="email" id="email">
            
        </form>
        <input type="submit" value="register">
    </section>
@endsection