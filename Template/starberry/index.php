<?php defined('_JEXEC') or die('Restricted access');?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="metas" />
<jdoc:include type="styles" />
<jdoc:include type="scripts" />
  <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/bootstrap.min.js"></script>
</head>
<body class="body main-template">
	<div class="wrapper">
		<header class="header">
				<div class="container">	
				<div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-4 col-lg-3 col-md-3">
							
						<?php if ($this->params->get('logo_text')) : ?>	
						   <div class="brand-name">
					 	      <?php echo htmlspecialchars($this->params->get('logo_text')); ?>
							</div>			
						<?php endif; ?>
                        </div>			
                        <div class="col-xl-8 col-lg-9 col-md-9">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
							   <?php if ($this->countModules('menu', true) ) : ?>
									<div class="container-nav">
											<?php if ($this->countModules('menu', true)) : ?>
												<jdoc:include type="modules" name="menu" style="none" />
											<?php endif; ?>				
									</div>
								<?php endif; ?>
                            </div>
                        </div>       
				</div>
		</header><!--/.header-->
		<main class="content-section">
			<jdoc:include type="message" /> 
			<jdoc:include type="component" />
			<?php if ($this->countModules('results', true) ) : ?>
				<jdoc:include type="modules" name="results" style="none" />
			<?php endif; ?>
		</main><!--/.content-section-->
		<footer class="footer">
		  <div class="container">		
			<div class="copyright">
			    <?php if ($this->params->get('copyright_text')) : ?>						
					<?php echo htmlspecialchars($this->params->get('copyright_text')); ?>
				<?php else: ?>
					Copyright &copy; <?php echo date('Y'); ?>, Starberry. All rights reserved.
			    <?php endif; ?>
		    </div>
		  </div>
		</footer><!--/.footer -->
	</div><!--/.wrapper -->
</body> <!-- End Body -->
</html> <!-- End Html -->