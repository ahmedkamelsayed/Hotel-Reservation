@extends('master2')

@section('content')
<!-- Button trigger modal -->
<button  type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Add rooms
</button>
<div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>roomType</th>
                  <th>Price</th>
                  <th>created at</th>
                  <th>update at</th>
                </tr>
              </tbody>
              <tbody>
                @foreach($data as $dat)
                <tr>
                  <th>{{$dat->id}}</th>
                  <th>{{$dat->roomType}}</th>
                  <th>{{$dat->price}}</th>
                  <th>{{$dat->updated_at}}</th>
                  <th>{{$dat->created_at}}</th>
                  <th>
                    <button class="btn btn-info" data-room="{{$dat->roomType}}" data-myprice="{{$dat->Price}}" data-toggle="modal" data-roomid="{{$dat->id}}" data-target="#edit">Update</button>
                    |
                    <a type="button" class="btn btn-danger" href="/destroy/{{$dat->id}}">delete</a>

                  </th>
              </tr>
              @endforeach
            </tbody>

            </table>
          </div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
 <div class="modal-content">
   <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     <h4 class="modal-title" id="myModalLabel">New room</h4>
   </div>
   <form action="/store" method="post">
     {{ csrf_field() }}
     <div class="modal-body">
       <div class="form-group">
         <label for="roomType">roomType</label>
         <input type="text" name="roomType" class="form-control" placeholder="Enter room Type">
       </div>
       <div class="form-group">
         <label for="price">Room price</label>
         <input type="number" class="form-control" name="Price" placeholder="Enter Price">
       </div>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       <button type="submit" class="btn btn-primary">Save</button>
     </div>
   </form>
 </div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
 <div class="modal-content">
   <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     <h4 class="modal-title" id="myModalLabel">Edit room</h4>
   </div>
   <form action="/update" method="get">
     {{method_field('patch')}}
     {{ csrf_field()}}
     <div class="modal-body">
       <div class="form-group">
         <label for="roomType">room_ID</label>
         <input type="number" name="roomid" class="form-control" placeholder="Enter room_ID" id="id">
       </div>
       <div class="form-group">
         <label for="roomType">roomType</label>
         <input type="text" name="roomType" class="form-control" placeholder="Entessssr room Type" id="roomType">
       <div class="form-group">
         <label for="price">Room price</label>
         <input type="number" class="form-control" name="price" placeholder="Enter Price" id="Price">
       </div>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       <button type="submit" class="btn btn-primary">Save changes</button>
     </div>
   </form>
 </div>
</div>
</div>
<!-- Modal -->
<div class="modal modal-danger fade in" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
 <div class="modal-content">
   <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     <h4 class="modal-title" id="myModalLabel">delete room</h4>
   </div>
   <form action="/destroy" method="post">
     {{method_field('delete')}}
     {{ csrf_field() }}
     <div class="modal-body">
       <p>
         Are you sure you want to delete it
       </p>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-success" data-dismiss="modal">No, Close</button>
       <button type="submit" class="btn btn-warning">delete</button>
     </div>
   </form>
 </div>
</div>
</div>
@endsection
