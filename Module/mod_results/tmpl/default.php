<?php
defined('_JEXEC') or die;

if (!$property_lists): return; endif;
?>

<div class="property-grid-list">
   <div class="container">
   <div class="row"> 
    <h3 class="text-center mb-3">Property For Sale</h3>
   </div>
        <div class="row">
            <?php foreach($property_lists as $property) : 
                  $image_url = ($property['Images'][0]['url']) ? $property['Images'][0]['url'] : $property['Images'][1]['url'];
            ?>
                <div class="col-12 col-md-4 col-lg-3 grid-item">                
                    <div class="whistlist-icon"><i class="far fa-heart text-white"></i></div>
                    <div class="property-image">
                        <a href="#"> 
                            <img src="<?php echo $image_url;?>" class="grid-img-top" alt="<?php echo $property['Title'];?> ">
                        </a>
                    </div>
                    <div class="grid-body text-center">
                        <h5 class="grid-title"><a href="#"> <?php echo $property['Title'];?></a></h5>
                        <h6 class="grid-bedroom"><?php echo $property['Bedrooms'].' bedroom '. $property['Building_Type'].' for sale';?></h6>
                        <h5 class="grid-price">                            
                            <?php echo number_format((int) $property['Price'], 0, JText::_('DECIMALS_SEPARATOR'), JText::_('THOUSANDS_SEPARATOR')); ?> &euro;
                        </h5>
                    </div>
                
                </div>

            <?php endforeach; ?>
        </div>
   </div>

</div>





