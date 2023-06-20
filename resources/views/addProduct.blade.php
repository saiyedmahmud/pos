@extends('layout.main')
@section('main')
<section>
    <div class="page-header min-vh-100">
      <div class="container">
        <div class="row">
          <div class="">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="font-weight-bolder">Add Product</h4>
              </div>
              <div class="card-body">
                <form class='row g-3' role="form" method="POST" action="{{route('product.create')}}">
                    @csrf
                    <div class="col-md-6">
                        <div class="input-group input-group-outline mb-3 col-md-6">
                            <input value="{{old("product_code")}}" type="text" name='product_code' class="form-control" placeholder="Product Code">
                          </div>
                        @if($errors->has('product_code'))
                            @foreach($errors->get("product_code") as $error)
                                <span style="color: red">{{$error}}</span>
                            @endforeach
                        @endif
                      </div>
                      <div class="col-md-6">
                        <div class="input-group input-group-outline mb-3 col-md-6">
                            <input value="{{old("buying_price")}}" type="number" name='buying_price' class="form-control" placeholder="Buying Price">
                        </div>
                          @if($errors->has('buying_price'))
                              @foreach($errors->get("buying_price") as $error)
                                  <span style="color: red">{{$error}}</span>
                              @endforeach
                          @endif
                      </div>
                      <div class="col-md-6">
                        <div class="input-group input-group-outline mb-3 col-md-6">
                            <input value="{{old("selling_price")}}" type="number" name='selling_price' class="form-control" placeholder="Selling Price">
                          </div>
                          @if($errors->has('selling_price'))
                              @foreach($errors->get("selling_price") as $error)
                                  <span style="color: red">{{$error}}</span>
                              @endforeach
                          @endif
                      </div>
                      <div class="col-md-6">
                        <label class="form-label">In stock</label>
                        <div class="input-group input-group-outline mb-3 col-md-6">
                            <div class="form-check form-check-info text-start ps-0">
                                <input value="{{old("in_stock")}}" type="checkbox" name="in_stock" checked></div>
                          </div>
                          @if($errors->has('in_stock'))
                              @foreach($errors->get("in_stock") as $error)
                                  <span style="color: red">{{$error}}</span>
                              @endforeach
                          @endif
                      </div>
                      <div class="col-md-6">
                        <div class="input-group input-group-outline mb-3 col-md-6">
                            <input value="{{old("total_stock")}}" type="number" name='total_stock' class="form-control" placeholder="Total stock">
                        </div>
                          @if($errors->has('total_stock'))
                              @foreach($errors->get("total_stock") as $error)
                                  <span style="color: red">{{$error}}</span>
                              @endforeach
                          @endif
                      </div>
                      <div class="col-md-6">
                        <div class="input-group input-group-outline mb-3 col-md-6">
                            <input value="{{old("available_color")}}" type="text" name='available_color' class="form-control" placeholder="Available Color">
                        </div>
                          @if($errors->has('available_color'))
                              @foreach($errors->get("available_color") as $error)
                                  <span style="color: red">{{$error}}</span>
                              @endforeach
                          @endif
                      </div>
                      <div class="col-md-6">
                        <div class="input-group input-group-outline mb-3 col-md-6">
                            <input value="{{old("available_size")}}" type="text" name='available_size' class="form-control" placeholder="Available Size">
                        </div>
                          @if($errors->has('available_size'))
                              @foreach($errors->get("available_size") as $error)
                                  <span style="color: red">{{$error}}</span>
                              @endforeach
                          @endif
                      </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline mb-3 col-md-6">
                            <select class="form-control" name="client_id">
                                @foreach($clients as $client)
                                    <option value="{{$client->client_id}}">{{$client->name}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('client_id'))
                                @foreach($errors->get("client_id") as $error)
                                    <span style="color: red">{{$error}}</span>
                                @endforeach
                            @endif
                        </div>
                    </div>

                      <div class="col-md-6">
                        <div class="input-group input-group-outline mb-3 col-md-6">
                            <select class="form-control" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{$category->catagory_id}}">{{$category->catagory_name}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('category_id'))
                                @foreach($errors->get("category_id") as $error)
                                    <span style="color: red">{{$error}}</span>
                                @endforeach
                            @endif
                          </div>
                      </div>

                  <div class="text-center">
                    <button type="Submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Add Product</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
