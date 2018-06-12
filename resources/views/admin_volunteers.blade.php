<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin | The Affinity Club </title>

    @include("includes.admin-index-head")
    <script>
      function getStates(){
            $.post("get_state",
            {
                country: document.getElementById('country').value
            },
            function(data, status){
              console.log(data);
              $.each(data.states, function(i, d) {
                $('#state').append('<option value="' + d.state + '">' + d.state + '</option>');
              });
            });
      }
      function getStates1(){
            $.post("get_state",
            {
                country: document.getElementById('country_input').value
            },
            function(data, status){
              console.log(data);
              $.each(data.states, function(i, d) {
                $('#state1').append('<option value="' + d.state + '">' + d.state + '</option>');
              });
            });
      }
    </script> 
    <script>
      function openEditModal(data){
        $('#edit_modal').modal('show');
        document.getElementById('edit_title').innerHTML = 'Edit ' +data.title;
        document.getElementById('title_input').value = data.title;
        document.getElementById('ntk_input').value = data.ntk;
        document.getElementById('post_input').value = data.post;
        document.getElementById('volunteer_id').value = data.id;
        document.getElementById('reservation-time').value = data.start_date + ' - ' + data.end_date;
        
      }
      
      function openMyModal(data){
        $('#view_modal').modal('show');
        document.getElementById('title').innerHTML = data.title + '   <p style="color: #b33857;font-size: 12px;font-weight: 600;">From ' + data.created_at +'</p>';
        document.getElementById('body-1').innerHTML = '<img src="public/' + data.avatar + '"  style="width:100% !important; height:auto;" >';
        document.getElementById('body-02').innerHTML = data.start_date + ' - ' + data.end_date;
        document.getElementById('body-2').innerHTML = data.country + ', ' + data.state;
        document.getElementById('body-3').innerHTML = data.post; 
        document.getElementById('body-4').innerHTML = data.ntk;
        document.getElementById('body-5').innerHTML = data.category;  
      }
    </script> 
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"> <span>The Affinity Club</span></a>
            </div>

            <div class="clearfix"></div>

            @include("includes.admin-menu")

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                @if(Session::has('error'))
                    <div class="alert alert-danger"> {{Session::get('error')}} </div>
                @endif
                
                @if(Session::has('success'))
                    <div class="alert alert-success"> {{Session::get('success')}} </div>
                @endif
                <div class="x_panel">
                  <div class="x_title">Volunteer <small>Posts</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Avatar</th>
                          <th>Title</th>
                          <th>Created </th>
                          <th>Action </th>
                        </tr>
                      </thead>


                      <tbody>
                      @foreach ($volunteers as $volunteer) 
                        <tr>
                          <td>
                            <div class="profile_pic">
                              <img src="public/{{ $volunteer->avatar or 'images/profile.png'}}" style="width:60px !important; height:60px;" alt="..." class="img-circle profile_img">
                            </div>
                          </td>
                          <td>{!! $volunteer->title !!}</td>
                          <td>{!! $volunteer->created_at !!}</td>
                          <td><a class="btn btn-default btn-success source" href="javascript:void(0)" onclick='openEditModal(<?php echo json_encode($volunteer); ?>)'><i class="fa fa-pencil"></i></a>
                          <button class="btn btn-default btn-success source" onclick='openMyModal(<?php echo json_encode($volunteer); ?>)' ><i class="fa fa-eye"></i></button>
                          </td>
                        </tr>
                      @endforeach  
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-9">
              <div class="x_panel">
                  <div class="x_title">
                    <h2>Volunteer <small>New</small></h2>
                    
                  </div>
                  <div class="x_content">
                    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="admin_volunteer_store">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Title</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" name="title" class="form-control" required>
                          <span class="fa fa-tag form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Country</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <select class="select2_single form-control" onchange="getStates()" id="country" name="country" tabindex="-1">
                            @foreach ($countries as $country) 
                            <option value="{{$country->country}}">{{$country->country}}</option> 
                            @endforeach
                          </select>  
                          <span class="fa fa-map-marker form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">State</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <select class="select2_single form-control" id="state"  name="state" tabindex="-1">
                            {{--@foreach ($states as $state) 
                            <option value="{{$state->state}}">{{$state->state}}</option> 
                            @endforeach --}}
                          </select>  
                          <span class="fa fa-map-marker form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <fieldset>
                        <div class="control-group">
                          <div class="controls">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">Start & End Date</label>
                            <div class="input-prepend input-group col-md-9 col-sm-9 col-xs-9">
                              <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                              <input type="text" name="date" id="reservation-time" class="form-control" value="01/01/2018 - 01/01/2018" />
                            </div>
                          </div>
                        </div>
                      </fieldset> 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Avatar</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="file" class="form-control"  name="avatar" required>
                          <span class="fa fa-file-image-o form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Details</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <textarea type="text" name="post" class="resizable_textarea form-control" required placeholder="Details here..."></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Need to Know</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <textarea type="text" name="ntk" class="resizable_textarea form-control" required placeholder="Need to know here..."></textarea>
                        </div>
                      </div>
                      {{--<input type="hidden" name="volunteer_id" class="form-control" value="{!! $id !!}" required>--}}
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>    
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            The AffinityClub
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    @include("includes.admin-absolute-index-footer-script")
    
  </body>
  <div id="edit_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="edit_title"> </h4>
        </div>
        <div class="modal-body">
        <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="admin_volunteer_update">

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Title</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" name="title" id="title_input" class="form-control" required/>
              <span class="fa fa-tag form-control-feedback right" aria-hidden="true"></span>
            </div>
          </div>                 
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Country</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <select class="select2_single form-control" id="country_input" onchange="getStates1()" id="country" name="country" tabindex="-1">
                @foreach ($countries as $country) 
                <option value="{{$country->country}}">{{$country->country}}</option> 
                @endforeach
              </select>  
              <span class="fa fa-map-marker form-control-feedback right" aria-hidden="true"></span>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">State</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <select class="select2_single form-control" id="state1"  name="state" tabindex="-1">
                {{--@foreach ($states as $state) 
                <option value="{{$state->state}}">{{$state->state}}</option> 
                @endforeach --}}
              </select>  
              <span class="fa fa-map-marker form-control-feedback right" aria-hidden="true"></span>
            </div>
          </div>
          <fieldset>
            <div class="control-group">
              <div class="controls">
              <label class="control-label col-md-3 col-sm-3 col-xs-3">Start & End Date</label>
                <div class="input-prepend input-group col-md-9 col-sm-9 col-xs-9">
                  <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                  <input type="text" name="date" id="reservation-time" class="form-control" value="01/01/2018 - 01/01/2018" />
                </div>
              </div>
            </div>
          </fieldset>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Avatar</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="file" class="form-control"  name="avatar" />
              <span class="fa fa-file-image-o form-control-feedback right" aria-hidden="true"></span>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Details</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <textarea type="text" name="post"  id="post_input" class="resizable_textarea form-control" required placeholder="Details here..."></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Need to Know</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <textarea type="text" name="ntk" id="ntk_input" class="resizable_textarea form-control" required placeholder="Need to know here..."></textarea>
            </div>
          </div>
          <input type="hidden" name="volunteer_id" id="volunteer_id" class="form-control">
          <div class="ln_solid"></div>

          <div class="form-group">
            <div class="col-md-9 col-md-offset-3">
              <button type="submit" class="btn btn-primary">Cancel</button>
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>  
  <div id="view_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="title"> </h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3">
              <div id="body-1"></div>
            </div>
            <div class="col-md-9">
                <h4>Category</h4>
                <p id="body-5"></p>
                <h4>Location</h4>
                <p id="body-2"></p>
                <h4>Start - End Date</h4>
                <p id="body-02"></p>
                <h4>Post</h4>
                <p id="body-3"></p>
                <h4>Need to Know</h4>
                <p id="body-4"></p>
            </div>
          </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>  
</html>