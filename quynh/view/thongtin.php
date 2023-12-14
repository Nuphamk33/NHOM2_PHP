<main>
        <!-- About US Start -->
        <div class="about-area">
            <div class="container">
                <section class="sign-in sign-up bg-holder">
                    <div class="container-fluid">
                      <div class="row justify-content-between">
                        <div class="col-lg-12 col-xl-7 align-self-center order-2 order-xl-1">
                          <div class="sign-in-content h-100">
                            <div class="section-title text-center">
                              <h2 class="primary-text">Thông tin tài khoản</h2>
                            </div>
                            <!-- <h6 class="d-flex justify-content-center d-none" style="color: red;">Tên đăng nhập đã tồn tại!</h6> -->
                            <form class="row mt-4 mb-4 mb-sm-5 align-items-center form-flat-style" action="backend/add.php?user"
                              method="post">
                              <div class="mb-3 col-sm-12">
                                <label class="form-label">Họ và tên:</label>
                                <input type="text" class="form-control" name="name" required>
                              </div>
                              <div class="mb-3 col-sm-12">
                                <label class="form-label">Tên đăng nhập:</label>
                                <input type="text" class="form-control" name="user_name" required>
                              </div>
                              <div class="mb-3 col-sm-12">
                                <label class="form-label">Email:</label>
                                <input type="text" class="form-control" name="email" required>
                              </div>
                              <div class="mb-3 col-sm-12">
                                <label class="form-label">Mật khẩu:</label>
                                <input type="Password" class="form-control" name="password" required>
                              </div>
                              <!-- <div class="mb-3 col-sm-12">
                                        <label class="form-label">Xác thực mật khẩu:</label>
                                        <input type="Password" class="form-control" name="name">
                                      </div> -->
                              <div class="col-sm-5 d-grid">
                                <button type="submit" class="btn btn-primary btn-flat">Chỉnh sửa</button>
                              </div>
                              
                            </form>
                          </div>
                        </div>
                        <script>
                          if (window.location.href.includes('?error=true')) {
                            document.querySelector('h6.d-none').classList.remove('d-none')
                          }
                        </script>
                
                
                       
                      </div>
                    </div>
                  </section>
            </div>
        </div>
        <!-- About US End -->
    </main>