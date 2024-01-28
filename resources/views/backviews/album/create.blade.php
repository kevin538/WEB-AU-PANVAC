@extends('backendlayout.Layout')
@section('content')
    <div class="col-xl-12 order-xl-1">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Add Image Slider </h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('savealbum') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <hr class="my-4" />
                    <!-- Address -->
                    <h6 class="heading-small text-muted mb-4">Image Details</h6>
                    <div class="pl-lg-4">

                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-control-label" for="input-email">Image</label>
                                    <div class="form-group">
                                        <input required type="file" name="Image" class="input-email" id="input-logo">
                                    </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Titre Francais</label>
                                    <input required type="text" name="TitreFr" id="input-email" class="form-control"
                                        placeholder="info@example.com">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-country">Titre Englais</label>
                                    <input required type="text" name="TitreEn" id="input-country" class="form-control" placeholder="Country"
                                    placeholder="United States">
                                </div>
                            </div>

                        </div>
                    </div>
                    <hr class="my-4" />
                    <!-- Description -->
                    <h6 class="heading-small text-muted mb-4">Slogan Image</h6>
                    <div class="pl-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Slogan Fr</label>
                            <textarea required rows="2" name="SloganFr" class="form-control" placeholder="en francais ..."></textarea>
                        </div>
                    </div>
                    <div class="pl-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Slogan En</label>
                            <textarea required rows="2" name="SloganEn" class="form-control" placeholder="In English ..."></textarea>
                        </div>
                    </div>

                    <hr class="my-4" />
                    <!-- Description -->
                    <h6 class="heading-small text-muted mb-4">Description</h6>
                    <div class="pl-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">En Francais</label>
                            <textarea required rows="4" name="DescriptionFr" class="form-control" placeholder="en francais ..."></textarea>
                        </div>
                    </div>
                    <div class="pl-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">En English</label>
                            <textarea required rows="4" name="DescriptionEn" class="form-control" placeholder="In English ..."></textarea>
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
