<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\CloudIdentity;

class SamlSpConfig extends \Google\Model
{
  /**
   * @var string
   */
  public $assertionConsumerServiceUri;
  /**
   * @var string
   */
  public $entityId;

  /**
   * @param string
   */
  public function setAssertionConsumerServiceUri($assertionConsumerServiceUri)
  {
    $this->assertionConsumerServiceUri = $assertionConsumerServiceUri;
  }
  /**
   * @return string
   */
  public function getAssertionConsumerServiceUri()
  {
    return $this->assertionConsumerServiceUri;
  }
  /**
   * @param string
   */
  public function setEntityId($entityId)
  {
    $this->entityId = $entityId;
  }
  /**
   * @return string
   */
  public function getEntityId()
  {
    return $this->entityId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SamlSpConfig::class, 'Google_Service_CloudIdentity_SamlSpConfig');
