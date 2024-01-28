@extends('backendlayout.Layout')
@section('content')
    <div class="col-xl-12 order-xl-1">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Edit profile </h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('savecontact') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <hr class="my-4" />
                    <!-- Address -->
                    <h6 class="heading-small text-muted mb-4">Contact information</h6>
                    <div class="pl-lg-4">

                        <div class="row">
                            <div class="col-lg-6">
                                <label class="form-control-label" for="input-email">Logo Company</label>
                                <div class="form-group">
                                    <input type="file" class="input-email" name="logo" id="input-logo">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Email à Contacter</label>
                                    <input type="email" id="input-email" name="emailcontact" class="form-control"
                                        placeholder="info@example.com">
                                </div>
                            </div>

                        </div>
                    </div>
                    <h6 class="heading-small text-muted mb-4">Social Media informations</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Facebook</label>
                                    <input type="url" id="input-facebook" class="form-control" name="facebook"
                                        placeholder="URL">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Twitter</label>
                                    <input type="url" id="input-twitter" class="form-control" name="twitter"
                                        placeholder="URL">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">Instagram</label>
                                    <input type="url" id="input-instagram" class="form-control" name="instagram"
                                        placeholder="URL">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">LinkedIn</label>
                                    <input type="url" id="input-linkedin" class="form-control" name="linkedin"
                                        placeholder="URL">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <!-- Address -->
                    <h6 class="heading-small text-muted mb-4">Contact information</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-address">Address</label>
                                    <input id="input-address" class="form-control" name="address" 
                                    placeholder="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Company Email</label>
                                    <input type="email" id="input-email" name="companyemail" class="form-control"
                                        placeholder="info@example.com">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-country">Country</label>
                                    <input type="text" id="input-country" name="country" class="form-control"
                                        placeholder="United States">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-country">Phone Number</label>
                                    <input type="text" id="input-postal-code" name="phonenumber" class="form-control"
                                        placeholder="Postal code">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <!-- Description -->
                    <h6 class="heading-small text-muted mb-4">About Company</h6>
                    <div class="pl-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">À Propos de Nous</label>
                            <textarea rows="4" class="form-control" name="aboutfr" placeholder="Entrez votre texte en langue francaise..."></textarea>
                        </div>
                    </div>
                    <div class="pl-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">About Us</label>
                            <textarea rows="4" class="form-control" name="abouten" placeholder="Enter the content in english..."></textarea>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary btn-sm" style="background-color: #479a5c; border-color:#479a5c">
                            <i class="ni ni-check-bold" style="font-size: 25px;"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
