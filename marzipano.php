<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Trinity International College</title>
    <meta name="description" content="School, Admission, Trinity, College, International">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon.png">

<!--     <meta name="viewport" content="initial-scale=1.0" /> -->
    <script src="three.min.js"></script>
    <script src="photo-sphere-viewer.min.js"></script>
    <style>
        html,
        body {
            margin: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        
        #container {
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <div id="container"></div>
<!-- rgba(58, 67, 77, 0.7) -->
    <script>
        //var imd = 'img/pano.jpeg';
        var div = document.getElementById('container');
        var PSV = new PhotoSphereViewer({
            panorama: 'img/pano4.jpg',
            container: div,
            time_anim: 3000,
            navbar: true,
            navbar_style: {
                backgroundColor: 'rgba(192,192,192,1)'
            },
        });
    </script>
</body>

</html>