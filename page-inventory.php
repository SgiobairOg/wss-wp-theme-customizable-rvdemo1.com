
<?php get_header(); ?>

<?php
    $model = get_query_var( 'model' );
    if ( !$model ) {
      get_template_part( 'partials/inventory', 'description' );
        do_action( 'cws_content' );
    }
    do_action( 'cws_inventory' );
?>
<style>
.PSNTEMPLATE{
  padding: 15px; 
}
</style>
<b><font class="dealer_default_text">*Price, if shown, does not include government fees, taxes, dealer  freight/preparation, dealer document preparation charges or any finance charges (if applicable). Final actual sales price will vary depending on options or accessories selected.<br>
NOTE: Models with a price of "Request a Quote" are always included in a $0 search, regardless of actual value.
</font></b>

<?php get_footer(); ?>
