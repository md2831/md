<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>for my cathybells</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">

<style>
:root{
    --bg1:#fff3a3; /* yellow */
    --bg2:#e6d6ff; /* purple */
    --card:rgba(255,255,255,0.75);
    --text:#4b3f72; /* purple text */
}

body{
    margin:0;
    font-family:'Poppins',sans-serif;
    background:linear-gradient(135deg,var(--bg1),var(--bg2));
    color:var(--text);
}

/* LOADING */
.loader{
    position:fixed;
    inset:0;
    display:flex;
    justify-content:center;
    align-items:center;
    background:white;
    z-index:999;
}

/* PASSCODE */
.lock{
    position:fixed;
    inset:0;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,var(--bg1),var(--bg2));
    z-index:200;
}

/* INPUT ROW */
.pass-wrapper{
    display:flex;
    align-items:center;
    gap:8px;
    margin-top:10px;
}

.pass-wrapper input{
    padding:10px;
    border:none;
    border-radius:20px;
    outline:none;
    text-align:center;
}

/* EYE */
.toggle-eye{
    cursor:pointer;
    font-size:18px;
}

/* BUTTON */
.love-btn{
    padding:10px 18px;
    border:none;
    border-radius:25px;
    background:linear-gradient(135deg,#ffd84d,#a86bff); /* yellow → purple */
    color:white;
    cursor:pointer;
}

.love-btn.small{
    padding:10px 14px;
}

/* SHAKE */
@keyframes shake {
    0% { transform: translateX(0); }
    25% { transform: translateX(-5px); }
    50% { transform: translateX(5px); }
    75% { transform: translateX(-5px); }
    100% { transform: translateX(0); }
}

.shake{
    animation:shake 0.3s;
}

/* INTRO */
.intro{
    position:fixed;
    inset:0;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
    background:linear-gradient(135deg,var(--bg1),var(--bg2));
    display:none;
}

/* MAIN */
.container{
    max-width:420px;
    margin:auto;
    padding:20px;
    display:none;
}

.card{
    background:var(--card);
    border-radius:20px;
    padding:15px;
    margin-bottom:15px;
    text-align:center;
}

h1{
    text-align:center;
    color:#8a4fff; /* purple */
}

/* PHOTOS */
.marquee{
    overflow:hidden;
}

.track{
    display:flex;
    animation:scroll 5s linear infinite;
}

.track img{
    width:130px;
    height:130px;
    border-radius:12px;
    margin-right:10px;
}

@keyframes scroll{
    from{transform:translateX(0);}
    to{transform:translateX(-50%);}
}

/* MODAL */
.modal{
    position:fixed;
    inset:0;
    background:rgba(0,0,0,0.5);
    display:none;
    justify-content:center;
    align-items:center;
}

.modal-content{
    background:white;
    padding:20px;
    border-radius:20px;
    text-align:center;
}
</style>
</head>

<body>

<div class="loader" id="loader">Loading... </div>

<!-- LOCK -->
<div class="lock" id="lock" style="display:none;">
    <h2>Hi, cathybells, i made something for u</h2>
    <h4>clue: secret</h4>

    <div class="pass-wrapper">
        <input type="password" id="pass" placeholder="Enter Passcode ">
        <span class="toggle-eye" onclick="togglePass()">👁️</span>
        <button class="love-btn small" onclick="checkPass()">Enter</button>
    </div>
</div>

<!-- INTRO -->
<div class="intro" id="intro">
    <h2>I hope you'll like it:></h2>
    <button class="love-btn" onclick="enterSite()">pinduta gani nanana</button>
</div>

<!-- MAIN -->
<div class="container" id="main">

<h1>Klowber</h1>

<div class="card">
    <h3>This track 🎵</h3>
<iframe data-testid="embed-iframe" style="border-radius:12px" src="https://open.spotify.com/embed/track/4FmeVH5lIipcrOiEdv1Hd2?utm_source=generator" width="100%" height="152"></iframe>

<div class="card">
    <h3>Fave memories 📸</h3>
    <div class="marquee">
        <div class="track">
            <img src="1.jpg">
            <img src="2.jpg">
            <img src="3.jpg">
            <img src="4.jpg">
            <img src="5.jpg">
            <img src="6.jpg">
            <img src="7.jpg">
            <img src="8.jpg">
            <img src="9.jpg">
            <img src="10.jpg">
            <img src="11.jpg">
            <img src="12.jpg">
            <img src="13.jpg">

            <img src="1.jpg">
            <img src="2.jpg">
            <img src="3.jpg">
            <img src="4.jpg">
            <img src="5.jpg">
            <img src="6.jpg">
            <img src="7.jpg">
            <img src="8.jpg">
            <img src="9.jpg">
            <img src="10.jpg">
            <img src="11.jpg">
            <img src="12.jpg">
            <img src="13.jpg">
        </div>
    </div>
</div>

<div class="card">
    <h3>Smile before open</h3>
    <button class="love-btn" onclick="openLetter()">Open</button>
</div>

</div>

<!-- MODAL -->
<div class="modal" id="modal">
    <div class="modal-content">
        <h2>My Klowber,</h2>
        <p> Cheers to our first month of being girlfriends</p>
        <button class="love-btn" onclick="closeLetter()">Close</button>
    </div>
</div>

<script>
setTimeout(()=>{
    document.getElementById("loader").style.display="none";
    document.getElementById("lock").style.display="flex";
},1500);

function togglePass(){
    const input=document.getElementById("pass");
    input.type=input.type==="password"?"text":"password";
}

function checkPass(){
    const input=document.getElementById("pass");

    if(input.value==="md"){
        document.getElementById("lock").style.display="none";
        document.getElementById("intro").style.display="flex";
    }else{
        input.classList.add("shake");
        setTimeout(()=>input.classList.remove("shake"),300);
    }
}

document.getElementById("pass").addEventListener("keypress",function(e){
    if(e.key==="Enter"){
        checkPass();
    }
});

function enterSite(){
    document.getElementById("intro").style.display="none";
    document.getElementById("main").style.display="block";
}

function openLetter(){
    document.getElementById("modal").style.display="flex";
}
function closeLetter(){
    document.getElementById("modal").style.display="none";
}
</script>

</body>
</html>
