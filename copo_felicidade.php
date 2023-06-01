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
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="estrutura.php">Início/</a></li>
        <li class="breadcrumb-item"><a href="produtos.php">Doces/</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#">Copo da Felicidade</a></li>
      </ul>
    </nav>

    <!-- container produto -->
    <section class="container">

<br>
      <article class="row produtos-compra">
        <figure class="col-md-7 mb-3">
          <img src="img/copo_felicidade.jpg" class="img-fluid">
        </figure>

        <section class="col-md-5 mb-3 d-flex">
          <article class="produtos-conteudo">
            <h1>Copo da Felicidade - <br> 500ml</h1>
            <p>
              Além de saborosa, é visualmente atraente, então irá deixar a todos maravilhados. Ela já ficou popular
              entre os brasileiros pela sua praticidade, sabor e visual, então não perca tempo.
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
              R$ 15,95
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
                  <option>Chocolate/Leite em Pó</option>
                  <option>Morango/Chocolate</option>
                  <option>Morango/Leite em Pó</option>
                  <option>Leite Condensado/Chocolate</option>
                  <option>Morango/Leite Condensado</option>
                </select>
              </div>
<br>
              <a href="carrinho.php"><button type="submit" class="btn btn-success col-md-12">Comprar</button></a>
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