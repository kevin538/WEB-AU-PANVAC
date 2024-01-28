@extends('backendlayout.Layout')
@section('content')
    <div class="row">
        <div class="col">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0" style="display: flex; justify-content: space-between; align-items: center;">
                    <h3 class="mb-0">Table Slider</h3>


                    {{-- // creer  quand c'est vide et edit quand c'est plein --}}
                    <a class="nav-link" href="{{ route('createalbum') }}" style="font-size: 40px;">
                        <i class="ni ni-fat-add text-primary" style="color: #479a5c !important;"></i>
                        <span class="nav-link-text"></span>
                    </a>

                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">Image</th>
                                <th scope="col" class="sort" data-sort="budget">Titre</th>
                                <th scope="col">Position</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach ($albums as $album)
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder"
                                                    style="width: 100%; height: 100%; object-fit: cover;"
                                                    src="{{ asset('sliders/' . $album->Image) }} ">
                                            </a>

                                        </div>
                                    </th>
                                    <td class="budget">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm"> <b> {{ $album->TitreEn }} </b></span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-warning"></i>
                                            <span class="status">{{ $album->Empty1 }} </span>
                                        </span>
                                    </td>

                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <form action="{{ route('albums.destroy', $album->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                 <!-- Light table -->
            </div>
        </div>
    </div>
@endsection
