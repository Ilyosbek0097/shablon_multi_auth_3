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
                                            <table class="table">
                                                <thead class="table-light">
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
                                                <tr>
                                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                                                    <td>Albert Cook</td>
                                                    <td>
                                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="" data-bs-original-title="Lilian Fuller">
                                                                <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="" data-bs-original-title="Sophia Wilkerson">
                                                                <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="" data-bs-original-title="Christina Parker">
                                                                <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="" data-bs-original-title="Lilian Fuller">
                                                                <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="" data-bs-original-title="Sophia Wilkerson">
                                                                <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="" data-bs-original-title="Christina Parker">
                                                                <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td><span class="badge bg-label-primary me-1">Active</span></td>
                                                    <td>
                                                        <a class="btn btn-success btn-sm" href=""><i class="bx bx-show me-1"></i> Edit</a>
                                                        <a class="btn btn-info btn-sm" href=""><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                        <a class="btn btn-danger btn-sm" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                    </td>
                                                </tr>
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
