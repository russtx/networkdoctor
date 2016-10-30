<?php
/*Template Name: Test Page */
get_header(); ?>

	<main role="main">
            
            <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us14.list-manage.com","uuid":"06a38fb53cedd9b1623bc1656","lid":"91b2aac11c"}) })</script>

            
		<!-- section -->
                <section class="homeSection">

   <div>
    <h3 class = "trigger"><a href="#box1"> Heading 1</a></h3> 
    <h3 class = "trigger"><a href="#box2"> Heading 2</a></h3>
    <h3 class = "trigger"><a href="#box3"> Heading 3</a></h3>
    <h3 class = "trigger"><a href="#box4"> Heading 4</a></h3>
</div>
<div class ="toggle" id="box1">
        box one content
    </div>

<div class ="toggle" id="box2">
        box two content
</div>
<div class ="toggle" id="box3">
        box 3 content
</div>
<div class ="toggle" id="box4">
        box 4 content
</div>

<div id="nicebox" class="arrow_box">
		<a href="logout.php"></a>

		
    </div>
                    
              
                   <a class="open-mypage1">Open my page ?</a>
<div id="mypage-info1">Some content here <button>button</button></div>
                    
<div class="clearfix"></div>

<div id="cat_icon">Menu</div>
<div id="categories">
    <div CLASS="panel_title">Inner Menu</div>
    <div CLASS="panel_item">
        <template:UserControl id="ucCategories" src="UserControls/ProductCategories.ascx" />
    </div>
</div>

<div class="clearfix"></div>
<div id="thisdivid"> testing 123 </div>

<div class="clearfix"></div>
<div id="thatdivid"> testing 456 </div>

  
            

		</section>
		<!-- /section -->
	</main>




<?php get_footer(); ?>

