<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Céu de Brigadeiro - Um Horizonte de Doces</title>

  <link href="css/responsivo.css" rel="stylesheet"> 
  <link rel="stylesheet" href="css/produto.css">
  <link rel="stylesheet" href="css/navbar.css">
</head>

<body>
  
  <?php include ('navbar.html') ?>
  
  <main>

    <nav aria-label="breadcrumb" class="links">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="estrutura.php">Início/</a></li>
        <li class="breadcrumb-item"><a href="produtos.php">Doces/</a></li>
        <li class="breadcrumb-item active" aria-current="page">Fondue</li>
      </ol>
    </nav>
    <!-- container produto -->
    <section class="container">

      <article class="row produtos-compra">
        <figure class="col-md-7 mb-3">
          <img src="img/fondue.jpg" class="img-fluid">
        </figure>

        <section class="col-md-5 mb-3 d-flex flex-column justify-content-around">
          <article class="produtos-conteudo">
            <h1>Fondue -  500ml</h1>
            <p>
              <br>
              Afunde-se em um mar de sabor e prazer com o Fondue de chocolate: Feito com os melhores ingredientes, nosso fondue val derreter seu coração e fazer você querer mais e mais. Mergulhe suas frutas, biscoitos ou marshmallows nesse delicioso banho de chocolate e experimente a felicidade em cada mordida. Perfeito para compartilhar com amigos e familiares ou como uma sobremesa romântica a dois
            </p>
          </article>

          <article class="produtos-preco">
            <div class="produtos-stars">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>

              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>

              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>

              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>
            </div>

            <strong>
              R$ 20,00
            </strong>

            <form action="carrinho.php">
              <div class="form-group">
                <label for="produtos-quantidade-itens">Quantidade</label>
                <select class="form-control" id="produtos-quantidade-itens">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>

              <div class="form-group">
                <label for="produtos-quantidade-itens">Sabores</label>
                <select class="form-control" id="produtos-quantidade-itens">
                  <option>Morango/Kiwi/Creme Ninho/Brigadeiro</option>
                  <option>Morango/Fini/Creme Ninho/Brigadeiro</option>
                  <option>Morango/Marshmallow/Creme Ninho/Brigadeiro</option>
                  <option>Morango/Biscoito/Creme Ninho/Brigadeiro</option>
                  <option>Kiwi/Fini/Creme Ninho/Brigadeiro</option>
                  <option>Kiwi/Marshmallow/Creme Ninho/Brigadeiro</option>
                  <option>Kiwi/Biscoito/Creme Ninho/Brigadeiro</option>
                  <option>Fini/Marshmallow/Creme Ninho/Brigadeiro</option>
                  <option>Fini/Biscoito/Creme Ninho/Brigadeiro</option>
                  <option>Marshmallow/Biscoito/Creme Ninho/Brigadeiro</option>
                </select>
              </div>
<br>
              <button type="submit" class="btn btn-success col-md-12">Comprar</button>
            </form>
          </article>
        </section>


        </main>
<br><br><br>
<?php include('ultimospedidos.html') ?>

<br>
<?php include('footer.html') ?>
</body>

</html>