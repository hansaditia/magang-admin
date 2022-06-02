@extends('layout.app')



@section('style')

@endsection



@section('content')

<!-- Begin Page Content -->

<div class="container-fluid mt-4">



    @if ($message = Session::get('errors'))

        <div class="alert alert-danger">

            {{ $message }}

        </div>

    @endif



    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            {{ $message }}

        </div>

    @endif

    

    <!-- DataTales Example -->

    <div class="card shadow mb-4">

        <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary">

                Detail Data

            </h6>

        </div>

        <div class="card-body">

                <form class="align-items-center" method="POST" action="{{ route('product/update') }}" enctype="multipart/form-data">

                    @csrf

                    <div class="row align-items-center g-3">

                        <input type="hidden" id="id" name="id" value="{{ $product->id }}"> <br/>

                        <div class="col-auto">

                            <select class="form-control" name="category_id" id="category_id">

                                @foreach ($categories as $category)

                                    <option value="{{$product->category_id}}">{{$category->name}}</option>

                                @endforeach

                            </select>

                        </div>

                        <div class="col-auto">

                           <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$product->name}}">

                        </div>

                        <div class="col-auto">

                            <input type="number" class="form-control" id="price" name="price" placeholder="Price" value="{{$product->price}}">

                        </div>

                        <div class="col-auto">

                            <input type="file" id="photo" name="photo" value="{{$product->photo}}">

                        </div>

                        <div class="col-auto">

                            <input type="text" class="form-control" id="link" name="link" placeholder="Link" value="{{$product->link}}">

                        </div>

                        <div class="col-auto">

                            <button type="submit" class="btn btn-primary">UPDATE</button>

                        </div>

                    </div>

                </form>

            

        </div>

    </div>

</div>

<!-- /.container-fluid -->

@endsection



@section('script')

@endsection