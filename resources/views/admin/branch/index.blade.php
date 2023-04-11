@extends('layouts.mydashboard')
@section('title', 'Branch')
@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 text-end">
                                    <a href="{{ route('branchs.create') }}" class="btn btn-primary"><i class="bx bx-plus align-middle" style="font-size: 26px"></i> Yangi Qo'shish</a>
                                </div>

                                <div class="col-lg-12 mt-4">
                                    <div class="card">
                                        <h5 class="card-header">Filiallar Ro'yxati</h5>
                                        <div class="table-responsive text-nowrap">
                                            <div class="offset-md-1 col-md-10">
                                                @if($message = session()->get('success'))
                                                    <div class="alert alert-success alert-dismissible" role="alert">
                                                        {{ $message }}
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                @endif
                                                @if($message = session()->get('error'))
                                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                                        {{ $message }}
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                @endif
                                            </div>
                                            <table class="table">
                                                <thead class="table-light ">
                                                <tr>
                                                    <th>№</th>
                                                    <th>Nomi</th>
                                                    <th>Manzili</th>
                                                    <th>Telefon Raqami</th>
                                                    <th>Surati</th>
                                                    <th>Amallar</th>
                                                </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                @foreach($branchAll as $branch)
                                                    <tr>
                                                        <td><strong>{{ $loop->iteration }}</strong></td>
                                                        <td>{{ $branch->name }}</td>
                                                        <td>
                                                           {{\Illuminate\Support\Str::limit($branch->address, 15)}}
                                                        </td>
                                                        <td>
                                                           {{ $branch->phone }}
                                                        </td>
                                                        <td>
                                                            <img src="/site/images/{{ $branch->image}}" class="img-thumbnail" width="60">
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-success btn-sm" href="{{ route('branchs.show',$branch->id ) }}"><i class="bx bx-show me-1"></i> Ko'rish</a>
                                                            <a class="btn btn-info btn-sm" href=" {{ route('branchs.edit', $branch->id) }}"><i class="bx bx-edit-alt me-1"></i> Tahrirlash</a>
                                                            <a class="btn btn-danger btn-sm" href=" {{ route('branchs.destroy', $branch->id) }}"><i class="bx bx-trash me-1"></i> O'chirish</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
