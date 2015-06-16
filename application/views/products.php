<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
   
    <?php if($this->session->flashdata('registered')) : ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('registered'); ?>   
        </div>
    <?php endif; ?>
         
        <?php if($this->session->flashdata('pass_login')): ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('pass_login'); ?> 
            </div>   
        <?php endif; ?>
          
        <?php if($this->session->flashdata('fail_login')) : ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('fail_login'); ?>
            </div>
        <?php endif; ?>
           
            <?php foreach($products as $product) : ?>
                <div class="col-md-4 game">
                    <div class="game-price">
                        <b><i><?php echo $product->price; ?></i></b>
                    </div>
                    <a href="<?php echo base_url(); ?>products/details/<?php echo $product->id; ?>">
                <img src="<?php echo base_url(); ?>assets/images/products<?php echo $product->image; ?>">
                    </a>
                    <div class="game-title">
                        <b><?php echo $product->title; ?></b>  
                    </div>
                    <div class="game-add">
                <form method="post" action="<?php echo base_url(); ?>cart/add">
                QTY: <input class="qty" name="qty" value="1" type="text"><br>
                <input type="hidden" name="item_number" value="<?php echo $product->id; ?>">
                <input type="hidden" name="price" value="<?php echo $product->price; ?>">
                <input type="hidden" name="title" value="<?php echo $product->title; ?>">   
                    <button class="btn btn-success" type="submit">Add To Cart</button>
                    <button class="btn btn-primary" type="reset">Cancel</button>
                </form>    
                    </div>    
                </div> 
            <?php endforeach; ?> 
        <!-- </p>
    </div> -->
</div>

</body>
</html>