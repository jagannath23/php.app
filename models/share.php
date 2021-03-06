<?php
class ShareModel extends Model
{
    public function Index()
    {
        $this->query('SELECT * FROM shares ORDER BY create_date DESC');
        $rows = $this->resultSet();
        return $rows;
    }

    public function IndexLosses()
    {
        $this->query('SELECT * FROM shares WHERE is_loss = 1 AND is_approved = 1 ORDER BY create_date DESC');
        $rows = $this->resultSet();
        return $rows;
    }

    public function IndexEncounters()
    {
        $this->query('SELECT * FROM shares WHERE is_loss = 0 AND is_approved = 1 ORDER BY create_date DESC');
        $rows = $this->resultSet();
        return $rows;        
    }

    public function show($id)
    {
        $this->query('SELECT * FROM shares WHERE id = '. $id);
        $row = $this->single();
        return $row;
    }

    public function add()
    {
    	$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    	if ($post['submit']) {
    		$this->query('INSERT INTO shares (pet_name, description, user_id, age, genre, encounter_loss_date, place, kind_pet, telephone, reward, is_loss) VALUES(:pet_name, :description, :user_id, :age, :genre, :encounter_loss_date, :place, :kind_pet, :telephone, :reward, :is_loss)');
    		$this->bind(':pet_name', $post['pet_name']);
    		$this->bind(':description', $post['description']);
            $this->bind(':age', $post['age']);
            $this->bind(':genre', $post['genre']);
            $this->bind(':encounter_loss_date', $post['encounter_loss_date']);
            $this->bind(':place', $post['place']);
            $this->bind(':kind_pet', $post['kind_pet']);
            $this->bind(':telephone', $post['telephone']);
            $this->bind(':reward', $post['reward']);
            $this->bind(':is_loss', $post['is_loss']);
    		$this->bind(':user_id', $_SESSION['user_data']['id']);
    		$this->execute();
    		if ($this->lastInsertId()) {
    			header('Location: '.ROOT_URL.'shares');
    		}
    	}
    	return;
    }

    public function uploadImage()
    {
        if (isset($_POST['submit'])) {
            /* Variable de subida de ficheros HTTP
            * $_FILES es un array asociativo de elementos subidos al script en curso a travès del mètodo POST.
            */
            $file = $_FILES['file'];

            $file_name = $file['name'];
            $file_tmpname = $file['tmp_name'];
            $file_size = $file['size'];
            $file_error = $file['error'];
            $file_type = $file['type'];

            $file_ext = explode('.', $file_name);
            $file_actual_ext = strtolower(end($file_ext));

            $allowed = array('jpg', 'jpeg', 'png', 'gif');

            if (in_array($file_actual_ext, $allowed)) {
                if ($file_error === 0) {
                    if ($file_size < 500000) {
                        $file_name_new = uniqid('', true).".".$file_actual_ext;
                        $file_destination = 'assets/img/'.$file_name_new;
                        move_uploaded_file($file_tmpname, $file_destination);
                        $this->query('UPDATE shares SET thumb="'.$file_destination.'" WHERE id = '.$_GET['id']);
                        $this->execute();
                        header('Location: '.ROOT_URL.'shares');
                    }
                }
            }
        }
    }

    public function delete()
    {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $id = $_GET['id'];
        $this->query('DELETE FROM shares WHERE id = '. $id);
        $this->execute();
        header('Location: '.ROOT_URL.'shares');
    }

    public function approve()
    {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $id = $_GET['id'];
        $this->query('UPDATE shares SET is_approved="1" WHERE id = '. $id);
        $this->execute();
        header('Location: '.ROOT_URL.'shares');
    }

    public function edit()
    {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $id = $_GET['id'];
        $pet_name = $post['pet_name'];
        $description = $post['description'];
        $thumb = $post['thumb'];
        $age = $post['age'];
        $genre = $post['genre'];
        $place = $post['place'];
        $kind_pet = $post['kind_pet'];
        $telephone = $post['telephone'];
        $reward = $post['reward'];
        if ($post['submit']) {
            print_r($post);
            $this->query('UPDATE shares SET pet_name="'.$pet_name.'", description="'.$description.'", thumb="'.$thumb.'", age="'.$age.'", genre="'.$genre.'", place="'.$place.'", kind_pet="'.$kind_pet.'", telephone="'.$telephone.'", reward="'.$reward.'" WHERE id = '. $id);
            $this->execute();
            header('Location: '.ROOT_URL.'shares');
        }
        return;
    }

    public function editing($id)
    {
        $this->query('SELECT * FROM shares WHERE id = '. $id);
        $row = $this->single();
        return $row;
    }
}