@extends('layout.main')
@section('main')
@dump($categories)
@dump($clients) 
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
                <form class='row g-3' role="form" method="POST" action="">
                    @csrf
                    <div class="col-md-6">
                        <div class="input-group input-group-outline mb-3 col-md-6">
                            <label class="form-label">Product Code</label>
                            <input type="text" name='productCode' class="form-control">
                          </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group input-group-outline mb-3 col-md-6">
                            <label class="form-label">Buying Price</label>
                            <input type="integer" name='buyingPrice' class="form-control">
                          </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group input-group-outline mb-3 col-md-6">
                            <label class="form-label">Selling Price</label>
                            <input type="integer" name='sellingPrice' class="form-control">
                          </div>
                      </div>
                      <div class="col-md-6">
                        <label class="form-label">Instock</label>
                        <div class="input-group input-group-outline mb-3 col-md-6">
                            <div class="form-check form-check-info text-start ps-0">
                                <input class="form-check-input" type="checkbox" name="inStock" value="" id="flexCheckDefault" checked>
                            </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group input-group-outline mb-3 col-md-6">
                            <label class="form-label">Total stock</label>
                            <input type="text" name='totalStock' class="form-control">
                          </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group input-group-outline mb-3 col-md-6">
                            <label class="form-label">Available_color</label>
                            <input type="text" name='availableColor' class="form-control">
                          </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group input-group-outline mb-3 col-md-6">
                            <label class="form-label">Available_size</label>
                            <input type="text" name='availableSize' class="form-control">
                          </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group input-group-outline mb-3 col-md-6">
                            <label class="form-label">Client Name</label>
                            <input type="text" name='clientId' class="form-control">
                          </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="input-group input-group-outline mb-3 col-md-6">
                            <select>
                                <option value="">{{}}</option>
                            </select>
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