
// thong bao loi error
document.addEventListener('DOMContentLoaded', (event) => {
    const errorAlert = document.getElementById('error-alert');
    if (errorAlert) {
        setTimeout(() => {
            errorAlert.style.transition = 'opacity 0.5s ease-out';
            errorAlert.style.opacity = '0';
            setTimeout(() => {
                errorAlert.style.display = 'none';
            }, 500); // Thời gian cho quá trình mờ dần
        }, 10000); // 10 giây
    }
});

// loc theo gia
var slider = document.getElementById('price-slider');

noUiSlider.create(slider, {
    start: [0, 10000000],
    connect: true,
    range: {
        'min': 0,
        'max': 10000000
    },
    format: {
        to: function(value) {
            return new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(value);
        },
        from: function(value) {
            return Number(value.replace(/[₫,]/g, ''));
        }
    }
});

slider.noUiSlider.on('update', function(values, handle) {
    document.getElementById('filter-price-range').innerHTML = values.join(' - ');
    document.getElementById('min-price').value = values[0].replace(/[₫,]/g, '');
    document.getElementById('max-price').value = values[1].replace(/[₫,]/g, '');
});
