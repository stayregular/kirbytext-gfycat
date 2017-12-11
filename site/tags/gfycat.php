<?php
/*

```kirbytext
(gfycat: SomeWeirdSlugTheyUse caption: Optional caption text)
```

*/

kirbytext::$tags['gfycat'] = array(
  'attr' => array(
    'caption'
  ),
  'html' => function($tag) {
      $html = "<figure class='Article_img'>";
      $html .= '<div style="position:relative;padding-bottom:57%"><iframe src="https://gfycat.com/ifr/' . $tag->attr('gfycat') . '" frameborder="0" scrolling="no" width="100%" height="100%" style="position:absolute;top:0;left:0;" allowfullscreen></iframe></div>';
      if($tag->attr('caption') != '') {
        $html .= "<figcaption>";
        $html .= $tag->attr('caption');
        $html .= "</figcaption>";
      }
      $html .= "</figure>";
    return $html;
  }
);
