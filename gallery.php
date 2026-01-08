<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Gallery | Homestyle Interior</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

body {
    padding-top: 80px;
}

/* ================= HERO ================= */
.gallery-hero{
    position:relative;
    height:60vh;
    background:url("storage/Banners/November2025/contact_homestyle1.png") center/cover no-repeat;
    display:flex;
    align-items:center;
    justify-content:center;
}
.hero-overlay{
    position:absolute;
    inset:0;
    background:linear-gradient(135deg,rgba(21,91,165,.7),rgba(174,65,156,.7));
}
.hero-content{
    position:relative;
    text-align:center;
    color:#fff;
}
.hero-content h1{font-size:42px;font-weight:800}
.hero-content p{font-size:18px}

/* ================= GALLERY ================= */
.gallery-section{
    padding:70px 20px;
    max-width:1300px;
    margin:auto;
}

/* Section Headings */
.gallery-group-title{
    font-size:28px;
    font-weight:800;
    margin:60px 0 25px;
    color:#155aa5;
}
.gallery-group-title::after{
    content:"";
    width:60px;
    height:4px;
    background:linear-gradient(135deg,#155aa5,#ae419c);
    display:block;
    margin-top:10px;
    border-radius:2px;
}

/* Filters */
.gallery-filters{
    display:flex;
    justify-content:center;
    gap:14px;
    margin-bottom:50px;
    flex-wrap:wrap;
}
.gallery-filters button{
    padding:12px 26px;
    border-radius:30px;
    border:none;
    background:#f1f5f9;
    color:#155aa5;
    font-weight:600;
    cursor:pointer;
}
.gallery-filters button.active{
    background:linear-gradient(135deg,#155aa5,#ae419c);
    color:#fff;
}

/* Grid */
.gallery-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:30px;
}

/* Card */
.gallery-card{
    position:relative;
    border-radius:18px;
    overflow:hidden;
    box-shadow:0 15px 35px rgba(0,0,0,.15);
    cursor:pointer;
    aspect-ratio:4/3;
}
.gallery-card img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
    transition:.5s;
}
.gallery-card:hover img{transform:scale(1.1)}

.card-overlay{
    position:absolute;
    inset:0;
    background:linear-gradient(to top,rgba(0,0,0,.7),transparent);
    display:flex;
    align-items:flex-end;
    padding:20px;
    pointer-events:none;
}
.card-overlay h4{
    color:#fff;
    font-size:18px;
    font-weight:700;
}

/* Hide */
.gallery-card.hidden{display:none}

/* ================= IMAGE VIEWER ================= */
#imageViewer{
    position:fixed;
    inset:0;
    background:rgba(0,0,0,.9);
    display:none;
    align-items:center;
    justify-content:center;
    z-index:99999;
}
#imageViewer img{
    max-width:90%;
    max-height:90%;
}
.viewer-close,
.viewer-prev,
.viewer-next{
    position:absolute;
    color:#fff;
    font-size:40px;
    cursor:pointer;
}
.viewer-close{top:20px;right:30px;font-size:45px}
.viewer-prev{left:30px;top:50%;transform:translateY(-50%)}
.viewer-next{right:30px;top:50%;transform:translateY(-50%)}

</style>
</head>

<body>

<?php include 'header.php'; ?>

<!-- HERO -->
<section class="gallery-hero">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>Our Product Gallery</h1>
        <p>Explore premium comfort & interiors</p>
    </div>
</section>

<!-- GALLERY -->
<section class="gallery-section">

<div class="gallery-filters">
    <button class="active" data-filter="all">All</button>
    <button data-filter="peps">Peps Mattresses</button>
    <button data-filter="carysil">Chimneys & Kitchen Tops</button>
    <button data-filter="faucets">Faucets & Sinks</button>
    <button data-filter="furniture">Home Furniture</button>
</div>

<!-- PEPS -->
<h2 class="gallery-group-title gallery-heading">Peps Mattresses</h2>
<div class="gallery-grid">
<?php
foreach (glob("images/peps/*",GLOB_ONLYDIR) as $folder) {
    $folderName = basename($folder);
    foreach (glob($folder."/*.{jpg,jpeg,png,webp}",GLOB_BRACE) as $img) {
?>
<div class="gallery-card peps">
    <img src="<?= $img ?>">
    <div class="card-overlay">
        <h4>Peps – <?= ucfirst($folderName) ?></h4>
    </div>
</div>
<?php }} ?>
</div>

