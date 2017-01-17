<?php
 
/**
 * @file
 * Contains \Drupal\prime_numbers\Plugin\Block\PrimeNumbersBlock
 */
 
namespace Drupal\prime_numbers\Plugin\Block;
 
use Drupal\Core\Block\BlockBase;
use Drupal\block\Annotation\Block;
use Drupal\Core\Annotation\Translation;
/**
 * Provides a simple block.
 *
 * @Block(
 *   id = "prime_numbers_block_1",
 *   admin_label = @Translation("Prime Numbers Block1"),
 *   module = "prime_numbers"
 * )
 */
class PrimeNumbersBlock extends BlockBase {
 
  /**
   * Implements \Drupal\block\BlockBase::blockBuild().
   */
  public function build() {
    $this->configuration['label'] = t('Prime Numbers Block1');
    return array(
      '#markup' => t('Hello from Prime Numbers Block'),
    );
  }
}