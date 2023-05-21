@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Movie Data</h1>
    <div class="d-flex justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Movies</li>
        </ol>
        <a href="#">
            <button class="btn btn-success" type="submit">Create Data</button>
        </a>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Movies Data
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Poster</th>
                        <th>Genre</th>
                        <th>Negara</th>
                        <th>Tahun</th>
                        <th>Rating</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Poster</th>
                        <th>Genre</th>
                        <th>Negara</th>
                        <th>Tahun</th>
                        <th>Rating</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Train to Busan</td>
                        <td>image.png</td>
                        <td>Thriller</td>
                        <td>Korea</td>
                        <td>1994</td>
                        <td>9.0</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Mariposa</td>
                        <td>image.png</td>
                        <td>Fiksi Remaja</td>
                        <td>Indonesia</td>
                        <td>2020</td>
                        <td>8.5</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Waktu Magrib</td>
                        <td>image.png</td>
                        <td>Horor</td>
                        <td>Indonesia</td>
                        <td>2023</td>
                        <td>9.5</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Antares</td>
                        <td>image.png</td>
                        <td>Drama</td>
                        <td>Amerika Serikat</td>
                        <td>2020</td>
                        <td>8.9</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Danur</td>
                        <td>image.png</td>
                        <td>Horor</td>
                        <td>Indonesia</td>
                        <td>2015</td>
                        <td>9.2</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
