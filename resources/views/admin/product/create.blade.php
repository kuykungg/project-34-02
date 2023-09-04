@extends('layouts.master_backend')
@section('conti')
    <div class="container-fluid mt-4">
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">Create Products</h5>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                      <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="basic-default-name">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-price">Price</label>
                      <div class="col-sm-10">
                        <input type="text" name="price" class="form-control" id="basic-default-price">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-price">Brand</label>

                      <div class="col-sm-10">
                        <select id="largeSelect" name="brand" class="form-select form-select-lg">
                          <option>select</option>
                          <option value="1">Pam</option>
                          <option value="2">Breker</option>
                          <option value="3">Nike</option>
                        </select>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-detail">Detail</label>
                      <div class="col-sm-10">
                        <input type="text" name="detail" class="form-control" id="basic-default-detail">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-image">Image</label>
                      <div class="col-sm-10">
                        <input type="file" name="image" class="form-control" id="basic-default-image">
                      </div>
                    </div>

                    <div class="row justify-content-end">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- Basic with Icons -->

          </div>
    </div>
@endsection
