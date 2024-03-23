<style>
  body {
    background-color: #f5f5f5;
    font-family: 'Arial', sans-serif;
  }

  .login-block {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-left: 380px;
    margin-bottom: 20px;
  }

  .login-sec {
    margin-left: auto;
    margin-right: auto;
    margin-top: 50px;
    width: 400px;
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .login-sec h3 {
    text-align: center;
    color: #333;
  }

  .form-group {
    margin-bottom: 20px;
  }

  label {
    font-weight: bold;
    color: #555;
  }

  .form-control {
    border-radius: 5px;
    height: 40px;
    box-shadow: none;
    border-color: #ddd;
  }

  .form-control:focus {
    border-color: #c89979;
    box-shadow: 0 0 8px #c89979;
  }

  .logbtn {
    width: 100%;
    border-radius: 5px;
    background-color: #c89979;
    color: #fff;
    font-size: 16px;
    padding: 10px;
    cursor: pointer;
  }

  .logbtn:hover {
    background-color: #c89979;
  }

  .copy-text {
    text-align: left;
    margin-top: 20px;
    font-size: 14px;
    color: #888;
  }

  .copy-text a {
    color: #c89979;
    text-decoration: none;
  }

  .copy-text a:hover {
    text-decoration: underline;
  }

  .form-check {
    padding: 0;
  }
</style>

<section class="login-block">
  <div class="container">
    <div class="row">
      <div class="login-sec">
        <h3><b>Đăng nhập</b></h3>
        <form action="index.php?action=dangnhap&act=dangnhap_action" class="login-form" method="post">

          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control" name="txtusername" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="txtpassword" placeholder="">
          </div>

          <div class="form-check">
            <button class="logbtn" type="submit">Đăng Nhập</button>
          </div>
        </form>
        <div class="copy-text">
          <a href="index.php?action=forget">Quên mật khẩu</a>
        </div>
      </div>
    </div>
  </div>
</section>