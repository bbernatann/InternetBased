<!DOCTYPE html>
<html>
<head>
    <title>Images, Image Maps, and Colors in HTML5 Examples</title>
    <style>
        .gallery {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }
    </style>
</head>
<body>
<h1>Images, Image Maps, and Colors in HTML5 Examples</h1>

<h2>Images:</h2>
<img src="https://picsum.photos/id/18/400/400" alt="Example Image">

<h2>Image Maps:</h2>
<img src="https://picsum.photos/id/56/400/400" alt="World Map" usemap="#map">
<map name="map">
    <area shape="rect" coords="0,0,100,100" href="https://www.example.com" alt="Example Link">
</map>

<h2>Colors:</h2>
<h3 style="color: blue;">Blue Heading</h3>
<p style="background-color: yellow;">Yellow Background</p>

<h2>Background Image:</h2>
<div style="background-image: url('background.jpg');">
    <h3>Welcome to My Website</h3>
</div>

<h2>Image Gallery:</h2>
<div class="gallery">
    <img src="https://picsum.photos/id/44/400/400" alt="Image 1">
    <img src="https://picsum.photos/id/11/400/400" alt="Image 2">
    <img src="https://picsum.photos/id/88/400/400" alt="Image 3">
</div>
</body>
</html>
