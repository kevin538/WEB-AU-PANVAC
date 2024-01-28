@extends('backendlayout.Layout')
@section('content')
    <div class="col-xl-12 order-xl-1">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Service</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="#!" class="btn btn-sm btn-primary">Details</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('saveservice') }}" method="POST">
                    @csrf
                     <hr class="my-4" />
                    <!-- Address -->
                    <h6 class="heading-small text-muted mb-4">Service Title</h6>
                    <div class="pl-lg-4">
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Titre French</label>
                                    <input type="text" name="titrefr" id="input-email" class="form-control"
                                        placeholder="French">
                                </div>
                        </div>
                            <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Titre English</label>
                                        <input type="text" name="titreen" id="input-email" class="form-control"
                                            placeholder="English">
                                    </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <hr class="my-4" />
                    <!-- Description -->
                    <h6 class="heading-small text-muted mb-4">Services Description</h6>
                    <div class="pl-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">À Propos de Nous</label>
                            <textarea rows="2" name="descriptionfr" class="form-control" placeholder="En Francais ..."></textarea>
                        </div>
                    </div>
                    <div class="pl-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">About Us</label>
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
