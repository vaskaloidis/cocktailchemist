
	
	<br />
	<div class="homeBanner">
		<strong>The Winery opens this year on 7/6/13, we look forward to seeing you!</strong>
	</div>
	<br />
	<div style="padding-left:5%; padding-right:5%;">

<?php $query = mysql_query("SELECT * FROM content WHERE section='home'"); 

$row = mysql_fetch_assoc($query);

echo $row['content'];

?>
	
</div>

	<hr>
      <!-- START THE FEATURETTES -->
		
      <div class="featurette">
        <img class="featurette-image pull-right" src="./img/feature1.jpg">
        <h2 class="featurette-heading">Cayuga White <span class="muted">Western Connecticut Highlands</span></h2>
        <p class="lead">Our Cayuga is a pleasant, straw-colored white wine with a delicate, soft aroma of mixed fruit with lingering sweet fruit on the palate. The estate made  wine is produced from grapes grown in our vineyard which is part of the Connecticut Western Highlands Region.</p>
		<p class="lead">A little history: The Cayuga grape was originally produced from two hybrid grapes, the dry white French Seyval and the Schulyer. Schuyler is a cross between the California red vinifera Zinfandel and American grape Ontario. Cayuga is often compared to White Riesling. Cayuga was the first wine grape released from Cornell University in 1972.
		</p>
      </div>

      <hr>

	<div class="featurette">
	        <img class="featurette-image pull-left" src="./img/feature2.jpg">
	        <h2 class="featurette-heading">Christmas Town Red Wine  <span class="muted">Santa's Helper</span></h2>
	        <p class="lead">Our Christmas Town Red is a smooth, fruity blend of the California Cabernet Sauvignon and Merlot grapes. The wine is garnet-colored with cherry and black currant aromas and bright cherry flavor on the palate.
		  <p class="lead">Once a viniferous mystery, the parentage of the Cabernet Sauvignon grape was discovered through DNA Profiling in 1997. As it turns out, the Cabernet Sauvignon grape is the result of the spontaneous crossing of the red wine grape Cabernet Franc and the white wine grape Sauvignon Blanc, probably in the 1700’s.  DNA profiling revealed that Merlot shares a parent with Cabernet Sauvignon: Cabernet Franc. The other parent is a grape known as Magdeleine Noire des Charentes.</p>
    </div>
<br />
