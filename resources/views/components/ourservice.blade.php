
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
           @foreach ($layanan as $item)
           <tbody>
            <!-- title -->
            <tr data-bs-toggle="collapse" data-bs-target="#{{$item->accordionname}}" aria-expanded="false" aria-controls="funDiving" class="accordion-toggle">
                <td>{{$item->title}}</td>
            </tr>
            <tr>
                <td colspan="2" class="hiddenRow">
                    <div class="collapse p-3" id="{{$item->accordionname}}">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img src="{{ $item->image ? asset('storage/public/' . $item->image) : asset('storage/default.jpg')}}" class="img-fluid rounded" alt="{{$item->title ?? 'EMPTY'}}">
                            </div>
                            <div class="col-md-8">
                                <p class="text-left">
                                    {{$item->description}}
                                </p>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            
        </tbody>
           @endforeach
        </table>
    </div>
</div>
<!-- Akhir Accordion Tabel Layanan -->