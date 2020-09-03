## Superglobals 
Superglobals are built-in variables that are always available in all scopes throughout a script. There is no need to do global $variable; to access them within functions or methods.
These superglobal variables are:

- [$GLOBALS](): An associative array references all variables available in global scope.
- [$_SERVER]():is an array containing information such as headers, paths, and script locations. The entries in this array are created by the web server.  
- [$_GET](): HTTP GET variables.
- [$_POST](): HTTP POST variables.
- [$_FILES](): HTTP File Upload variables.
- [$_COOKIE](): HTTP Cookies.
- [$_SESSION](): Session variables.
- [$_REQUEST](): An associative array that by default contains the contents of $_GET, $_POST and $_COOKIE.
- [$_ENV](): An associative array of variables passed to the current script via the environment method.