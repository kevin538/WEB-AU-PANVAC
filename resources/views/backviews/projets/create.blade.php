@extends('backendlayout.Layout')
@section('content')
    <div class="col-xl-12 order-xl-1">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">News  </h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="#!" class="btn btn-sm btn-primary">Details</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('savenews') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                     <hr class="my-4" />
                    <!-- Address -->
                    <h6 class="heading-small text-muted mb-4">News&Event information</h6>
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
                                        <label class="form-control-label" for="input-email">Title</label>
                                        <input name="title" type="text" id="input-email" class="form-control"
                                            placeholder="Ryan Tompson">
                                    </div>
                            </div>
                            
                        </div>
                    </div>
                    <h6 class="heading-small text-muted mb-4">Description</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Date of the Event</label>
                                    <input type="date" name="date" id="input-username" class="form-control" placeholder="Directeur">
                                </div>
                            </div>
                           
                        </div>
                       
                    </div>
                    <hr class="my-4" />
                   
                    <!-- Description -->
                    <h6 class="heading-small text-muted mb-4">News&Event Description</h6>
                    <div class="pl-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Description In French</label>
                            <textarea rows="2" name="descriptionfr" class="form-control" placeholder="En Francais ..."></textarea>
                        </div>
                    </div>
                    <div class="pl-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Description In English</label>
                            <textarea rows="2" name="descriptionen" class="form-control" placeholder="A few words English ..."></textarea>
                        </div>
                    </div>
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
