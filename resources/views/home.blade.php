@extends('master')
@section('title')
    Home Page
@endsection
@section('body')
    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{asset($product['image'])}}" alt="" height="250">
                            <div class="card-body">
                                <h3>{{$product['name']}}</h3>
                                <p>{{$product['price']}}</p>
                                <hr>
                                <a href="" class="btn btn-success">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
