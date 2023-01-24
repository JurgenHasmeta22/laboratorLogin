<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Laborator 3</title>
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>
  <main class="page-wrapper">
    <section class="shporta-wrapper">
      <div class="shporta-left">
        <div class="shporta-title">
          <h3>Permbledhje e blerjeve</h3>
        </div>
        <div class="shporta-items-wrapper">
          <div class="shporta-item">
            <img src="http://localhost/laboratorLogin/assets/images/placeholder.png">
            <span>Emri: Bluze</span>
            <span>Pershkrimi: jeoje</span>
            <span>Masa: XL</span>
            <span>Ngjyra: Kuqe</span>
            <span>Cmimi: 2000 All</span>
          </div>
        </div>
        <div class="shporta-total">
          <div class="shporta-tvsh">
            <span>TVSH 20%: </span>
            <span>15000 All</span>
          </div>
          <div class="shporta-transporti">
            <span>Transporti: </span>
            <span>200 All</span>
          </div>
          <div class="shporta-totali">
            <span>Totali: </span>
            <span>17000 All</span>
          </div>
        </div>
      </div>
      <div class="shporta-right">
        <form id="form-bli">
          <div class="input-box">
            <label for="">Emri</label>
            <input
              type="text"
              name="emri"
              placeholder="Shkruani username"
              required
            />
          </div>
          <div class="input-box">
            <label for="">Email</label>
            <input
              type="text"
              name="email"
              placeholder="Shkruani emailin"
              required
            />
          </div>
          <div class="input-box">
            <label for="">Telefon</label>
            <input
              type="text"
              name="telefon"
              placeholder="Shkruani nr e telefonit"
              required
            />
          </div>
          <div class="input-box">
            <label for="">Adrese</label>
            <input
              type="text"
              name="adrese"
              placeholder="Shkruani adresen e banimit"
              required
            />
          </div>
          <button type="submit" >Bli</button>
        </form>
      </div>
    </section>
  </main>
</body>
</html>