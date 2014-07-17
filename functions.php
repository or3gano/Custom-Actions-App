<?php  



//Custom Actions CSV upload function
function import_ca_csv() {

if ($_FILES[csv][size] > 0) { 

    //get the csv file 
    $file = $_FILES[csv][tmp_name]; 
    $handle = fopen($file,"r"); 
     
	mysql_query("TRUNCATE TABLE custom_actions"); //removes current data in table
	fgetcsv($handle); //skips first line of data
	
	 //loop through the csv file and insert into database 
    do { 
        if ($data[0]) { 
            mysql_query("INSERT INTO custom_actions (task_id, created_date, due_date, customer_id, category, name, website_url, partner_name) VALUES 
                ( 
                    '".addslashes($data[0])."', 
                    '".date('Y-m-d h:i:s', strtotime($data[1]))."', 
                    '".date('Y-m-d h:i:s', strtotime($data[2]))."', 
					'".addslashes($data[3])."', 
					'".addslashes($data[4])."', 
					'".addslashes($data[5])."', 
					'".addslashes($data[6])."', 
					'".addslashes($data[7])."'
                ) 
            ");
        } 
    } while ($data = fgetcsv($handle,1000,",","'")); 
    //
	
	//redirect 
    header('Location: index.php?success=1'); die; 

}

}//


?>