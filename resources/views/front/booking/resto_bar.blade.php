<div class="row g-3">
    {{-- <div class="col-md-3 col-6">
        <div class="card" style="width: 11rem; cursor: pointer;"
            onclick="toggleCardSelection('Aneka Sop', '{{ asset('front/img/anekasop.png') }}', 'aneka sop')">
            <div class="position-absolute d-flex justify-content-start m-3">
                <input type="checkbox" name="anekasop" id="aneka sop"
                    onchange="toggleSelection('Aneka Sop', '{{ asset('front/img/anekasop.png') }}', 'aneka sop')"
                    style="pointer-events: none;">
            </div>
            <img src="{{ asset('front/img/anekasop.png') }}" class="card-img-top"
                alt="{{ asset('front/img/anekasop.png') }}">
            <div class="card-body">
                <h5 class="card-title">Aneka Sop</h5>
            </div>
        </div>
    </div> --}}
    @foreach ($resto_bar as $item)
    <div class="col-md-3 col-6">
        <div class="card" style="width: 11rem; cursor: pointer;"
            onclick="toggleCardSelection('{{ $item->name }}', '{{ url('storage/'. $item->image) }}', '{{ $item->name }}')">
            <div class="position-absolute d-flex justify-content-start m-3">
                <input type="checkbox" name="{{ $item->name }}" id="{{ $item->name }}"
                    onchange="toggleSelection('{{ $item->name }}', '{{ url('storage/'. $item->image) }}', '{{ $item->name }}')"
                    style="pointer-events: none;">
            </div>
            <img src="{{ url('storage/'. $item->image) }}" class="card-img-top"
                alt="{{ url('storage/'. $item->image) }}" width="120" height="120">
            <div class="card-body">
                <h5 class="card-title">{{ $item->name }}</h5>
            </div>
        </div>
        <button type="button" class="btn btn-transparent text-info" data-bs-toggle="modal"
            data-bs-target="#{{ $item->id }}_{{ str_replace(' ', '', $item->name) }}_{{ str_replace(' ', '', $item->created_at) }}">
            Lihat {{ $item->name }}
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="{{ $item->id }}_{{ str_replace(' ', '', $item->name) }}_{{ str_replace(' ', '', $item->created_at) }}" data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="paket_aLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Oleh-Oleh {{ $item->name }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {!! $item->description !!}
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>