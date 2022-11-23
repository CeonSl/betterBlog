<x-app-layout>
    <div class="container ">
        <div class="jumbotron mt-10 ">
            <div class="titulo text-center">Gráfico Barras</div>
            <div class="flex justify-center">
                <div style="width: 800px; ">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div class="titulo text-center mt-20">Gráfico Donut</div>
            <div class="flex justify-center">
                <div style="width: 600px; height: 600px;">
                    <canvas id="myChart2"></canvas>
                </div>

            </div>


            <script>
                const ctx = document.getElementById('myChart');
                var productos=["pepe"];
                var valores=[123];
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: productos,
                        datasets: [{
                            label: '# of Votes',
                            data: valores,
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>


            <script>
                const ctx2 = document.getElementById('myChart2');

                new Chart(ctx2, {
                    type: 'doughnut',
                    data: {
                        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                        datasets: [{
                            label: '# of Votes',
                            data: [12, 19, 3, 5, 2, 3],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>
        </div>
    </div>
</x-app-layout>
