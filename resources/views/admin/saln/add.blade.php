@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-10 mx-auto">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">FORM</h4>
            @if (Auth::user()->is_admin == 1)
            <a style="padding: 5px 15px;" href="{{ route('saln.admin') }}" class="btn btn-primary btn-danger" type="button"><i class="fas fa-chevron-left"></i> Back</a>
            @else
            <a style="padding: 5px 15px;" href="{{ route('saln.user') }}" class="btn btn-primary btn-danger" type="button"><i class="fas fa-chevron-left"></i> Back</a>
            @endif
        </div>
    </div>
</div>

<div class="col-xl-10 mx-auto">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title text-center">SALN</h3><br>
            <form action="{{ route('store.saln') }}" method="POST" class="needs-validation">
                @csrf

                <div class="row">
                    <!-- Personal Information Section -->
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label class="form-label">NAME</label>
                            <div class="input-daterange input-group" id="validationCustom01">
                                <input type="text" class="form-control" name="lname" placeholder="Last Name" required/>
                                <input type="text" class="form-control" name="fname" placeholder="First Name" required/>
                                <input type="text" class="form-control" name="mname" placeholder="Middle Name (optional)" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="mb-3">
                            <label class="form-label">SUFFIX</label>
                            <input type="text" class="form-control" name="suffix" placeholder="e.g. Jr., Sr." />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label class="form-label">DATE OF BIRTH</label>
                            <input type="date" class="form-control" name="date_of_birth" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="validationCustom05" class="form-label">POSITION</label>
                            <input name="position" type="text" class="form-control" placeholder="Position" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">OFFICE/DEPARTMENT</label>
                            <select name="department" class="form-select" required>
                                <option selected disabled value="">Select a Department</option>
                                <option value="Department 1">Department 1</option>
                                <option value="Department 2">Department 2</option>
                                <!-- Add other departments as options -->
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">AGENCY</label>
                            <input name="agency" type="text" class="form-control" placeholder="Agency" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">EMAIL</label>
                            <input name="email" type="email" class="form-control" placeholder="Email (optional)">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">CONTACT NUMBER</label>
                            <input name="contact_number" type="text" class="form-control" placeholder="Contact Number (optional)">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">DATE FILED</label>
                            <input type="date" class="form-control" name="date_filed" required>
                        </div>
                    </div>

                    <!-- Assets Section -->
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">REAL PROPERTIES</label>
                            <input name="real_properties" type="number" step="0.01" class="form-control" placeholder="Real Properties">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">PERSONAL PROPERTIES</label>
                            <input name="personal_properties" type="number" step="0.01" class="form-control" placeholder="Personal Properties">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">TOTAL ASSETS</label>
                            <input name="total_assets" type="number" step="0.01" class="form-control" placeholder="Total Assets">
                        </div>
                    </div>

                    <!-- Liabilities Section -->
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">LIABILITIES</label>
                            <input name="liabilities" type="number" step="0.01" class="form-control" placeholder="Liabilities">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">NET WORTH</label>
                            <input name="net_worth" type="number" step="0.01" class="form-control" placeholder="Net Worth" readonly>
                        </div>
                    </div>

                    <!-- Other Details Section -->
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">BUSINESS INTERESTS</label>
                            <textarea name="business_interests" class="form-control" placeholder="Business Interests (optional)"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">FINANCIAL CONNECTIONS</label>
                            <textarea name="financial_connections" class="form-control" placeholder="Financial Connections (optional)"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">RELATIVES IN GOVERNMENT</label>
                            <textarea name="relatives_in_government" class="form-control" placeholder="Relatives in Government (optional)"></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-check mb-3"><br>
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                           required>
                    <label class="form-check-label" for="invalidCheck">
                        I hereby certify that the above information is true and correct based on my knowledge.
                    </label>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary btn-success" type="submit" style="padding: 10px 35px;"><i class="fas fa-save"></i>  SUBMIT</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
