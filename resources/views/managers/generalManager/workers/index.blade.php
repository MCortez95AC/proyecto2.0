@extends('managers.layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="card-title">Restaurant Workers</h3>
                </div>
                <div class="card-body  table-responsive">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Name </th>
                            <th>LastName</th>
                            <th>DNI</th>
                            <th>Area</th>
                            <th>Admin?</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Miguel</td>
                            <td>Cortez</td>
                            <td>Y4558259-4SD</td>
                            <td>Restaurant</td>
                            <td>Si</td>
                        </tr>
                        <tr>
                            <td>Miguelinho</td>
                            <td>Cortez</td>
                            <td>Z4558259-4SD</td>
                            <td>Room Service</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>Miquel</td>
                            <td>Chavez</td>
                            <td>Y4558259-4SF</td>
                            <td>Restaurant</td>
                            <td>NO</td>
                        </tr>
                        <tr>
                            <td>Marta</td>
                            <td>Bella</td>
                            <td>Y4csf8259-4SD</td>
                            <td>Pool</td>
                            <td>Si</td>
                        </tr>
                        <tr>
                            <td>Oriol</td>
                            <td>Cortes</td>
                            <td>Z4cfed59-4SD</td>
                            <td>Room Service</td>
                            <td>Si</td>
                        </tr>
                        <tr>
                            <td>M.Gaya</td>
                            <td>Cortes</td>
                            <td>Ycdss8259-4SF</td>
                            <td>Restaurant</td>
                            <td>NO</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <aside class="control-sidebar control-sidebar-dark"></aside>
        </div>
    </div>
@endsection