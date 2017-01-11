<?php
namespace Drupal\prime_numbers\Controller;
/**
 * Provides route responses for the hello world page example.
 */
class PrimeNumbersController {
  /**
   * Returns a simple hello world page.
   *
   * @return array
   *   A very simple renderable array is returned.
   */
  public function myCallbackMethod() {
    $content = '
    <div class="myDiv">
      <div class="bg"></div>
        <div class="block-title">Prime Numbers Rock!</div>
        <div class="title">Movable Title</div>
        <ol>
          <li>  2</li>
          <li>  3</li>
          <li>  5</li>
          <li>  7</li>
          <li>  ...Many More!</li>
        </ol>
        <label class="prime-label">Enter a Number, and see if it is a Prime Number!</label>
        <input type="number" id="prime-check" />
    </div>';
    $element = array(
      '#markup' =>  $content,
      '#attached' => array(
        'library' => array(
          'prime_numbers/prime-numbers',
        ),
      ),
    );
    return $element;
  }
}