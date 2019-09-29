<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">User Data (Server example)</h1>
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
            "processing": true,
            "serverSide": true,
            "ajax": "views/rest.api?action=userDataServer",
        });
    });
</script>