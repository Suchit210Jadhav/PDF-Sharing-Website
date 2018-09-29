<?php
include "cdn.php";
include "connect.php";
$sub = "ada";
$sql_posts = "SELECT * FROM files WHERE subject= '".$sub."'";
$res_posts = mysqli_query($connect, $sql_posts);
if(mysqli_num_rows($res_posts) != "")
{
echo "
<center>
<div class='table-responsive' style='width: 90%'>

    <table class='table table-bordered'>
        <tr>
            <th width='10%'>FILE ID</th>
            <th width='30%'>FILE</th>
            <th width='35%'>DESCRIPTION</th>
            <th width='10%'>SUBJECT</th>
            <th width='15%'>WRITTEN BY</th>
        </tr>
";
    while($row_posts = mysqli_fetch_array($res_posts))
    {
        $fileid = $row_posts['fileid'];
        $filename = $row_posts['file'];
        $file_text = $row_posts['text'];
        $subject = $row_posts['subject'];
        $file_by = $row_posts['wrby'];
        echo '<tr>';

            echo "<td>";
                echo "<center>";
                    echo $fileid;
                echo "</center>";
            echo "</td>";

             echo "<td>";
                echo "<a href='".$filename."'>Download</a>";
            echo "</td>";
            
            echo "<td>";
                echo $file_text;
            echo "</td>";
            
            echo "<td>";
                echo $subject;
            echo "</td>";
            echo "<td>";
                echo $file_by;
            echo "</td>";

        echo '</tr>';
    }
    echo " 
        </table>
        </div>
        </center>";
}
else
{
    echo "NO FILES PRESENT!! \n IF YOU HAVE ANY FILES PLEASE HELP US TO UPLOAD!";
    echo"<br><a href='index.php'>Homepage</a>";
}
?>