<head>
<style>
*
{
    box-sizing: border-box;
}

.badan
{
    width: 880px;
    margin: 35px auto;
    background-color: white;
    padding: 20px;
    overflow: hidden;
}
 
.badan h2
{
    color: crimson;
    border-bottom: 1px solid gainsboro;
    margin: 5px;
    margin-bottom: 13px;
}
 
.list-produk
{
    border: 1px solid gainsboro;
    padding: 10px;
    float: left;
    width: 200px;
    margin: 5px;
    text-align: center; /* Membuat isi .list-produk menjadi rata tengah */
}
 
.list-produk:hover
{
    transition-duration: 700ms;
    box-shadow: 5px 5px gainsboro;
}
 
.list-produk img
{
    width: 100%;
    height: 175px;
    display: block;
    margin-bottom: 5px;
}
 
.list-produk p, .list-produk h5
{
    margin-bottom: 5px;
}
 
.tombol
{
    text-decoration: none;
    border-radius: 7px;
    padding: 7px;
    display: block;
    float: none; /* Mengubah float menjadi none agar tombol berada di tengah */
    width: 45%;
    margin: 4px auto; /* Mengatur margin agar tombol berada di tengah */
    text-align: center;
    color: white;
    transition-duration: 700ms;
}

.tombol:hover
{
    background-color: #555;
}

.tombol-detail
{
    background-color: khaki;
}
 
.tombol-beli
{
    background-color: grey;
}
</style>
</head>
<body>
     
<div class="badan">
 
    <div class="list-produk">
        <img src="jaket_parasut.jpg" alt="Jaket Parasut">
 
        <p>Jaket Parasut Polos</p>
        <p>Rp 150.000,-</p>
 
        <a class="tombol tombol-detail" href="#">Detail</a> 
    </div>
 
    <div class="list-produk">
        <img src="jaket1.jpg" alt="Jaket Tactical">
 
        <p>Jaket Tactical Hitam</p>
        <p>Rp 230.000,-</p>
 
        <a class="tombol tombol-detail" href="#">Detail</a> 
    </div>
 
    <div class="list-produk">
        <img src="jaket2.jpg" alt="Jaket Bomber Stylish">
 
        <p>Jaket Bomber Stylish</p>
        <p>Rp 250.000,-</p>
 
        <a class="tombol tombol-detail" href="#">Detail</a> 
    </div>
 
    <div class="list-produk">
        <img src="jaket3.jpg" alt="Jaket Naruto">
 
        <p>Jaket Naruto</p>
        <p>Rp 170.000,-</p>
 
        <a class="tombol tombol-detail" href="#">Detail</a> 
    </div>
</div>
</body>
</html>
