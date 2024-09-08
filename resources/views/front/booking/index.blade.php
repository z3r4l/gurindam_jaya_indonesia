<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gurindam Jaya Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <style>
        input[type="checkbox"] {
            accent-color: #FF4800;
            /* Warna untuk checkbox yang dicentang */
        }
    </style>
    <header>
        {{-- <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand">GJI</a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav> --}}

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <!-- Brand / Logo -->
                <a class="navbar-brand" href="{{ url('/') }}">GJI</a>

                <!-- Toggler/collapsibe Button for Mobile View -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar Links and User Dropdown -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <!-- User Dropdown Menu -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{-- <img src="{{ auth()->user()->image ?? 'No Image' }}"
                                    alt="{{ auth()->user()->image ?? 'No Image' }}" class="rounded-circle" width="30"
                                    height="30"> --}}
                                {{ auth()->user() ? auth()->user()->name : 'No Login' }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                {{-- <li><a class="dropdown-item" href="#">Profile</a></li> --}}
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ Auth::logout() }}">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section>
        {{-- start jumbotron --}}
        <div class="jumbotron py-5" style="background-color: #03071E;">
            <div class="ms-4">
                <h1 class="text-light">Paket harga</h1>
                <p class="text-light">Temukan pilihan dan buat paket harga yang tepat untuk kebutuhan akomodasi kamu.
                </p>
            </div>
        </div>
        {{-- end jumbotron --}}

        <div class="mt-5">
            <div class="row">
                <div class="col-lg-6">
                    {{-- Start List Data Order --}}
                    <div class="accordion ms-4 mt-3" id="accordionExample" style="width: 95%;">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="fw-bold">
                                        <img src="{{ asset('front/icon/icon_antar_kota.svg') }}" alt=""> Transportasi
                                        Antar Kota
                                    </span>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    @include('front.booking.transportasi_luar_kota')

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="fw-bold">
                                        <img src="{{ asset('front/icon/icon_dalam_kota.svg') }}" alt=""> Transportasi
                                        Dalam Kota
                                    </span>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    @include('front.booking.transportasi_dalam_kota')
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="fw-bold">
                                        <img src="{{ asset('front/icon/icon_penginapan.svg') }}" alt=""> Penginapan
                                    </span>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    @include('front.booking.lodging')
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span class="fw-bold">
                                        <img src="{{ asset('front/icon/icon_restobar.svg') }}" alt=""> Resto Dan Bar
                                    </span>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    @include('front.booking.resto_bar')
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <span class="fw-bold">
                                        <img src="{{ asset('front/icon/icon_merchandise.svg') }}" alt=""> Oleh-Oleh
                                    </span>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    @include('front.booking.merchandise')
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Start List Data Order --}}
                </div>
                {{-- Start Data Ordered --}}
                <div class="col-lg-6">
                    <div class="ms-4 mt-3">
                        <div class="card" style="width: 95%;">
                            <div class="card-body">
                                <h5 class="card-title">Pesanan Yang kamu pilih:</h5>
                                <div class="selection mt-3" id="selection-container">

                                </div>
                                <button class="btn mt-4 text-light" style="width:100%; background-color:#FF4800;"
                                    onclick="sendToWhatsApp()">Pesan Sekarang <img
                                        src="{{ asset('front/icon/whatsapp-line.svg') }}" alt=""></button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Data Ordered --}}
            </div>
        </div>


    </section>

    <script>
        function sendToWhatsApp() {
            const selections = JSON.parse(localStorage.getItem("selectedItems")) || [];
            
            if (selections.length === 0) {
                alert("Tidak ada pilihan yang dipilih.");
                return;
            }

            let userName = "{{ auth()->user()->name ?? '' }}";
            let userAddress = "{{ auth()->user()->address ?? ''}}";

            // Template pesan
            let message = `Hallo nama Saya ${userName}, dari ${userAddress} memesan:\n`;
            // let message = "Hallo nama Saya ...., dari .... memesan:\n";
            
            selections.forEach(selection => {
                message += `• ${selection.item}\n`;
            });
            // Encode the message for use in a URL
            const encodedMessage = encodeURIComponent(message);

            // Replace the following phone number with your own or desired recipient's number
            const phoneNumber = "6281276769149"; // format: country code + number (e.g., 62 for Indonesia)
            // Construct the WhatsApp URL
            const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodedMessage}`;
            // Redirect to the WhatsApp URL
            window.location.href = whatsappUrl;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

    <!-- Bootstrap 5 JS and dependencies (Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>