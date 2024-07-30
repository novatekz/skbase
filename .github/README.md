# skBase · ![GitHub Downloads (all assets, all releases)](https://img.shields.io/github/downloads/novatekz/skbase/total?style=for-the-badge) [![License](https://img.shields.io/github/license/novatekz/skbase?style=for-the-badge)](https://github.com/novatekz/skbase/blob/main/LICENSE)

   PHP Framework. This lightweight and modular framework is designed to 
   help developers build web applications easily, while providing a clean and organized codebase. 
   Under development stage.

## Requirements
   - PHP 8+
   - PHP V8js extension

## Installation
   To get started with skBase, clone the repository and include the init.php file in your application:
   ```bash
   git clone https://github.com/novatekz/skbase.git
   ```

   In your application entry point (e.g., index.php), include the following:
   ```php
   <?php
   require 'sk/init.php';                                           
        // your code goes here
   ```
   After doing so read the documentation for coding with skBase

## Configuration
   You can configure various aspects of the framework by modifying 
   the configuration files located in the `sk/conf` directory. Key configuration files include:
   
       app.php      : General application settings.
       auth.php     : Authentication-related configurations.
       database.php : Database connection settings.
       mail.php     : Email configurations.
       plugins.php  : Manage active plugins.

## Features
   - **ReactJS:** Easily implement React components to render on the server-side with PHP as well as on the client. _*V8js required_
   - **Routing:** Simplified routing system that maps URLs to controllers and actions, making it easy to manage application routes.
   - **Middleware support:** Implement m.w. for authentication, CSRF protection, and other request processing tasks.
   - **Database:** Built-in support for multiple databases (MySQL, PostgreSQL, SQLite) with easy-to-use database classes.
   - **Cryptography:** Secure your application with various cryptographic methods, including AES and SHA hashing.
   - **Localization:** Support for multiple languages with a fallback mechanism for missing translations.
   - **Plugin System:** Extend the framework's functionality with plugins, enabling you to add features without modifying the core code.
   - **Helpers:** Utility functions for common tasks, such as JSON handling, string manipulation, and array operations.
   - **Logging and caching:** Built-in support for logging application events and caching data to improve performance.
        
## Structure
   The framework files are located in the `sk` directory, 
   while the app that is made with skBase is located outside `sk` directory.
   Application files will load `sk/init.php` to initialize framework and 
   load everything needed by the app and the framework itself.

### conf/
   `app.php`   - general settings       <br>
   `db.php`    - database configuration if needed
   
### core/
`basic/controller.php` - base class for all controllers     <br>
`basic/model.php`      - base class for all models          <br>
`basic/mona.php`       - base class for code sanitization   <br>
`basic/request.php`    - covers http request data           <br>
`basic/response.php`   - manages http responses             <br>
`basic/router.php`     - handles routing logic and maps urls to the appropiate controllers

`crypt/aes.php`     - base class for aes encryption methods     <br>
`crypt/base.php`    - base class for base encoding methods      <br>
`crypt/chacha.php`  - base class for chacha encryption methods  <br>
`crypt/curve.php`   - base class for curve encryption methods   <br>
`crypt/md5.php`     - base class for md hashing methods         <br>
`crypt/sha.php`     - base class for sha hashing methods

`database/mysql.php`    - base class for mysql/mariadb db functions     <br>
`database/pgsql.php`    - base class for postgresql db functions        <br>
`database/sqlite.php`   - base class for sqlite db functions

`helpers/array.php`     - array utility functions           <br>
`helpers/json.php`      - functions for handling json data  <br>
`helpers/string.php`    - string manipulatipn functions

`lang/fallback.php`     - fallback english default language file, in case language isnt selected    <br>
`lang/xx_XX.php`        - xx language file for XX region

`middleware/AuthMiddleware.php` - middleware for auth checks                            <br>
`middleware/CsrfMiddleware.php` - middleware for crosssite request forgery protection   <br>
`middleware/main.php`           - base class for middleware functions

`main.php` - main skbase core file.

### plugins/
   here goes additional plugins for the framework, providing additional functionality. 
   to activate/deactivate a specific plugin, the directory name should be specified in `sk/conf/plugins.php`. 
   to prevent a specific plugin from ever being loaded by the framework even if it is specified in the previously mentioned config file, its directory name must start with a dot.

## Getting Help
   If you have questions or need assistance, please open an issue in the GitHub repository or join the community discussions. 
   Contributions are welcome, and we encourage devs to share their experiences and improvements.

## License
   skBase is a free open-source software.
   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
