<?php

/**
 * @file
 * Definition of Drupal\Core\Routing\FinalMatcherInterface.
 */

namespace Drupal\Core\Routing;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouteCollection;

/**
 * A FinalMatcher returns only one route from a collection of candidate routes.
 */
interface FinalMatcherInterface {

  /**
   * Sets the route collection this matcher should use.
   *
   * @param \Symfony\Component\Routing\RouteCollection $collection
   *   The collection against which to match.
   *
   * @return \Drupal\Core\Routing\FinalMatcherInterface
   *   The current matcher.
   */
  public function setCollection(RouteCollection $collection);

  /**
   * Matches a request against multiple routes.
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   A Request object against which to match.
   *
   * @return array
   *   An array of parameters.
   */
  public function matchRequest(Request $request);
}
