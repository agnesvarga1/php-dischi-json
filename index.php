<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
    <title>Music Discs</title>
</head>
<body class="text-center p-5">
    
 <div id="app">

  <h1>Discs</h1>
  <div class="container position-relative ">
    <div class=" mx-auto bg-light h-100 w-100 position-absolute z-2   justify-content-center align-items-center" :class="!active ? 'd-none' : 'd-flex' " >
    <div @click="close" class="btn btn-secondary align-self-start ">X</div>
    <div class="card" style="width: 18rem;">
  <img :src="single.poster" class="card-img-top" alt="...">
  <div class="card-body">
  <h4>{{single.title}} </h4>
  <h5>{{single.author}}</h5>
  <h6>{{single.year}}</h6>

  </div>
</div>
    </div>
    <div class="row d-flex justify-content-center ">
    <div @click="getSingleDisc(disc)" v-for="(disc , i) in discs" :key="i" class="card  col-3 m-1" >
  <img :src="disc.poster" class="card-img-top w-75 mx-auto pt-2" alt="...">
  <div class="card-body">
  <h5>{{disc.title}} </h5>
  <h6>{{disc.author}}</h6>
  </div>
</div>
    </div>
  </div>
 </div>
 <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
 <script src="https://unpkg.com/vue@3"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js' integrity='sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg==' crossorigin='anonymous'></script>
<script src="./main.js"></script>
</body>
</html>