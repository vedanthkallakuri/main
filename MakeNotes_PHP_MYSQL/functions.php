<?php

    function isempty($var1, $var2){
        if(empty($var1) || empty($var2)){
            return true;
        }
        else{
            return false;
        }
    }

    function addDb($date, $note, $conn){
        $sql = "INSERT INTO datetimedata (date_name, note_name) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $date);
        $stmt->bindParam(2, $note);
        $stmt->execute();        
        
    }

    function filterDates($begDate, $endDate, $conn){
        $sql = "SELECT * FROM datetimedata ORDER BY date_name";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        
        $bool = false;

        $str = 
        "<table class='table table-striped'>
            <thead>
                <tr>
                    <th scope='col'>Date and Time</th>
                    <th scope='col'>Note</th>
                </tr>
            </thead>
            <tbody>
                <tr>";
        
        foreach($result as $row){
            $noteTimestamp = strtotime($row["date_name"]);
            $begTimestamp = strtotime($begDate);
            $endTimestamp = strtotime($endDate);
            
            if($noteTimestamp<=$endTimestamp && $noteTimestamp>=$begTimestamp){
                $dateFormated = date("n/j/Y h:i a", $noteTimestamp);
                $str = $str."<td>".$dateFormated."</td><td>$row[note_name]</td><tr>";
                $bool = true;
            } 
        }   
        if($bool === true){
            return $str."</tr></tbody></table>";
        }
        else{
            return "no records to display";
        }
    }
?>