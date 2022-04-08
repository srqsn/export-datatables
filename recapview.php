<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Report Recap</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">
    <link href="assets/css/tables/table-basic.css" rel="stylesheet" type="text/css" />
	<script src="plugins/sweetalerts/promise-polyfill.js"></script>
    <link href="plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css">
    <link href="assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- END PAGE LEVEL CUSTOM STYLES -->
</head>
<body>
    <!-- Navbar -->
    <center>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-md">
        <a class="navbar-brand">Report Recap</a>
    </div>
    </nav>


            <!-- TAble -->
            <div style="margin-top: 20px;
            width: 95%;">
            <div class="table-responsive">
            <table id="example" class="table">
            <thead>
                <tr>
                    <!-- <th>id</th> -->
                    <th>Date</th>
                    <th>Chapter_view</th>
                    <th>story_view</th>
                    <th>timeline_post</th>
                    <th>user_register</th>
                    <th>user_access</th>
                    <th>new_story</th>
                    <th>new_chapter</th>
                    <th>claim_mission</th>
                    <th>post_wall</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php
                    foreach ($datarecap as $k => $v){
                    
                ?>

                <tr>
                    
                    <!-- <td><?php echo $v['id'] ?></td> -->
                    <td><?php echo $v['date'] ?></td>
                    <td><?php echo $v['chapter_view'] ?></td>
                    <td><?php echo $v['story_view'] ?></td>
                    <td><?php echo $v['timeline_post'] ?></td>
                    <td><?php echo $v['user_register'] ?></td>
                    <td><?php echo $v['user_access'] ?></td>
                    <td><?php echo $v['new_story'] ?></td>
                    <td><?php echo $v['new_chapter'] ?></td>
                    <td><?php echo $v['claim_mission'] ?></td>
                    <td><?php echo $v['post_wall'] ?></td>

                
                </tr>
                <?php } ?>
                    </tbody>
            </table>
            </div>
        </div>
</center>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

<script>
//     $.noConflict();
//     jQuery(document).ready(function($) {
//     $('#example').DataTable( {
//         dom: 'Bfrtip',
//         buttons: [
//             'copy', 'csv', 'excel', 'pdf', 'print'
//         ]
//     } );
// } );
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
</body>
</html>
