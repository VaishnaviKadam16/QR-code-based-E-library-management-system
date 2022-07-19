<?php
   header('Content-type: text/css; charset:UTF-8');
   ?>
@import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Piazzolla:wght@100&display=swap');
@import url('https://fonts.googleapis.com/css?family=Muli&display=swap');
*,*::before, *::after{
    box-sizing: border-box;
}
body {
	
	font-family: 'Muli', sans-serif;
	
	align-items: center;
	justify-content: center;
	
    overflow:hidden;
	min-height: 100vh;
	margin: 0;
}

.nav{
    background-color:#2A265F;
    height:145px;
    
}
.head{
    display:flex;
    margin-left:100px;
    padding-top:20px;
    width:100%;   
}
.icon{
    margin-top:10px;
}
.name{
    list-style:none;
    font-size:40px;
    margin-left:20px;
    color:white;
}
.main-nav ul{ 
    display:flex;
    list-style:none;
    margin-top:5px;
}
.main-nav li{
    display:flex;
    margin-left:100px;
    padding-top:30px;   
}
.main-nav a{
   
    font-size:20px;
    padding:10px;
    
    text-decoration:none;
    color:white;
}
.main-nav a:hover{
    background-color:white;
    color:#00005A;
}
.all{
    display:flex;
}
.card{
    
    border-radius:0.3rem;
    margin-top:5px;
    margin-left:10px;
    margin-right:10px;
    width:300px;
    height :450px;
    background-color:#BA0600;
}
.card-top{
    display:coloumn;
   
   
}
.card-top h2{ 
    color:white;
    padding-left:20px;
    font-size:27px;
    
}
.card-top h4{
    color: white;
    padding-left:20px;
}

.courses-container {
	display:column;
}

.course {
	background-color: #fff;
	font-size:20px;
	display: inline-block;
	max-width: 70%;
	margin-left: 20px;
    margin-right: 20px;
	overflow: hidden;
	width: 300px;
    height:300px;
}

.course h6 {
	opacity: 0.6;
	margin: 0;
	letter-spacing: 1px;
	text-transform: uppercase;
}

.course h3 {
	letter-spacing: 1px;
	margin: 10px 0;
    
}

.course-preview {
	background-color: #2A265F;
	color: #fff;
	padding: 3px;
	max-width: 300px;
}

.course-preview h3{
    padding-left:30px;
}

.course-info {
	padding-left: 30px;
	position: relative;
	width: 100%;
    height:600px;
    background-color:#BA0600;
}
.course-info  h6 {
	opacity: 0.6;
	margin: 0;
	letter-spacing: 1px;
	text-transform: uppercase;
    color:white;
}
.course-info h5{
    margin-top:5px;
    color:white;
}

.align{
    display:flex;
}

.a2{
    margin-left:40px;
}
.data-top{
    display:flex;
    float:right;
    margin-top: 12px;
	margin-left: 20px;
	overflow: hidden;
    
}
.data-top h3{
    padding-top:20px;
    padding-left:50px;
    color:#2A265F;
    height:70px;
}

.book-left{
    margin-left:10px;
    margin-top:30px;
    text-align:center;
    float:left;
    width:60px;
    height:60px;
    background-color: #BA0600;
    color:white;
    border-radius:0.3rem;
}
.book-left h2{
}

.qrc{
    display:flex;
    margin-left:50px;
}
.qr-container{
    display:flex;
    flex-direction:column;
    border:2px solid #2A265F;
    margin-top:10px;
    margin-left:100px;
    height :450px;
    width:400px;
    text-align:center;
    
}
.qr-container h2{
    height:70px;
    padding-top:15px;
    margin-top:0.01rem;
    background-color: #BA0600;
    color:white;
}
.qr-container input{
    text-align:left;
    font-size:18px;
    border:white;
    margin:10px;
    width:260px;
}
.qr-container label{
    margin:10px;
    width:90px;
    text-align:right;
}
.qr{
    width:80px;
    height:40px;
    background-color:#BA0600;
    border:#BA0600;
    color:white;
    margin-top:20px;
    margin-left:40%;
}

.qr-container1{
    display:flex;
    flex-direction:column;
    border:2px solid #2A265F;
    margin-top:10px;
    margin-left:100px;
    height :450px;
    width:400px;
    text-align:center;
    
}
.qr-container1 h2{
    height:70px;
    padding-top:15px;
    margin-top:0.01rem;
    background-color: #BA0600;
    color:white;
}
.qr-container1 input{
    text-align:center;
    font-size:18px;
    border:white;
    margin:10px;
}
.qr-container1 label{
    margin:10px;
}
#container {
  text-align: center;
  margin: 0;
}

#qr-canvas {
  margin: auto;
  width: calc(100% - 20px);
  max-width: 400px;
}

#btn-scan-qr {
  cursor: pointer;
}

#btn-scan-qr img {
  height: 10em;
  padding: 15px;
  margin: 15px;
  background: white;
}

#qr-result {
  font-size: 1.2em;
  margin: 20px auto;
  padding: 20px;
  max-width: 700px;
  background-color: white;
}

.date{
    display: flex;
}

.bkdet{
    display:flex;
    flex-direction:column;
}
.tb{
    margin-left:20px;
    margin-top: 40px;
}
.content{
    background: white;
    width:95%;
    text-align :center;
    overflow-y:scroll;
    height:300px;
    margin-left:30px;
  }

  table{
      width: 90%;
      border-collapse:collapse;
      font-size:15px;
      border:white;
  }

  thead{
    text-align:left;
    font-size:18px;
  }
  td{
    padding-left:5px;
    padding-top:5px;  
  }
  th{
    text-align:left;
    padding-left:5px;
    padding-top:5px; 
    background-color:#2A265F;
    color:white; 
  }

  .cards {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 150px;
  height:210px;
  border-radius: 5px;
  margin:15px;
  background-color:#f2f4f8;
  flex-flow: row wrap;
}

.cards h1{
    padding-left:65px;
    color:#BA0600;
    flex-flow: row wrap;
}
.cards h4{
    color:#2A265F;
    word-wrap: break-word;
}
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}



.container {
  padding-left:10px;
  height:95px;
}
.cw{
  height: 25px;
  background-color:#BA0600;
  border-radius:10px  ;
  color:white;
  margin-left:50px;
  font-family: 'Muli', sans-serif;
}

.cls{
    margin-top:10px;
    margin-left:10px;
    display:flex;
    width:1270px;
    height:450px;
    flex-flow: row wrap;
    overflow-y:scroll;
    
}

.flex{
    
    display:flex;
}
.flex1{
    margin-top:10px;
    height:370px;
    width:340px;
    overflow-y:scroll;
}

.flex1 button{
    height:40px;
}
.flex0 h3{
    padding-left:120px;
    padding-top:10px;
    background: #BA0600;
    color:white;
    height:50px;
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

.cat_btn{
      color:black;
      background-color:  white;
    border: 2px solid   white ;
    margin-left:40px;
  }