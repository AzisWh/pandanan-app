
<!-- Accordion Tabel Layanan -->
<div class="container my-5">
    <h2 class="text-center mb-4 fw-bold">Layanan Kami</h2>
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="">
                <tr>
                    <th scope="col">Layanan</th>
                    <th scope="col" class="d-none d-md-table-cell">Click For More</th>
                </tr>
            </thead>
            <tbody>
                <!-- Fun Diving -->
                <tr data-bs-toggle="collapse" data-bs-target="#funDiving" aria-expanded="false" aria-controls="funDiving" class="accordion-toggle">
                    <td>Fun Diving</td>
                    {{-- <td class="d-none d-md-table-cell">Pengalaman menyelam yang menyenangkan untuk semua level.</td> --}}
                </tr>
                <tr>
                    <td colspan="2" class="hiddenRow">
                        <div class="collapse p-3" id="funDiving">
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <img src="{{asset ('/assets/img/pandanan/fundiving.jpeg')}}" class="img-fluid rounded" alt="Fun Diving">
                                </div>
                                <div class="col-md-8">
                                    <p class="text-left">
                                        Nikmati keindahan bawah laut dengan Fun Diving kami yang dipandu oleh instruktur berpengalaman. Cocok untuk pemula maupun penyelam berpengalaman yang ingin mengeksplorasi keanekaragaman hayati laut.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- Snorkeling -->
                <tr data-bs-toggle="collapse" data-bs-target="#snorkeling" aria-expanded="false" aria-controls="snorkeling" class="accordion-toggle">
                    <td>Snorkeling</td>
                    {{-- <td class="d-none d-md-table-cell">Jelajahi terumbu karang yang menakjubkan.</td> --}}
                </tr>
                <tr>
                    <td colspan="2" class="hiddenRow">
                        <div class="collapse p-3" id="snorkeling">
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <img src="{{asset ('/assets/img/pandanan/snorklingimg.JPG')}}" class="img-fluid rounded" alt="Snorkeling">
                                </div>
                                <div class="col-md-8">
                                    <p class="text-left">
                                        Alami petualangan snorkeling yang tak terlupakan dengan peralatan lengkap dan pemandu profesional. Temukan keindahan terumbu karang dan kehidupan laut yang berwarna-warni.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- Tambahkan layanan lain dengan format yang sama -->
            </tbody>
        </table>
    </div>
</div>
<!-- Akhir Accordion Tabel Layanan -->