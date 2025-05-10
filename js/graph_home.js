document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('pieChart').getContext('2d');
    
    const pieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Línea 1', 'Línea 2', 'Línea 3'],
            datasets: [{
                data: [56959, 42342, 32312], // Estos son valores de ejemplo
                backgroundColor: [
                    'rgba(250, 250, 5, 0.36)',
                    'rgba(49, 247, 0, 0.37)',
                    'rgba(237, 7, 7, 0.36)'
                ],
                borderColor: [
                    'rgba(255, 255, 0, 0.7)',
                    'rgba(49, 247, 0, 0.7)',
                    'rgba(237, 7, 7, 0.7)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                },
                title: {
                    display: false,
                    text: 'Afluencia por Línea de Metro'
                }
            }
        }
    });
});