@extends('layout')
@section('extra-css')
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    
@endsection


@section('title', 'Contact')


@section('content')
@if (session('success'))
<div class="row">
    <div class="col-md-6 mx-auto text-center">
    <div class="alert alert-success">{{session('success')}}</div>
    </div>
</div>

@endif 



<div class="row">
    <div class="col-md-3"><h2>+21622221155</h2></div>
    <div class="col-md-3"><h2>fedikhatib1@gmail.com</h2></div>
    <div class="col-md-3"></div>
</div>

<div class="row">
    <div class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102239.40008064431!2d10.073237072471443!3d36.794999885812665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd337f5e7ef543%3A0xd671924e714a0275!2sTunis!5e0!3m2!1sen!2stn!4v1594744462369!5m2!1sen!2stn" width="500" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="col-md-6">
    <form action="{{url('/contact')}}" method="POST">
        @csrf

            <div class="form-group">
                <label for="Object">Object</label>
                <input type="text" name="Object" id="Object" class="form-control" placeholder="" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="Email">Email</label>
                <input type="text" name="Email" id="Email" class="form-control" placeholder="" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="Message">Message</label>
               <textarea name="Message" id="Message" cols="30" rows="10" class="form-control"></textarea>
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>

        </form>
        
    </div>
</div>



@endsection
