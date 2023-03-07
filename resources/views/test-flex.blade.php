@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center p-4">Test Flex</h1>
    <div class="d-flex flex-md-row flex-column">
        <div class="p-2">
            <button class="btn btn-outline-success">Tambah</button>
            <button class="btn btn-outline-warning">Import</button>
            <button class="btn btn-outline-info">Export</button>
        </div>
        <div class="p-2">
            <div class="input-group">
                <input type="search" class="form-control rounded" placeholder="Cari" aria-label="Cari" aria-describedby="search-addon">
                <button type="button" class="btn btn-outline-primary">Cari</button>
            </div>
        </div>
        <div class="p-2">
            <select class="custom-select" aria-label="Default select example">
                <option selected disabled value="">Pilih Tahun</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2021</option>
            </select>
        </div>
    </div>
</div>
@endsection
