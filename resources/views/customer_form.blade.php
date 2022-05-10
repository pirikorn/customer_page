@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row" style="margin-top:20px">
    <div class="col-md-12 text-center">{{ $title }}</div>
        <div class="col-md-12">
            <div class="col-md-12 customer_form">
                <div class="col-md-6">
                    <form method="POST" action="{{ route('customer.save') }}">
                        @if (isset($customer))
                            <input type="hidden" name="id" value="{{ $customer->_id }}" />
                        @endif
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <div class="form-group">
                            <label>Firstname</label>
                            @if (isset($customer))
                            <input type="text" class="form-control" name="firstname" value="{{$customer->firstname}}" placeholder="Ex. ham">
                            @else
                            <input type="text" class="form-control" name="firstname" placeholder="Ex. ham">
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Lastname</label>
                            @if (isset($customer))
                            <input type="text" class="form-control" name="lastname" value="{{$customer->lastname}}" placeholder="Ex. taro">
                            @else
                            <input type="text" class="form-control" name="lastname" placeholder="Ex. taro">
                            @endif
                        </div>
                        <div class="form-group">
                            <label>phone</label>
                            @if (isset($customer))
                            <input type="text" class="form-control" name="phone" value="{{$customer->phone}}" placeholder="Ex. taro">
                            @else
                            <input type="text" class="form-control" name="phone" placeholder="Ex. 0999999999">
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email address</label>
                            @if (isset($customer))
                            <input type="email" class="form-control" name="email" value="{{$customer->email}}" placeholder="Ex. name@example.com">
                            @else
                            <input type="email" class="form-control" name="email" placeholder="Ex. name@example.com">
                            @endif
                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <a type="submit" class="btn btn-secondary back_btn" href="{{ route('home') }}">Back</a>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary submit_btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
