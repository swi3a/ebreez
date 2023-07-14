<!DOCTYPE html>
<html>

<head>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  
  <title>Icon Home Page</title>

  <style>
    body {
  background: radial-gradient(circle, rgba(255, 217, 61, 1) 0%, rgba(255, 226, 110, 1) 100%);
  font-family: Arial, sans-serif;
  margin: 52px;
  padding: 140px;
}

@media (max-width: 500px) {
  .container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    justify-items: center;
    align-items: center;
    height: 50vh;
    padding-top: 100px;
    padding-right: 10%;
    padding-left: 3%;
  }

  .button {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 215px;
    height: 215px;
    border-radius: 10px;
    background-color: #2c8488;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    transition: box-shadow 0.3s ease-in-out;
    cursor: pointer;
    margin: 10%;
  }
}

 .container {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    justify-items: center;
    align-items: center;
    height: 50vh;
    padding-top: 100px;
    padding-right: 10%;
    padding-left: 3%;
  }


.button {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 120px;
  height: 120px;
  border-radius: 10px;
  background-color: #2c8488;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  transition: box-shadow 0.3s ease-in-out;
  cursor: pointer;
}

.button:hover {
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

.button i {
  font-size: 48px;
  margin-bottom: 10px;
  color: #fff;
}

.button span {
  font-size: 14px;
  text-align: center;
}

.logo {
  width: 206px;
  height: 55px;
}

  </style>

</head>

<body>

  <img class="logo" src="../assets/images/Bwise3.png" alt="Logo">  
  <div class="container">
    
    <div class="button">
      <i class="fas fa-home"></i>
      <span>Home</span>
    </div>
    
    <div class="button">
      <i class="fas fa-search"></i>
      <span>Search</span>
    </div>
    
    <div class="button">
      <i class="fas fa-envelope"></i>
      <span>Messages</span>
    </div>
    
    <div class="button">
      <i class="fas fa-camera"></i>
      <span>Camera</span>
    </div>
    
    <div class="button">
      <i class="fas fa-music"></i>
      <span>Music</span>
    </div>
    
    <div class="button">
      <i class="fas fa-globe"></i>
      <span>Explore</span>
    </div>
    
    <div class="button">
      <i class="fas fa-heart"></i>
      <span>Favorites</span>
    </div>
    
    <div class="button">
      <i class="fas fa-shopping-cart"></i>
      <span>Cart</span>
    </div>
    
    <div class="button">
      <i class="fas fa-user"></i>
      <span>Profile</span>
    </div>

  </div>

</body>

</html>
