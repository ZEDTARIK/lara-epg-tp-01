@extends('layout')
@section('content')
<div class="col-md-12 mt-3">
    <div class="card border-info mb-3">
        <div class="card-header text-center">
            <h3>Create New Product</h3>
        </div>

        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">

            @csrf

            <div class="card-body">
                <div class="form-group row @error('reference') has-danger @enderror">
                    <label for="reference" class="col-sm-2 col-form-label">Reference</label>
                    <div class="col-sm-6">
                        <input name="reference" id="reference" type="text" class="form-control form-control-sm @error('reference') is-invalid @enderror" placeholder="Reference Product" value="{{old('reference')}}">
                    </div>
                    @error('reference')
                    <div class="col-sm-4">
                        <small class="form-text text-danger">
                            {{ $message }}
                        </small>
                    </div>
                    @enderror
                </div>

                <div class="form-group row @error('designation') has-danger @enderror">
                    <label for="designation" class="col-sm-2 col-form-label">Designation</label>
                    <div class="col-sm-6">
                        <input name="designation" id="designation" type="text" class="form-control form-control-sm @error('designation') is-invalid @enderror" placeholder="Designation Product" value="{{old('designation')}}">
                    </div>
                    @error('designation')
                    <div class="col-sm-4">
                        <small id="emailHelp" class="form-text text-danger">
                            {{ $message }}
                        </small>
                    </div>
                    @enderror
                </div>

                <div class="form-group row @error('quantity') has-danger @enderror">
                    <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
                    <div class="col-sm-6">
                        <input name="quantity" id="quantity" type="number" class="form-control form-control-sm @error('quantity') is-invalid @enderror" placeholder="Quantity Product" value="{{old('quantity')}}">
                    </div>
                    @error('quantity')
                    <div class="col-sm-4">
                        <small id="emailHelp" class="form-text text-danger">
                            {{ $message }}
                        </small>
                    </div>
                    @enderror
                </div>


                <div class="form-group row @error('price') has-danger @enderror">
                    <label for="price" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-6">
                        <input name="price" id="price" type="number" class="form-control form-control-sm @error('price') is-invalid @enderror" placeholder="Price Product" value="{{old('price')}}">
                    </div>
                    @error('price')
                    <div class="col-sm-4">
                        <small id="emailHelp" class="form-text text-danger">
                            {{ $message }}
                        </small>
                    </div>
                    @enderror
                </div>

                <div class="form-group row @error('picture') has-danger @enderror">
                    <label for="picture" class="col-sm-2 col-form-label">Picture</label>
                    <div class="col-sm-6">
                        <input name="picture" id="picture" type="file" class="form-control form-control-sm @error('picture') is-invalid @enderror" placeholder="Picture Product" value="{{old('reference')}}">
                    </div>
                    @error('picture')
                    <div class="col-sm-4">
                        <small id="emailHelp" class="form-text text-danger">
                            {{ $message }}
                        </small>
                    </div>
                    @enderror
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success btn-sn">Save</button>
                <button type="reset" class="btn btn-danger btn-sn">Cancel</button>
            </div>
        </form>

    </div>
</div>
</div>
@endsection