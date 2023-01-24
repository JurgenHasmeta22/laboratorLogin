function getArticles() {
  fetch('http://localhost/laboratorLogin/controllers/articles/getArticles.php')
  .then((response) => response.json())
  .then((data) => {
    const articles = data;
    let template = '';
    const articlesWrapperEl = document.querySelector('.articles-wrapper')

    articles.forEach(article => {
      template += `
        <div class="article" data-id=${article.ArtikullId}>
          <img class="imgArticle" src="${article.Imazhi ? article.Imazhi : "http://localhost/laboratorLogin/assets/images/placeholder.png"}" />
          <div class="span-holder">
            <span class="articleTitle">Emri: ${article.Emri}</span>
            <span class="price">Cmimi: ${article.Cmimi} Lek</span>
          </div>
          <button class="cart" data-id=${article.ArtikullId}">Add to cart</button>
        </div>
      `
    });
    // getBagButtons();
    articlesWrapperEl.innerHTML = template;
    // document.getElementsByClassName(".cart").addEventListener(
    //   "click", function () {
    //     window.location.href = "shporta.php"
    //   });
  });
}

// function getBagButtons() {
//   const buttons = [...document.querySelectorAll(".cart")];

//   buttons.forEach((button) => {
//       let id = button.dataset.id;
//       button.addEventListener("click", () => {
//           console.log(id);
//       });
//   });
// }

// function listenToClickCart(article) {
//   const buttonCartEl = document.querySelector('.cart');
//   buttonCartEl.addEventListener('click', addToCart(article))
// }

// function addToCart(article) {
//   let articles;
//   console.log(article)
//   // window.sessionStorage.setItem("items", JSON.stringify(testArray));
//   // let articlesFromSession = JSON.parse(sessionStorage.getItem("articles"));
  
//   // for (let i = 0; i < storedArray.length; i++) {
//   //   alert(storedArray[i]);
//   // }

//   // window.location.href = "shporta.php"
// }
