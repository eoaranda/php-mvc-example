<?php

if (isset($_GET["export"])) {
    require $_SERVER['DOCUMENT_ROOT'] . "/mvcExample/config/db.php";
    require $_SERVER['DOCUMENT_ROOT'] . "/mvcExample/controllers/userController.php";
    $user = new userController();
    $user->userExportData();
}
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">User Data (Ajax example)</h1>
    <button type="button" class="btn btn-primary" onClick="window.open('views/user.data.ajax?export=csv');">Export to CSV</button>
</div>

<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>E-mail</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>E-mail</th>
        </tr>
    </tfoot>
</table>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "ajax": "views/rest.api?action=userData",
            "columns": [{
                    "data": "userData_Id"
                },
                {
                    "data": "title"
                },
                {
                    "data": "first_name"
                },
                {
                    "data": "last_name"
                },
                {
                    "data": "gender"
                },
                {
                    "data": "email"
                }
            ]
        });
    });
</script>