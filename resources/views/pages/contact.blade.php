@extends('layouts.default')
@section('content')
    <div class="card mt-3 pl-2 pr-2">
        <div class="card-title"><h1>Contact</h1></div>
        <div class="card-body">

            <form role="form" id="contact-form" method="post" action="{{route('contact.store')}}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" autocomplete="off" placeholder="Name">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" id="email" autocomplete="off" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control textarea" id="Message" rows="3" placeholder="Message"></textarea>
                        </div></div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn main-btn pull-right">Send a message</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
