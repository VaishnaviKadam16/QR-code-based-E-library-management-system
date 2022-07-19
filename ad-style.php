<?php
   header('Content-type: text/css; charset:UTF-8');
   ?>
@import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Piazzolla:wght@100&display=swap');
*,*::before, *::after{
    box-sizing: border-box;
}
body{
    font-family: 'Merriweather', serif;
}
.name{
    margin-left: 30px;
    font-size: 30px;
    color: white;
    text-decoration: none;
    padding-top:10px;
}
.contain{
    height:57px;
    background: #062549;
    
}
.main-header{
    display:flex;
    
}
.main-nav ul{
    margin-left:850px;
    display:flex;
    list-style:none;
}
.main-nav a{
    padding-left:20px;
    text-decoration:none;
    color:white;
    font-size:20px;
}

.main-nav h3{
    padding-left:370px;
    text-decoration:none;
    color:white;
    font-size:20px;
}

.sidenav {
    height: 100%;
    width: 200px; 
    position: fixed;
    z-index: 1;
    top: 0; 
    left: 0;
    background-color:#2c437d; 
    overflow-x: hidden; 
    padding-top: 20px;
    margin-left: 9px;
    margin-top: 65px;
  }
  .sidenav a {
    padding: 10px 8px 6px 16px;
    text-decoration: none;
    font-size: 15px;
    color:whitesmoke;
    display: block;
  }
  .sidenav a:hover {
    color: white;
    background: #062549;
  }

 .admin-details{
    margin: 1% auto;
    margin-left: 18.5%; 
    border: 3px solid #062549;
    background: white;
    width:80%;
    height: 530px;
    color: #062549;
    text-align: center;
    display:flex;
 } 
 .container1{
    width:65%;
 }
 
 
 .book label{
     display: inline-block;
      text-align: right;
      float: left;
      width: 120px;
 }
 .book input{
     display:inline-block;
     float:left;
     width:500px;
     height:30px;
 }
 .book select{
     width:500px;
     float:left;
     height:30px;
 }
 .book textarea{
     width:500px;
     float:left;
    height:130px;
 }
 
 .sub{
    margin-left:470px;
    margin-bottom:20px;
    float: left;
    font-size: 20px;
    color: white;
    background-color:  #2c437d;
    border: 2px solid   #2c437d ;
  }
  .container2{
      width:35%;
      background-color:  #2c437d;

  }
  .container2 h1{
      color:white;
      padding-top:20px;
      text-align:center;
  }
  .qr{
      height:60%;
      width:80%;
      margin-top:40px;
      margin-left:35px;
      background-color:white;
      color:black;
      padding-top:20px;
  }

  .head{
    margin-left:201px;
    border: 1px solid #062549;
    background: white;
    width:84%;
    color: #062549;
    text-align :center;
    padding: 5px 15px 15px;
  }

  .below{
      display:flex;
  }

  .content{
    background: white;
    width:84%;
    text-align :center;
    overflow-y:scroll;
    height:549px;
    margin-left:201px;
  }
  .content1{
    background: white;
    width:84%;
    text-align :center;
    overflow-y:scroll;
    height:430px;
    margin-left:201px;
  }
  table{
      width: 100%;
      border-collapse:collapse;
      font-size:15px;
  }

  thead{
    text-align:left;
    font-size:18px;
    background: #2c437d;
    color:white;
  }
  td{
    text-align:left;
    padding-left:5px;
    padding-top:5px;  
  }
  .action{
      display:flex;
  }
  .edit{
      color:#2ac75c;
      background-color:  white;
    border: 2px solid   white ;
    margin-left:40px;
  }
  .delete{
      color:#f73131;
      background-color:  white;
    border: 2px solid   white ;
    margin-left:10px;
  }

  .edit-content{
      margin-top:10px;
      margin-left:200px;
      height:530px;
      width:70%; 
      border: 2px #062549;  
  }
  .top{
      display:flex;
      background-color:  #062549;
  }
  .top h4{
      color:whitesmoke;
  }
  .top label{
      color: white;
  }
  .center-left{
      float:left;
      width:50%;
      display:inline-block;
  }
  .center-left h4{
      color:#062549;
  }
  .center-left input{
      border-top-style:hidden;
      border-left-style:hidden;
      border-right-style:hidden;
      border-bottom-style:10px #062549;
      font-size:17px; 
      font-family: 'Merriweather', serif;
  }

  
  .center-right{
      float:right;
      width:50%;
      display:inline-block;
  }
  .center-right h4{
      color:#062549;
  }
  .center-right input{
      border-top-style:hidden;
      border-left-style:hidden;
      border-right-style:hidden;
      border-bottom-style:10px #062549;
      font-size:19px; 
      font-family: 'Merriweather', serif;
  }
  
  .update{
    text-decoration:none;
      background-color:green;
      margin-left:200px;
      margin-top:200px;
      color:white;
      padding:10px;
      border-radius:1rem;
      border:green;
      font-size:17px;
      font-family: 'Merriweather', serif;
  }
  
 .cancelbtn{
      text-decoration:none;
      background-color:red;
      color:white;
      padding:10px;
      border-radius:1rem;
      margin-left:50px;
      margin-top:200px;
      font-size:17px;
      font-family: 'Merriweather', serif;
  }
  .sub1{
    font-size: 18px;
    color: white;
    background-color:  #2c437d;
    border: 2px solid   #2c437d ; 
  }
  
  .content h2{
      color: #062549;
  }
  /* width */
::-webkit-scrollbar {
  width: 5px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px #2A265F;
  border-radius: 10px;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #BA0600;
  border-radius: 10px;
}
