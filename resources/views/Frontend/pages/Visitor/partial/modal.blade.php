
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
            <form action="/action_page.php">
                <div class="mb-3 mt-3">
                  <label for="email" class="form-label">Message Title</label>
                  <input type="email" class="form-control" id="title" placeholder="Enter Title" name="title">
                </div>
                <div class="mb-3">
                  <label for="pwd" class="form-label">Message Body</label>
                  <textarea class="form-control" rows="5" id="comment" name="text" placeholder="Enter Your Text"></textarea>
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