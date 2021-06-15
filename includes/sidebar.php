

<div id="column">
      <div class="subnav">
      <div class="block__content">
                <script type="text/javascript" src="//ra.revolvermaps.com/0/0/6.js?i=02op3nb0crr&amp;m=7&amp;s=320&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=0&amp;bv=90&amp;lx=-420&amp;ly=420&amp;hi=20&amp;he=7&amp;hc=a8ddff&amp;rs=80" async="async"></script>
              </div>
      </div>

      <h1 style="text-align:center">Top Reading</h1>
      <?php 
      
$views_query=mysqli_query($connection,"SELECT * FROM `articles` ORDER BY `views` DESC LIMIT 3");
if(mysqli_num_rows($views_query)>0){
    while($views_row=mysqli_fetch_assoc($views_query)){
        ?>

<div id="featured">
        <ul>
          <li>
          <h3><?php echo $views_row[title] ?></h3>
          <p ><img src=<?php echo $views_row[image] ?> style="width:100%;height:125px;"alt="" /></p>
          <p><?php echo mb_substr(strip_tags($views_row['text']),0,200,'utf-8') . ' ...';?></p> 
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
        </ul>
      </div>
        <?php
    }
}
?>
     
     
    
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>