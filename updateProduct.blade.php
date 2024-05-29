@extends('layout.master')
@section('Content')

@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
@endif

<form action="{{$product -> pid}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
    <div class="mb-3">
        <label for="" class="form-label">ID Product</label>
        <input type="text" class="form-control" name="pid" id="" value="{{$product -> pid}}"/>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Product Name</label>
        <input type="text" class="form-control" name="pname" id="" value="{{$product -> pname}}"/>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Company</label>
        <input type="text" class="form-control" name="company" id="" value="{{$product -> company}}"/>
    </div>
    <div class="mb-3">
        <label for="" class="from-label">Select Year</label>
        <select class="form-select form-select-lg" name="selectYear" id="">
            <?php
                for ($year = 2015; $year <= 2025; $year++) {
                    echo '<option value="' . $year . '">' . $year . '</option>';
                }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Select Band</label>
                <select
                    class="form-select form-select-lg"
                    name="selectBand"
                    id=""
                >
                    <option selected>--Choose a Band--</option>
                    <option value="Isosorbide Dinitrate" >Isosorbide Dinitrate</option>
                    <option value="Rilutek" >Rilutek</option>
                    <option value="Ceftriaxone" >Ceftriaxone</option>
                </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Choose Image</label>
        <img src="{{$product -> pimange}}" alt="image">
        <input type="file" class="form-control" name="imageFile">
    </div>
    <button type="submit" name="btUpdate" class="btn btn-pimary">
        Update
    </button>
</form>

@endsection