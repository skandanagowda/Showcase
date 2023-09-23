<?php $this->view("showcase/header", $data); ?>

<!--<div style="margin: auto; max-width:600px; width:100%; pading: 2em;">

    <form method="post" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <label for="exampleInputEmail1" class="form-label">Image Title</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1"  placeholder="Your Email">
            <div id="emailHelp" class="form-text">Add your email address.</div>
        </div>
        <div class="form-group mb-3 ">
            <input type="file" name="file" class="btn " id="Image" label="Select Image">
        </div>
        <button type="submit" class="btn btn-primary mb-5">Upload</button>
    </form>
</div>-->


    <div style="margin: auto;max-width: 600px;width:100%;padding: 2em;">
        <h2 class="col-6 tm-text-primary">
                Signup
            </h2>

        <form method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
            <small id="emailHelp" class="form-text text-muted">Add your email address.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
          </div>
           
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

<?php $this->view("showcase/footer", $data); ?>