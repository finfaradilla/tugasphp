
<head>
<style>
*, *:before, *:after {
    box-sizing: border-box;
}


.container {
    max-width: 480px;
    margin: 10px auto;
}

form {
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 8px;
}

h3, h4 {
    text-align: center;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="url"],
textarea {
    width: 100%;
    padding: 15px;
    margin-bottom: 20px;
    background-color: #e8eeef;
    border: none;
    border-radius: 4px;
    color: #8a97a0;
    font-size: 16px;
    outline: none;
    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
}

textarea {
    height: 150px;
}

button {
    width: 100%;
    padding: 15px;
    background-color: #4bc970;
    border: none;
    border-radius: 5px;
    color: #fff;
    font-size: 18px;
    text-align: center;
    cursor: pointer;
}

button:hover {
    background-color: #3ac162;
}
</style>
</head>
<body>
<div class="container"> 
    <form id="contact" action="" method="post">
        <h3>Order Form</h3>
        <h4>Isikan data dengan lengkap agar dapat dihubungi</h4>
        <input placeholder="Nama" type="text" tabindex="1" required autofocus>
        <input placeholder="Email" type="email" tabindex="2" required>
        <input placeholder="Phone" type="tel" tabindex="3" required>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Kirim Pesan</button>
    </form>
</div>
</body>
</html>
