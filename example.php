<?php
include 'lib/LocalCache.php';

LocalCache::set("testA", 123);
LocalCache::set("testB", 456);

var_dump(LocalCache::get("testA"));
var_dump(LocalCache::get("testB"));

LocalCache::delete("testB");
var_dump(LocalCache::get("testB"));

/*
使用 ipcs 命令查看
IPC status from <running system> as of Fri Mar 15 12:38:21 CST 2019
T     ID     KEY        MODE       OWNER    GROUP
Shared Memory:
m 4521986 0x7404b86c --rw-r--r-- yangjiguang    staff

*/
