@extends('layouts.app')

@section('webName', 'Danh sách thiết bị')

@section('css')
    css
@endsection

@section('content')
    <div class="content-profile">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <!-- Search section -->
                <div class="form-group">
                  <label for="active">Active</label>
                  <select class="form-control" id="active">
                    <option value="all">All</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="connected_status">Connected Status</label>
                  <select class="form-control" id="connected_status">
                    <option value="all">All</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="keywords">Keywords</label>
                  <input type="text" class="form-control" id="keywords" placeholder="Enter keywords">
                </div>
              </div>
              <div class="col-md-12">
                <!-- Content -->
                <h2>Device List</h2>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Device Code</th>
                      <th>Device Name</th>
                      <th>IP Address</th>
                      <th>Operation Status</th>
                      <th>Connection Status</th>
                      <th>Service Usage</th>
                      <th>Details</th>
                      <th>Updates</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>123456</td>
                      <td>Device Name 1</td>
                      <td>192.168.1.1</td>
                      <td>Online</td>
                      <td>Yes</td>
                      <td>100GB</td>
                      <td><a href="#">View Details</a></td>
                      <td><a href="#">Check for Updates</a></td>
                    </tr>
                    <tr>
                      <td>789012</td>
                      <td>Device Name 2</td>
                      <td>192.168.1.2</td>
                      <td>Offline</td>
                      <td>No</td>
                      <td>0GB</td>
                      <td><a href="#">View Details</a></td>
                      <td><a href="#">Check for Updates</a></td>
                    </tr>
                  </tbody>
                </table>
                <div class="pagination">
                  <ul>
                    <li><a href="#">Previous</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">Next</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection