const click = document.querySelector('.click');
const listContainer = document.querySelector('.listContainer');
const listSmalls = document.querySelectorAll('.list-small');

click.addEventListener('click', function() {
    // Kiểm tra nếu listContainer2 đang hiển thị, thì đóng nó trước khi mở listContainer
    if (listContainer2.classList.contains('active')||listContainer3.classList.contains('active')){
        listContainer2.classList.remove('active');
        listContainer3.classList.remove('active');
    }
    listContainer.classList.toggle('active');
});

listContainer.addEventListener('click', function(event) {
    event.stopPropagation();
});

// 2
const click2 = document.querySelector('.click2');
const listContainer2 = document.querySelector('.listContainer2');
const listSmall2 = document.querySelectorAll('.list-small2');

click2.addEventListener('click', function() {
    // Kiểm tra nếu listContainer đang hiển thị, thì đóng nó trước khi mở listContainer2
    if (listContainer.classList.contains('active')||listContainer3.classList.contains('active')) {
        listContainer.classList.remove('active');
        listContainer3.classList.remove('active');
    }
    listContainer2.classList.toggle('active');
});

listContainer2.addEventListener('click', function(event) {
    event.stopPropagation();
});
// 3
const click3 = document.querySelector('.click3');
const listContainer3 = document.querySelector('.listContainer3');
const listSmall3 = document.querySelectorAll('.list-small3');

click3.addEventListener('click', function() {
    // Kiểm tra nếu listContainer đang hiển thị, thì đóng nó trước khi mở listContainer2
    if (listContainer.classList.contains('active')||listContainer2.classList.contains('active')) {
        listContainer.classList.remove('active');
        listContainer2.classList.remove('active');
    }
    listContainer3.classList.toggle('active');
});

listContainer3.addEventListener('click', function(event) {
    event.stopPropagation();
});

