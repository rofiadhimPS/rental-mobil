var labels = @json($labels);
var data = @json($data);

var doughnutChart = new Chart(doughnut, {
    type: "doughnut",
    data: {
        labels: labels,
        datasets: [
            {
            // label: 'Pemesanan',
            data: data,
            borderColor: ['#F65A54', '#D36C83', '#B877AA', '#9C81D1', '#818CF8'],
            backgroundColor: ['#F65A54', '#D36C83', '#B877AA', '#9C81D1', '#818CF8'],
            borderWidth: 2,
            }]
    },
    options: {
        plugins: {
            legend: {
                position: 'right'
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                        var dataset = data.datasets[tooltipItem.datasetIndex];
                        var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                            return previousValue + currentValue;
                        });
                        var currentValue = dataset.data[tooltipItem.index];
                        var percentage = parseFloat((currentValue/total*100).toFixed(2));
                        return data.labels[tooltipItem.index] + ': ' + currentValue + ' (' + percentage + '%)';
                    }
                }
            }
        }
    }
});

// const chartConfig = {
//     type: 'line',
//     data: chartData,
//     options: {
//         scales: {
//             y: {
//                 beginAtZero: true
//             }
//         },
//         plugins: {
//             legend: {
//                 labels: {
//                     color: 'black'
//                 }
//             }
//         }
//     }
// };

// const myChart = new Chart(
//     document.getElementById('myChart'),
//     chartConfig
// );
