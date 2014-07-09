<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        echo "hello world in a life";
        ?>
        
        
        <li <?php if ($Menu_Active == 12 || $Menu_Active == 13 || $Menu_Active == 14 || $Menu_Active == 15) echo 'class="active"'; ?> > <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-docs icon"> </i> <span class="font-bold">Blog And News <b class="badge bg-danger pull-right">4</b></span> </a>
                                <ul class="nav dk">
                                    <li <?php if ($Menu_Active == 12) echo 'class="active"'; ?>> <a href="Todays_news.php" class="auto"> <i class="i i-dot"></i> <span>Today`s News </span> </a> </li>
                                    <li <?php if ($Menu_Active == 13) echo 'class="active"'; ?>> <a href="news_blogDetail.php" class="auto"> <i class="i i-dot"></i> <span>News Detail </span> </a> </li>
                                    <li  <?php if ($Menu_Active == 14) echo 'class="active"'; ?>> <a href="add_newsBlog.php" class="auto"> <i class="i i-dot"></i> <span>Add/Schedule News </span> </a> </li>
                                    <li <?php if ($Menu_Active == 15) echo 'class="active"'; ?>> <a href="#" class="auto"> <i class="i i-dot"></i> <span>Add Blog </span> </a> </li>
                                </ul>
                            </li>
        
        
        
    </body>
</html>