	<?php //echo $this->load->view('vcare/include/header'); ?>
	
    <body>
        <div class="container">
            <div class="masthead">
                <div class="logo"><img alt="" src="<?php echo base_url().'images/logo.png'; ?>"> </div>
                <h3 class="muted"></h3>
				<div class="navbar">
		        	<div class="navbar-inner">
						<?php echo $this->load->view('vcare/include/menu'); ?>
					</div>
				</div><!-- /.navbar -->
            </div>

            <!-- Example row of columns -->
            <div class="row-fluid">
            </div>
	
		<!-- ambil NEWS dari database -->
		<?php 
			$i = 0;
			if(isset($newsData)){
				foreach($newsData as $data){
					$i++;
					$isiNews = $data->news_description;
					$urlNews = '#';
					
					echo '
				            <div class="row">
				                <div class="span12">
				                    <div class="row">
				                        <div class="span8">
				                            <h3><strong><a href="'.$urlNews.'">'.$data->news_title.'</a></strong></h3>
				                        </div>
				                    </div>
				                    <div class="row">
				                        <div class="span3">
				                            <a href="'.$urlNews.'" class="thumbnail">
				                                <img src="'.base_url().'./images/'.$data->news_img_url.'" alt="">
				                            </a>
				                        </div>	  
										<div class="span7">
				                            <p align="justify">'.$isiNews.'</p>
				                        </div>
				                    </div>
				                    <div class="row">
				                        <div class="span8">
				                            <p></p>
				                            <p>
				                                <i class="icon-user"></i> by <a href="#">'.$data->news_createuser.'</a>
				                                | <i class="icon-calendar"></i>'.$data->news_createdt.'
				                            </p>
				                        </div>
				                    </div>
				                </div> <!--span12-->                
				            </div> <!--row--> 
							<hr>';
			}
			}
		?>
		<!-- END ambil NEWS dari database -->	
			

            <div class="footer">
                <p>&copy; K-Link Care Foundation 2013 - 2013</p>
                <p>K-Link Tower 11th Floor, Jl Gatot Subroto Kav 59A, Jakarta Selatan 12910</p>
            </div>

        </div> <!-- /container -->

    </body>
</html>