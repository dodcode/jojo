<template>
    <div class="card-body">
        <canvas id="pieChart"></canvas>
    </div>
</template>

<script>
    export default {
        name: "pie-chart",
        created () {
            console.log('pie-chart created')
        },
        mounted() {
            var ctx2 = document.getElementById("pieChart").getContext('2d');
            var pieChart = new Chart(ctx2, {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        label: 'Dataset 1'
                    }],
                    labels: [
                        "Red",
                        "Orange",
                        "Yellow",
                        "Green",
                        "Blue"
                    ]
                },
                options: {
                    responsive: true
                }

            });
        }
    }
</script>

<style scoped></style>