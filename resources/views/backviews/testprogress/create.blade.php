@extends('backendlayout.Layout')
@section('content')
    <div class="col-xl-12 order-xl-1">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Test in Progress </h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('savetestinprogress') }}">
                    @csrf
                     <hr class="my-4" />
                    <!-- Address -->
                    <h6 class="heading-small text-muted mb-4">Information</h6>
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
                                    <label class="form-control-label" for="input-first-name"> Date Received</label>
                                    <input required type="date" name="datereceived" id="input-username" class="form-control" placeholder="13/01/23"
                                       >
                                </div>
                                    
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">Date Expected</label>
                                    <input required type="date" name="expdate" id="input-username" class="form-control" placeholder="13/01/23"
                                       >
                                </div>
                                
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-last-name">Status</label>
                                <input required type="text" readonly name="status" id="input-username" class="form-control" value="In Progess" placeholder="In Progess"
                                   >
                            </div>
                            
                    </div>
                            
                        </div>
                    </div>
                    <h6 class="heading-small text-muted mb-4">Vaccine informations</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Stability</label>
                                    <select required name="stability" id="input-username" class="form-control">
                                        <option value="oui">Yes</option>
                                        <option value="non">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Identity</label>
                                    <select required name="identity" id="input-username" class="form-control">
                                        <option value="oui">Yes</option>
                                        <option value="non">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Steriity</label>
                                    <select required name="sterility" id="input-username" class="form-control">
                                        <option value="oui">Yes</option>
                                        <option value="non">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Potency</label>
                                    <select required name="potency" id="input-username" class="form-control">
                                        <option value="oui">Yes</option>
                                        <option value="non">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Safety</label>
                                    <select required name="safety" id="input-username" class="form-control">
                                        <option value="oui">Yes</option>
                                        <option value="non">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />

                    <div class="d-flex justify-content-end">
                        <button class="btn btn-primary btn-sm" style="background-color: #479a5c; border-color:#479a5c">
                            <i class="ni ni-check-bold"  style="font-size: 25px;"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
