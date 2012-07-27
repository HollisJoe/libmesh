<?php $root=""; ?>
<?php require($root."navigation.php"); ?>

<html>
<head>
  <title>libMesh Presentations</title>
  <?php load_style($root); ?>
</head>

<body>
<?php make_navigation("presentations",$root)?>

<div class="content">
<h1>Presentations</h1>

<h2>libMesh Overviews</h2>
<ul>
  <li> <a href="http://cfdlab.ae.utexas.edu/~benkirk/libmesh_uwa03.pdf">libMesh Presentation</a> (from the June 2003 UWA Shortcourse)</li>
  <li> <a href="http://cfdlab.ae.utexas.edu/~peterson/ERDC_talk.pdf">LibMesh Experience and Usage</a> (January 2007 ERDC course)</li>
  <li> <a href="http://cfdlab.ae.utexas.edu/~roystgnr/vicksburg.pdf">AMR Infrastructure Expansion, Adding Complexity</a> (January 2007 ERDC course)</li>
  <li> <a href="http://cfdlab.ae.utexas.edu/~roystgnr/libmesh_intro.pdf">LibMesh Introduction</a> (June 2007 lecture, Num. Meth. for Transport in Semiconductors)</li>
  <li> <a href="http://cfdlab.ae.utexas.edu/~roystgnr/sandia_libmesh.pdf">LibMesh Finite Element Library</a> (August 2007 seminar, Sandia National Laboratories)</li>
</ul>


<h2>Applications</h2>
<ul>
<!--   <li> <a href="http://cfdlab.ae.utexas.edu/~benkirk/adv_flows_project.pdf">Advanced Flows Class Project</a> (natural convection, 2002)</li> -->
<!--   <li> <a href="http://cfdlab.ae.utexas.edu/~benkirk/siam_geo.pdf">SIAM Geosciences 2003</a></li> -->
  <li> <a href="http://cfdlab.ae.utexas.edu/~benkirk/applications_uwa03.pdf">AMR Applications</a> (from the June 2003 UWA Shortcourse)</li>
  <li> <a href="http://cfdlab.ae.utexas.edu/~benkirk/seminar/talk.pdf">Finite Elements - Introduction and Applications</a> (April 2004 NASA/JSC technical seminar)</li>
  <li> <a href="http://ntrs.nasa.gov/search.jsp?N=4294668673">SUPG Finite Element Simulations of Compressible Flows for Aerothermodynamic Applications</a>, February 2007</li>
  <li> <a href="http://cfdlab.ae.utexas.edu/~benkirk/defense.pdf">Benjamin S. Kirk's PhD Dissertation Defense</a>, March 2007</li>
</ul>


<h2>US National Congress on Computational Mechanics</h2>
<ul>
  <li>USNCCM VII</li>
  <ul>
    <li> <a href="http://usnccm.sandia.gov/mslist/upload/IncomprssblCFD/2230_Final_abstract.pdf">Abstract </a> </li>
    <li> <a href="http://www.cfdlab.ae.utexas.edu/~peterson/usnccm.pdf">Presentation.</a> </li>
  </ul>

  <li>USNCCM VIII</li>
  <ul>
    <li> <a href="http://www.cfdlab.ae.utexas.edu/~benkirk/carter-USNCCMVIII.pdf">Compressible Flow Studies Using Parallel Adaptive Mesh Refinement</a> </li>
    <li> <a href="http://www.cfdlab.ae.utexas.edu/~benkirk/carey-USNCCMVIII.pdf"> Algorithms for Compressible Flows with Adaptive Mesh Refinement</a> </li>
    <li> <a href="http://www.cfdlab.ae.utexas.edu/~peterson/USNCCM8.pdf">         Adaptive Finite Element Simulations of Thermosolutal Convection in Porous Media</a> </li>
  </ul>

  <li>USNCCM IX</li>
  <ul>
    <li> <a href="http://www.cfdlab.ae.utexas.edu/~benkirk/gaston_USNCCM_2007.pdf">On Combining Mesh Redistribution with H-Adaptivity</a> </li>
    <li> <a href="http://www.cfdlab.ae.utexas.edu/~roystgnr/usnccm9.pdf">Cahn-Hilliard Phase Decomposition and Directed Pattern Assembly</a> </li>
  </ul>
</ul>


<h2>Finite Element Rodeo</h2>
<ul>
  <li> <a href="http://www.cfdlab.ae.utexas.edu/~peterson/Rodeo_2006.pdf">A Stabilized h-Adaptive Continuation Method for Double-Diffusive Convection in Porous Media</a> </li>
  <li> <a href="http://www.cfdlab.ae.utexas.edu/~roystgnr/2006rodeoslides.pdf">Adaptive C1 Macroelements for Fourth-Order and Divergence-Free Problems</a> </li>
</ul>

  
<!--   add some blank space -->
<h2>Miscellaneous</h2>
<ul>
  <li> <a href="http://www.cfdlab.ae.utexas.edu/~peterson/scraper.pdf">Scraper Flow</a> Presentation with I. Schoegl.</li>
  <li> <a href="http://www.challenge.nm.org/FinalReports/08.pdf">Albuquerque Academy</a> Presentation on Stress Analysis in a Torus.</li>
  <li> <a href="http://www.saviac.org/74th_Symposium/abstracts/U040.htm">SAVIAC</a> conference abstract.</li>

  <li>
    Marc Buffat, Anne Cadiou, Lionel Le Penven, and Catherine Le Ribault,
    <i> Comparison of implicit, explicit, center and upwind
      schemes for the simulation of internal vortex flow at
      low Mach number.</i>
    <a href="http://www.ufrmeca.univ-lyon1.fr/~buffat/PUBLI_HTML/LowMach04.pdf">
      Low Mach Conference</a>, June 2004.
  </li>  
</ul>



</div>

<br>
<br>
<br>
<!--
<div id="navBeta">
</div>
-->

<?php make_footer() ?>

</body>
</html>

<?php if (0) { ?>
# Local Variables:
# mode: html
# End:
<?php } ?>