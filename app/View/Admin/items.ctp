<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Latest Videos you have added</div>
            <div class="card-body">
                <p class="loading"></p>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>S/N</th>
                      <th>Cover Photo</th>
                      <th>Link</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php if (!empty($latest_videos)) { $count = 1; foreach ($latest_videos as $videos) {?>
                    <tr>
                    <td><?php echo $count?></td>
                      <td><img style="width: 60px; height:60px;" src="<?php echo $this->webroot.$videos['Latest_video']['cover_photo']?>" alt=""></td>
                      <td><?php echo $videos['Latest_video']['link']?></td>
                      <td><a href="#" class="delete" data-femi="<?php echo $videos['Latest_video']['id']?>" data-type="video">Delete</a></td>
                    </tr>
                   <?php $count++;}}?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>



          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Pictures you have added to galleries</div>
            <div class="card-body">
                <p class="loading"></p>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>S/N</th>
                      <th>Cover Photo</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php if (!empty($gallery)) { $count = 1; foreach ($gallery as $gallery) {?>
                    <tr>
                    <td><?php echo $count?></td>
                      <td><img style="width: 60px; height:60px;" src="<?php echo $this->webroot.$gallery['Gallery']['path']?>" alt=""></td>
                      <td><a href="#" class="delete" data-femi="<?php echo $gallery['Gallery']['id']?>" data-type="gallery">Delete</a></td>
                    </tr>
                   <?php $count++;}}?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


          <script>
           $(document).ready(function() {
            $('.delete').on('click', function() {
                var id = $(this).attr('data-femi');
                var type = $(this).attr('data-type');
                if (confirm("Are you sure ?")) {
                    $.ajax({
                        url: '<?php echo $this->webroot?>admin/operations',
                        type: "POST",
                        beforeSend: function() {
                            $(".loading").text("Deleting...");
                        },
                        data: { id: id, type: type },
                        success: function(res) {
                            $(".loading").text("");
                            if (res == 'success') {
                                alert("Deleted successfully");
                                window.location.reload();
                            }
                            else {
                                alert(res)
                            }
                        },
                        error: function(err) {
                            alert("An error occured. "+ err);
                        }
                    });
                }
            });
           });
          </script>