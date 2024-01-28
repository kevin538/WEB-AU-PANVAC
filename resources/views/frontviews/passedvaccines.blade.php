<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@extends('frontendlayout.Layout')
@section('frontcontent')
@php
$globalData = app(\App\Services\DataService::class)->getGlobalData();
@endphp
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

        .input-box {
            position: relative;
            width: 100%;
            max-width: 60px;
            height: 55px;
            margin: 0 50px;
            background-color: #26d48c;
            border-radius: 6px;
            transition: all 0.5s ease-in-out;
            border: 2px solid #26d48c;
        }

        .input-box.open {
            max-width: 350px;
        }

        .input-box input {
            position: relative;
            width: 100%;
            height: 100%;
            font-size: 16px;
            font-weight: 400;
            color: #26d48c;
            padding: 0 15px;
            border: none;
            border-radius: 6px;
            outline: none;
            transition: all 0.5s ease-in-out;
        }

        .input-box.open input {
            padding: 0 15px 0 65px;
        }

        .input-box .search {
            position: absolute;
            top: 0;
            left: 0;
            width: 60px;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #26d48c;
            border-radius: 6px;
            cursor: pointer;
        }

        .input-box.open .search {
            border-radius: 6px 0 0 6px;
        }

        .search .search-icon {
            font-size: 30px;
            color: white;
        }

        .input-box .close-icon {
            position: absolute;
            top: 50%;
            right: -45px;
            font-size: 30px;
            color: #26d48c;
            padding: 5px;
            transform: translateY(-50%);
            transition: all 0.5s ease-in-out;
            cursor: pointer;
            pointer-events: none;
            opacity: 0;
        }

        .input-box.open .close-icon {
            transform: translateY(-50%) rotate(180deg);
            pointer-events: auto;
            opacity: 1;
        }
    </style>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url('{{ asset('sliders/' . $globalData['latestContact']['ImageCarousel'] ?? 'No Image Defined') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">{{ $titre ?? ' ' }}</h1>
            <li class="breadcrumb-item"><a href="">Drop your PANVAC References Number to verify your certificate</a></li>

        </div>
    </div>
    <!-- 404 Start -->
    <div class="container-fluid py-2 my-2 wow fadeIn" data-wow-delay="0.3s"
        style=" align-items: center; justify-content: center; display: flex;">
        <div class="row justify-content-center">
            <form id="searchForm">
                <div class="input-box" style="">
                    <input type="text" id="referenceInput" placeholder="Type your Reference number..." />
                    <span class="search" ontouchstart="searchCertificat(event)" onclick="searchCertificat(event)">
                        <i class="uil uil-search search-icon"></i>
                    </span>
                    <i class="uil uil-times close-icon"></i>
                </div>
            </form>
        </div>

    </div>
    <div class="container-fluid py-1 my-1 wow fadeIn" data-wow-delay="0.3s"
        style=" align-items: center; justify-content: center; display: flex; ">
        <div class="card">
        </div>
        <!-- Light table -->
        <div class="table-responsive">
            <table class="table align-items-center table-flush" >
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="name" style="border: 2px solid #000; text-align: center;">S/N</th>
                        <th scope="col" class="sort" data-sort="name" style="border: 2px solid #000; text-align: center;">PRF</th>
                        <th scope="col" class="sort" data-sort="budget" style="border: 2px solid #000; text-align: center;">NOM</th>
                        <th scope="col" class="sort" data-sort="budget" style="border: 2px solid #000; text-align: center;">ADDRESS</th>
                        <th scope="col" class="sort" data-sort="budget" style="border: 2px solid #000; text-align: center;">QCR NUMBER</th>
                        <th scope="col" class="sort" data-sort="status" style="border: 2px solid #000; text-align: center;">Vaccine Type</th>
                        <th scope="col" style="border: 2px solid #000; text-align: center;">Batch Number</th>
                        <th scope="col" class="sort" data-sort="completion" style="border: 2px solid #000; text-align: center;">ExpiredDate</th>
                    </tr>
                </thead>
                <tbody class="list">
                    <tr>
                        <td class="sn">
                        </td>
                        <th scope="row">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <span class="name mb-0 text-sm"></span>
                                </div>
                            </div>
                        </th>
                        <td class="SubmittedBy" style="border: 1px solid #e9ecef; text-align: center;">
                        </td>
                        <td class="adress" style="border: 1px solid #e9ecef; text-align: center;">
                            moroco
                        </td>
                        <td class="qcrnumber" style="border: 1px solid #e9ecef; text-align: center;">
                            QCR 2653
                        </td>
                        <td class="VaccineType" style="border: 1px solid #e9ecef; text-align: center;">
                        </td>
                        <td class="BatchNumber" style="border: 1px solid #e9ecef; text-align: center;">
                        </td>
                        <td style="border: 1px solid #e9ecef; text-align: center;">
                            <div class="d-flex align-items-center" style="border: 3px solid #e9ecef;  text-align: center;">
                                <span class="completion mr-2" style="color: #26d48c; text-align: center"></span>

                            </div>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    </div>
    <!-- 404 End -->
    <script>
        // Écoutez l'événement submit du formulaire
        document.getElementById("searchForm").addEventListener("submit", function(event) {
            // Empêchez l'envoi du formulaire traditionnel
            event.preventDefault();
            // Appelez votre fonction AJAX ici (searchCertificat)
            searchCertificat();
        });

        function searchCertificat() {
            // Récupérer la valeur du champ de référence
            var referenceValue = document.getElementById("referenceInput").value;
            // Effectuer une requête AJAX pour rechercher le certificat
            // Assurez-vous d'ajuster l'URL en fonction de votre configuration
            var url = "/searchCertificat/" + referenceValue;
            // Utilisez Axios pour effectuer la requête
            axios.get(url)
                .then(function(response) {
                    // Traitez la réponse ici (affichez les détails du certificat, par exemple)
                    var certificat = response.data;
                    // Mettez à jour les cellules du tableau avec les données du certificat
                    document.querySelector('tbody.list tr th .name').innerText = certificat.Code;
                    document.querySelector('tbody.list tr td.sn').innerText = certificat.id;
                    /*   document.querySelector('tbody.list tr td.budget').innerText = certificat.PanvacRef; */
                    document.querySelector('tbody.list tr td.SubmittedBy').innerText = certificat.SubmittedBy;
                    document.querySelector('tbody.list tr td.VaccineType').innerText = certificat.VaccineType;
                    document.querySelector('tbody.list tr td.BatchNumber').innerText = certificat.BatchNumber;
                    document.querySelector('tbody.list tr td span.completion').innerText = certificat.DateExpired;

                })
                .catch(function(error) {
                    // Gérez les erreurs ici
                    console.error(error);
                });
        }
    </script>
@endsection
