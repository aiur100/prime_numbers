<?php
 
/**
 * @file
 * Contains \Drupal\prime_numbers\Plugin\Block\PrimeNumbersBlock2
 */
 
namespace Drupal\prime_numbers\Plugin\Block;
 
use Drupal\Core\block\BlockBase;
use Drupal\block\Annotation\Block;
use Drupal\Core\Annotation\Translation;

/**
 * Provides a simple block.
 *
 * @Block(
 *   id = "prime_numbers_block_2",
 *   admin_label = @Translation("Prime Numbers Block2"),
 *   module = "prime_numbers"
 * )
 */
class PrimeNumbersBlock2 extends BlockBase {
 
  /**
   * Implements \Drupal\block\BlockBase::blockBuild().
   */
  public function build() {
    $this->configuration['label'] = t('Prime Numbers Block 2');
    // You wrap your query in the db_query function and put the results in the 
    // $result variable
    $result = db_query("SELECT * FROM node_field_data");
    $content = "";
    // The result variable is an object with as many rows in it as there were rows 
    // of data returned from your query, you’re going to loop through these rows
    // with the foreach statement, put the individual row data into the $row 
    // variable, add the title from that $row into the $content variable, continue 
    // the loop, add the next title, and so on until all the titles are listed in the 
    // $content variable.
    // Then you assign $block[‘content’] to be equal to $content and tada! Your 
    // titles from your query end up in the first block on your screen.
    foreach($result as $row){
      // the “.=” rather than just “=” means take whatever was already in 
      // the content variable and then concatenate it with what comes after “.=”
      $content .= $row->title . '</br>';
    }
    return array(
      '#markup' => $content,
    );
  }
}
