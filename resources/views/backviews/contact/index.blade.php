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
            @php
                $contactCount = \App\Models\Contact::count();
            @endphp
            <div class="card">
                <!-- Card header  and edit or adding button views-->
                <div class="card-header border-0" style="display: flex; justify-content: space-between; align-items: center;">
                    <h3 class="mb-0">Company Configuration</h3>
                    @if ($contactCount === 0)
                        <div>
                            <a class="nav-link" href="{{ route('editcontact') }}" style="font-size: 40px; ">
                                <i class="ni ni ni-fat-add text-primary" style="color: #479a5c !important;"></i>
                                <span class="nav-link-text"></span>
                            </a>
                        </div>
                    @else
                        @if ($latestContact)
                            <div>
                                <a class="nav-link" href="{{ route('indexcoedit', ['id' => $latestContact->id]) }}"
                                    style="font-size: 40px;">
                                    <i class="ni ni-tag text-primary" style="color: #479a5c !important;"></i>
                                    <span class="nav-link-text"></span>
                                </a>
                            </div>
                        @endif
                    @endif

                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">Project</th>
                                <th scope="col" class="sort" data-sort="budget">Comapany Email</th>
                                <th scope="col" class="sort" data-sort="status">Contact Email</th>
                                <th scope="col" class="sort" data-sort="completion">Phone Number</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @if ($latestContact)
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder"
                                                    src="{{ asset('images/' . $latestContact->Logo) }}"
                                                    style="width: 100%; height: 100%; object-fit: cover;">

                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm"><span
                                                        style="visibility: hidden">H</span>{{ $latestContact->Empty1 }}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        {{ $latestContact->companyEmail }}
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-warning"></i>
                                            <span class="status"> {{ $latestContact->emailContact }}</span>
                                        </span>
                                    </td>
                                    <td>
                                        {{ $latestContact->NumeroTelephone }}

                                    </td>

                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <form action="{{ route('contact.destroy', ['id' => $latestContact->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- Light table -->
            </div>
        </div>
    </div>
@endsection
