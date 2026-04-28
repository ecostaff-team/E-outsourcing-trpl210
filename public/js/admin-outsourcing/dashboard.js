const ctx = document.getElementById('chartRekap').getContext('2d');
const chartRekap = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
        datasets: [
            {
                label: 'Hadir',
                data: [80, 75, 78, 82, 85, 80, 78, 82, 85, 88, 90, 92],
                backgroundColor: 'rgba(34, 197, 94, 0.7)',
                borderRadius: 6,
            },
            {
                label: 'Alpha',
                data: [10, 12, 10, 8, 6, 10, 12, 8, 6, 4, 3, 2],
                backgroundColor: 'rgba(239, 68, 68, 0.7)',
                borderRadius: 6,
            },
            {
                label: 'Sakit/Izin',
                data: [5, 8, 10, 6, 4, 8, 10, 6, 4, 3, 2, 1],
                backgroundColor: 'rgba(234, 179, 8, 0.7)',
                borderRadius: 6,
            },
            {
                label: 'Lembur',
                data: [15, 10, 12, 18, 20, 15, 12, 18, 20, 22, 25, 30],
                backgroundColor: 'rgba(139, 92, 246, 0.7)',
                borderRadius: 6,
            }
        ]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: true // biar keliatan labelnya
            }
        },
        scales: {
            x: {
                stacked: false, // ⛔ penting!
                grid: { display: false }
            },
            y: {
                stacked: false, // ⛔ penting!
                beginAtZero: true
            }
        }
    }
});