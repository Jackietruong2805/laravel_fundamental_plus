# Công dụng của Seeder
- Trong Laravel, Seeder được sử dụng để tạo dữ liệu mẫu (dummy data) trong cơ sở dữ liệu. Seeder cung cấp cho chúng ta khả năng tạo dữ liệu đầu vào giả lập để kiểm tra tính năng của ứng dụng hoặc sử dụng cho mục đích khác trong quá trình phát triển.

- Seeder cho phép chúng ta tạo các bản ghi giả lập cho các bảng trong cơ sở dữ liệu của ứng dụng bằng cách sử dụng các phương thức của Eloquent ORM. Seeder thường được sử dụng kết hợp với Laravel's Database Migrations để tạo và cập nhật cấu trúc cơ sở dữ liệu, đảm bảo rằng dữ liệu mẫu được tạo ra phù hợp với cấu trúc cơ sở dữ liệu.

- Seeder giúp tiết kiệm thời gian và công sức khi phát triển ứng dụng bằng cách tự động tạo các bản ghi giả lập, thay vì phải thủ công tạo các bản ghi này trong quá trình kiểm thử hoặc phát triển.

# lệnh chạy seeder
 `php artisan db:seed`