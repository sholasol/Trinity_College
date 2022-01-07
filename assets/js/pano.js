const panoImage = document.querySelector('.pano-image');
const galPano  ='../img/pano.jpeg';

const panorama = new PANOLENS.ImagePanorama(galPano);
const viewer = new PANOLENS.Viewer({
    container: panoImage
});

viewer.add(panorama);