@extends('layouts.layout')

@section('content')

<div >
      <section class="content">

 <div class="container-fluid" style="background-color: #F4F6F9!important;">
                        <div class="card card-outline card-primary" style="background-color: #F1FDFD;">
                          <div class="card-header p-1">                        
                            <h2 class="card-title pt-1 pl-1">
                              <i class="fas fa-users"></i>&nbsp;User Management
                                <small class="text-muted">All Active Users</small>
                            </h2>

                            <div class="card-tools mr-1">
                              <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group btn-group-sm">
                                        
                                        
                                  <a href="#"
                                    class="btn bg-success btn-flat btn-outline-success bg-gradient-success mr-1"><i
                                    class="fas fa-plus-circle"></i>&nbsp;Create User</a>

                                  <a href="http://127.0.0.1:8000/users"
                                    class="btn bg-success btn-flat btn-outline-success bg-gradient-success mr-1">&nbsp;<i
                                    class="fas fa-th-list"></i>&nbsp;All Users</a>

                                  <div class="dropdown">
                                      <a class="btn btn-default btn-flat btn-outline-primary dropdown-toggle dropdown-icon" type="button"
                                      id="dropdownMenu1" data-toggle="dropdown">
                                        <i class="fas fa-cogs"></i>&nbsp;More
                                      </a>
                                      <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
                                              <li role="presentation"><a class="dropdown-item" role="menuitem" tabindex="-1"
                                                    href="#"><i
                                                  class="fas fa-ban"></i>&nbsp;Deactivated Users
                                                  </a>
                                                </li>
                                                  <li role="presentation"><a class="dropdown-item" role="menuitem" tabindex="-1"
                                                    href="#"><i
                                                      class="fas fa-trash"></i>&nbsp;Trashed Users
                                                      </a>
                                                  </li>
                                          </ul>
                                    </div>
                                  </div>
                              </div>
                            </div>
                </div>

<div class="card-body p-2">
                <table id="example2" class="table table-sm table-condensed table-striped table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Updated_At</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($users as $user)
                          <tr>
                              <td>{{$user->first_name}}</td>
                              <td>{{$user->last_name}}</td>
                              <td>{{$user->username}}</td>
                              <td>{{$user->email}}</td>
                              <td>{{$user->name}}</td>
                              <td>{{Carbon\Carbon::parse($user->updated_at)->diffForHumans()}}</td>
                              <th class="text-center">
                                <span class="badge badge-success"> Active</span></th>
                              <td>
                                <a href="" data-toggle="tooltip" data-placement="top" title="View User" class="btn btn-xs btn-flat btn-square mr-1 btn-info bg-gradient-info"> 
                                  <i class="fas fa-eye"></i>
                                </a>
                                <a href="" data-toggle="tooltip" data-placement="top" title="View User" class="btn btn-xs btn-flat btn-square mr-1 btn-info bg-gradient-primary"> 
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="" data-toggle="tooltip" data-placement="top" title="View User" class="btn btn-xs btn-flat btn-square mr-1 btn-info bg-gradient-primary"> 
                                  <i class="fas fa-ban"></i>
                                </a>
                                <a href="" data-toggle="tooltip" data-placement="top" title="View User" class="btn btn-xs btn-flat btn-square mr-1 btn-info bg-gradient-info"> 
                                  <i class="fas fa-user-secret"></i>
                                </a>
                                <a href="" data-toggle="tooltip" data-placement="top" title="View User" class="btn btn-xs btn-flat btn-square mr-1 btn-info bg-gradient-warning"> 
                                  <i class="fas fa-lock"></i>
                                </a>
                                <a href="" data-toggle="tooltip" data-placement="top" title="View User" class="btn btn-xs btn-flat btn-square mr-1 btn-info bg-gradient-danger"> 
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>

                        @endforeach
                  </tbody>
                  
                </table>
              </div>

              </section>
    </div>
@endsection