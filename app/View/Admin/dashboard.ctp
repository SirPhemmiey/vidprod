
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>
       <?php if (isset($msg)) {?>
        <div class="alert alert-<?php echo $info?> alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo $msg;?>
      </div>
       <?php }?>
          <div class="card card-register mx-auto mt-5">
            <div class="card-header">Add Introductory (About) video</div>
            <div class="card-body">
              <form action="<?php echo $this->webroot?>admin/dashboard" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6">
                    Cover Photo
                      <div class="form-label-group">
                        <input type="file" name="cover_photo" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="col-md-6">
                    YouTube link
                      <div class="form-label-group">
                      <input type="hidden" name="type" value="about_video">

                        <input type="text" name="link" class="form-control" placeholder="YouTube Link">
                      </div>
                    </div>
                  </div>
                </div>
                <small class="form-text text-muted"><b>Note:</b> Image maximum upload size is <b>7MB</b></small>
                <br>
                <button type="submit" class="btn btn-primary btn-block">Add</button>
              </form>
            </div>
            <div class="card-footer small text-muted">This is the video that will be played at the entry of the home page</div>
          </div>


        <!--Latest Videos-->

        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Add Latest Videos</div>
            <div class="card-body">
              <form action="<?php echo $this->webroot?>admin/dashboard" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6">
                    Cover Photo
                      <div class="form-label-group">
                        <input type="file" name="cover_photo" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="col-md-6">
                    YouTube link
                      <div class="form-label-group">
                      <input type="hidden" name="type" value="latest_video">

                        <input type="text" name="link" class="form-control" placeholder="YouTube Link">
                      </div>
                    </div>
                  </div>
                </div>
                <small class="form-text text-muted"><b>Note:</b> Image maximum upload size is <b>7MB</b></small>
                <br>
                <button type="submit" class="btn btn-primary btn-block">Add</button>
              </form>
            </div>
            <div class="card-footer small text-muted">These are the videos that visitors can explore and play when they visit. </div>
          </div>

          <!--Gallery-->


        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Add Photos</div>
            <div class="card-body">
              <form action="<?php echo $this->webroot?>admin/dashboard" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6">
                    Photo
                      <div class="form-label-group">
                        <input type="file" name="cover_photo" class="form-control" required="required">

                        <input type="hidden" name="link" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-label-group">
                      <input type="hidden" name="type" value="gallery">
                      </div>
                    </div>
                  </div>
                </div>
                <small class="form-text text-muted"><b>Note:</b> Image maximum upload size is <b>7MB</b></small>
                <br>
                <button type="submit" class="btn btn-primary btn-block">Add</button>
              </form>
            </div>
            <div class="card-footer small text-muted">These are pictures that visitors can explore. </div>
          </div>
