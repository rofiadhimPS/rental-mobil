const lineChart = new Chart("lineChart", {
    type: "line",
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June'],
        datasets: [{
            label: 'Pengunjung',
            data: [12, 19, 3, 5, 2, 3],
            borderColor: 'rgba(255, 99, 132, 1)',
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderWidth: 2,
            tension: 0.4,
            fill: true,
            backgroundColor: 'rgba(255, 99, 132, 0.5 )',
            order: 2
            },
            {
            label: 'Pemesanan',
            data: [5, 9, 1, 3, 2, 7],
            borderColor: 'rgba(54, 162, 235, 1)',
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderWidth: 2,
            tension: 0.4,
            fill: true,
            backgroundColor: 'rgba(54, 162, 235, 0.5)',
            order: 1
            }]
    }
});

const doughnutChart = new Chart("doughnutChart", {
    type: "doughnut",
    data: {
        labels: ['Avanza', 'Rush', 'Fortuner', 'Alphard', 'Bus'],
        datasets: [
            {
            // label: 'Pemesanan',
            data: [15, 25, 10, 10, 40],
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
