# công dụng của Faker
- Faker là một thư viện PHP được sử dụng để tạo dữ liệu giả lập (fake data) như tên, địa chỉ, số điện thoại, email, v.v. để sử dụng cho mục đích kiểm thử, phát triển hoặc tạo dữ liệu mẫu với kích thước lớn nhiều dòng một cách tự động


# Cách sử dụng Faker
- B1: `php artisan make:factory ModelNameFactory --model=ModelName` ex: `php artisan make:factory PostFactory --model=Post`
- B2: vào `PostFactory` vừa tạo sử dung `use Illuminate\Support\Str;`
- B3: Điền vào kiểu dữ liệu mẫu cần tạo tựa như sau: 
`[
    'title' => $this->faker->text(200),
    'description' => $this->faker->text(30),
    'photo' => $this->faker->image('public/uploads', 640, 500, null, false)
]`
-B4: chạy lệnh `composer dump-autoload`
-B5: chạy lệnh `php artisan tinker`
-B7: chạy lệnh `Post::factory()->count(50)->create()` - nghĩa là tạo 50 dòng dữ liệu mẫu theo kiểu dữ liệu định nghĩa trên