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
 *   admin_label = @Translation("Prime Numbers Page"),
 *   module = "prime_numbers"
 * )
 */
class PrimeNumbersBlock2 extends BlockBase {
 
  /**
   * Implements \Drupal\block\BlockBase::blockBuild().
   */
  public function build() {
    $this->configuration['label'] = t('Curiosities');
    // You wrap your query in the db_query function and put the results in the 
    // $result variable
    $result = db_query("SELECT * FROM router WHERE name = 'prime_numbers_settings'");
    $content = "";

    foreach($result as $row){
      // the “.=” rather than just “=” means take whatever was already in 
      // the content variable and then concatenate it with what comes after “.=”
      $title    = str_replace("-", " ", $row->path);
      $title    = str_replace("/", "",  $title);
      $content .= "<a href=\"/drupal".$row->path."\">$title</a><br>";
    }
    return array(
      '#markup' => $content,
    );
  }
}
