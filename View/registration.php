<section>
  <style>
    body {
      background-color: #f5f5f5;
      font-family: 'Arial', sans-serif;
    }

    section {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 120vh;
    }

    .dangky {
      width: 600px;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background-color: #fff;
      margin-left: 280px;
    }

    legend {
      font-size: 24px;
      margin-bottom: 20px;
      color: #333;
    }

    label {
      font-weight: bold;
      margin-bottom: 5px;
      color: #555;
    }

    .form-control {
      margin-bottom: 10px;
      border-radius: 5px;
      height: 40px;
      box-shadow: none;
      border-color: #ddd;
    }

    .form-control:focus {
      border-color: #c89979;
      box-shadow: 0 0 8px #c89979;
    }

    .btn-primary {
      width: 100%;
      border-radius: 5px;
      background-color: #c89979;
      color: #fff;
      font-size: 16px;
      padding: 10px;
      cursor: pointer;
    }

    .btn-primary:hover {
      background-color: #c89979;
    }
  </style>

  <div class="dangky">
    <div class="container">
      <div class="">
        <legend><i class="glyphicon glyphicon-globe"></i> Đăng ký thành viên!</legend>
        <form action="index.php?action=dangky&act=dangky_action" method="post" class="form" role="form">
          <label for="txttenkh">Tên Khách Hàng:</label>
          <input class="form-control" name="txttenkh" placeholder="Tên khách hàng" required="" autofocus="" type="text">

          <label for="txtdiachi">Địa chỉ:</label>
          <input class="form-control" name="txtdiachi" placeholder="Địa chỉ khách hàng" required="" autofocus=""
            type="text">

          <label for="txtsodt">Số Điện Thoại:</label>
          <input class="form-control" name="txtsodt" placeholder="Số điện thoại khách hàng" required="" autofocus=""
            type="text">

          <label for="txtusername">Tên Đăng Nhập:</label>
          <input class="form-control" name="txtusername" placeholder="Tên đăng nhập" required="" type="text">

          <label for="txtemail">Email:</label>
          <input class="form-control" name="txtemail" placeholder="Email" type="email">

          <label for="txtpass">Mật khẩu:</label>
          <input class="form-control" name="txtpass" placeholder="Mật khẩu" type="password">

          <label for="retypepassword">Nhập lại mật khẩu:</label>
          <input class="form-control" name="retypepassword" placeholder="Nhập lại mật khẩu" type="password">

          <button class="btn btn-lg btn-primary" type="submit" name="submit">Đăng ký</button>
        </form>
      </div>
    </div>
  </div>
</section>