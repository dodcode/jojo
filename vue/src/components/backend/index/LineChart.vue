<template>
    <div class="card-body">
        <canvas id="lineChart"></canvas>
    </div>
</template>

<script>
    import Chart from 'chart.js'

    export default {
        name: "line-chart",
        created () {
            console.log('lineChart created')
        },
        mounted() {
            var ctx1 = document.getElementById("lineChart").getContext('2d');
            var lineChart = new Chart(ctx1, {
                type: 'bar',
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: 'Dataset 1',
                        backgroundColor: '#3EB9DC',
                        data: [10, 14, 6, 7, 13, 9, 13, 16, 11, 8, 12, 9]
                    }, {
                        label: 'Dataset 2',
                        backgroundColor: '#EBEFF3',
                        data: [12, 14, 6, 7, 13, 6, 13, 16, 10, 8, 11, 12]
                    }]

                },
                options: {
                    tooltips: {
                        mode: 'index',
                        intersect: false
                    },
                    responsive: true,
                    scales: {
                        xAxes: [{
                            stacked: true,
                        }],
                        yAxes: [{
                            stacked: true
                        }]
                    }
                }
            });
        }
    }
</script>

<style scoped></style>