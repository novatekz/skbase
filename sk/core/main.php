<?php
/**!
 * * * * *   skBase   * * * * *
 * Copyright 2024 novatek
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License. 
 */

/**
 * Core of skBase, needed for all operations for usage of all framework
 * features. NEVER load this directly (unless you know what you're doing)
 * Also do not directly load classes standalone, only use them via sk class.
 *  e.g. to load a config value, use only $sk->conf->get(group, key);
 */
class sk {
    public function __construct() {
        $this->conf = new Conf();   
    }
}
