<?php
// start session (access page with login only)
session_start();

if (!($_SESSION["PROFILE"]["role"] == "ADMIN")) {
  header("location: $_SERVER[HTTP_REFERER]");
}
