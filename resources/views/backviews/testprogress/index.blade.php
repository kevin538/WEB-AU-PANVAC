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
                    <h3 class="mb-0">Test in Progress table</h3>

                    {{-- // creer  quand c'est vide et edit quand c'est plein --}}
                    <a class="nav-link" href="{{ route('createtestinprogress') }}" style="font-size: 40px;">
                        <i class="ni ni-fat-add text-primary" style="color: #479a5c !important;"></i>
                        <span class="nav-link-text"></span>
                    </a>

                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                               {{--  <th scope="col" class="sort" data-sort="name">Code</th> --}}
                                <th scope="col" class="sort" data-sort="budget">PANVAC Reference No</th>
                                <th scope="col" class="sort" data-sort="budget">Date Received</th>
                                <th scope="col" class="sort" data-sort="status">Expected Date</th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach ($certificat as $team)
                                <tr>
                                    {{-- <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">{{ $team->Code }}</span>
                                            </div>
                                        </div>
                                    </th> --}}
                                    <td class="budget">
                                        {{ $team->PanvacRef }}
                                    </td>
                                    <td class="budget">
                                        {{ $team->DateReceived }}
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <span class="status"> {{ $team->DateExpected }}</span>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="completion mr-2">{{ $team->Status }}</span>

                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <form action="{{ route('testinprogress.destroy', $team->id) }}"
                                                    method="post">
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