<!-- CHIMNEYS + KITCHEN TOPS -->
<h2 class="gallery-group-title gallery-heading">Carysil Chimneys & Kitchen Tops</h2>
<div class="gallery-grid">
<?php
$kitchen = [
    "images/carysil/",
    "images/kitchentop/"
];
foreach ($kitchen as $path) {
    foreach (glob($path."*",GLOB_ONLYDIR) as $folder) {
        $folderName = basename($folder);
        foreach (glob($folder."/*.{jpg,jpeg,png,webp}",GLOB_BRACE) as $img) {
?>
<div class="gallery-card carysil">
    <img src="<?= $img ?>">
    <div class="card-overlay">
        <h4>Carysil – <?= ucfirst($folderName) ?></h4>
    </div>
</div>
<?php }}} ?>
</div>

<!-- FURNITURE -->
<h2 class="gallery-group-title gallery-heading">Home Furniture</h2>
<div class="gallery-grid">
<?php
foreach (glob("images/furniture/*",GLOB_ONLYDIR) as $folder) {
    $folderName = basename($folder);
    foreach (glob($folder."/*.{jpg,jpeg,png,webp}",GLOB_BRACE) as $img) {
?>
<div class="gallery-card furniture">
    <img src="<?= $img ?>">
    <div class="card-overlay">
        <h4>Furniture – <?= ucfirst($folderName) ?></h4>
    </div>
</div>
<?php }} ?>
</div>

<!-- FAUCETS & SINKS (MOVED TO LAST) -->
<h2 class="gallery-group-title gallery-heading">Carysil Faucets & Sinks</h2>
<div class="gallery-grid">
<?php
foreach (glob("images/fauckets/",GLOB_ONLYDIR) as $folder) {
    $folderName = basename($folder);
    foreach (glob($folder."/*.{jpg,jpeg,png,webp}",GLOB_BRACE) as $img) {
?>
<div class="gallery-card faucets">
    <img src="<?= $img ?>">
    <div class="card-overlay">
        <h4><?= ucfirst($folderName) ?></h4>
    </div>
</div>
<?php }} ?>
</div>

</section>

<!-- IMAGE VIEWER -->
<div id="imageViewer">
    <span class="viewer-close">&times;</span>
    <span class="viewer-prev">&#10094;</span>
    <img id="viewerImage">
    <span class="viewer-next">&#10095;</span>
</div>

<?php include 'footer.php'; ?>

<script>
document.addEventListener('DOMContentLoaded',()=>{

const buttons=document.querySelectorAll('.gallery-filters button');
const cards=document.querySelectorAll('.gallery-card');
const headings=document.querySelectorAll('.gallery-heading');

buttons.forEach(btn=>{
btn.onclick=()=>{
buttons.forEach(b=>b.classList.remove('active'));
btn.classList.add('active');
const filter=btn.dataset.filter;

cards.forEach(c=>{
c.classList.toggle('hidden',!(filter==='all'||c.classList.contains(filter)));
});

headings.forEach(h=>{
h.style.display=(filter==='all')?'block':'none';
});
};
});

/* VIEWER */
const viewer=document.getElementById('imageViewer');
const imgBox=document.getElementById('viewerImage');
const prev=document.querySelector('.viewer-prev');
const next=document.querySelector('.viewer-next');
const close=document.querySelector('.viewer-close');
let imgs=[],i=0;

function update(){
imgs=[...document.querySelectorAll('.gallery-card:not(.hidden) img')];
}

document.querySelector('.gallery-section').addEventListener('click',e=>{
const card=e.target.closest('.gallery-card');
if(!card)return;
const img=card.querySelector('img');
update();
i=imgs.indexOf(img);
imgBox.src=img.src;
viewer.style.display='flex';
document.body.style.overflow='hidden';
});

next.onclick=()=>{i=(i+1)%imgs.length;imgBox.src=imgs[i].src;}
prev.onclick=()=>{i=(i-1+imgs.length)%imgs.length;imgBox.src=imgs[i].src;}
close.onclick=()=>{viewer.style.display='none';document.body.style.overflow='';}
viewer.onclick=e=>{if(e.target===viewer)close.onclick();}

});
</script>

<?php include "floating-buttons.php" ?>
</body>
</html>
