<link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

<?php
    $list = "<ul class=\"display-list\">\r\n";
                                
    foreach ( $files as $file ) {
        $url = 'http://dl.dropbox.com/u/'.$uid.'/pigeon-carrier/'.$file['name'];
        $icon = 'icon/16x16/'.$file['icon'].'.gif';
        $filename = basename( $file['name'] );
        $ext = substr( strrchr ( $filename, '.' ), 1 );

        $download_link = '<a class="download_link" href="'.$url.'" alt="'.$filename.'">Download</a>';
        $view_link = '<a class="view_link" href="'.$url.'" alt="'.$filename.'">View</a>';
        $image = '<img src="'.$icon.'" title="'.$ext.'" alt="'.$ext.'" height="16" width="16"/>';

        $list .= "\t".'<li class="file-item">';
        $list .= $image;
        $list .= $filename;
        $list .= "<span class=\"actions\">";
        $list .= $download_link;
        $list .= '</span></li>'."\r\n";
    }
    $list .= '</ul>';
?>

<script type="text/javascript" src='https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js'></script>
<script type="text/javascript" src='http://www.scribd.com/javascripts/view.js'></script>
<script type="text/javascript" src='/fancybox/jquery.fancybox-1.3.4.pack.js'></script>

<h1>Attachments</h1>

<p>Our pigeon just dropped off files for you. Be sure to thank him, as he has been flying all day!</p>

<?php echo $list; ?>
<script type="text/javascript" src='/js/show.js'></script>

<p>Don't forget to download our <a href="/" alt="home" title="Download Pigeon Carrier">Google Chrome extension</a> to view and send attachments directly on <a href="http://twitter.com">Twitter</a>.</p>
