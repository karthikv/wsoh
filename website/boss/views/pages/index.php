<link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Podkova&v2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src='https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js'></script>
<script type="text/javascript" src='http://www.scribd.com/javascripts/view.js'></script>
<script type="text/javascript" src='/fancybox/jquery.fancybox-1.3.4.pack.js'></script>

<blockquote>
    We don't carry your pigeons, but we do carry your Twitter attachments! 
</blockquote>

<div id="tutorial">
<?php
    $instructions = array(
        0 => 'Visit <a href="http://twitter.com">Twitter</a> and start a tweet',
        1 => 'Click the "Add Attachment" button',
        2 => 'Authorize the extension with Dropbox',
        3 => 'Upload some files',
        4 => 'Sit back and relax',
        5 => 'Click "Attach" to insert the attachments',
        6 => 'See that link in your tweet? Click it.',
        7 => 'Press "View" to preview the files or just download them',
        8 => 'Carrier Pigeon success!'
    );
?>

<h2 id="download_header"><span class="step">Step 1</span> Download the Extension<a id="dl_link" href="#">Download the extension</a></h2>

<?php
    foreach ( $instructions as $index => $instruction ) {
        $img_url = '/images/tutorial/'.( $index + 1 ).'.png';
        $img_small_url = '/images/tutorial/'.( $index + 1 ).'-s.png';
        $img = '<img src="'.$img_small_url.'" alt="Step '.( $index + 2 ).'" title="Step '.( $index + 2 ).'" />';
        $link = '<a rel="tutorial" href="'.$img_url.'"class="instruction" alt="Step '.( $index + 2 ).'" title="Step '.( $index + 2 ).'">'.$img.'</a>';

        echo '<h2><span class="step">Step '.($index + 2).'</span> '.$instruction.'</h2>'.$link;
    }
?>
</div>
<script type="text/javascript" src='/js/tutorial.js'></script>

