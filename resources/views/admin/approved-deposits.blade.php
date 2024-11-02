@include('admin.layouts.header')
        <div id="main-wrapper">
            @include('admin.layouts.navigation')
            @include('admin.layouts.sidebar')
            <div class="page-wrapper">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-dark">Approved Deposits</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                            <li class="breadcrumb-item active">Approved Deposits</li>
                        </ol>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            @include('admin.layouts.errors')
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                    <div class="table-responsive m-t-10">
                                        <table id="record-table" class="display record-table record-export nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <td>Type</td>
                                                    <th>Plan</th>
                                                    <th>Wallet</th>
                                                    <th>Amount</th>
                                                    <th>Transaction Hash</th>
                                                    <th>Status</th>
                                                    <th>Date</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($deposits as $deposit)
                                                <tr>
                                                    <td>{{ $deposit->user->name }}</td>
                                                    <td>{{ $deposit->reinvestment ? 'Reinvestment' : 'Deposit' }}</td>
                                                    <td>{{ isset($deposit->plan_name) ? $deposit->plan_name : 'null' }}</td>
                                                    <td>{{ $deposit->wallet->currency }}</td>
                                                    <td>${{ number_format($deposit['amount'], 2) }}</td>
                                                    <td>{{ $deposit['transaction_hash'] }}</td>
                                                    <td>
                                                        <span class="badge badge-success text-dark badge-pill px-2 py-1"> {{ $deposit['status'] }} </span>
                                                    </td>
                                                    <td>{{ $deposit['created_at'] }}</td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <button class="btn btn-outline-dark" type="button" data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a 
                                                                    data-plan_name="{{ $deposit['plan_name'] }}" 
                                                                    data-amount="{{ $deposit['amount'] }}" 
                                                                    data-plan_interest_rate="{{ $deposit['plan_interest_rate'] }}" 
                                                                    data-plan_referral_bonus="{{ $deposit['plan_referral_bonus'] }}" 
                                                                    data-remaining_duration="{{ $deposit['remaining_duration'] }}" 
                                                                    data-id="{{ $deposit['id'] }}" 
                                                                    class="action-link edit-deposit dropdown-item" href="#"
                                                                    data-action="edit"
                                                                >
                                                                    Edit
                                                                </a>
                                                                <form action="" method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ $deposit['id'] }}">
                                                                    <input type="hidden" name="action" value="delete">
                                                                    <button type="submit" data-action="delete" data-id="{{ $deposit['id'] }}" class="dropdown-item" href="#">Delete</button>
                                                                </form>
                                                            </div>
                                                          </div>
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
                @include('admin.layouts.footer')
            </div>
        </div>

        <div class="modal" id="deposit-modal">
            <form class="page-form deposit-form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">
                        Deposit Plan
                    </label>
                    <input required type="text" class="form-control require bg-light text-dark" name="plan_name" placeholder="Enter Investment Plan Name">
                </div>
                <div class="form-group">
                    <label for="">
                        Deposit Amount
                    </label>
                    <input required type="text" class="form-control require bg-light text-dark" name="amount" placeholder="Edit Deposit Amount">
                </div>
                <div class="form-group">
                    <label for="">
                        Deposit Interest Rate
                    </label>
                    <input required type="text" class="form-control require bg-light text-dark" name="plan_interest_rate" placeholder="Edit Deposit Interest Rate">
                </div>

                <div class="form-group">
                    <label for="">
                        Deposit Remaining Duration
                    </label>
                    <input required type="text" class="form-control require bg-light text-dark" name="remaining_duration" placeholder="Edit Deposit Remaining Duration">
                </div>
              
                <div>
                <input type="hidden" class="form-control bg-light text-dark" name="id" value="">
                <input type="hidden" class="form-control bg-light text-dark" name="action" value="edit">

                <button type="submit" class="btn btn-primary rounded-btn w-100">
                    <span class="form-loading d-none px-5">
                        <i class="fa fa-sync fa-spin"></i>
                    </span>
                    <span class='submit-text'>
                        Submit
                    </span>
                </button>
                </div>
            </form>
        </div>

        @include('admin.layouts.general-scripts')
        <script src="www.amcharts.com/lib/3/amcharts.js"></script>
        <script src="{{  asset('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{  asset('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js') }}"></script>
        <script src="{{  asset('assets/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js') }}"></script>
        <script src="{{  asset('assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js') }}"></script>
        <script src="{{  asset('assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js') }}"></script>
        <script src="{{  asset('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js') }}"></script>
        <script src="{{  asset('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js') }}"></script>
        <script src="{{  asset('assets/js/custom.min.js') }}"></script>
        <script src="{{  asset('assets/js/fn.js') }}"></script>
        <script src="{{  asset('assets/js/main.js') }}"></script>
        <script src="{{  asset('assets/js/admin.pending-deposits.js') }}"></script>
    </body>
</html>
