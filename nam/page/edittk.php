
<?php
require('../include/head.php');
require('../include/header.php'); 
?>
<section class="page-content mt-50 mb-50">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="page-title">
                                        <h2>Cập nhật tài khoản</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="contact-form-container">
                                        <?php $checkusers = pdo_query_one("select * from `taikhoan` where `tentk` = '" . $_SESSION['username'] . "' "); ?>
                                        <form id="contact-form" action="" method="post" class="contact-form">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Tên tài khoản</label>
                                                        <input type="text" name="username" value="<?php echo $checkusers['tentk'] ?>" disabled>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Số điện thoại</label>
                                                        <input type="number" name="sdt" value="<?php echo $checkusers['sdt'] ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" name="email" value="<?php echo $checkusers['email'] ?>" disabled>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Địa chỉ</label>
                                                        <input type="text" name="diachi" value="<?php echo $checkusers['diachi'] ?>">
                                                    </div>

                                                </div>
                                               
<?php if(isset($_POST['submit'])){
   
        $sql= "update taikhoan set diachi='".$_POST['diachi']."',sdt='".$_POST['sdt']."' where id=".$checkusers['id'];
        pdo_execute($sql);
        echo "<script>location.href=''</script>";
} 
?>
                                              <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <button type="submit" name="submit"> Cập nhật <i class="fa fa-chevron-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <p class="form-messege pt-10 pb-10 mt-10 mb-10"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <?php
    require('../include/footer.php');
    ?>  