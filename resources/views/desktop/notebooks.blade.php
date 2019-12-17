<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/notebooks.css')}}">
    <link href="{{ asset('vendors/css/bootstrap-grid.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/css/bootstrap-reboot.min.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <title></title>
  </head>
  <body>
    <div class="wrapper">
      <div class="sidebar">
        <ul class="notes-container">
          @foreach($list_notebooks as $notebook)
          <li>
            <div class="note-bg">
            </div>
            <svg version="1.1" id="bookmark" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            	 viewBox="0 0 56.868 56.868" style="enable-background:new 0 0 56.868 56.868;" xml:space="preserve">
            	<path d="M46.934,0.011V0h-36.91c-3.358,0-6.09,2.731-6.09,6.09v50.778l19-12.666l19,12.666V32v-7V14h2v11h9V6.136
            		C52.934,2.819,50.262,0.096,46.934,0.011z"/>
            </svg>
            <a href="#">{{$notebook->title}}</a>
            <ul class="subnotes-container">
              @foreach($notebook->sections as $section)
              <li>
                <a href="#">
                  {{$section->title}}
                </a>
                <ul class="lastnotes-container">
                  @foreach($section->chapters as $chapter)
                    <li><a href="#">{{$chapter->title}}</a></li>
                  @endforeach
                </ul>
              </li>
              @endforeach
            </ul>
          </li>
          @endforeach
          <li>
            <div class="note-bg">
            </div>
            <svg version="1.1" id="bookmark" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            	 viewBox="0 0 56.868 56.868" style="enable-background:new 0 0 56.868 56.868;" xml:space="preserve">
            	<path d="M46.934,0.011V0h-36.91c-3.358,0-6.09,2.731-6.09,6.09v50.778l19-12.666l19,12.666V32v-7V14h2v11h9V6.136
            		C52.934,2.819,50.262,0.096,46.934,0.011z"/>
            </svg>
            <a href="#" id="add_notebook" data-toggle="modal" data-target="#exampleModalLong">New Notebook</a>



          </li>
        </ul>
      </div>
    </div>
    <div class="main-content">
      <!-- Modal -->
      <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Add new notebook</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Title : <input type="text" id="notebook-title-add" name="title">
              <select id="notebook-visibility" class="" name="visibility">
                <option value="1">public</option>
                <option value="2">private</option>
              </select>
            </div>
            <div class="modal-footer">

              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button id="addnotebook" type="button" class="btn btn-primary">Create</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/notebooks.js')}}"></script>
    <script type="text/javascript">
    $("#addnotebook").on('click',function(e){
       e.preventDefault();
       $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }

      });
       jQuery.ajax({
          url: "/ajax/addnotebook",
          method: 'post',
          data: {
            title : $('#notebook-title-add').val(),
            visibility : $('#notebook-visibility').val(),
          },
          success: function(result){

              },
          error: function(jqXHR, textStatus, errorThrown){
            alert('error');
        }});
    });
    </script>
  </body>
</html>
