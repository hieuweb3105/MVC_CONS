window.addEventListener('load', function () {
    // 1. Tìm phần tử loader
    const loaderWrapper = document.getElementById('loader-wrapper');

    // 2. Ẩn loader
    // Cách 1: Thêm class 'loaded' vào thẻ body/html để kích hoạt CSS ẩn/mờ dần
    document.body.classList.add('loaded');

    // Nếu bạn không dùng CSS transition, có thể ẩn trực tiếp:
    // loaderWrapper.style.display = 'none';

    // (Tùy chọn) Sau khi ẩn đi bằng transition, bạn có thể xóa hẳn phần tử
    // để dọn dẹp DOM sau vài giây, nếu cần
    // setTimeout(() => {
    //     loaderWrapper.remove();
    // }, 600); // 600ms = thời gian transition CSS
});