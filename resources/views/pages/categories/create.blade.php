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

                <form class="align-items-center" method="POST" action="{{ route('category/store') }}">

                    @csrf

                    <div class="row align-items-center g-3">

                        <div class="col-auto">

                           <input type="text" class="form-control" id="name" name="name" placeholder="Name">

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