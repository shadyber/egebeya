@extends('layouts.app')
@section('content')
    <form class="contact-form" action="{{ url('item') }}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="row py-4">
        <div class="col-lg-5 offset-1 contact-info">



        <div class="form-group">

            <input type="text" placeholder="Product Name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"  name="name">
            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <div class="form-group">

        <input type="number" class="price-input form-control  @error('price') is-invalid @enderror" placeholder="Price" value="{{ old('price') }}"  name="price">
        @error('price')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
        </div>

        <div class="form-group">

        <select  placeholder="Category" class="form-control @error('category') is-invalid @enderror" value="{{ old('category') }}"  name="category">
            <option value="0">Select Product Category</option>
            @foreach($category as $cat)
                <option value="{{$cat->id}}">{{$cat->title}}</option>
                @endforeach
        </select>


        @error('category')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
        </div>
            <div class="form-group">

            <select  placeholder="Sub Category"  class="form-control @error('subcategory') is-invalid @enderror" value="{{ old('subcategory') }}"   name="subcategory">
            <option value="0">Select Product Sub Category Category</option>
            @foreach($sub_category as $cat)
                <option value="{{$cat->id}}">{{$cat->title}}</option>
            @endforeach
        </select>
        @error('subcategory')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
            </div>
        <div class="form-group">

        <input type="file" placeholder="Photo"   class="form-control @error('photo') is-invalid @enderror" value="{{ old('photo') }}"  name="photo">
        @error('photo')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
        </div>
        <div class="form-group">

        <textarea placeholder="Prodcut Description"  class="form-control @error('detail') is-invalid @enderror"  name="detail">{{ old('email') }}</textarea>
        @error('detail')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
        </div>
        <div class="form-group">

        <input type="text" placeholder="Tag,"  class="form-control @error('tags') is-invalid @enderror" value="{{ old('tags') }}"   name="tags">
        @error('tags')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
        </div>

        </div>

        <div class="col-lg-6">
            <div class="form-group">

                <select  placeholder="Select Brand" class="form-control @error('brand') is-invalid @enderror" value="{{ old('brand') }}"  name="brand">
                    <option>Select Product Brand</option>
                    @foreach($brands as $brand)
                        <option>{{$brand->name}}</option>

                    @endforeach
                </select>


                @error('brand')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <div class="form-group">

                <input type="text" placeholder="Product Model" class="form-control @error('model') is-invalid @enderror" value="{{ old('model') }}"  name="model">


                @error('model')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <div class="form-group">

                <input type="number" placeholder="How Many You Have in Stock" class="form-control @error('qnt') is-invalid @enderror" value="{{ old('qnt') }}"  name="qnt">


                @error('qnt')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
<div id="specs">
-
</div>
            <div class="row">
                <div class="col-md-6">

                    <select  placeholder="Select Specs Property" class="form-control"  name="specs">
                        <option>Select Spec Property To Add</option>
                        @foreach($specs as $spec)
                            <option>{{$spec->name}}</option>

                        @endforeach
                    </select>

                </div>
                <div class="col-md-5">  <input type="text" placeholder="Value" class="form-control @error('spec') is-invalid @enderror" value="{{ old('spec') }}"  name="spec">
                </div>
                <div class="col-md-1"><a class="btn btn-outline-info addspec">+</a></div>
            </div>
            <button type="submit" class="site-btn">POST NOW</button>

        </div>


    </div>

    </form>
@endsection
