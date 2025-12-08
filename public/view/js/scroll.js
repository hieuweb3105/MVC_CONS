var scrollButton = document.getElementById("scrollButton");

// Hiển thị/ẩn nút khi cuộn trang
window.onscroll = function() {
    if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
    scrollButton.classList.remove("d-none");
    scrollButton.classList.add("animate__fadeIn");
    } else {
    scrollButton.classList.add("d-none");
    }
};

// Kéo lên đầu trang khi nhấp vào nút
scrollButton.addEventListener("click", function() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
});