<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Manajemen Stok Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f5f7fa;
            font-family: Arial, Helvetica, sans-serif;
            color: #374151;
        }

        /* =========================
           GARIS WARNA ATAS
        ========================= */

        .top-lines {
            position: relative;
            width: 100%;
            height: 58px;

            background:
                linear-gradient(
                    to bottom,

                    #ed1c24 0px,
                    #ed1c24 17px,

                    #ffffff 17px,
                    #ffffff 21px,

                    #0877bd 21px,
                    #0877bd 38px,

                    #ffffff 38px,
                    #ffffff 42px,

                    #ffd200 42px,
                    #ffd200 58px
                );
        }

        /* =========================
           LOGO DI DEPAN GARIS
        ========================= */

        .logo-wrapper {
            position: absolute;

            top: 8px;
            left: 50%;

            transform: translateX(-50%);

            z-index: 999;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo {
            width: 125px;
            height: 45px;

            background: #ffffff;

            border: 4px solid #ed1c24;

            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            position: relative;

            box-shadow:
                0 0 0 3px #ffffff,
                0 2px 5px rgba(0, 0, 0, 0.15);

            transform: rotate(-2deg);
        }

        .logo::before {
            content: "";

            position: absolute;

            left: 5px;
            right: 5px;
            top: 5px;
            bottom: 5px;

            border: 1px solid #0877bd;

            border-radius: 50%;
        }

        .logo-text {
            position: relative;
            z-index: 2;

            color: #0877bd;

            font-size: 20px;

            font-weight: bold;

            font-style: italic;

            letter-spacing: -1px;

            transform: rotate(2deg);
        }

        .logo-text::after {
            content: "";

            position: absolute;

            left: 3px;
            right: 3px;
            bottom: -3px;

            height: 2px;

            background: #ed1c24;

            border-radius: 5px;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar-custom {
            height: 58px;

            background: #ffffff;

            border-bottom: 1px solid #e2e8f0;

            display: flex;

            align-items: center;

            justify-content: center;

            position: relative;
        }

        .navbar-title {
            color: #334155;

            font-size: 14px;

            font-weight: 600;
        }

        .navbar-title i {
            color: #0877bd;

            margin-right: 7px;

            font-size: 15px;
        }

        .admin-menu {
            position: absolute;

            right: 35px;

            top: 50%;

            transform: translateY(-50%);

            color: #475569;

            font-size: 12px;

            cursor: pointer;
        }

        .admin-menu i {
            color: #0877bd;

            margin-right: 5px;
        }

        .admin-menu .bi-chevron-down {
            font-size: 9px;

            margin-left: 4px;

            color: #64748b;
        }

        /* =========================
           CONTAINER UTAMA
        ========================= */

        .page-container {
            width: 100%;

            max-width: 1450px;

            margin: 25px auto;

            padding: 0 25px;
        }

        /* =========================
           ALERT
        ========================= */

        .alert-custom {
            border-radius: 6px;

            font-size: 13px;

            padding: 11px 15px;

            margin-bottom: 18px;
        }

        /* =========================
           LAYOUT FORM + TABLE
        ========================= */

        .content-wrapper {
            display: grid;

            grid-template-columns: 350px minmax(0, 1fr);

            gap: 20px;

            align-items: start;
        }

        /* =========================
           CARD
        ========================= */

        .card-custom {
            background: #ffffff;

            border: 1px solid #e1e7ed;

            border-radius: 6px;

            box-shadow:
                0 2px 6px rgba(0, 0, 0, 0.04);

            overflow: hidden;
        }

        .card-header-custom {
            height: 52px;

            padding: 0 18px;

            display: flex;

            align-items: center;

            color: #0877bd;

            font-size: 14px;

            font-weight: 600;

            border-bottom: 1px solid #e9edf1;

            background: #ffffff;
        }

        .card-header-custom i {
            margin-right: 8px;

            font-size: 15px;
        }

        /* =========================
           FORM
        ========================= */

        .form-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 17px;
        }

        .form-label-custom {
            display: block;

            font-size: 12px;

            font-weight: 600;

            color: #374151;

            margin-bottom: 7px;
        }

        .form-control-custom,
        .form-select-custom {
            width: 100%;

            height: 40px;

            padding: 8px 12px;

            border: 1px solid #d5dce3;

            border-radius: 5px;

            background: #ffffff;

            color: #374151;

            font-size: 12px;

            outline: none;

            transition: all 0.2s ease;
        }

        .form-control-custom::placeholder {
            color: #9ca3af;
        }

        .form-control-custom:focus,
        .form-select-custom:focus {
            border-color: #0877bd;

            box-shadow:
                0 0 0 3px rgba(8, 119, 189, 0.08);
        }

        /* =========================
           BUTTON FORM
        ========================= */

        .button-row {
            display: flex;

            gap: 8px;

            margin-top: 22px;
        }

        .btn-custom {
            height: 38px;

            padding: 0 17px;

            border: none;

            border-radius: 5px;

            font-size: 12px;

            font-weight: 600;

            cursor: pointer;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 6px;

            transition: 0.2s;
        }

        .btn-primary-custom {
            background: #0877bd;

            color: #ffffff;
        }

        .btn-primary-custom:hover {
            background: #06669f;
        }

        .btn-reset-custom {
            background: #eef1f4;

            color: #64748b;
        }

        .btn-reset-custom:hover {
            background: #e1e5e9;
        }

        /* =========================
           TABLE CARD
        ========================= */

        .table-card {
            min-width: 0;
        }

        .table-top {
            min-height: 52px;

            padding: 0 18px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            border-bottom: 1px solid #e9edf1;
        }

        .table-title {
            color: #0877bd;

            font-size: 14px;

            font-weight: 600;
        }

        .table-title i {
            margin-right: 8px;
        }

        /* =========================
           BUTTON TAMBAH
        ========================= */

        .btn-add {
            height: 36px;

            background: #0877bd;

            color: #ffffff;

            border: none;

            border-radius: 5px;

            padding: 0 15px;

            font-size: 11px;

            font-weight: 600;

            cursor: pointer;

            display: flex;

            align-items: center;

            gap: 6px;

            transition: 0.2s;
        }

        .btn-add:hover {
            background: #06669f;

            transform: translateY(-1px);
        }

        /* =========================
           SEARCH
        ========================= */

        .table-tools {
            padding: 15px 18px;
        }

        .search-wrapper {
            position: relative;

            width: 230px;
        }

        .search-wrapper i {
            position: absolute;

            left: 11px;

            top: 50%;

            transform: translateY(-50%);

            color: #94a3b8;

            font-size: 13px;
        }

        .search-input {
            width: 100%;

            height: 36px;

            padding: 7px 10px 7px 34px;

            border: 1px solid #dce2e8;

            border-radius: 5px;

            font-size: 11px;

            outline: none;
        }

        .search-input:focus {
            border-color: #0877bd;

            box-shadow:
                0 0 0 3px rgba(8, 119, 189, 0.06);
        }

        /* =========================
           TABLE
        ========================= */

        .table-responsive {
            padding: 0 15px;

            overflow-x: auto;
        }

        .stok-table {
            width: 100%;

            border-collapse: collapse;

            min-width: 750px;
        }

        .stok-table thead th {
            background: #eaf3fb;

            color: #315b7d;

            font-size: 11px;

            font-weight: 600;

            padding: 12px 10px;

            text-align: left;

            white-space: nowrap;

            border-bottom: 1px solid #d7e4ee;
        }

        .stok-table tbody td {
            padding: 11px 10px;

            font-size: 11px;

            color: #4b5563;

            border-bottom: 1px solid #edf0f3;

            vertical-align: middle;

            white-space: nowrap;
        }

        .stok-table tbody tr:hover {
            background: #f9fbfd;
        }

        .stok-table th:first-child,
        .stok-table td:first-child {
            width: 50px;

            text-align: center;
        }

        .stok-table th:last-child,
        .stok-table td:last-child {
            width: 95px;

            text-align: center;
        }

        /* =========================
           BADGE STOK
        ========================= */

        .stok-badge {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            min-width: 38px;

            height: 25px;

            padding: 0 9px;

            border-radius: 13px;

            font-size: 10px;

            font-weight: 700;
        }

        /* 0 = MERAH */

        .stok-zero {
            background: #fee2e2;

            color: #dc2626;

            border: 1px solid #fecaca;
        }

        /* 1 - 10 = KUNING */

        .stok-warning {
            background: #fef3c7;

            color: #d97706;

            border: 1px solid #fde68a;
        }

        /* 11 - 50 = ORANGE */

        .stok-orange {
            background: #ffedd5;

            color: #ea580c;

            border: 1px solid #fed7aa;
        }

        /* 51 - 100 = BIRU */

        .stok-blue {
            background: #dbeafe;

            color: #2563eb;

            border: 1px solid #bfdbfe;
        }

        /* >100 = HIJAU */

        .stok-safe {
            background: #dcfce7;

            color: #16a34a;

            border: 1px solid #bbf7d0;
        }

        /* =========================
           ACTION BUTTON
        ========================= */

        .action-buttons {
            display: flex;

            justify-content: center;

            align-items: center;

            gap: 6px;
        }

        .btn-action {
            width: 30px;

            height: 30px;

            border: none;

            border-radius: 4px;

            color: #ffffff;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            cursor: pointer;

            padding: 0;

            transition: 0.2s;
        }

        .btn-action i {
            font-size: 12px;
        }

        .btn-edit {
            background: #fbbf24;
        }

        .btn-edit:hover {
            background: #f59e0b;

            transform: translateY(-1px);
        }

        .btn-delete {
            background: #ef4444;
        }

        .btn-delete:hover {
            background: #dc2626;

            transform: translateY(-1px);
        }

        /* =========================
           TABLE FOOTER
        ========================= */

        .table-footer {
            min-height: 55px;

            padding: 0 18px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            color: #7b8794;

            font-size: 10px;
        }

        .pagination-custom {
            display: flex;

            align-items: center;

            gap: 4px;
        }

        .page-btn {
            width: 30px;

            height: 30px;

            border: 1px solid #e1e6eb;

            background: #ffffff;

            color: #64748b;

            border-radius: 4px;

            font-size: 11px;

            display: flex;

            align-items: center;

            justify-content: center;

            cursor: pointer;
        }

        .page-btn.active {
            background: #0877bd;

            color: #ffffff;

            border-color: #0877bd;
        }

        /* =========================
           FOOTER
        ========================= */

        .footer {
            margin-top: 30px;

            min-height: 55px;

            background: #ffffff;

            border-top: 1px solid #e5e7eb;

            display: flex;

            justify-content: center;

            align-items: center;

            color: #0877bd;

            font-size: 10px;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 1000px) {

            .content-wrapper {
                grid-template-columns: 1fr;
            }

            .form-body {
                padding: 20px;
            }

            .page-container {
                padding: 0 15px;
            }
        }

        @media (max-width: 600px) {

            .logo {
                width: 105px;

                height: 40px;
            }

            .logo-text {
                font-size: 17px;
            }

            .admin-menu {
                right: 15px;
            }

            .navbar-title {
                margin-left: -50px;
            }

            .table-top {
                flex-direction: column;

                align-items: flex-start;

                gap: 10px;

                padding-top: 14px;

                padding-bottom: 14px;
            }

            .search-wrapper {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    {{-- =========================================
         GARIS MERAH - BIRU - KUNING
         LOGO BERADA DI DEPAN GARIS
    ========================================== --}}

    <div class="top-lines">

        <div class="logo-wrapper">

            <div class="logo">

                <span class="logo-text">
                    Indomaret
                </span>

            </div>

        </div>

    </div>


    {{-- =========================================
         NAVBAR
    ========================================== --}}

    <div class="navbar-custom">

        <div class="navbar-title">

            <i class="bi bi-box-seam"></i>

            Manajemen Stok Barang

        </div>

        <div class="admin-menu">

            <i class="bi bi-person"></i>

            Admin

            <i class="bi bi-chevron-down"></i>

        </div>

    </div>


    {{-- =========================================
         CONTENT
    ========================================== --}}

    <main class="page-container">

        {{-- SUCCESS --}}
        @if(session('success'))

            <div class="alert alert-success alert-custom">

                <i class="bi bi-check-circle"></i>

                {{ session('success') }}

            </div>

        @endif


        {{-- ERROR --}}
        @if($errors->any())

            <div class="alert alert-danger alert-custom">

                <ul class="mb-0 ps-3">

                    @foreach($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        <div class="content-wrapper">


            {{-- =================================
                 FORM STOK BARANG
            ================================== --}}

            <div class="card-custom" id="form-stok">

                <div class="card-header-custom">

                    <i class="bi bi-card-checklist"></i>

                    Form Stok Barang

                </div>


                <div class="form-body">

                    <form
                        action="{{ route('stok.store') }}"
                        method="POST"
                    >

                        @csrf


                        {{-- KODE BARANG --}}

                        <div class="form-group">

                            <label class="form-label-custom">
                                Kode Barang
                            </label>

                            <input
                                type="text"
                                name="kode_barang"
                                class="form-control-custom"
                                placeholder="Contoh: BRG001"
                                value="{{ old('kode_barang') }}"
                                required
                            >

                        </div>


                        {{-- NAMA BARANG --}}

                        <div class="form-group">

                            <label class="form-label-custom">
                                Nama Barang
                            </label>

                            <input
                                type="text"
                                name="nama_barang"
                                class="form-control-custom"
                                placeholder="Masukkan nama barang"
                                value="{{ old('nama_barang') }}"
                                required
                            >

                        </div>


                        {{-- KATEGORI --}}

                        <div class="form-group">

                            <label class="form-label-custom">
                                Kategori
                            </label>

                            <select
                                name="kategori"
                                class="form-select-custom"
                                required
                            >

                                <option value="">
                                    Pilih Kategori
                                </option>

                                <option value="Makanan"
                                    {{ old('kategori') == 'Makanan' ? 'selected' : '' }}>
                                    Makanan
                                </option>

                                <option value="Minuman"
                                    {{ old('kategori') == 'Minuman' ? 'selected' : '' }}>
                                    Minuman
                                </option>

                                <option value="Kebutuhan Rumah"
                                    {{ old('kategori') == 'Kebutuhan Rumah' ? 'selected' : '' }}>
                                    Kebutuhan Rumah
                                </option>

                                <option value="Bumbu"
                                    {{ old('kategori') == 'Bumbu' ? 'selected' : '' }}>
                                    Bumbu
                                </option>

                                <option value="Perawatan"
                                    {{ old('kategori') == 'Perawatan' ? 'selected' : '' }}>
                                    Perawatan
                                </option>

                            </select>

                        </div>


                        {{-- HARGA --}}

                        <div class="form-group">

                            <label class="form-label-custom">
                                Harga (Rp)
                            </label>

                            <input
                                type="number"
                                name="harga"
                                class="form-control-custom"
                                placeholder="Masukkan harga"
                                value="{{ old('harga') }}"
                                min="0"
                                required
                            >

                        </div>


                        {{-- STOK --}}

                        <div class="form-group">

                            <label class="form-label-custom">
                                Stok
                            </label>

                            <input
                                type="number"
                                name="stok"
                                class="form-control-custom"
                                placeholder="Masukkan jumlah stok"
                                value="{{ old('stok') }}"
                                min="0"
                                required
                            >

                        </div>


                        {{-- BUTTON --}}

                        <div class="button-row">

                            <button
                                type="submit"
                                class="btn-custom btn-primary-custom"
                            >

                                <i class="bi bi-save"></i>

                                Simpan

                            </button>


                            <button
                                type="reset"
                                class="btn-custom btn-reset-custom"
                            >

                                <i class="bi bi-arrow-counterclockwise"></i>

                                Reset

                            </button>

                        </div>

                    </form>

                </div>

            </div>


            {{-- =================================
                 DATA STOK BARANG
            ================================== --}}

            <div class="card-custom table-card">


                {{-- HEADER TABLE --}}

                <div class="table-top">

                    <div class="table-title">

                        <i class="bi bi-card-list"></i>

                        Data Stok Barang

                    </div>


                    <button
                        type="button"
                        class="btn-add"
                        onclick="document.getElementById('form-stok').scrollIntoView({behavior: 'smooth'})"
                    >

                        <i class="bi bi-plus-lg"></i>

                        Tambah Barang

                    </button>

                </div>


                {{-- SEARCH --}}

                <div class="table-tools">

                    <div class="search-wrapper">

                        <i class="bi bi-search"></i>

                        <input
                            type="text"
                            id="searchInput"
                            class="search-input"
                            placeholder="Cari nama / kode barang..."
                        >

                    </div>

                </div>


                {{-- TABLE --}}

                <div class="table-responsive">

                    <table class="stok-table">

                        <thead>

                            <tr>

                                <th>
                                    No
                                </th>

                                <th>
                                    Kode Barang
                                </th>

                                <th>
                                    Nama Barang
                                </th>

                                <th>
                                    Kategori
                                </th>

                                <th>
                                    Harga
                                </th>

                                <th>
                                    Stok
                                </th>

                                <th>
                                    Aksi
                                </th>

                            </tr>

                        </thead>


                        <tbody id="stokTableBody">

                            @forelse($stoks as $index => $stok)

                                <tr>

                                    <td>
                                        {{ $index + 1 }}
                                    </td>


                                    <td>
                                        {{ $stok->kode_barang }}
                                    </td>


                                    <td>
                                        {{ $stok->nama_barang }}
                                    </td>


                                    <td>
                                        {{ $stok->kategori }}
                                    </td>


                                    <td>
                                        Rp {{ number_format($stok->harga, 0, ',', '.') }}
                                    </td>


                                    {{-- ======================
                                         STATUS STOK
                                    ======================= --}}

                                    <td>

                                        @if($stok->stok == 0)

                                            <span class="stok-badge stok-zero">
                                                {{ $stok->stok }}
                                            </span>

                                        @elseif($stok->stok <= 10)

                                            <span class="stok-badge stok-warning">
                                                {{ $stok->stok }}
                                            </span>

                                        @elseif($stok->stok <= 50)

                                            <span class="stok-badge stok-orange">
                                                {{ $stok->stok }}
                                            </span>

                                        @elseif($stok->stok <= 100)

                                            <span class="stok-badge stok-blue">
                                                {{ $stok->stok }}
                                            </span>

                                        @else

                                            <span class="stok-badge stok-safe">
                                                {{ $stok->stok }}
                                            </span>

                                        @endif

                                    </td>


                                    {{-- ======================
                                         AKSI
                                    ======================= --}}

                                    <td>

                                        <div class="action-buttons">


                                            {{-- EDIT --}}

                                            <a
                                                href="{{ route('stok.edit', $stok->id) }}"
                                                class="btn-action btn-edit"
                                                title="Edit"
                                            >

                                                <i class="bi bi-pencil-fill"></i>

                                            </a>


                                            {{-- DELETE --}}

                                            <form
                                                action="{{ route('stok.destroy', $stok->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Yakin ingin menghapus barang ini?')"
                                                style="display:inline;"
                                            >

                                                @csrf

                                                @method('DELETE')


                                                <button
                                                    type="submit"
                                                    class="btn-action btn-delete"
                                                    title="Hapus"
                                                >

                                                    <i class="bi bi-trash-fill"></i>

                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td
                                        colspan="7"
                                        style="
                                            text-align:center;
                                            padding:50px;
                                            color:#9ca3af;
                                        "
                                    >

                                        <i
                                            class="bi bi-inbox"
                                            style="font-size:35px;"
                                        ></i>

                                        <br>

                                        <span style="
                                            display:block;
                                            margin-top:10px;
                                            font-size:12px;
                                        ">
                                            Belum ada data stok barang.
                                        </span>

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>


                {{-- FOOTER TABLE --}}

                <div class="table-footer">

                    <div>

                        Menampilkan
                        <strong>{{ $stoks->count() }}</strong>
                        data

                    </div>


                    <div class="pagination-custom">

                        <button class="page-btn">

                            <i class="bi bi-chevron-left"></i>

                        </button>


                        <button class="page-btn active">

                            1

                        </button>


                        <button class="page-btn">

                            <i class="bi bi-chevron-right"></i>

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </main>


    {{-- =========================================
         FOOTER
    ========================================== --}}

    <footer class="footer">

        © 2024 Indomaret - Sistem Manajemen Stok

    </footer>


    {{-- =========================================
         SEARCH JAVASCRIPT
    ========================================== --}}

    <script>

        const searchInput =
            document.getElementById('searchInput');

        searchInput.addEventListener('keyup', function () {

            const keyword =
                this.value.toLowerCase();

            const rows =
                document.querySelectorAll(
                    '#stokTableBody tr'
                );

            rows.forEach(function (row) {

                const text =
                    row.innerText.toLowerCase();

                if (text.includes(keyword)) {

                    row.style.display = '';

                } else {

                    row.style.display = 'none';

                }

            });

        });

    </script>

</body>
</html>