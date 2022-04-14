@extends('partialsDashboard.mainDashboard')
@section('dashboardContent')
    <div class="row">
        <div class="column">
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Keperluan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>random</td>
                            <td>data</td>
                            <td>placeholder Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque cupiditate nisi
                                explicabo fugiat ex alias exercitationem praesentium earum eos suscipit. Inventore molestias
                                autem
                                blanditiis nisi nihil voluptates architecto maxime natus!</td>
                            <td>text</td>
                        </tr>
                    </tbody>
                </table>
            </div> {{-- end of table --}}
        </div>
    </div>
@endsection
