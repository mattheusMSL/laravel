<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produto</title>
  <style>
     body {
      background-color: black;
      color: white; 
      margin: 0;
      padding: 0;
    }
    header{
      align-content: space-between;
    }
    a {
       text-decoration: none;
       color: black;
    }
    nav a:hover{
      color: #480000  ;
      animation: 0.5s ease-in-out;
    }

    nav, ul, li{
      display: flex;
      list-style: none;
      justify-content: center;
      align-items:center;
      text-align:center;
      gap: 4em;
      background-color: gray;
      width: auto;
    }
    main{
      display: flex;
      justify-content: center;
      align-items:center;
    }
    footer{
      position: fixed;
      left: 0;
      bottom: 0; 
      width: 100%;
      background-color: gray;
      color: white;
      text-align: center;
    }
  </style>
</head>
<body>
  <header> 
    <nav>
      <ul> 
       <a href=""><li>home</li></a> 
       <a href=""><li>produtos</li></a> 
       <a href=""><li>pesquisar</li></a>
    </ul>
   </nav>
  </header>
  <main>
    <figure>
      <img src="" alt="product figure">
      <figcaption> {{ $productImg }}</figcaption>
    </figure>
    <section>
      <h1>{{ $productName }}</h1>
       <p> Price: R$ {{ $price }} </p>
    </section>
     <section>
      <details> product details</details>
       <article>
        <summary>
          <ul>
            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio hic illum officiis ipsa quisquam deleniti distinctio amet excepturi harum veniam mollitia quam quibusdam quae aliquid odio, aut sequi exercitationem sapiente?</li>
          </ul>
        </summary>
       </article>
     </section>
  </main>
  <footer> Lopes industries @2024</footer>
</body>
</html>