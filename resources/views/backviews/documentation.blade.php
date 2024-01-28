@extends('backendlayout.Layout')
@section('content')
    <div class="row">
        <div class="col">
           
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0" style="display: flex; justify-content: space-between; align-items: center;">
                    <h3 class="mb-0">Application Documentation</h3>


                    {{-- // creer  quand c'est vide et edit quand c'est plein --}}
                    <a class="nav-link" href="" style="font-size: 40px;">
                        <i class="ni ni-fat-add text-primary" style="color: #479a5c !important;"></i>
                        <span class="nav-link-text"></span>
                    </a>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">Name</th>
                                <th scope="col" class="sort" data-sort="budget">Functionability</th>
                                <th scope="col" class="sort" data-sort="status">description</th>
                             
                            </tr>
                        </thead>
                        <tbody class="list">
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="avatar-group">
                                            
                                            Laravel 10
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                   PHP Framework
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-warning"></i>
                                        <span class="status"> 
                                            Is a strong and reliable framwork for software developement
                                        </span>
                                    </span>
                                </td>

                               
                            </tr>

                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="avatar-group">
                                            
                                            Mysql
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                   Database Management System
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-warning"></i>
                                        <span class="status"> 
                                            Reliable and up to date
                                        </span>
                                    </span>
                                </td>

                               
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="avatar-group">
                                            
                                            Scope
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                Flexible
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-warning"></i>
                                        <span class="status"> 
                                            Can be easily hosted on a azure app service
                                        </span>
                                    </span>
                                </td>

                               
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="avatar-group">
                                            
                                            On premise Auth
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                   On the database
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-warning"></i>
                                        <span class="status"> 
                                            User, informations and encrypted password in the databse right Now.but will use azure AD lately
                                        </span>
                                    </span>
                                </td>

                               
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="avatar-group">
                                            
                                            Responsive
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                   User Friendly
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-warning"></i>
                                        <span class="status"> 
                                            IS, highly and very responsive tested and approved 
                                        </span>
                                    </span>
                                </td>

                               
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="avatar-group">
                                            
                                            Microsoift Azure
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                   Cloud Services
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-warning"></i>
                                        <span class="status"> 
                                            Hosted on Ethiopian App Service
                                        </span>
                                    </span>
                                </td>

                               
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="avatar-group">
                                            
                                            Traffic
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                   Restricted Zone
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-warning"></i>
                                        <span class="status"> 
                                            Traffic acceptable only from Ethiopia
                                        </span>
                                    </span>
                                </td>

                               
                            </tr>
                        </tbody>
                    </table>
                </div>
                 <!-- Light table -->
            </div>
        </div>
    </div>
@endsection
