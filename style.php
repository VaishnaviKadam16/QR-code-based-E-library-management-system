<?php
   header('Content-type: text/css; charset:UTF-8');
   ?>
@import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Piazzolla:wght@100&display=swap');
html{
    font-family: 'Merriweather', serif;
}
img{
    opacity: 5;
}
body{
    background-image: url("./img/library_img.jpg");
    display:fit;
    }

h1{
    color: #e6df9c;
    font-size: 100px;
    margin-left: 140px;
}
h2{
    color: #820505;
    font-size: 30px;
}
* {box-sizing: border-box}
/* Full-width input fields */
input[type=text], input[type=password] {
width: 100%;
padding: 12px;
margin: 5px 0 22px 0;
display: inline-block;
border: none;
background: #f1f1f1;
}
/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
background-color: #c3ecf7;
outline: none;
}
select {
  margin: 10px;
  width: 200px;
  padding: 5px 35px 5px 5px;
  font-size: 16px;
  border: 1px solid #CCC;
  height: 40px;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background:#EEE;
}

@media screen and (min-width:0\0) {
    select  {
        background: none\9;
        padding: 5px\9;
    }
}

button{
    display: inline-block;
    padding-top: 0.7rem;
    padding-right: 1.1rem;
    padding-left: 0.9rem;
    padding-bottom: 0.7rem;
    color: white;
    background-color: #4aaeff;
    border: 2px solid #4aaeff;
    font-size: 2.2rem;
    text-transform: uppercase;
    letter-spacing: 0.1rem;
    margin-top: 10px;
    transition: .3s ease background-color;
    border-radius: 1.7rem;
    font-family: 'Merriweather', serif;
}
button:hover{
    color: white;
    background-color: transparent;
    border: 2px solid white;   
}


.log{
    margin-left: 350px;
    padding-top: 0.7rem;
    padding-right: 1.1rem;
    padding-left: 0.9rem;
    padding-bottom: 0.7rem;
    color: white;
    background-color: orangered;
    border: 2px solid #000000;
}
.reg{
    margin-left: 140px;
    color: white;
    background-color: orangered;
    border: 2px solid #000000;
}
.loginbtn{
    float: left;
    margin-left: 15px;
    margin-top: 40px;
    font-size: 20px;
    color: white;
    background-color:  #2ac75c;
    border: 2px solid   #000000 ;  
}
.cancelbutton{
    float: left;
    margin-left: 20px;
    margin-top: 40px;
    font-size: 20px;
    color: white;
    background-color:  #f73131;
    border: 2px solid  #000000 ;  
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn{
float: left;
margin-left: 30px;
font-size: 20px;
color: white;
background-color:  #f73131;
border: 2px solid   #000000 ;
height: 50px;
}
.signupbtn {
    float: left;
    margin-left: 30px;
    font-size: 20px;
    color: white;
    background-color:  #2ac75c;
    border: 2px solid   #000000 ;
    }

/* Add padding to container elements */
.container {
padding: 16px;
}

/* The Modal (background) */
.modal, .modal1  {
display: none; /* Hidden by default */
position: fixed; /* Stay in place */
z-index: 1; /* Sit on top */
left: 0;
top: 0;
width: 100%; /* Full width */
height: 100%; /* Full height */
overflow: auto; /* Enable scroll if needed */
background-color: #474e5d;
padding-top: 50px;
}

/* Modal Content/Box */
.modal-content , .modal1-content{
background-color: #e6df9c;
margin: 5% auto 5% auto; /* 5% from the top, 15% from the bottom and
centered */
border: 1px solid #888;
border-radius: 1rem;
width: 50%; /* Could be more or less, depending on screen size */
}
.modal-content{
    height: 70%;
}
.modal-content1{
background-color: #e6df9c;
margin: 5% auto 5% auto; /* 5% from the top, 15% from the bottom and
centered */
border: 1px solid #888;
border-radius: 1rem;
width: 60%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
border: 1px solid #f1f1f1;
margin-bottom: 25px;
}
.ext {
    display: none; 
    position: fixed; 
    z-index: 1; 
    margin-left: 400px;
    top: 0;
    width: 500px; 
    height: 100px; 
    text-align: center; 
    background-color:red;
    padding-top: 25px;
    }
    
 
    
/* The Close Button (x) */
.close {
position: absolute;
right: 35px;
top: 15px;
font-size: 40px;
font-weight: bold;
color: #f1f1f1;
}

.close:hover,
.close:focus {
color: #f44336;
cursor: pointer;
}
.admin{
    margin-top:150px;
    margin-left:550px;
    font-size:10px;
    border:black;
    height:40px;
    width:75px;
    background-color:orangered;
}
.ad-modal{
    display: none; 
position: fixed; 
z-index: 1; 
left: 0;
top: 0;
width: 100%;
height: 100%; 
overflow: auto; 
background-color: #474e5d;

}
.container1{
    width:50%;
    float:left;
}
.container1 h1{
    font-size:30px;
    color:white;
}
.container2 h1{
    font-size:30px;
    color:white;
}

.container2{
    width:50%;
    float:right;
}
.msg {
    color:white;
    margin-left:320px;
    font-size:20px;
}
/* Clear floats */
.clearfix::after {
content: "";
clear: both;
display: table;
}
/* Change styles for cancel button and signup button on extra small
screens */
@media screen and (max-width: 300px) {
.cancelbtn, .signupbtn {
width: 100%;
}
}