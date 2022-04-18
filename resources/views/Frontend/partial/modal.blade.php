
<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Customer Feedback</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
            <form action="{{route('message')}}" method="POST" enctype="multipart/form-data">
              @csrf 
              <div class="mb-3 mt-3">
                  <label for="title" class="form-label"> Title</label>
                  <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title">
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Message Description</label>
                  <textarea class="form-control" rows="5" id="description" name="description" placeholder="Enter Your Text"></textarea>
                </div>
                
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label text-primary">Student Image</label>
                      <div class="row py-2">
                          <div class="col-md-4">
                              <div style="padding:5px 0px">
                                  <img style="width:150px; height:150px;" id="output"/>
                              </div>
                              <input type="file" class="form-control" name="message_image" id="student_image" accept="image/*" onchange="loadFile(event)" >
                          </div>
                       </div> 
              </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
  
      </div>
    </div>
  </div>