@extends('layouts.main')

@section('container')
    {{-- <h1>Halaman About</h1> --}}
    <!-- Team 1 - Bootstrap Brain Component -->
    <section class="py-md-5 py-xl-8">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                    <h2 class="mb-4 display-5 text-center">Our Team</h2>
                    <p class="text-secondary mb-5 text-center lead fs-4">We are a group of innovative, experienced, and
                        proficient teams. You will love to collaborate with us.</p>
                    <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
                </div>
            </div>
        </div>

        <div class="container overflow-hidden">
            <div class="row gy-4 gy-lg-0 gx-xxl-5 justify-content-center">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
                        <div class="card-body p-0">
                            <figure class="m-0 p-0">
                                <img class="img-fluid" loading="lazy" src="https://github.com/TuturuYuuki.png" alt="Flora Nyra">
                                <figcaption class="m-0 p-4">
                                    <h4 class="mb-1">Aria Alvanza</h4>
                                    <p class="text-secondary mb-0">Web Designer</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
                        <div class="card-body p-0">
                            <figure class="m-0 p-0">
                                <img class="img-fluid" loading="lazy" src="https://github.com/rifqiraehan.png" alt="Wylder Elio">
                                <figcaption class="m-0 p-4">
                                    <h4 class="mb-1">Rifqi Raehan</h4>
                                    <p class="text-secondary mb-0">Team Leader</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
                        <div class="card-body p-0">
                            <figure class="m-0 p-0">
                                <img class="img-fluid" loading="lazy" src="https://github.com/iceburgcrm.png" alt="Evander Mac">
                                <figcaption class="m-0 p-4">
                                    <h4 class="mb-1">Seviola Indah</h4>
                                    <p class="text-secondary mb-0">Project Manager</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
