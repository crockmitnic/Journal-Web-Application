$(document).ready(function() {
    $.ajax({
        url: "http://localhost/Journal-Web-Application/BackEnd/graph_data.php",
        method: "GET",
        success: function(table) {
            // for barGraph
            data1 = table.a;
            var name1 = [];
            var total_price1 = [];

            // for lineGraph
            data2 = table.b;
            var name2 = [];
            var total_price2 = [];

            // for monthwise expense visualization
            data3 = table.c;
            var name3 = [];
            var total_price3 = [];

            for (var i in data1) {
                name1.push(data1[i].product_name);
                total_price1.push(data1[i].total_price);
            }

            for (var i in data2) {
                name2.push(data2[i].product_name);
                total_price2.push(data2[i].total_price);
            }

            for (var i in data3) {
                name3.push(data3[i].month);
                total_price3.push(data3[i].total_price);
            }

            var chartdata1 = {
                labels: name1,
                datasets : [
                    {
                        label: 'Total price',
                        backgroundColor: 'rgba(128, 0, 0, 0.80)',
                        borderColor: 'rgba(128, 0, 0, 0.80)',
                        hoverBackgroundColor: 'rgba(128, 0, 0, 1)',
                        hoverBorderColor: 'rgba(128, 0, 0, 1)',
                        data: total_price1
                    }
                ]
            };

            var chartdata2 = {
                labels: name2,
                datasets : [
                    {
                        label: 'Total price',
                        backgroundColor: 'transparent',
                        borderColor: 'rgba(128, 0, 0, 0.80)',
                        hoverBorderColor: 'rgba(128, 0, 0, 1)',
                        data: total_price2
                    }
                ]
            };

            var chartdata3 = {
                labels: name3,
                datasets : [
                    {
                        label: 'Total price',
                        backgroundColor: 'transparent',
                        borderColor: 'rgba(128, 0, 0, 0.80)',
                        hoverBorderColor: 'rgba(128, 0, 0, 1)',
                        data: total_price3
                    }
                ]
            };

            var ctx1 = $("#mycanvas1");
            var barGraph = new Chart(ctx1, {
                type: 'bar',
                data: chartdata1
            });

            ctx2 = $("#mycanvas2");
            var barGraph = new Chart(ctx2, {
                type: 'line',
                data: chartdata2
            });

            ctx3 = $("#mycanvas3");
            var barGraph = new Chart(ctx3, {
                type: 'line',
                data: chartdata3
            });
        },
        error: function(data) {
            console.log(data);
        }
    });
});