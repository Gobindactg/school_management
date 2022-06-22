<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Message to Us</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                @foreach (App\Models\Social::social() as $social)
                <div class="card card-body my-1">
                    <p style="background-color:rgb(221, 218, 218)">{{$social->description}}</p>
                </div>
                @endforeach
                <form action="{{ route('message') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 mt-3">
                        <label for="title" class="form-label"> Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Message Description</label>
                        <textarea class="form-control" rows="5" id="description" name="description" placeholder="Enter Your Text"></textarea>
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