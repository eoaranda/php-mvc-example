<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">User - Appliances (Ajax example)</h1>
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
            <th>Total Appliances</th>
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
            <th>Total Appliances</th>
        </tr>
    </tfoot>
</table>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "ajax": "views/rest.api?action=userApplianceTotals",
            "columns": [
                { "data": "userData_Id" },
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
                    "data": "total",
                    fnCreatedCell: function(nTd, sData, oData, iRow, iCol) {
                        $(nTd).html("<a href=javascript:navigate('views/appliances.by.user.ajax?id=" + oData.userData_Id + "');>" + oData.total + "</a>");
                    }
                }
            ]
        });


        /*
        $('#example tbody').on('click', 'td', function() {
            var table = $('#example').DataTable();
            console.log(table.cell(this).data());
        });
        */

    });
</script>