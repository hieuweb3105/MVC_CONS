document.addEventListener('DOMContentLoaded', function() {
    // 1. Lấy tất cả các nút bộ lọc
    const filterButtons = document.querySelectorAll('button[data-choose-tag]');
    
    // 2. Lấy tất cả các thẻ dự án
    const projectItems = document.querySelectorAll('#du-an > div'); 
    
    // 3. Lắng nghe sự kiện click cho từng nút
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const selectedTag = this.getAttribute('data-choose-tag');
            const transitionDuration = 500; // Phải khớp với thời gian transition trong CSS (0.5s = 500ms)

            // --- QUẢN LÝ ACTIVE CLASS ---
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            // --- BẮT ĐẦU LỌC VÀ HIỆU ỨNG ---
            filterProjects(selectedTag, projectItems, transitionDuration);
        });
    });

    /**
     * Hàm thực hiện lọc các dự án với hiệu ứng transition
     */
    function filterProjects(tag, items, duration) {
        items.forEach(item => {
            const projectTagsString = item.getAttribute('data-list-tag');
            const projectTagsArray = projectTagsString ? projectTagsString.split(';') : [];
            
            // Điều kiện khớp: là tag 'all' HOẶC tag được chọn nằm trong mảng tags của dự án
            const isMatch = (tag === 'all') || projectTagsArray.includes(tag);

            if (isMatch) {
                // KHI HIỂN THỊ (SHOW)
                
                // 1. Loại bỏ display: none ngay lập tức để item chiếm lại không gian
                item.style.display = 'block'; 
                
                // 2. *** BƯỚC SỬA LỖI QUAN TRỌNG NHẤT ***
                // Buộc trình duyệt tính toán lại kích thước (reflow/repaint) 
                // khi display đã là 'block' nhưng vẫn còn class 'filtered-out'
                // Điều này đảm bảo transition bắt đầu từ trạng thái ẩn.
                item.offsetHeight; // Đây là kỹ thuật dùng để kích hoạt reflow

                // 3. Loại bỏ class ẩn để bắt đầu transition mượt mà
                item.classList.remove('filtered-out');
                
            } else {
                // KHI ẨN (HIDE) - Giữ nguyên như cũ
                item.classList.add('filtered-out');
                setTimeout(() => {
                    if (item.classList.contains('filtered-out')) {
                        item.style.display = 'none';
                    }
                }, duration); 
            }
        });
    }
    
    // --- KHỞI TẠO BAN ĐẦU (DEFAULT) ---
    // 1. Lấy tag mặc định (all) và gọi hàm lọc
    const defaultTag = 'all';
    const defaultButton = document.querySelector(`button[data-choose-tag="${defaultTag}"]`);
    
    // 2. Đảm bảo nút "Tất cả" có class active
    if (defaultButton) {
        // Thêm active class cho nút mặc định (đã có trong HTML, nhưng thêm lại để đảm bảo)
        defaultButton.classList.add('active'); 
    }
    
    // 3. Lọc dự án để hiển thị tất cả (mặc định)
    filterProjects(defaultTag, projectItems, 500);
});