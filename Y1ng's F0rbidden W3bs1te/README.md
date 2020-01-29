出题人: 颖奇L'Amore<br>
CTF ID: Y1ng<br>
BLOG: https://www.gem-love.com<br>
Writeup: https://www.gem-love.com/websecurity/950.html<br>
<br><br><br>
Notice:<br>
在复现题目之前，需要设置php.ini中的禁用函数，主要禁止文件操作函数和能够执行系统命令的危险函数, demo:<br>
disable_functions = passthru,exec,system,shell_exec,putenv,chroot,chgrp,chown,popen,proc_open,pcntl_exec,ini_alter,ini_restore,dl,openlog,syslog,readlink,symlink,popepassthru,pcntl_alarm,pcntl_fork,pcntl_waitpid,pcntl_wait,pcntl_wifexited,pcntl_wifstopped,pcntl_wifsignaled,pcntl_wifcontinued,pcntl_wexitstatus,pcntl_wtermsig,pcntl_wstopsig,pcntl_signal,pcntl_signal_dispatch,pcntl_get_last_error,pcntl_strerror,pcntl_sigprocmask,pcntl_sigwaitinfo,pcntl_sigtimedwait,pcntl_exec,pcntl_getpriority,pcntl_setpriority,imap_open,apache_setenv,assert,fopen,file_get_contents,fread,file_get_contents,,highlight_file,scandir,file_put_contents,print_r,var_dump,file,readfile,opendir,readdir,closedir,rewinddir,create_function
