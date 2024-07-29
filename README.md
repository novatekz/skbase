# skbase
PHP Framework.

## Structure
The framework files are located in the `sk` directory, while the app that is made with skBase is located outside `sk` directory.
Application files will load `sk/init.php` to initialize framework and load everything needed by the app and the framework itself.

### conf/
`main.php` - general settings
`db.php`   - database configuration if needed

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
here goes additional plugins for the framework, providing additional functionality. to activate/deactivate a specific plugin, the directory name should be specified in `sk/conf/plugins.php`. to prevent a specific plugin from ever being loaded by the framework even if it is specified in the previously mentioned config file, its directory name must start with a dot.