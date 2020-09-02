<link rel="stylesheet" href="w3 css/w3.css">

<style type="text/css">
    
    /* width */
::-webkit-scrollbar {
    width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
    background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #555; 
}

    .wrapper {
  /* The height needs to be set to a fixed value for the effect to work.
   * 100vh is the full height of the viewport. */
  height: 100%;
  width: 100%;
  /* The scaling of the images would add a horizontal scrollbar, so disable x overflow. */
  overflow-x: hidden;
  /* Enable scrolling on the page. */
  overflow-y: auto;
  /* Set the perspective to 2px. This is essentailly the simulated distance from the viewport to transformed objects.*/
  perspective: 2px;
}

.section {
  /* Needed for children to be absolutely positioned relative to the parent. */
  position: relative;
  /* The height of the container. Must be set, but it doesn't really matter what the value is. */
  height: 100%;
  /*width: 100%;*/
  /* For text formatting. */
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  text-shadow: 0 0 5px #000;
}

.parallax::after {
  /* Display and position the pseudo-element */
  content: " ";
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
    height: 100%;
  width: 100%;

  /* Move the pseudo-element back away from the camera,
   * then scale it back up to fill the viewport.
   * Because the pseudo-element is further away, it appears to move more slowly, like in real life. */
  transform: translateZ(-1px) scale(1.5);
  /* Force the background image to fill the whole element. */
  background-size: 100%;
  /* Keep the image from overlapping sibling elements. */
  z-index: -1;
    height: 100%;
  width: 100%;
}

/* The styling for the static div. */
.static {
  background: gray;
    height: 100%;
  width: 100%;
}

/* Sets the actual background images to adorable kitties. This part is crucial. */
.bg1::after {
  background-image: url('./parallax/c1.png');
    height: 100%;
  width: 100%;
}

.bg2::after {
  background-image: url('./parallax/c2.png');
    height: 100%;
  width: 100%;
}
</style>
<center>

<main class="wrapper">
  <section class="section parallax bg1" style="padding: 5%;">
    <h1>
        <div style="padding: 5%; border: 2px solid #E6E4E8;border-radius: 8px;word-wrap: break-word;background-color:  #242424"><br>

 

  <!-- <iframe width="75%"  align="center" src="https://www.youtube.com/embed/O3eZtONWjJc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen m></iframe></center><br> -->
    <b>ARTICLES/NEWS</b><br>
     Lorem ipsum dolor sit amet, ligula nostra, aptent nunc accusamus a, tristique arcu ut porta vel. Vestibulum quam, arcu ut quam auctor massa. Eu metus. Phasellus habitant consectetuer, malesuada faucibus. Primis sodales ac.<br><br><br>

      Conubia a sed, fermentum purus orci elementum ac, justo praesent facilisis ante felis vivamus turpis. Mauris sodales condimentum tristique sit, congue turpis elit suspendisse semper sit, quam sed massa, netus ut dui neque. Purus sit. Metus suspendisse lectus a fermentum nisl, vel rhoncus diam ac non, quam sit pede amet molestie, sagittis sem odio neque et repellat, urna neque. Est ut diam mauris ornare duis id, maecenas non, libero mi odio elit accusamus velit urna.<br>
  </div><br><br><br>

    </h1>
  </section>
  <section class="section static">
    <h1>Boring</h1>
  </section>
  <section class="section parallax bg2">
    <h1>
        ediwow  
                <div style="padding: 5%; border: 2px solid #E6E4E8;border-radius: 8px;word-wrap: break-word;background-color:  #242424;width: 100%;"><br>

         <?php include('signup.php'); ?></div>
</center>
    </hi>
  </section>



</main>