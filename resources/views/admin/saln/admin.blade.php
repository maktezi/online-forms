@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">SALN</h4>
            <a href="{{ route('add.saln') }}" type="button" class="btn btn-primary waves-effect waves-light" style="padding: 8px 15px;">FORM</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        {{-- Saln Index --}}
        <div class="card">
            <div class="card-body">
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date of Birth</th>
                        <th>Position</th>
                        <th>Department</th>
                        <th>Agency</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Date Filed</th>
                        <th>Real Properties</th>
                        <th>Personal Properties</th>
                        <th>Total Assets</th>
                        <th>Liabilities</th>
                        <th>Net Worth</th>
                        <th>Business Interests</th>
                        <th>Financial Connections</th>
                        <th>Relatives in Government</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($salns as $saln)
                    <tr>
                        <td class="text-wrap">{{ $saln->lname }}, {{ $saln->fname }}, {{ $saln->mname }}</td>
                        <td class="text-wrap">{{ $saln->date_of_birth }}</td>
                        <td class="text-wrap">{{ $saln->position }}</td>
                        <td class="text-wrap">{{ $saln->department }}</td>
                        <td class="text-wrap">{{ $saln->agency }}</td>
                        <td class="text-wrap">{{ $saln->email }}</td>
                        <td class="text-wrap">{{ $saln->contact_number }}</td>
                        <td class="text-wrap">{{ $saln->date_filed }}</td>
                        <td class="text-wrap">{{ number_format($saln->real_properties, 2) }}</td>
                        <td class="text-wrap">{{ number_format($saln->personal_properties, 2) }}</td>
                        <td class="text-wrap">{{ number_format($saln->total_assets, 2) }}</td>
                        <td class="text-wrap">{{ number_format($saln->liabilities, 2) }}</td>
                        <td class="text-wrap">{{ number_format($saln->net_worth, 2) }}</td>
                        <td class="text-wrap">{{ $saln->business_interests }}</td>
                        <td class="text-wrap">{{ $saln->financial_connections }}</td>
                        <td class="text-wrap">{{ $saln->relatives_in_government }}</td>
                        <td class="text-center">
                            <div>
                                <a href="{{ route('view.saln', $saln->id) }}" class="btn btn-warning waves-effect waves-light" style="padding: 6px 10px;" target="_blank"><i class="ri-printer-fill"></i></a>
                                <a href="{{ route('edit.saln', $saln->id) }}" class="btn btn-primary waves-effect waves-light" style="padding: 6px 10px;"><i class="ri-file-edit-line"></i></a>
                                <button type="button" class="btn btn-danger waves-effect waves-light" style="padding: 6px 10px;" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $saln->id }}"><i class="ri-delete-bin-2-fill"></i></button>

                                <!-- Delete Modal -->
                                <div class="modal fade" id="deleteModal{{ $saln->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this record?
                                                <a href="{{ route('delete.saln', $saln->id) }}" class="btn btn-danger mt-3">Confirm</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- End Saln Index --}}
    </div>
</div>

@endsection
