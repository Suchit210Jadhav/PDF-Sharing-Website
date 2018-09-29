<?php
session_start();
if(!isset($_SESSION['name'])){
    echo "<script type='text/javascript'> alert('Please login first');
    window.location.href = 'index.php';
    </script>";
}
include 'cdn.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>UPLOAD FILES</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light lgblue">
        <a class="navbar-brand" href="../index.php" style="font-family:Righteous";>
        <i class="fas fa-car-alt"></i>
        *SOME NAME*
        </a>
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>LOGOUT</a>
            </div>
        </div>
    </nav>
    <div class="container" style="padding-top: 50px";>
        <form method="post" action="insertintodb.php" enctype="multipart/form-data">
            <center>
                <div class="container table-responsive">
                    <table class="table">
                        <tr>
                            <td><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upload PDF:</center></td>
                            <td><center><input type="file" name="fileupload" id="fileupload" required="true"></center></td>
                        </tr>
                        <tr>
                            <td colspan="2"><center><input type="text" style="width:75%" maxlength="200" name="filetext" required placeholder="Enter assignment name"/></center> </td>
                        </tr>
                        <tr>
                            <td colspan="2"><center><input type="text" style="width:75%" maxlength="200" name="subject" required placeholder="Enter the subject name"/></center> </td>
                        </tr>
                        <tr>
                            <td colspan="2"><center><input type="text" style="width:75%" maxlength="200" name="writer" required placeholder="Enter the writer name"/></center> </td>
                        </tr>
                        <tr>
                            <td colspan="2"><center><input type="submit" name="new_file_submit" onClick="TestFileType(this.form.fileupload.value, ['pdf']);"/></center></td>
                        </tr>
                    </table>
                </div>
            </center>
        </form>
    </div>
    <script type="text/JavaScript">
        var file = document.getElementById('fileupload');
        file.onchange = function(e){
            var ext = this.value.match(/\.([^\.]+)$/)[1];
            switch(ext)
            {
                case 'pdf':
                    break;
                default:
                    alert('Upload only PDF files!');
                    this.value='';
            }
        };
    </script>
</body>
</html>
<!-- TestFileType(this.form.fileupload.value, ['pdf']); -->

       <!--  return (fileTypes.join(".").indexOf(fileType) != -1) ?
        yaas() : nay();
        }
        function yaas(){
            alert('That file is OK!'); 
            return true;
        }
        function nay(){
            alert("Please only upload files that end in types: \n" + (fileTypes.join(" .")) + "\nPlease select a new file and try again."); 
            return false;
        } -->