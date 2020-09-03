# Superglobals 
**Superglobals** are built-in variables that are always available in all scopes throughout a script. There is no need to do **global $variable**; to access them within functions or methods.
- - -

These **superglobal** variables are:

1. [$GLOBALS](): An associative array references all variables available in global scope.
2. [$_SERVER]():is an array containing information such as headers, paths, and script locations. The entries in this array are created by the web server.  
3. [$_GET](): HTTP GET variables.
4. [$_POST](): HTTP POST variables.
5. [$_FILES](): HTTP File Upload variables.
6. [$_COOKIE](): HTTP Cookies.
7. [$_SESSION](): Session variables.
8. [$_REQUEST](): An associative array that by default contains the contents of $_GET, $_POST and $_COOKIE.
9. [$_ENV](): An associative array of variables passed to the current script via the environment method.