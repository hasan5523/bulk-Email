<?php

    include 'DbConfig.php';

    class DbFunction extends DbConfig{

        public function __construct()
        {
            parent::__construct();
        }


        //filter input data

        function test_input($data) {
            $data = strip_tags($data);
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;

        }

		// character to 20 words

		function limit_text($text, $limit) {
		  if (str_word_count($text, 0) > $limit) {
			  $words = str_word_count($text, 2);
			  $pos = array_keys($words);
			  $text = substr($text, 0, $pos[$limit]) . '...';
		  }
		      return $text;
        }


        //generate all data from a table

        public function getData($table,$column){

            $sql = "SELECT * FROM $table ORDER BY $column DESC ";

            $stmt = $this->connection->query($sql);

            $results = $stmt->fetchAll();

            return $results;
        }


        //generate distinct value by column name from table

        public function getDistinctData($table,$column){

            $sql = "SELECT distinct $column FROM $table WHERE COALESCE($column, '') != '' ORDER BY $column DESC ";

            $stmt = $this->connection->query($sql);

            $results = $stmt->fetchAll();

            return $results;
        }


        //get filter data

          public function getFilterData($table,$product,$region){
            $sql = "SELECT * FROM $table WHERE baseMetals !=' ' ";

            if( $product ){
              $product = implode("','", $product);
              $sql .= "AND baseMetals IN('".$product."')";
              $sql .= "OR carbonSteel IN('".$product."')";
              $sql .= "OR baseMetals IN('".$product."')";
              $sql .= "OR structuralSections IN('".$product."')";

            }

            if( $region ){
              $region = implode("','", $region);
              $sql .= "AND northAmericaCanada IN('".$region."')";
              $sql .= "OR northAmericaUnitedStates IN('".$region."')";
              $sql .= "OR mexico IN('".$region."')";
              $sql .= "OR centralAmerica IN('".$region."')";
              $sql .= "OR asia IN('".$region."')";


            }

            $stmt = $this->connection->query($sql);

            $results = $stmt->fetchAll();

            return $results;


          }

        //insert first form data

        public function insertFirstFormData( $fname, $lName, $email, $phonNumber,$companyName, $productQuality, $productQuantity, $baseMetals, $carbonSteel, $structuralSections,$northAmericaCanada, $northAmericaUnitedStates, $mexico, $centralAmerica, $asia, $comments){

          $sql = "INSERT INTO sellerTable(fname, lName, email, phonNumber,companyName, productQuality, productQuantity, baseMetals, carbonSteel, structuralSections,northAmericaCanada, northAmericaUnitedStates, mexico, centralAmerica, asia, comments) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

	        $query = $this->connection->prepare($sql);

	        $query->execute([$fname, $lName, $email, $phonNumber,$companyName, $productQuality, $productQuantity, $baseMetals, $carbonSteel, $structuralSections,$northAmericaCanada, $northAmericaUnitedStates, $mexico, $centralAmerica, $asia, $comments]);

		    return $query;
        }

        //update mentor

        public function updateMentor($id,$name,$email,$biodata,$target_file){

            $id = $this->test_input($id);
            $sql = "UPDATE mentor SET name = :name, email = :email,biodata= :biodata,image = :image
	               WHERE id= :id";
	        $query = $this->connection->prepare($sql);

            $result = $query->execute(array('name' => $name, 'email' => $email,'biodata'=>$biodata,'image'=>$target_file, 'id' => $id));

            return $result;

        }

		//update Mentor Without Image

		public function updateMentorWOI($id,$name,$email,$biodata){

            $id = $this->test_input($id);
            $sql = "UPDATE mentor SET name = :name, email = :email,biodata= :biodata
	               WHERE id= :id";
	        $query = $this->connection->prepare($sql);

            $result = $query->execute(array('name' => $name, 'email' => $email,'biodata'=>$biodata, 'id' => $id));

            return $result;

        }

        //delete mentor

        public function deleteData($id){
            $id = $this->test_input($id);
            $sql = "delete from sellertable WHERE id= :id";
			      $query = $this->connection->prepare($sql);
			      $result = $query->execute(array('id' => $id));

            return $result;

        }


        //end of class

    }


    $db = new DbFunction();

?>
