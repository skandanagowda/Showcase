<?php $this->view("showcase/header", $data); ?>

<div style="margin: auto; max-width:600px; width:100%; pading: 2em;">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <label for="exampleInputEmail1" class="form-label">Image Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1"  placeholder="Enter Image Title">
            <div id="emailHelp" class="form-text">Let's add a title to your image</div>
        </div>
        <div class="form-group mb-3 ">
            <input type="file" name="file" class="btn " id="Image" label="Select Image">
        </div>
        <button type="submit" class="btn btn-primary mb-5">Upload</button>
    </form>
</div>

<?php $this->view("showcase/footer", $data); ?>