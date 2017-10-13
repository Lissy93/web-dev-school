<?php
 class rss {
     var $feed;

  function rss($feed) 
    {   $this->feed = $feed;  }
 
  function parse() 
    {
    $rss = simplexml_load_file($this->feed);
    
    $rss_split = array();
    foreach ($rss->entry as $item) {
		
		/* Get Title */
		$title = (string) $item->title; 
		
		/* Get title */
		$link = "#";
		foreach ($item->link as $linky) {	
			$linkTag = "";
			foreach($linky->attributes() as $a => $b) {
				if($a=="href" && substr($b, -5) == ".html"){
					$link = $b;
				}
			}			
		}

		/* Get Body */
		$content = (string) $item ->content;
		
		/* Updated date*/
		$dateFromPost = (string) $item ->updated;
		$dateObj = new DateTime($dateFromPost);
		$date =  $dateObj->format('l jS F Y');
		
		/* Get Author */
		$authorName = (string) $item->author->name;
		$authorUri = (string) $item->author->uri;
		
		$rss_split[] = '
		<div class="blog-entry nice-box">
			<h2>'.$title.'</h2> 
			<span>Author: <a href="'.$authorUri.'" target="_blank" title="'.$authorName.' on Google Plus" >'.$authorName.'</a></span>
			<br>
			<span>Date: '.$date.'</span>
			<br>
			<a href="'.$link.'" target="_blank" title="'.$title.'" >Read on Blogger</a>
			<br>
			<hr>
			<br>
			<article>
			'.$content.'
			</article>
	   		<hr>
		</div>
		<div class="nice-button read-more-btn">Read More</div>
		<div class="clear"></div>
	';
    }
    return $rss_split;
  }
  function display($numrows=20) 
  {
    $rss_split = $this->parse();

    $i = 0;
    $rss_data = '';
    while ( $i < $numrows ) 
   {
      $rss_data .= $rss_split[$i];
      $i++;
    }
    $trim = str_replace('', '',$this->feed);
    $user = str_replace('&lang=en-us&format=rss_200','',$trim);
    return $rss_data;
  }
}
?>