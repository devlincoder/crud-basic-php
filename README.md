# Tạo CRUD cơ bản (Create - Read - Update - Delete)

- Kết nối Database : $connect = new mysqli($server,$username,$password,$databasename)
- Truy vấn lệnh SQL : $result = mysqli_query($connect,$sql)
- Đọc dữ liệu : while($row = mysqli_fetch_assoc($result)){  $id = $row['id'];  }
- Lấy dữ liệu bằng $_GET , $_POST : ?id=x
- Dẫn tới link header("location:xxxx.php")

<a href="https://www.youtube.com/watch?v=72U5Af8KUpA&t=964s" target="_blank">Link tutorial</a>