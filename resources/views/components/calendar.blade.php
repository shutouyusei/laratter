<div class="text-right">
    <table>
        <tr>
            <th>SUN</th>
            <th>MON</th>
            <th>TUE</th>
            <th>WED</th>
            <th>THU</th>
            <th>FRI</th>
            <th>SAT</th>
        </tr>
        @php
        for($i=0;$i<5;$i++)
        {
            echo "<tr>";
            for($l=0;$l<7;$l++){
                $date=$l+$i*7;
                if($date<1){
                    $date="";
                }
                if($date<10){
                $date="  ".$date;
                }
             echo "<td>$date</td>";
            }
            echo "</tr>";
        }
        @endphp
    </table>
