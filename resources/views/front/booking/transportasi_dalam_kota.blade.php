<div class="row g-3">
    {{-- <div class="col-md-3 col-6">
        <div class="card" style="width: 12rem; cursor: pointer;"
            onclick="toggleCardSelection('Alphard', '{{ asset('front/img/alphard.png') }}', 'alphard')">
            <div class="card-body">
                <input type="checkbox" name="alphard" id="alphard"
                    onchange="toggleSelection('Alphard', '{{ asset('front/img/alphard.png') }}')"
                    style="pointer-events: none;">
                <div class="text-center">
                    <img src="{{ asset('front/img/alphard.png') }}" alt="" class="img-fluid">
                    <br>
                    <h5 class="card-title">Alphard</h5>
                </div>
            </div>
        </div>
    </div> --}}
    @foreach ($inner_city as $item)
    <div class="col-md-3 col-6">
        <div class="card" style="width: 12rem; cursor: pointer;"
            onclick="toggleCardSelection('{{ $item->name }}', '{{ url('storage/'. $item->image) }}', '{{ $item->name }}')">
            <div class="card-body">
                <input type="checkbox" name="{{ $item->name }}" id="{{ $item->name }}"
                    onchange="toggleSelection('{{ $item->name }}', '{{ url('storage/'. $item->image) }}')"
                    style="pointer-events: none;">
                <div class="text-center">
                    <img src="{{ url('storage/'. $item->image) }}" alt="" class="" width="120" height="120">
                    <br>
                    <h5 class="card-title">{{ $item->name }}</h5>
                </div>
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
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Detail {{ $item->name }}</h1>
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



<script>
    document.addEventListener("DOMContentLoaded", function() {
        loadSelections();
    });

    function toggleCardSelection(item, imageUrl, checkboxId) {
        const checkbox = document.getElementById(checkboxId);

        if (checkbox.checked) {
            checkbox.checked = false;
        } else {
            checkbox.checked = true;
        }

        toggleSelection(item, imageUrl);
    }

    function toggleSelection(item, imageUrl) {
        let selections = JSON.parse(localStorage.getItem("selectedItems")) || [];

        if (selections.some(selection => selection.item === item)) {
            selections = selections.filter(selection => selection.item !== item);
        } else {
            selections.push({ item, imageUrl });
        }

        localStorage.setItem("selectedItems", JSON.stringify(selections));
        displaySelections();
    }

    function displaySelections() {
        const selectionContainer = document.getElementById("selection-container");
        selectionContainer.innerHTML = ""; // Mengosongkan kontainer sebelum menambahkan item

        const selections = JSON.parse(localStorage.getItem("selectedItems")) || [];

        if (selections.length === 0) {
            selectionContainer.innerHTML = `
                <div class="text-center">
                     <img src="/front/img/list_draw.png" alt="Draw List" class="img-fluid">
                    <p>Anda belum memilih produk yang diinginkan</p>
                    </div>
            `
            ; // Jika tidak ada pilihan
        } else {
            selections.forEach(selection => {
                const row = document.createElement("div");
                row.className = "row align-items-center mb-3 border-bottom";
                row.innerHTML = `
                    <div class="col-2 mb-2">
                        <img src="${selection.imageUrl}" alt="${selection.item}" class="img-fluid">
                    </div>
                    <div class="col-4 mb-2">
                        <p class="fw-semibold">${selection.item}</p>
                    </div>
                    <div class="col-5 mb-2">
                        <span class="d-flex justify-content-end">Diskusi Dengan Kami</span>
                    </div>
                    <div class="col-1 mb-2">
                        <button class="btn btn-link p-0 text-decoration-none" onclick="removeSelection('${selection.item}')">X</button>
                    </div>
                `;
                selectionContainer.appendChild(row);
            });
        }
    }

    function removeSelection(item) {
        let selections = JSON.parse(localStorage.getItem("selectedItems")) || [];
        selections = selections.filter(selection => selection.item !== item);
        localStorage.setItem("selectedItems", JSON.stringify(selections));
        displaySelections();
        document.getElementById(item.toLowerCase()).checked = false;
    }

    function loadSelections() {
        const selections = JSON.parse(localStorage.getItem("selectedItems")) || [];
        console.log(selections);

        selections.forEach(selection => {
            document.getElementById(selection.item.toLowerCase()).checked = true;
        });
        displaySelections();
    }

</script>