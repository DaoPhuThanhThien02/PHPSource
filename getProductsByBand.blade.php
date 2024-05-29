@extends('layout.master')
@section('Content')

<form method="get" action="{{ route('admin.product.getProductsByBand') }}">
<input type="hidden" name="_token" value="{{csrf_token()}}" />
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
        <button type="submit" class="btn btn-primary" name="btSearch">
            Submit
        </button>
    </div>
</form>

<div class="table-responsive">
<table class="table table-primary">
    <tbody>
        <thead>
            <tr>
                <th class=\"text-center\">PID</th>
                <th class=\"text-center\">Name</th>
                <th class=\"text-center\">Company</th>
                <th class=\"text-center\">Year</th>
                <th class=\"text-center\">Band</th>
                <th class=\"text-center\">Image</th>
                <th class=\"text-center\">Delete</th>
                <th class=\"text-center\">Edit</th>
            </tr>
        </thead>
    </tbody>
</table>
</div>

@foreach ($products as $product)
<div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
        <thead>
<tr>
    <td class="text-left">{{ $product->pid }}</td>
    <td class="text-left">{{ $product->pname }}</td>
    <td class="text-left">{{ $product->company }}</td>
    <td class="text-left">{{ $product->year }}</td>
    <td class="text-left">{{ $product->band }}</td>
    <td class="text-left"><img src="{{ $product->piamge }}" alt="Image"></td>
    <td class="center">
        <a href="deleteProduct/{{ $product->pid }}">
            <i class="fa fa-trash-o fa-fw"></i> Delete
        </a>
    </td>
    <td class="center">
        <a href="updateProduct/{{ $product->pid }}">
            <i class="fa fa-pencil fa-fw"></i> Edit
        </a>
    </td>
</tr>
        </thead>
    </table>
</div>
@endforeach
@endsection