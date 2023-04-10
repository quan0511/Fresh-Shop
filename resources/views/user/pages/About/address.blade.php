@extends('user.partials.master')
@section('content')
    <main>
        <!-- section -->
        <section>
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center d-md-none py-4">
                            <!-- heading -->
                            <h3 class="fs-5 mb-0">Account Address</h3>
                            <!-- button -->
                            <button class="btn btn-outline-gray-400 text-muted d-md-none btn-icon btn-sm ms-3 " type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasAccount" aria-controls="offcanvasAccount">
                                <i class="bi bi-text-indent-left fs-3"></i>
                            </button>
                        </div>
                    </div>
                    <!-- col -->
                    @include('user.partials.About.nav-left')
                    <!-- col -->
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="py-6 p-md-6 p-lg-10">
                            <div class="d-flex justify-content-between mb-6">
                                <!-- heading -->
                                <h2 class="mb-0">Address</h2>
                                <!-- button -->
                                <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#addAddressModal">Add a
                                    new address </a>
                            </div>
                            <div class="row">
                                <!-- col -->
                                <div class="col-lg-5 col-xxl-4 col-12 mb-4">
                                    <!-- form -->
                                    <div class="card">
                                        <div class="card-body p-6">
                                            <div class="form-check mb-4">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="homeRadio" checked="">
                                                <label class="form-check-label text-dark fw-semi-bold" for="homeRadio">
                                                    Home
                                                </label>
                                            </div>
                                            <!-- address -->
                                            <p class="mb-6">Jitu Chauhan<br>

                                                4450 North Avenue Oakland, <br>

                                                Nebraska, United States,<br>

                                                402-776-1106</p>
                                            <!-- btn -->
                                            <a href="#" class="btn btn-info btn-sm">Default address</a>
                                            <div class="mt-4">
                                                <a href="#" class="text-inherit">Edit </a>
                                                <a href="#" class="text-danger ms-3" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal">Delete
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-xxl-4 col-12 mb-4">
                                    <!-- input -->
                                    <div class="card">
                                        <div class="card-body p-6">
                                            <div class="form-check mb-4">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="officeRadio">
                                                <label class="form-check-label text-dark fw-semi-bold" for="officeRadio">
                                                    Office
                                                </label>
                                            </div>
                                            <!-- nav item -->
                                            <p class="mb-6">Nitu Chauhan<br>

                                                3853 Coal Road <br>

                                                Tannersville, Pennsylvania, 18372, United States <br>

                                                402-776-1106</p>
                                            <!-- link -->
                                            <a href="#" class="link-primary">Set as Default</a>
                                            <div class="mt-4">
                                                <a href="#" class="text-inherit">Edit </a>
                                                <!-- btn -->
                                                <a href="#" class="text-danger ms-3" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal">Delete
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
