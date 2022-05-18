@extends('layouts.layout')

@section('content')

<div >
      <section class="content">

 <div class="container-fluid" style="background-color: #F4F6F9!important;">
                        <div class="card card-outline card-primary" style="background-color: #F1FDFD;">
                          <div class="card-header p-1">                        
                            <h2 class="card-title pt-1 pl-1">
                              <i class="fas fa-users"></i>&nbsp;Role Management
                                <small class="text-muted">All Active Roles</small>
                            </h2>

                            <div class="card-tools mr-1">
                              <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group btn-group-sm">
                                        
                                        
                                  <a href="#"
                                    class="btn bg-success btn-flat btn-outline-success bg-gradient-success mr-1"><i
                                    class="fas fa-plus-circle"></i>&nbsp;Create Role</a>

                                  <a href="http://127.0.0.1:8000/roles"
                                    class="btn bg-success btn-flat btn-outline-success bg-gradient-success mr-1">&nbsp;<i
                                    class="fas fa-th-list"></i>&nbsp;All Roles</a>

                                  <div class="dropdown">
                                      <a class="btn btn-default btn-flat btn-outline-primary dropdown-toggle dropdown-icon" type="button"
                                      id="dropdownMenu1" data-toggle="dropdown">
                                        <i class="fas fa-cogs"></i>&nbsp;More
                                      </a>
                                      <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
                                              <li role="presentation"><a class="dropdown-item" role="menuitem" tabindex="-1"
                                                    href="#"><i
                                                  class="fas fa-ban"></i>&nbsp;Deactivated Roles
                                                  </a>
                                                </li>
                                                  <li role="presentation"><a class="dropdown-item" role="menuitem" tabindex="-1"
                                                    href="#"><i
                                                      class="fas fa-trash"></i>&nbsp;Trashed Roles
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
                    <th>Role</th>
                    <th>Identifier</th>
                    <th>Gaurd Name</th>
                    <th>Number of Permissions</th>
                    <th>Number of Users</th>
                    <th>Last Updated</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($roles as $role)
                          <tr>
                              <td>{{Str::title($role->name)}}</td>
                              <td>{{$role->name}}</td>
                              <td>{{$role->guard_name}}</td>
                              <td>{{$role->count_roles}}</td>
                              <td>u</td>
                              <td>{{Carbon\Carbon::parse($role->updated_at)->diffForHumans()}}</td>
                              <td class="text-center">
                                <span class="badge badge-success"> Active</span></td>
                              <td>
                                
                                <a href="" data-toggle="tooltip" data-placement="top" title="View User" class="btn btn-xs btn-flat btn-square mr-1 btn-info bg-gradient-primary"> 
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="" data-toggle="tooltip" data-placement="top" title="View User" class="btn btn-xs btn-flat btn-square mr-1 btn-info bg-gradient-primary"> 
                                  <i class="fas fa-ban"></i>
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