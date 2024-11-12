<?php

function startSession() {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
}

function endSession() {
    startSession();
    session_destroy();
}
