document.addEventListener('DOMContentLoaded', function() {
    const listImages = document.querySelectorAll('.section-introduce .img-introduce');
    const listControls = document.querySelectorAll('[click-bg-header]');
    let currentIndex = 1; // Bắt đầu từ 1, tương ứng với index-bg-header

    // Thời gian tự động chuyển slide (ví dụ: 5 giây)
    const autoSlideInterval = 3000;
    let slideTimer;

    // --- Hàm chuyển slide chính ---
    function showSlide(index) {
        // 1. Cập nhật chỉ mục hiện tại
        currentIndex = index;

        // 2. Ẩn/Hiện ảnh nền (Slide)
        listImages.forEach(img => {
            // Lấy giá trị data attribute 'index-bg-header'
            const imgIndex = parseInt(img.getAttribute('index-bg-header'));
            if (imgIndex === index) {
                img.classList.add('active');
            } else {
                img.classList.remove('active');
            }
        });

        // 3. Cập nhật trạng thái 'active' cho nút điều khiển (Control Box)
        listControls.forEach(control => {
            const controlIndex = parseInt(control.getAttribute('click-bg-header'));
            if (controlIndex === index) {
                control.classList.add('active');
            } else {
                control.classList.remove('active');
            }
        });
    }

    // --- Hàm tự động chuyển slide ---
    function autoSlide() {
        // Xóa hẹn giờ cũ (để tránh xung đột khi người dùng click)
        clearInterval(slideTimer);
        
        slideTimer = setInterval(() => {
            // Chuyển sang slide tiếp theo
            currentIndex++;
            
            // Nếu vượt quá số lượng ảnh, quay lại ảnh đầu tiên
            if (currentIndex > listImages.length) {
                currentIndex = 1;
            }
            
            showSlide(currentIndex);
        }, autoSlideInterval);
    }

    // --- Xử lý sự kiện click của người dùng ---
    listControls.forEach(control => {
        control.addEventListener('click', function() {
            // Lấy chỉ mục từ thuộc tính 'click-bg-header'
            const newIndex = parseInt(this.getAttribute('click-bg-header'));
            
            // Chuyển đến slide được chọn
            showSlide(newIndex);

            // Khởi động lại hẹn giờ tự động chuyển sau khi người dùng tương tác
            autoSlide();
        });
    });

    // --- Khởi tạo ---
    // 1. Mặc định hiển thị slide đầu tiên (nếu PHP chưa thêm class 'active')
    showSlide(1); 
    
    // 2. Bắt đầu tự động chuyển
    autoSlide();
});