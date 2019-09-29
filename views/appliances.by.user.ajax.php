<?php
$id =$_GET['id'];
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Appliance by User - Ajax example</h1>
</div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Computer Id</th>
                <th>Mac Address</th>
                <th>Company Name</th>
                <th>Country</th>
                <th>Dept</th>
                <th>Times Logged-In</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Computer Id</th>
                <th>Mac Address</th>
                <th>Company Name</th>
                <th>Country</th>
                <th>Dept</th>
                <th>Times Logged-In</th>
            </tr>
        </tfoot>
    </table>
<script>
$(document).ready(function() {
    $('#example').DataTable( {
		"ajax": "views/rest.api?action=applianceAccessData&id=<?= $id; ?>",
		"columns": [
            { "data": "userAppliance_Id" },
            { "data": "computer_uid" },
            { "data": "mac_address" },
            { "data": "company_name" },
            { "data": "country" },
            { "data": "department" },
            { "data": "times" }
        ]
    } );
} );
</script>