<?php 
/*
|------------------------------------------------------------------------------------
| Generate Category
|------------------------------------------------------------------------------------
*/

$cat_id = get_the_category()[0]->cat_ID;

switch (get_the_category()[0]->slug) {
    case 'press-release':
        $icon = 'fa-pencil-square';
        break;
    
    case 'event':
        $icon = 'fa-calendar';
        break;
    
    default:
        $icon = 'fa-external-link-square';
        break;
}
?>

<h4>
    <a href="<?php echo bloginfo( 'url' ) . "/?cat=$cat_id"; ?>">

        <i class="fa <?php echo $icon ?>"></i> <?php echo get_the_category()[0]->name ?> 
    </a>
</h4>