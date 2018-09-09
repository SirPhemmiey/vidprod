<?php
ini_set('post_max_size', '100M');
ini_set('upload_max_filesize', '100M');
class AdminController extends AppController {

    public $uses = array('About_video', 'Latest_video', 'Gallery');

    public function login() {
        $this->layout = 'login';
        if ($this->request->is('post')) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($username == 'admin@movieclip' && $password == 'movieclip1024') {
                $this->redirect(array('action' => 'dashboard'));
            }
            else {
                $msg = "Invalid Username/Password";
                $info = "danger";
            }
        }
        $this->set(compact('msg', 'info'));
    }

    public function logout() {

    }

    function about_videos($link, $cover_photo) {
        if (!empty($link) && !empty($cover_photo)) {
            $path = "about_videos/";
            $file_name = $cover_photo['name'];
            $save = $path.$file_name;
            if (move_uploaded_file($_FILES['cover_photo']['tmp_name'], $save)) {
                $this->request->data['About_video']['link'] = $link;
                $this->request->data['About_video']['cover_photo'] = $save;
                $checkData = $this->About_video->find('all');
                //if the table is empty
                if (empty($checkData)) {
                    if ($this->About_video->save($this->request->data)) {
                        $send = "Success";
                    }
                    else {
                        $send = "Error";
                    }
                }
                //else if something is inside
                else {
                       $this->About_video->id = 1;
                       $getPhoto = $this->About_video->find('first', array('conditions' => array('id' => 1)));
                       unlink($getPhoto['About_video']['cover_photo']);
                    if ($this->About_video->save($this->request->data)) {
                        $send = "Success";
                    }
                    else {
                        $send = "Error";
                    }
                }
                return $send;
            }
        }
    }

    function latest_videos($link, $cover_photo) {
        if (!empty($link) && !empty($cover_photo)) {
            $path = "latest_videos/";
            $file_name = $cover_photo['name'];
            $save = $path.$file_name;
            if (move_uploaded_file($_FILES['cover_photo']['tmp_name'], $save)) {
                $this->request->data['Latest_video']['link'] = $link;
                $this->request->data['Latest_video']['cover_photo'] = $save;
                    if ($this->Latest_video->save($this->request->data)) {
                        $send = "Success";
                    }
                    else {
                        $send = "Error";
                    }
                return $send;
            }
        }
    }

    function gallery($cover_photo) {
        if (!empty($cover_photo)) {
            $path = "galleries/";
            $file_name = $cover_photo['name'];
            $save = $path.$file_name;
            if (move_uploaded_file($_FILES['cover_photo']['tmp_name'], $save)) {
                $this->request->data['Gallery']['path'] = $save;
                    if ($this->Gallery->save($this->request->data)) {
                        $send = "Success";
                    }
                    else {
                        $send = "Error";
                    }
                return $send;
            }
        }
    }

    public function dashboard() {
        $this->layout = 'admin_dashboard';
        if ($this->request->is('post')) {
            //debug($_FILES);exit;
            $type = $_POST['type'];
            $link = $_POST['link'];
            if (isset($_FILES['cover_photo'])) {
                //check size
                if ($_FILES['cover_photo']['size'] >= 8388608) {
                    $msg = "Image too large";
                    $info = "danger";
                }
                else {
                    $cover_photo = $_FILES['cover_photo'];
                    switch ($type) {
                        case 'about_video':
                       $msg =  $this->about_videos($link, $cover_photo);
                       if ($msg == 'Success') {
                           $info = "success";
                           $msg = "Successfully added.";
                       }
                       else if ($msg == 'Error') {
                           $info = "danger";
                           $msg = "Oops! An error occured while adding. Try again";
                       }
                        break;

                        case 'latest_video':
                        $msg =  $this->latest_videos($link, $cover_photo);
                        if ($msg == 'Success') {
                            $info = "success";
                            $msg = "Successfully added.";
                        }
                        else if ($msg == 'Error') {
                            $info = "danger";
                            $msg = "Oops! An error occured while adding. Try again";
                        }
                        break;

                        case 'gallery':
                        $msg =  $this->gallery($cover_photo);
                        if ($msg == 'Success') {
                            $info = "success";
                            $msg = "Successfully added.";
                        }
                        else if ($msg == 'Error') {
                            $info = "danger";
                            $msg = "Oops! An error occured while adding. Try again";
                        }
                        break;
                    }
                }
            }

        }
        $this->set(compact('msg', 'info'));
    }

    public function operations() {
        $this->layout = false;
        if ($this->request->is('post')) {
            $id = $_POST['id'];
            $type = $_POST['type'];
            if ($type == 'video') {
                $getPhoto = $this->Latest_video->find('first', array('conditions' => array('id' => $id)));
                unlink($getPhoto['Latest_video']['cover_photo']);
                if ($this->Latest_video->delete($id)) {
                    echo "success";
                }
                else {
                    echo "error";
                }
            }
            else if ($type == 'gallery') {
                $getPhoto = $this->Gallery->find('first', array('conditions' => array('id' => $id)));
                unlink($getPhoto['Gallery']['path']);
                if ($this->Gallery->delete($id)) {
                    echo "success";
                }
                else {
                    echo "error";
                }
            }
        }
    }

    public function items() {
        $this->layout = 'admin_dashboard';
        $latest_videos = $this->Latest_video->find('all');
        $gallery = $this->Gallery->find('all');
        $this->set(compact('latest_videos', 'gallery'));
    }
}