# Helpers function
- Là hàm chúng ta dùng để tạo một hàm bất kì để thực hiện một tác vụ nào đó
- Nên tạo ở mục Http

# Các chạy lệnh để kích hoạt helpers function
- Đầu tiên nếu chúng ta cài ở mục Http thì thêm phần từ 
"file": {
    'app/Http/helpers.php'
}
vào file `composer.json` ở mục `autoload`

- sau đó chạy lệnh: 
composer dump-autoload