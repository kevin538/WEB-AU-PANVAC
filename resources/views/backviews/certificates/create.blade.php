@extends('backendlayout.Layout')
@section('content')
    <div class="col-xl-12 order-xl-1">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Certificat </h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('savecertificate') }}">
                    @csrf
                     <hr class="my-4" />
                    <!-- Address -->
                    <h6 class="heading-small text-muted mb-4">Contact information</h6>
                    <div class="pl-lg-4">
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Panvac Reference</label>
                                    <input required name="panref" type="text" id="input-email" class="form-control"
                                        placeholder="P001/0312/01/23">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Submitted By</label>
                                        <input required name="sumby" type="text" id="input-email" class="form-control"
                                            placeholder="NVI Ethiopia">
                                    </div>
                                    
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Produced By</label>
                                    <input required type="text" name="prodby" id="input-email" class="form-control"
                                        placeholder="Orange">
                                </div>
                                
                        </div>
                        
                            
                        </div>
                    </div>
                    <h6 class="heading-small text-muted mb-4">Vaccine informations</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Vaccine Type</label>
                                    <input required type="text" name="vacctyp" id="input-username" class="form-control" placeholder="IBD"
                                        >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Batch Number</label>
                                    <input required type="text" name="batchnum" id="input-username" class="form-control" placeholder="01/2022"
                                        >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">Production Date</label>
                                    <input required type="date" name="proddate" id="input-username" class="form-control" placeholder="13/01/23"
                                       >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">Expiry Date</label>
                                    <input required type="date" name="expdate" id="input-username" class="form-control" placeholder="13/01/23"
                                       >
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />

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
