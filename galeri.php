<head>
<style>
.container {
  display: flex;
  justify-content: center;
}

div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  width: 180px;
  text-align: center;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
}
</style>
</head>
<body>

<div class="container">
  <div class="gallery">
    <a target="_blank" href="d.jpg">
      <img src="jaket1.jpg" alt="Cinque Terre">
    </a>
    <div class="desc">Jaket 1</div>
  </div>
  
  <div class="gallery">
    <a target="_blank" href="b.jpg">
      <img src="jaket2.jpg" alt="Forest">
    </a>
    <div class="desc">Jaket 2</div>
  </div>
  
  <div class="gallery">
    <a target="_blank" href="d.jpg">
      <img src="jaket3.jpg" alt="Mountains">
    </a>
    <div class="desc">jaket 3</div>
  </div>
</div>

</body>
</html>
