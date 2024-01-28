@extends('backendlayout.Layout')
@section('content')
    <div class="col-xl-12 order-xl-1">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Member profile </h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form>
                     <hr class="my-4" />
                    <!-- Address -->
                    <h6 class="heading-small text-muted mb-4">Team information</h6>
                    <div class="pl-lg-4">
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="form-control-label" for="input-email">Picture</label>
                                <div class="form-group">
                                    <input type="file" name="picture" class="input-email" id="input-logo">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Name</label>
                                        <input name="name" type="text" id="input-email" class="form-control"
                                            placeholder="Ryan Tompson">
                                    </div>
                            </div>
                            
                        </div>
                    </div>
                    <h6 class="heading-small text-muted mb-4">Designation</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Designation Francais</label>
                                    <input type="test" name="designationfr" id="input-username" class="form-control" placeholder="Directeur">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Designation English </label>
                                    <input type="url" name="designationen" id="input-username" class="form-control" placeholder="Director"
                                        >
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <hr class="my-4" />
                   
                    <!-- Description -->
                  
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-primary btn-sm" style="background-color: #479a5c; border-color:#479a5c">
                            <i class="ni ni-check-bold" style="font-size: 25px;"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
