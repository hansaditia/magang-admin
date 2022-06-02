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

                Create New Data

            </h6>

        </div>

        <div class="card-body">

                <form class="align-items-center" method="POST" action="{{ route('product/store') }}" enctype="multipart/form-data">

                    @csrf

                    <div class="row align-items-center g-3">

                        <div class="col-auto">

                            <select class="form-control" name="category_id" id="category_id">

                                @foreach ($categories as $category)

                                    <option value={{$category->id}}>{{$category->name}}</option>

                                @endforeach

                            </select>

                         </div>

                        <div class="col-auto">

                           <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>

                        </div>

                        <div class="col-auto">

                            <input type="number" class="form-control" id="price" name="price" placeholder="Price" required>

                        </div>

                        <div class="col-auto">

                            <input type="file" id="photo" name="photo">

                        </div>

                        <div class="col-auto">

                            <input type="text" class="form-control" id="link" name="link" placeholder="Link">

                        </div>

                        <div class="col-auto">

                            <button type="submit" class="btn btn-primary">CREATE</button>

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