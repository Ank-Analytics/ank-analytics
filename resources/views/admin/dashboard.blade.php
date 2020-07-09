@extends('layouts.ank')

@section('title')
   Dashboard | ANK Analytics
@endsection


@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Simple Table for content test...</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Country</th>
                      <th>Main City</th>
                      <th>Company</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Gambia</td>
                        <td>Banjul</td>
                        <td>ANK Analytics</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection


@section('scripts')

@endsection