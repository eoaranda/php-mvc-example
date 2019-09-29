(function () {
    feather.replace()

    $('.nav-link').click(function () {
        $(".nav-link").removeClass("active");
        var page = $(this).attr("data-url");
        navigate(page);
        $(this).addClass("active");
    })

    printDashboard();


}())

function navigate(page) {
    console.log("load the page..." + page);
    $("main").load(page);
}


function timeAgo(d) {
    var ms = Date.parse(d);

    const diff = (new Date() - ms) / 1000;

    if (diff < 30) {
        return "a moment ago";
    }

    if (diff < 60) {
        const v = Math.round(diff)
        return v + ' second' + (v === 1 ? '' : 's') + ' ago';
    } else if (diff < 60 * 60) {
        const v = Math.round(diff / 60)
        return v + ' minute' + (v === 1 ? '' : 's') + ' ago';
    } else if (diff < 60 * 60 * 24) {
        const v = Math.round(diff / (60 * 60))
        return v + ' hour' + (v === 1 ? '' : 's') + ' ago';
    } else if (diff < 60 * 60 * 24 * 30.436875) {
        const v = Math.round(diff / (60 * 60 * 24))
        return v + ' day' + (v === 1 ? '' : 's') + ' ago';
    } else if (diff < 60 * 60 * 24 * 30.436875 * 12) {
        const v = Math.round(diff / (60 * 60 * 24 * 30.436875))
        return v + ' month' + (v === 1 ? '' : 's') + ' ago';
    }
    const v = Math.round(diff / (60 * 60 * 24 * 30.436875 * 12))
    return v + ' year' + (v === 1 ? '' : 's') + ' ago';
}

function printDashboard() {
    var ctx = document.getElementById('myChart')

    $.getJSON("views/rest.api?action=dashboardData", function (data) {
        var num = [];
        data.forEach(function (v, i) {
            num.push(v.total);
        });

        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [
                    'Sunday',
                    'Monday',
                    'Tuesday',
                    'Wednesday',
                    'Thursday',
                    'Friday',
                    'Saturday'
                ],
                datasets: [{
                    data: num,
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '#007bff',
                    borderWidth: 4,
                    pointBackgroundColor: '#007bff'
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: false
                        }
                    }]
                },
                legend: {
                    display: false
                }
            }
        })
    });
}