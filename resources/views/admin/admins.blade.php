@include('admin.layouts.header')
        <div id="main-wrapper">
            @include('admin.layouts.navigation')
            @include('admin.layouts.sidebar')
            <div class="page-wrapper">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-dark">Site Admins</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                            <li class="breadcrumb-item active">Site Admins</li>
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
                                                    <th class="width_table1">username</th>
                                                    <th class="width_table1">email</th>
                                                    <th class="width_table1">firstname</th>
                                                    <th class="width_table1">middlename</th>
                                                    <th class="width_table1">lastname</th>
                                                    <th class="width_table1">invested</th>
                                                    <th class="width_table1">current invested</th>
                                                    <th class="width_table1">deposit balance</th>
                                                    <th class="width_table1">referral bonus</th>
                                                    <th class="width_table1">total withdrawn</th>
                                                    <th class="width_table1">Reg Date</th>
                                                    <th class="width_table1">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($admins as $site_admin)
                                                    <tr class="background_white">
                                                        <td>
                                                            <h5>{{ $site_admin['name'] }}</h5>
                                                        </td>
                                                        <td>
                                                            <h5>{{ $site_admin['email'] }}</h5>
                                                        </td>
                                                        <td>
                                                            <h5>{{ $site_admin['firstname'] }}</h5>
                                                        </td>
                                                        <td>
                                                            <h5>{{ $site_admin['middlename'] }}</h5>
                                                        </td>
                                                        <td>
                                                            <h5>{{ $site_admin['lastname'] }}</h5>
                                                        </td>
                                                        <td>
                                                            <h5>{{ $site_admin['invested'] ? 'True' : 'False'}}</h5>
                                                        </td>
                                                        <td>
                                                            ${{ $site_admin['currently_invested'] }}
                                                        </td>
                                                        <td>
                                                            ${{ $site_admin['deposit_balance'] }}
                                                        </td>
                                                        <td>
                                                            ${{ $site_admin['referral_bonus'] }}
                                                        </td>
                                                        <td>
                                                            ${{ $site_admin['total_withdrawn'] }}
                                                        </td>
                                                        <td>
                                                            {{ $site_admin['created_at'] }}
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="dropdown">
                                                                <button class="btn btn-outline-dark" type="button" data-toggle="dropdown">
                                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <form action="" method="POST">
                                                                        @csrf
                                                                        <input type="hidden" name="id" value="{{ $site_admin['id'] }}">
                                                                        <input type="hidden" name="action" value="view">
                                                                        <input type="hidden" name="view" value="members">
                                                                        <button type="submit" data-action="delete" data-id="{{ $site_admin['id'] }}" class="dropdown-item" href="#">View</button>
                                                                    </form>
                                                                
                                                                    <form action="" method="POST">
                                                                        @csrf
                                                                        <input type="hidden" name="id" value="{{ $site_admin['id'] }}">
                                                                        <input type="hidden" name="action" value="suspend">
                                                                        <input type="hidden" name="view" value="members">

                                                                        <button type="submit" data-action="delete" data-id="{{ $site_admin['id'] }}" class="dropdown-item" href="#">Suspend</button>
                                                                    </form>
                                                                    <form action="" method="POST">
                                                                        @csrf
                                                                        <input type="hidden" name="id" value="{{ $site_admin['id'] }}">
                                                                        <input type="hidden" name="action" value="{{ $site_admin['is_admin'] ? 'remove' : 'make'}}Admin">
                                                                        <input type="hidden" name="view" value="members">
                                                                        <button type="submit" data-action="delete" data-id="{{ $site_admin['id'] }}" class="dropdown-item" href="#">{{ $site_admin['is_admin'] ? 'Remove' : 'Make'}} Admin</button>
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
