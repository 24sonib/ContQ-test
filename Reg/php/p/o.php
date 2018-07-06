<?php
pcntl_async_signals(true); // turn on async signals

pcntl_signal(SIGHUP,  function($sig) {
    echo "SIGHUP\n";
    echo shell_exec('/bin/bash term.sh');
});

posix_kill(posix_getpid(), SIGHUP);
