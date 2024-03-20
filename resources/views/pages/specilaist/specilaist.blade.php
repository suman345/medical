<x-layout.app>

<x-slot:title>
        Specialist
</x-slot>
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group float-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Zoogler</a></li>
                            <li class="breadcrumb-item"><a href="#">Tables</a></li>
                            <li class="breadcrumb-item active">Datatable</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Datatable</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->
        

        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <div class="">
                            <table id="datatable2" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>SI No</th>
                                    <th>Specialist</th>
                                    <th>Action</th>
                                </tr>
                                </thead>


                                <tbody>
                                    @foreach($spcilalist_data as $key => $value)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $value->name ?? 'N/A' }}</td>
                                        <td></td>
                                    </tr>
                                    @endforeach

                                
                                </tbody>
                            </table>
                        </div>           
                    </div>
                </div>
            </div>
        </div><!--end row-->


    </div><!-- container -->

</div>
</x-layout.app>
