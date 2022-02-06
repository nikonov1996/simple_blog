async function getAllArticles(){

    let res = await fetch("/all");
    let articles = await res.json();

    articles.array.forEach(article => {
        document.querySelector('.accordion').innerHTML += `
        
        <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Accordion Item #1
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            ${article.description}
          </div>
        </div>
      </div>
        
        `
    });
}