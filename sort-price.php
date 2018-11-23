<?php
    $sql = "SELECT *  FROM product order by prijs";
    
    $data = $conn->query($sql);  

    foreach ($data as $row)
    {   
        $htmlOutput  = "";         
        $htmlOutput  = '<div class= "Photo">';
        $htmlOutput .= '<img src="photo/' . $row['Photo'] . '" style="width:100%">';
        $htmlOutput .= '<p>'. $row["Types"] . '<br><b>Vanaf €' . $row["Prijs"] . '</b></p>';   
        $htmlOutput .= '</div>';   
    
        echo $htmlOutput;
    }  
  
?>