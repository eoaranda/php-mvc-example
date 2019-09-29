<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">User Access history (Ajax example)</h1>
</div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Phone</th>
            <th>E-mail</th>
            <th>Appliances Id</th>
            <th>Computer Id</th>
            <th>Mac Address</th>
            <th>Last Log</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Phone</th>
            <th>E-mail</th>
            <th>Appliances Id</th>
            <th>Computer Id</th>
            <th>Mac Address</th>
            <th>Last Log</th>
        </tr>
    </tfoot>
</table>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "ajax": "views/rest.api?action=userApplianceAccessData",
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
                    "data": "phone"
                },
                {
                    "data": "email"
                },
                {
                    "data": "userAppliance_Id"
                },
                {
                    "data": "computer_uid"
                },
                {
                    "data": "mac_address"
                },
                {
                    "data": "last_logon",
                    fnCreatedCell: function(nTd, sData, oData, iRow, iCol) {
                        var d = timeAgo(oData.last_logon);
                        $(nTd).html("<span title='" + oData.last_logon + "'>" + d + "</span>");
                    }
                }
            ]
        });

    });
</script>