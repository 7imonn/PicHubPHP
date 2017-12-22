$(document).ready(function () {
    $("#tblEmployeetbodytr").remove();
    $.ajax
        ({
            type: 'POST',
            url: '@Url.Action("GetAllEmployee")',
            dataType: 'json',
            data: {},
            success: function (data) {
                $("#imgLoading").hide();
                var items = '';
                var rows = "<tr>" +
                "< th align= 'left' class='EmployeeTableTH' > Employee ID</th>" +
                "<th align='left' class='EmployeeTableTH'>Name</th>"+
                "<th align='left' class='EmployeeTableTH'>Project Name</th>" +
                "<th align='left' class='EmployeeTableTH'>Manager Name</th>"+
                "<th align='left' class='EmployeeTableTH'>City</th>" +
                "</tr > ";
                $('#tblEmployeetbody').append(rows);

                $.each(data, function (i, item) {
                    var rows = "<tr>" +
                    "< td class='EmployeeTableTD' > " + item.Id + "</td > " +
                    "< td class='EmployeeTableTD' > " + item.Name + "</td > " +
                    "< td class='EmployeeTableTD' > " + item.ProjectName + "</td > " +
                    "< td class='EmployeeTableTD' > " + item.ManagerName + "</td > " +
                    "< td class='EmployeeTableTD' > " + item.city + "</td > " +
                    "</tr > ";
                    $('#tblEmployeetbody').append(rows);
                });
            },
            error: function (ex) {
                var r = jQuery.parseJSON(response.responseText);
                alert("Message: " + r.Message);
            }
        });
    });