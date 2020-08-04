<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <style>
      .middle {
        height: 100vh;
      }
      .green {
        color: #00a547;
      }
      .head-title p {
        font-size: 28px;
      }
      .head-title h5 {
        font-size: 23px;
      }
      .logo-img {
        width: 80px;
        margin-right: 0.5em;
      }

      form {
        margin-top: 1.5em;
      }
      input {
        border: 1px solid #00a547 !important;
      }
      textarea {
        border: 1px solid #00a547 !important;
      }
      select {
        border: 1px solid #00a547 !important;
      }
      input:focus {
        box-shadow: 0 0 2px 2px rgba(0, 165, 71, 0.5) !important;
      }
      textarea:focus {
        box-shadow: 0 0 2px 2px rgba(0, 165, 71, 0.5) !important;
      }
      select:focus {
        box-shadow: 0 0 2px 2px rgba(0, 165, 71, 0.5) !important;
      }
      .btn-green {
        width: 100%;
        background-color: #00a547;
        color: white;
        border: none;
        padding: 0.5em;
      }
      .btn-green:hover {
        color: white;
        background-color: #00b34d;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="middle row justify-content-center align-items-center">
        <div class="col-10 col-md-5 col-lg-8">
          <div class="head-form row justify-content-center align-items-center">
            <img src="./medan.jpg" class="logo-img" alt="logo" />
            <div class="head-title green">
              <p>Laporan Pengaduan</p>
              <h5>Masyarakat Kota Medan</h5>
            </div>
          </div>
          <form method="post" action="form_anonim.php">
            <?php include('errors.php'); ?>

            <div class="form-group">
            <label for="kategori">Judul :</label>
              <input
                type="text"
                class="form-control shadow-none"
                id="inputText"
                required="required"
                name="nama"
                value="<?php echo $nama; ?>"
              />
            </div>
            <div class="form-group">
            <label for="kategori">Laporan :</label>
              <textarea
                class="form-control shadow-none"
                required="required"
                value="<?php echo $email; ?>"
              ></textarea>
            </div>
            <div class="form-group">
            <label for="kategori">Tanggal Kejadian :</label>
              <input
                type="date"
                class="form-control shadow-none"
                id="inputDate"
                required="required"
                name="username"
                value="<?php echo $username; ?>"
              />
            </div>
            <div class="form-group">
            <label for="kategori">Lokasi/Alamat:</label>
              <input
                type="text"
                class="form-control shadow-none"
                id="inputText"
                required="required"
                name="telp"
                value="<?php echo $telp; ?>"
              />
            </div>
            <div class="form-group">
              <label for="kategori">Kategori:</label>
              <select class="form-control" id="kategori">
                <option></option>
                <option>Aduan</option>
                <option>Saran</option>
              </select>
            </div>
            <div class="form-group">
              <button
                type="submit"
                class="btn btn-green shadow-none"
                name="lap_anonim"
              >
                LAPOR !
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
