# Shmop 本地缓存

使用php 扩展shmop，将内容本地缓存到共享内存中，无shmop扩展时使用文件缓存(绝大部分情况这个扩展是开启的)

## Quick Start

LocalCache::set("testA", 123);

var_dump(LocalCache::get("testA"));

## 使用 ipcs 命令查看
IPC status from <running system> as of Fri Mar 15 12:38:21 CST 2019
T     ID     KEY        MODE       OWNER    GROUP
Shared Memory:
m 4521986 0x7404b86c --rw-r--r-- yangjiguang    staff


