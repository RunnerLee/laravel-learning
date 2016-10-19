<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('articles')->delete();
        
        \DB::table('articles')->insert(array (
            0 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'category_id' => 7,
                'title' => '什么是 Docker',
                'original_content' => 'Docker 是一个开源项目，诞生于 2013 年初，最初是 dotCloud 公司内部的一个业余项目。它基于 Google 公司推出的 Go 语言实现。
项目后来加入了 Linux 基金会，遵从了 Apache 2.0 协议，项目代码在 [GitHub](https://github.com/docker/docker) 上进行维护。

Docker 自开源后受到广泛的关注和讨论，以至于 dotCloud 公司后来都改名为 Docker Inc。Redhat 已经在其 RHEL6.5 中集中支持 Docker；Google 也在其 PaaS 产品中广泛应用。

Docker 项目的目标是实现轻量级的操作系统虚拟化解决方案。
Docker 的基础是 Linux 容器（LXC）等技术。

在 LXC 的基础上 Docker 进行了进一步的封装，让用户不需要去关心容器的管理，使得操作更为简便。用户操作 Docker 的容器就像操作一个快速轻量级的虚拟机一样简单。

下面的图片比较了 Docker 和传统虚拟化方式的不同之处，可见容器是在操作系统层面上实现虚拟化，直接复用本地主机的操作系统，而传统方式则是在硬件层面实现。

![传统虚拟化](https://yeasy.gitbooks.io/docker_practice/content/_images/virtualization.png)

![Docker](https://yeasy.gitbooks.io/docker_practice/content/_images/docker.png)
',
                'short_content' => 'Docker 是一个开源项目，诞生于 2013 年初，最初是 dotCloud 公司内部的一个业余项目。它基于 Google 公司推出的 Go 语言实现。
项目后来加入了 Linux 基金会，遵从了 Apache 2.0 协议，项目代码在 GitHub 上进行维护。
Docker 自开源后受到广泛的关注和讨论，以至于 dotCloud 公司后来都改名为 Docker Inc。Redhat 已经在其 RHEL6.5 中集中支持 Docker；Google 也在其 PaaS 产品中广泛应用。
Docker 项',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 2,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 07:38:23',
                'updated_at' => '2016-10-17 08:23:59',
            ),
            1 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'category_id' => 7,
                'title' => '为什么要使用 Docker？',
                'original_content' => '作为一种新兴的虚拟化方式，Docker 跟传统的虚拟化方式相比具有众多的优势。

首先，Docker 容器的启动可以在秒级实现，这相比传统的虚拟机方式要快得多。
其次，Docker 对系统资源的利用率很高，一台主机上可以同时运行数千个 Docker 容器。

容器除了运行其中应用外，基本不消耗额外的系统资源，使得应用的性能很高，同时系统的开销尽量小。传统虚拟机方式运行 10 个不同的应用就要起 10 个虚拟机，而Docker 只需要启动 10 个隔离的应用即可。

具体说来，Docker 在如下几个方面具有较大的优势。

### 更快速的交付和部署
对开发和运维（devop）人员来说，最希望的就是一次创建或配置，可以在任意地方正常运行。

开发者可以使用一个标准的镜像来构建一套开发容器，开发完成之后，运维人员可以直接使用这个容器来部署代码。
Docker 可以快速创建容器，快速迭代应用程序，并让整个过程全程可见，使团队中的其他成员更容易理解应用程序是如何创建和工作的。
Docker 容器很轻很快！容器的启动时间是秒级的，大量地节约开发、测试、部署的时间。

### 更高效的虚拟化
Docker 容器的运行不需要额外的 hypervisor 支持，它是内核级的虚拟化，因此可以实现更高的性能和效率。

### 更轻松的迁移和扩展

Docker 容器几乎可以在任意的平台上运行，包括物理机、虚拟机、公有云、私有云、个人电脑、服务器等。
这种兼容性可以让用户把一个应用程序从一个平台直接迁移到另外一个。

### 更简单的管理
使用 Docker，只需要小小的修改，就可以替代以往大量的更新工作。所有的修改都以增量的方式被分发和更新，从而实现自动化并且高效的管理。

### 对比传统虚拟机总结

|   特性     |   容器    |   虚拟机   |
| --------   | --------  | ---------- |
| 启动       | 秒级      | 分钟级     |
| 硬盘使用   | 一般为 MB | 一般为 GB  |
| 性能       | 接近原生  | 弱于       |
| 系统支持量 | 单机支持上千个容器 | 一般几十个 |

',
                'short_content' => '作为一种新兴的虚拟化方式，Docker 跟传统的虚拟化方式相比具有众多的优势。
首先，Docker 容器的启动可以在秒级实现，这相比传统的虚拟机方式要快得多。
其次，Docker 对系统资源的利用率很高，一台主机上可以同时运行数千个 Docker 容器。
容器除了运行其中应用外，基本不消耗额外的系统资源，使得应用的性能很高，同时系统的开销尽量小。传统虚拟机方式运行 10 个不同的应用就要起 10 个虚拟机，而Docker 只需要启动 10 个隔离的应用即可。
具体说来，Docker 在如下几个方面具有较大',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 12,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 07:40:03',
                'updated_at' => '2016-10-17 09:00:31',
            ),
            2 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'category_id' => 7,
                'title' => ' 容器访问控制',
                'original_content' => '
容器的访问控制，主要通过 Linux 上的 `iptables` 防火墙来进行管理和实现。`iptables` 是 Linux 上默认的防火墙软件，在大部分发行版中都自带。

### 容器访问外部网络
容器要想访问外部网络，需要本地系统的转发支持。在Linux 系统中，检查转发是否打开。

```
$sysctl net.ipv4.ip_forward
net.ipv4.ip_forward = 1
```
如果为 0，说明没有开启转发，则需要手动打开。
```
$sysctl -w net.ipv4.ip_forward=1
```
如果在启动 Docker 服务的时候设定 `--ip-forward=true`, Docker 就会自动设定系统的 `ip_forward` 参数为 1。

### 容器之间访问
容器之间相互访问，需要两方面的支持。
* 容器的网络拓扑是否已经互联。默认情况下，所有容器都会被连接到 `docker0` 网桥上。
* 本地系统的防火墙软件 -- `iptables` 是否允许通过。

#### 访问所有端口
当启动 Docker 服务时候，默认会添加一条转发策略到 iptables 的 FORWARD 链上。策略为通过（`ACCEPT`）还是禁止（`DROP`）取决于配置`--icc=true`（缺省值）还是 `--icc=false`。当然，如果手动指定 `--iptables=false` 则不会添加 `iptables` 规则。

可见，默认情况下，不同容器之间是允许网络互通的。如果为了安全考虑，可以在 `/etc/default/docker` 文件中配置 `DOCKER_OPTS=--icc=false` 来禁止它。

#### 访问指定端口
在通过 `-icc=false` 关闭网络访问后，还可以通过 `--link=CONTAINER_NAME:ALIAS` 选项来访问容器的开放端口。

例如，在启动 Docker 服务时，可以同时使用 `icc=false --iptables=true` 参数来关闭允许相互的网络访问，并让 Docker 可以修改系统中的 `iptables` 规则。

此时，系统中的 `iptables` 规则可能是类似
```
$ sudo iptables -nL
...
Chain FORWARD (policy ACCEPT)
target     prot opt source               destination
DROP       all  --  0.0.0.0/0            0.0.0.0/0
...
```

之后，启动容器（`docker run`）时使用 `--link=CONTAINER_NAME:ALIAS` 选项。Docker 会在 `iptable` 中为 两个容器分别添加一条 `ACCEPT` 规则，允许相互访问开放的端口（取决于 Dockerfile 中的 EXPOSE 行）。

当添加了 `--link=CONTAINER_NAME:ALIAS` 选项后，添加了 `iptables` 规则。
```
$ sudo iptables -nL
...
Chain FORWARD (policy ACCEPT)
target     prot opt source               destination
ACCEPT     tcp  --  172.17.0.2           172.17.0.3           tcp spt:80
ACCEPT     tcp  --  172.17.0.3           172.17.0.2           tcp dpt:80
DROP       all  --  0.0.0.0/0            0.0.0.0/0
```

注意：`--link=CONTAINER_NAME:ALIAS` 中的 `CONTAINER_NAME` 目前必须是 Docker 分配的名字，或使用 `--name` 参数指定的名字。主机名则不会被识别。
',
                'short_content' => '容器的访问控制，主要通过 Linux 上的 iptables 防火墙来进行管理和实现。iptables 是 Linux 上默认的防火墙软件，在大部分发行版中都自带。
容器访问外部网络
容器要想访问外部网络，需要本地系统的转发支持。在Linux 系统中，检查转发是否打开。
$sysctl net.ipv4.ip_forward
net.ipv4.ip_forward = 1

如果为 0，说明没有开启转发，则需要手动打开。
$sysctl -w net.ipv4.ip_forward=1

如果在启动 Do',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 1,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:18:58',
                'updated_at' => '2016-10-17 08:34:57',
            ),
            3 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'category_id' => 7,
                'title' => ' 自定义网桥',
                'original_content' => '
除了默认的 `docker0` 网桥，用户也可以指定网桥来连接各个容器。

在启动 Docker 服务的时候，使用 `-b BRIDGE`或`--bridge=BRIDGE` 来指定使用的网桥。

如果服务已经运行，那需要先停止服务，并删除旧的网桥。
```
$ sudo service docker stop
$ sudo ip link set dev docker0 down
$ sudo brctl delbr docker0
```
然后创建一个网桥 `bridge0`。
```
$ sudo brctl addbr bridge0
$ sudo ip addr add 192.168.5.1/24 dev bridge0
$ sudo ip link set dev bridge0 up
```
查看确认网桥创建并启动。
```
$ ip addr show bridge0
4: bridge0: <BROADCAST,MULTICAST> mtu 1500 qdisc noop state UP group default
link/ether 66:38:d0:0d:76:18 brd ff:ff:ff:ff:ff:ff
inet 192.168.5.1/24 scope global bridge0
valid_lft forever preferred_lft forever
```
配置 Docker 服务，默认桥接到创建的网桥上。
```
$ echo \'DOCKER_OPTS="-b=bridge0"\' >> /etc/default/docker
$ sudo service docker start
```
启动 Docker 服务。
新建一个容器，可以看到它已经桥接到了 `bridge0` 上。

可以继续用 `brctl show` 命令查看桥接的信息。另外，在容器中可以使用 `ip addr` 和 `ip route` 命令来查看 IP 地址配置和路由信息。
',
                'short_content' => '除了默认的 docker0 网桥，用户也可以指定网桥来连接各个容器。
在启动 Docker 服务的时候，使用 -b BRIDGE或--bridge=BRIDGE 来指定使用的网桥。
如果服务已经运行，那需要先停止服务，并删除旧的网桥。
$ sudo service docker stop
$ sudo ip link set dev docker0 down
$ sudo brctl delbr docker0

然后创建一个网桥 bridge0。
$ sudo brctl addbr bridge0
$',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:18:58',
                'updated_at' => '2016-10-17 08:18:58',
            ),
            4 => 
            array (
                'id' => 10,
                'user_id' => 1,
                'category_id' => 7,
                'title' => ' 编辑网络配置文件',
                'original_content' => '

Docker 1.2.0 开始支持在运行中的容器里编辑 `/etc/hosts`, `/etc/hostname` 和 `/etc/resolve.conf` 文件。

但是这些修改是临时的，只在运行的容器中保留，容器终止或重启后并不会被保存下来。也不会被 `docker commit` 提交。
',
                'short_content' => 'Docker 1.2.0 开始支持在运行中的容器里编辑 /etc/hosts, /etc/hostname 和 /etc/resolve.conf 文件。
但是这些修改是临时的，只在运行的容器中保留，容器终止或重启后并不会被保存下来。也不会被 docker commit 提交。
',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:18:58',
                'updated_at' => '2016-10-17 08:18:58',
            ),
            5 => 
            array (
                'id' => 11,
                'user_id' => 1,
                'category_id' => 7,
                'title' => ' 配置 DNS',
                'original_content' => '
Docker 没有为每个容器专门定制镜像，那么怎么自定义配置容器的主机名和 DNS 配置呢？
秘诀就是它利用虚拟文件来挂载到来容器的 3 个相关配置文件。

在容器中使用 mount 命令可以看到挂载信息：
```
$ mount
...
/dev/disk/by-uuid/1fec...ebdf on /etc/hostname type ext4 ...
/dev/disk/by-uuid/1fec...ebdf on /etc/hosts type ext4 ...
tmpfs on /etc/resolv.conf type tmpfs ...
...
```
这种机制可以让宿主主机 DNS 信息发生更新后，所有 Docker 容器的 dns 配置通过 `/etc/resolv.conf` 文件立刻得到更新。

如果用户想要手动指定容器的配置，可以利用下面的选项。

`-h HOSTNAME or --hostname=HOSTNAME`
设定容器的主机名，它会被写到容器内的 `/etc/hostname` 和 `/etc/hosts`。但它在容器外部看不到，既不会在 `docker ps` 中显示，也不会在其他的容器的 `/etc/hosts` 看到。

`--link=CONTAINER_NAME:ALIAS`
选项会在创建容器的时候，添加一个其他容器的主机名到 `/etc/hosts` 文件中，让新容器的进程可以使用主机名 ALIAS 就可以连接它。

`--dns=IP_ADDRESS`
添加 DNS 服务器到容器的 `/etc/resolv.conf` 中，让容器用这个服务器来解析所有不在 `/etc/hosts` 中的主机名。

`--dns-search=DOMAIN`
设定容器的搜索域，当设定搜索域为 `.example.com` 时，在搜索一个名为 host 的主机时，DNS 不仅搜索host，还会搜索 `host.example.com`。
注意：如果没有上述最后 2 个选项，Docker 会默认用主机上的 `/etc/resolv.conf` 来配置容器。
',
                'short_content' => 'Docker 没有为每个容器专门定制镜像，那么怎么自定义配置容器的主机名和 DNS 配置呢？
秘诀就是它利用虚拟文件来挂载到来容器的 3 个相关配置文件。
在容器中使用 mount 命令可以看到挂载信息：
$ mount
...
/dev/disk/by-uuid/1fec...ebdf on /etc/hostname type ext4 ...
/dev/disk/by-uuid/1fec...ebdf on /etc/hosts type ext4 ...
tmpfs on /etc/resolv.',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:18:58',
                'updated_at' => '2016-10-17 08:18:58',
            ),
            6 => 
            array (
                'id' => 12,
                'user_id' => 1,
                'category_id' => 7,
                'title' => ' 配置 docker0 网桥',
                'original_content' => '
Docker 服务默认会创建一个 `docker0` 网桥（其上有一个 `docker0` 内部接口），它在内核层连通了其他的物理或虚拟网卡，这就将所有容器和本地主机都放到同一个物理网络。

Docker 默认指定了 `docker0` 接口 的 IP 地址和子网掩码，让主机和容器之间可以通过网桥相互通信，它还给出了 MTU（接口允许接收的最大传输单元），通常是 1500 Bytes，或宿主主机网络路由上支持的默认值。这些值都可以在服务启动的时候进行配置。
* `--bip=CIDR` -- IP 地址加掩码格式，例如 192.168.1.5/24
* `--mtu=BYTES` -- 覆盖默认的 Docker mtu 配置

也可以在配置文件中配置 DOCKER_OPTS，然后重启服务。
由于目前 Docker 网桥是 Linux 网桥，用户可以使用 `brctl show` 来查看网桥和端口连接信息。
```
$ sudo brctl show
bridge name     bridge id               STP enabled     interfaces
docker0         8000.3a1d7362b4ee       no              veth65f9
vethdda6
```
*注：`brctl` 命令在 Debian、Ubuntu 中可以使用 `sudo apt-get install bridge-utils` 来安装。


每次创建一个新容器的时候，Docker 从可用的地址段中选择一个空闲的 IP 地址分配给容器的 eth0 端口。使用本地主机上 `docker0` 接口的 IP 作为所有容器的默认网关。
```
$ sudo docker run -i -t --rm base /bin/bash
$ ip addr show eth0
24: eth0: <BROADCAST,UP,LOWER_UP> mtu 1500 qdisc pfifo_fast state UP group default qlen 1000
link/ether 32:6f:e0:35:57:91 brd ff:ff:ff:ff:ff:ff
inet 172.17.0.3/16 scope global eth0
valid_lft forever preferred_lft forever
inet6 fe80::306f:e0ff:fe35:5791/64 scope link
valid_lft forever preferred_lft forever
$ ip route
default via 172.17.42.1 dev eth0
172.17.0.0/16 dev eth0  proto kernel  scope link  src 172.17.0.3
$ exit
```
',
                'short_content' => 'Docker 服务默认会创建一个 docker0 网桥（其上有一个 docker0 内部接口），它在内核层连通了其他的物理或虚拟网卡，这就将所有容器和本地主机都放到同一个物理网络。
Docker 默认指定了 docker0 接口 的 IP 地址和子网掩码，让主机和容器之间可以通过网桥相互通信，它还给出了 MTU（接口允许接收的最大传输单元），通常是 1500 Bytes，或宿主主机网络路由上支持的默认值。这些值都可以在服务启动的时候进行配置。


--bip=CIDR -- IP 地址加掩码格式，例如 1',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:18:58',
                'updated_at' => '2016-10-17 08:18:58',
            ),
            7 => 
            array (
                'id' => 13,
                'user_id' => 1,
                'category_id' => 7,
                'title' => ' 工具和示例',
                'original_content' => '
在介绍自定义网络拓扑之前，你可能会对一些外部工具和例子感兴趣：

### pipework
Jérôme Petazzoni 编写了一个叫 [pipework](https://github.com/jpetazzo/pipework) 的 shell 脚本，可以帮助用户在比较复杂的场景中完成容器的连接。

### playground
Brandon Rhodes 创建了一个提供完整的 Docker 容器网络拓扑管理的 [Python库](https://github.com/brandon-rhodes/fopnp/tree/m/playground)，包括路由、NAT 防火墙；以及一些提供 HTTP, SMTP, POP, IMAP, Telnet, SSH, FTP 的服务器。
',
                'short_content' => '在介绍自定义网络拓扑之前，你可能会对一些外部工具和例子感兴趣：
pipework
Jérôme Petazzoni 编写了一个叫 pipework 的 shell 脚本，可以帮助用户在比较复杂的场景中完成容器的连接。
playground
Brandon Rhodes 创建了一个提供完整的 Docker 容器网络拓扑管理的 Python库，包括路由、NAT 防火墙；以及一些提供 HTTP, SMTP, POP, IMAP, Telnet, SSH, FTP 的服务器。
',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:18:58',
                'updated_at' => '2016-10-17 08:18:58',
            ),
            8 => 
            array (
                'id' => 15,
                'user_id' => 1,
                'category_id' => 7,
                'title' => ' 映射容器端口到宿主主机的实现',
                'original_content' => '

默认情况下，容器可以主动访问到外部网络的连接，但是外部网络无法访问到容器。
### 容器访问外部实现
容器所有到外部网络的连接，源地址都会被NAT成本地系统的IP地址。这是使用 `iptables` 的源地址伪装操作实现的。

查看主机的 NAT 规则。
```
$ sudo iptables -t nat -nL
...
Chain POSTROUTING (policy ACCEPT)
target     prot opt source               destination
MASQUERADE  all  --  172.17.0.0/16       !172.17.0.0/16
...
```
其中，上述规则将所有源地址在 `172.17.0.0/16` 网段，目标地址为其他网段（外部网络）的流量动态伪装为从系统网卡发出。MASQUERADE 跟传统 SNAT 的好处是它能动态从网卡获取地址。

### 外部访问容器实现

容器允许外部访问，可以在 `docker run` 时候通过 `-p` 或 `-P` 参数来启用。

不管用那种办法，其实也是在本地的 `iptable` 的 nat 表中添加相应的规则。

使用 `-P` 时：
```
$ iptables -t nat -nL
...
Chain DOCKER (2 references)
target     prot opt source               destination
DNAT       tcp  --  0.0.0.0/0            0.0.0.0/0            tcp dpt:49153 to:172.17.0.2:80
```

使用 `-p 80:80` 时：
```
$ iptables -t nat -nL
Chain DOCKER (2 references)
target     prot opt source               destination
DNAT       tcp  --  0.0.0.0/0            0.0.0.0/0            tcp dpt:80 to:172.17.0.2:80
```
注意：
* 这里的规则映射了 0.0.0.0，意味着将接受主机来自所有接口的流量。用户可以通过 `-p IP:host_port:container_port` 或 `-p
IP::port` 来指定允许访问容器的主机上的 IP、接口等，以制定更严格的规则。
* 如果希望永久绑定到某个固定的 IP 地址，可以在 Docker 配置文件 `/etc/default/docker` 中指定 `DOCKER_OPTS="--ip=IP_ADDRESS"`，之后重启 Docker 服务即可生效。
',
                'short_content' => '默认情况下，容器可以主动访问到外部网络的连接，但是外部网络无法访问到容器。
容器访问外部实现
容器所有到外部网络的连接，源地址都会被NAT成本地系统的IP地址。这是使用 iptables 的源地址伪装操作实现的。
查看主机的 NAT 规则。
$ sudo iptables -t nat -nL
...
Chain POSTROUTING (policy ACCEPT)
target     prot opt source               destination
MASQUERADE  all ',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:18:58',
                'updated_at' => '2016-10-17 08:18:58',
            ),
            9 => 
            array (
                'id' => 16,
                'user_id' => 1,
                'category_id' => 7,
                'title' => ' 示例：创建一个点到点连接',
                'original_content' => '
默认情况下，Docker 会将所有容器连接到由 `docker0` 提供的虚拟子网中。

用户有时候需要两个容器之间可以直连通信，而不用通过主机网桥进行桥接。

解决办法很简单：创建一对 `peer` 接口，分别放到两个容器中，配置成点到点链路类型即可。

首先启动 2 个容器：
```
$ sudo docker run -i -t --rm --net=none base /bin/bash
root@1f1f4c1f931a:/#
$ sudo docker run -i -t --rm --net=none base /bin/bash
root@12e343489d2f:/#
```

找到进程号，然后创建网络名字空间的跟踪文件。
```
$ sudo docker inspect -f \'{{.State.Pid}}\' 1f1f4c1f931a
2989
$ sudo docker inspect -f \'{{.State.Pid}}\' 12e343489d2f
3004
$ sudo mkdir -p /var/run/netns
$ sudo ln -s /proc/2989/ns/net /var/run/netns/2989
$ sudo ln -s /proc/3004/ns/net /var/run/netns/3004
```

创建一对 `peer` 接口，然后配置路由
```
$ sudo ip link add A type veth peer name B

$ sudo ip link set A netns 2989
$ sudo ip netns exec 2989 ip addr add 10.1.1.1/32 dev A
$ sudo ip netns exec 2989 ip link set A up
$ sudo ip netns exec 2989 ip route add 10.1.1.2/32 dev A

$ sudo ip link set B netns 3004
$ sudo ip netns exec 3004 ip addr add 10.1.1.2/32 dev B
$ sudo ip netns exec 3004 ip link set B up
$ sudo ip netns exec 3004 ip route add 10.1.1.1/32 dev B
```
现在这 2 个容器就可以相互 ping 通，并成功建立连接。点到点链路不需要子网和子网掩码。

此外，也可以不指定 `--net=none` 来创建点到点链路。这样容器还可以通过原先的网络来通信。

利用类似的办法，可以创建一个只跟主机通信的容器。但是一般情况下，更推荐使用 `--icc=false` 来关闭容器之间的通信。
',
                'short_content' => '默认情况下，Docker 会将所有容器连接到由 docker0 提供的虚拟子网中。
用户有时候需要两个容器之间可以直连通信，而不用通过主机网桥进行桥接。
解决办法很简单：创建一对 peer 接口，分别放到两个容器中，配置成点到点链路类型即可。
首先启动 2 个容器：
$ sudo docker run -i -t --rm --net=none base /bin/bash
root@1f1f4c1f931a:/#
$ sudo docker run -i -t --rm --net=none base ',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:18:58',
                'updated_at' => '2016-10-17 08:18:58',
            ),
            10 => 
            array (
                'id' => 17,
                'user_id' => 1,
                'category_id' => 7,
                'title' => ' 快速配置指南',
                'original_content' => '

下面是一个跟 Docker 网络相关的命令列表。

其中有些命令选项只有在 Docker 服务启动的时候才能配置，而且不能马上生效。
* `-b BRIDGE or --bridge=BRIDGE` --指定容器挂载的网桥
* `--bip=CIDR` --定制 docker0 的掩码
* `-H SOCKET... or --host=SOCKET...` --Docker 服务端接收命令的通道
* `--icc=true|false` --是否支持容器之间进行通信
* `--ip-forward=true|false` --请看下文容器之间的通信
* `--iptables=true|false` --是否允许 Docker 添加 iptables 规则
* `--mtu=BYTES` --容器网络中的 MTU

下面2个命令选项既可以在启动服务时指定，也可以 Docker 容器启动（`docker run`）时候指定。在 Docker 服务启动的时候指定则会成为默认值，后面执行 `docker run` 时可以覆盖设置的默认值。
* `--dns=IP_ADDRESS...` --使用指定的DNS服务器
* `--dns-search=DOMAIN...` --指定DNS搜索域

最后这些选项只有在 `docker run` 执行时使用，因为它是针对容器的特性内容。
* `-h HOSTNAME or --hostname=HOSTNAME` --配置容器主机名
* `--link=CONTAINER_NAME:ALIAS` --添加到另一个容器的连接
* `--net=bridge|none|container:NAME_or_ID|host` --配置容器的桥接模式
* `-p SPEC or --publish=SPEC` --映射容器端口到宿主主机
* `-P or --publish-all=true|false` --映射容器所有端口到宿主主机
',
                'short_content' => '下面是一个跟 Docker 网络相关的命令列表。
其中有些命令选项只有在 Docker 服务启动的时候才能配置，而且不能马上生效。


-b BRIDGE or --bridge=BRIDGE --指定容器挂载的网桥

--bip=CIDR --定制 docker0 的掩码

-H SOCKET... or --host=SOCKET... --Docker 服务端接收命令的通道

--icc=true|false --是否支持容器之间进行通信

--ip-forward=true|false --请看下',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:18:58',
                'updated_at' => '2016-10-17 08:18:58',
            ),
            11 => 
            array (
                'id' => 18,
                'user_id' => 1,
                'category_id' => 7,
                'title' => ' 高级网络配置',
                'original_content' => '
本章将介绍 Docker 的一些高级网络配置和选项。

当 Docker 启动时，会自动在主机上创建一个 `docker0` 虚拟网桥，实际上是 Linux 的一个 bridge，可以理解为一个软件交换机。它会在挂载到它的网口之间进行转发。

同时，Docker 随机分配一个本地未占用的私有网段（在 [RFC1918](http://tools.ietf.org/html/rfc1918) 中定义）中的一个地址给 `docker0` 接口。比如典型的 `172.17.42.1`，掩码为 `255.255.0.0`。此后启动的容器内的网口也会自动分配一个同一网段（`172.17.0.0/16`）的地址。

当创建一个 Docker 容器的时候，同时会创建了一对 `veth pair` 接口（当数据包发送到一个接口时，另外一个接口也可以收到相同的数据包）。这对接口一端在容器内，即 `eth0`；另一端在本地并被挂载到 `docker0` 网桥，名称以 `veth` 开头（例如 `vethAQI2QT`）。通过这种方式，主机可以跟容器通信，容器之间也可以相互通信。Docker 就创建了在主机和所有容器之间一个虚拟共享网络。

![Docker 网络](../_images/network.png)

接下来的部分将介绍在一些场景中，Docker 所有的网络定制配置。以及通过 Linux 命令来调整、补充、甚至替换 Docker 默认的网络配置。
',
                'short_content' => '本章将介绍 Docker 的一些高级网络配置和选项。
当 Docker 启动时，会自动在主机上创建一个 docker0 虚拟网桥，实际上是 Linux 的一个 bridge，可以理解为一个软件交换机。它会在挂载到它的网口之间进行转发。
同时，Docker 随机分配一个本地未占用的私有网段（在 RFC1918 中定义）中的一个地址给 docker0 接口。比如典型的 172.17.42.1，掩码为 255.255.0.0。此后启动的容器内的网口也会自动分配一个同一网段（172.17.0.0/16）的地址。
',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:18:58',
                'updated_at' => '2016-10-17 08:18:58',
            ),
            12 => 
            array (
                'id' => 19,
                'user_id' => 1,
                'category_id' => 7,
            'title' => ' [CentOS](https://registry.hub.docker.com/_/centos/)',
                'original_content' => '

### 基本信息
[CentOS](https://en.wikipedia.org/wiki/CentOS) 是流行的 Linux 发行版，其软件包大多跟 RedHat 系列保持一致。
该仓库提供了 CentOS 从 5 ~ 7 各个版本的镜像。

### 使用方法
默认会启动一个最小化的 CentOS 环境。
```
$ sudo docker run --name some-centos -i -t centos bash
bash-4.2#
```

### Dockerfile
* [CentOS 5 版本](https://github.com/CentOS/sig-cloud-instance-images/blob/2e5a9c4e8b7191b393822e4b9e98820db5638a77/docker/Dockerfile)
* [CentOS 6 版本](https://github.com/CentOS/sig-cloud-instance-images/blob/8717e33ea5432ecb33d7ecefe8452a973715d037/docker/Dockerfile)
* [CentOS 7 版本](https://github.com/CentOS/sig-cloud-instance-images/blob/af7a1b9f8f30744360a10fe44c53a1591bef26f9/docker/Dockerfile)
',
                'short_content' => '基本信息
CentOS 是流行的 Linux 发行版，其软件包大多跟 RedHat 系列保持一致。
该仓库提供了 CentOS 从 5 ~ 7 各个版本的镜像。
使用方法
默认会启动一个最小化的 CentOS 环境。
$ sudo docker run --name some-centos -i -t centos bash
bash-4.2#

Dockerfile


CentOS 5 版本


CentOS 6 版本


CentOS 7 版本


',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:21:01',
                'updated_at' => '2016-10-17 08:21:01',
            ),
            13 => 
            array (
                'id' => 20,
                'user_id' => 1,
                'category_id' => 7,
            'title' => ' [MongoDB](https://registry.hub.docker.com/_/mongo/)',
                'original_content' => '

### 基本信息
[MongoDB](https://en.wikipedia.org/wiki/MongoDB) 是开源的 NoSQL 数据库实现。
该仓库提供了 MongoDB 2.2 ~ 2.7 各个版本的镜像。

### 使用方法
默认会在 `27017` 端口启动数据库。
```
$ sudo docker run --name some-mongo -d mongo
```

使用其他应用连接到容器，可以用
```
$ sudo docker run --name some-app --link some-mongo:mongo -d application-that-uses-mongo
```
或者通过 `mongo`
```
$ sudo docker run -it --link some-mongo:mongo --rm mongo sh -c \'exec mongo "$MONGO_PORT_27017_TCP_ADDR:$MONGO_PORT_27017_TCP_PORT/test"\'
```

### Dockerfile
* [2.2 版本](https://github.com/docker-library/mongo/blob/77c841472ccb6cc87fea1218269d097405edc6cb/2.2/Dockerfile)
* [2.4 版本](https://github.com/docker-library/mongo/blob/807078cb7b5f0289f6dabf9f6875d5318122bc30/2.4/Dockerfile)
* [2.6 版本](https://github.com/docker-library/mongo/blob/77c841472ccb6cc87fea1218269d097405edc6cb/2.6/Dockerfile)
* [2.7 版本](https://github.com/docker-library/mongo/blob/807078cb7b5f0289f6dabf9f6875d5318122bc30/2.7/Dockerfile)
',
                'short_content' => '基本信息
MongoDB 是开源的 NoSQL 数据库实现。
该仓库提供了 MongoDB 2.2 ~ 2.7 各个版本的镜像。
使用方法
默认会在 27017 端口启动数据库。
$ sudo docker run --name some-mongo -d mongo

使用其他应用连接到容器，可以用
$ sudo docker run --name some-app --link some-mongo:mongo -d application-that-uses-mongo

或者通过 mongo
$ ',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:21:01',
                'updated_at' => '2016-10-17 08:21:01',
            ),
            14 => 
            array (
                'id' => 21,
                'user_id' => 1,
                'category_id' => 7,
            'title' => ' [MySQL](https://registry.hub.docker.com/_/mysql/)',
                'original_content' => '

### 基本信息
[MySQL](https://en.wikipedia.org/wiki/MySQL) 是开源的关系数据库实现。
该仓库提供了 MySQL 各个版本的镜像，包括 5.6 系列、5.7 系列等。

### 使用方法
默认会在 `3306` 端口启动数据库。
```
$ sudo docker run --name some-mysql -e MYSQL_ROOT_PASSWORD=mysecretpassword -d mysql
```
之后就可以使用其它应用来连接到该容器。
```
$ sudo docker run --name some-app --link some-mysql:mysql -d application-that-uses-mysql
```
或者通过 `mysql`。
```
$ sudo docker run -it --link some-mysql:mysql --rm mysql sh -c \'exec mysql -h"$MYSQL_PORT_3306_TCP_ADDR" -P"$MYSQL_PORT_3306_TCP_PORT" -uroot -p"$MYSQL_ENV_MYSQL_ROOT_PASSWORD"\'
```

### Dockerfile
* [5.6 版本](https://github.com/docker-library/mysql/blob/7461a52b43f06839a4d8723ae8841f4cb616b3d0/5.6/Dockerfile)
* [5.7 版本](https://github.com/docker-library/mysql/blob/7461a52b43f06839a4d8723ae8841f4cb616b3d0/5.7/Dockerfile)
',
                'short_content' => '基本信息
MySQL 是开源的关系数据库实现。
该仓库提供了 MySQL 各个版本的镜像，包括 5.6 系列、5.7 系列等。
使用方法
默认会在 3306 端口启动数据库。
$ sudo docker run --name some-mysql -e MYSQL_ROOT_PASSWORD=mysecretpassword -d mysql

之后就可以使用其它应用来连接到该容器。
$ sudo docker run --name some-app --link some-mysql:mysql -d ',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 1,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:21:01',
                'updated_at' => '2016-10-18 05:35:59',
            ),
            15 => 
            array (
                'id' => 22,
                'user_id' => 1,
                'category_id' => 7,
            'title' => ' [Nginx](https://registry.hub.docker.com/_/nginx/)',
                'original_content' => '

### 基本信息
[Nginx](https://en.wikipedia.org/wiki/Nginx) 是开源的高效的 Web 服务器实现，支持 HTTP、HTTPS、SMTP、POP3、IMAP 等协议。
该仓库提供了 Nginx 1.0 ~ 1.7 各个版本的镜像。

### 使用方法
下面的命令将作为一个静态页面服务器启动。
```
$ sudo docker run --name some-nginx -v /some/content:/usr/share/nginx/html:ro -d nginx
```
用户也可以不使用这种映射方式，通过利用 Dockerfile 来直接将静态页面内容放到镜像中，内容为
```
FROM nginx
COPY static-html-directory /usr/share/nginx/html
```
之后生成新的镜像，并启动一个容器。
```
$ sudo docker build -t some-content-nginx .
$ sudo docker run --name some-nginx -d some-content-nginx
```
开放端口，并映射到本地的 `8080` 端口。
```
sudo docker run --name some-nginx -d -p 8080:80 some-content-nginx
```

Nginx的默认配置文件路径为 `/etc/nginx/nginx.conf`，可以通过映射它来使用本地的配置文件，例如
```
docker run --name some-nginx -v /some/nginx.conf:/etc/nginx/nginx.conf:ro -d nginx
```
使用配置文件时，为了在容器中正常运行，需要保持 `daemon off;`。

### Dockerfile
* [1 ~ 1.7 版本](https://github.com/nginxinc/docker-nginx/blob/3713a0157083eb4776e71f5a5aef4b2a5bc03ab1/Dockerfile)
',
                'short_content' => '基本信息
Nginx 是开源的高效的 Web 服务器实现，支持 HTTP、HTTPS、SMTP、POP3、IMAP 等协议。
该仓库提供了 Nginx 1.0 ~ 1.7 各个版本的镜像。
使用方法
下面的命令将作为一个静态页面服务器启动。
$ sudo docker run --name some-nginx -v /some/content:/usr/share/nginx/html:ro -d nginx

用户也可以不使用这种映射方式，通过利用 Dockerfile 来直接将静态页面内容放到镜像中',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:21:01',
                'updated_at' => '2016-10-17 08:21:01',
            ),
            16 => 
            array (
                'id' => 23,
                'user_id' => 1,
                'category_id' => 7,
            'title' => ' [Node.js](https://registry.hub.docker.com/_/node/)',
                'original_content' => '

### 基本信息
[Node.js](https://en.wikipedia.org/wiki/Node.js)是基于 JavaScript 的可扩展服务端和网络软件开发平台。
该仓库提供了 Node.js 0.8 ~ 0.11 各个版本的镜像。

### 使用方法
在项目中创建一个 Dockerfile。
```
FROM node:0.10-onbuild
# replace this with your application\'s default port
EXPOSE 8888
```
然后创建镜像，并启动容器
```
$ sudo docker build -t my-nodejs-app
$ sudo docker run -it --rm --name my-running-app my-nodejs-app
```

也可以直接运行一个简单容器。
```
$ sudo docker run -it --rm --name my-running-script -v "$(pwd)":/usr/src/myapp -w /usr/src/myapp node:0.10 node your-daemon-or-script.js
```

### Dockerfile
* [0.8 版本](https://github.com/docker-library/node/blob/d017d679e92e84a810c580cdb29fcdbba23c2bb9/0.8/Dockerfile)
* [0.10 版本](https://github.com/docker-library/node/blob/913a225f2fda34d6a811fac1466e4f09f075fcf6/0.10/Dockerfile)
* [0.11 版本](https://github.com/docker-library/node/blob/d017d679e92e84a810c580cdb29fcdbba23c2bb9/0.11/Dockerfile)
',
                'short_content' => '基本信息
Node.js是基于 JavaScript 的可扩展服务端和网络软件开发平台。
该仓库提供了 Node.js 0.8 ~ 0.11 各个版本的镜像。
使用方法
在项目中创建一个 Dockerfile。
FROM node:0.10-onbuild
# replace this with your application\'s default port
EXPOSE 8888

然后创建镜像，并启动容器
$ sudo docker build -t my-nodejs-app
$ sudo dock',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:21:01',
                'updated_at' => '2016-10-17 08:21:01',
            ),
            17 => 
            array (
                'id' => 24,
                'user_id' => 1,
                'category_id' => 7,
            'title' => ' [Redis](https://registry.hub.docker.com/_/redis/)',
                'original_content' => '

### 基本信息
[Redis](https://en.wikipedia.org/wiki/Redis) 是开源的内存 Key-Value 数据库实现。
该仓库提供了 Redis 2.6 ~ 2.8.9 各个版本的镜像。

### 使用方法
默认会在 `6379` 端口启动数据库。
```
$ sudo docker run --name some-redis -d redis
```
另外还可以启用 [持久存储](http://redis.io/topics/persistence)。
```
$ sudo docker run --name some-redis -d redis redis-server --appendonly yes
```
默认数据存储位置在 `VOLUME/data`。可以使用 `--volumes-from some-volume-container` 或 `-v /docker/host/dir:/data` 将数据存放到本地。

使用其他应用连接到容器，可以用
```
$ sudo docker run --name some-app --link some-redis:redis -d application-that-uses-redis
```
或者通过 `redis-cli`
```
$ sudo docker run -it --link some-redis:redis --rm redis sh -c \'exec redis-cli -h "$REDIS_PORT_6379_TCP_ADDR" -p "$REDIS_PORT_6379_TCP_PORT"\'
```

### Dockerfile
* [2.6 版本](https://github.com/docker-library/redis/blob/02d9cd887a4e0d50db4bb085eab7235115a6fe4a/2.6.17/Dockerfile)
* [最新 2.8 版本](https://github.com/docker-library/redis/blob/d0665bb1bbddd4cc035dbc1fc774695fa534d648/2.8.13/Dockerfile)
',
                'short_content' => '基本信息
Redis 是开源的内存 Key-Value 数据库实现。
该仓库提供了 Redis 2.6 ~ 2.8.9 各个版本的镜像。
使用方法
默认会在 6379 端口启动数据库。
$ sudo docker run --name some-redis -d redis

另外还可以启用 持久存储。
$ sudo docker run --name some-redis -d redis redis-server --appendonly yes

默认数据存储位置在 VOLUME/data。可以使用',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:21:01',
                'updated_at' => '2016-10-17 08:21:01',
            ),
            18 => 
            array (
                'id' => 25,
                'user_id' => 1,
                'category_id' => 7,
            'title' => ' [Ubuntu](https://registry.hub.docker.com/_/ubuntu/)',
                'original_content' => '

### 基本信息
[Ubuntu](https://en.wikipedia.org/wiki/Ubuntu) 是流行的 Linux 发行版，其自带软件版本往往较新一些。
该仓库提供了 Ubuntu从12.04 ~ 14.10 各个版本的镜像。

### 使用方法
默认会启动一个最小化的 Ubuntu 环境。
```
$ sudo docker run --name some-ubuntu -i -t ubuntu
root@523c70904d54:/#
```

### Dockerfile
* [12.04 版本](https://github.com/tianon/docker-brew-ubuntu-core/blob/2b105575647a7e2030ff344d427c3920b89e17a9/precise/Dockerfile)
* [14.04 版本](https://github.com/tianon/docker-brew-ubuntu-core/blob/2b105575647a7e2030ff344d427c3920b89e17a9/trusty/Dockerfile)
* [14.10 版本](https://github.com/tianon/docker-brew-ubuntu-core/blob/2b105575647a7e2030ff344d427c3920b89e17a9/utopic/Dockerfile)
',
                'short_content' => '基本信息
Ubuntu 是流行的 Linux 发行版，其自带软件版本往往较新一些。
该仓库提供了 Ubuntu从12.04 ~ 14.10 各个版本的镜像。
使用方法
默认会启动一个最小化的 Ubuntu 环境。
$ sudo docker run --name some-ubuntu -i -t ubuntu
root@523c70904d54:/#

Dockerfile


12.04 版本


14.04 版本


14.10 版本


',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 1,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:21:01',
                'updated_at' => '2016-10-17 08:34:46',
            ),
            19 => 
            array (
                'id' => 26,
                'user_id' => 1,
                'category_id' => 7,
            'title' => ' [WordPress](https://registry.hub.docker.com/_/wordpress/)',
                'original_content' => '

### 基本信息
[WordPress](https://en.wikipedia.org/wiki/WordPress) 是开源的 Blog 和内容管理系统框架，它基于 PhP 和 MySQL。
该仓库提供了 WordPress 4.0 版本的镜像。

### 使用方法
启动容器需要 MySQL 的支持，默认端口为 `80`。
```
$ sudo docker run --name some-wordpress --link some-mysql:mysql -d wordpress
```
启动 WordPress 容器时可以指定的一些环境参数包括
* `-e WORDPRESS_DB_USER=...` 缺省为 “root”
* `-e WORDPRESS_DB_PASSWORD=...` 缺省为连接 mysql 容器的环境变量 `MYSQL_ROOT_PASSWORD` 的值
* `-e WORDPRESS_DB_NAME=...` 缺省为 “wordpress”
* `-e WORDPRESS_AUTH_KEY=...`, `-e WORDPRESS_SECURE_AUTH_KEY=...`, `-e WORDPRESS_LOGGED_IN_KEY=...`, `-e WORDPRESS_NONCE_KEY=...`, `-e WORDPRESS_AUTH_SALT=...`, `-e WORDPRESS_SECURE_AUTH_SALT=...`, `-e WORDPRESS_LOGGED_IN_SALT=...`, `-e WORDPRESS_NONCE_SALT=...` 缺省为随机 sha1 串

### Dockerfile
* [4.0 版本](https://github.com/docker-library/wordpress/blob/aee00669e7c43f435f021cb02871bffd63d5677a/Dockerfile)
',
                'short_content' => '基本信息
WordPress 是开源的 Blog 和内容管理系统框架，它基于 PhP 和 MySQL。
该仓库提供了 WordPress 4.0 版本的镜像。
使用方法
启动容器需要 MySQL 的支持，默认端口为 80。
$ sudo docker run --name some-wordpress --link some-mysql:mysql -d wordpress

启动 WordPress 容器时可以指定的一些环境参数包括


-e WORDPRESS_DB_USER=... 缺省为 “roo',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:21:01',
                'updated_at' => '2016-10-17 08:21:01',
            ),
            20 => 
            array (
                'id' => 27,
                'user_id' => 1,
                'category_id' => 7,
                'title' => ' Docker 容器',
                'original_content' => '
Docker 利用容器（Container）来运行应用。

容器是从镜像创建的运行实例。它可以被启动、开始、停止、删除。每个容器都是相互隔离的、保证安全的平台。

可以把容器看做是一个简易版的 Linux 环境（包括root用户权限、进程空间、用户空间和网络空间等）和运行在其中的应用程序。

*注：镜像是只读的，容器在启动的时候创建一层可写层作为最上层。
',
                'short_content' => 'Docker 利用容器（Container）来运行应用。
容器是从镜像创建的运行实例。它可以被启动、开始、停止、删除。每个容器都是相互隔离的、保证安全的平台。
可以把容器看做是一个简易版的 Linux 环境（包括root用户权限、进程空间、用户空间和网络空间等）和运行在其中的应用程序。
*注：镜像是只读的，容器在启动的时候创建一层可写层作为最上层。
',
                'comment_count' => 1,
                'favorite_count' => 1,
                'view_count' => 224,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:23:47',
                'updated_at' => '2016-10-19 06:20:25',
            ),
            21 => 
            array (
                'id' => 28,
                'user_id' => 1,
                'category_id' => 7,
                'title' => ' Docker 镜像',
                'original_content' => '
Docker 镜像（Image）就是一个只读的模板。

例如：一个镜像可以包含一个完整的 ubuntu 操作系统环境，里面仅安装了 Apache 或用户需要的其它应用程序。

镜像可以用来创建 Docker 容器。

Docker 提供了一个很简单的机制来创建镜像或者更新现有的镜像，用户甚至可以直接从其他人那里下载一个已经做好的镜像来直接使用。
',
                'short_content' => 'Docker 镜像（Image）就是一个只读的模板。
例如：一个镜像可以包含一个完整的 ubuntu 操作系统环境，里面仅安装了 Apache 或用户需要的其它应用程序。
镜像可以用来创建 Docker 容器。
Docker 提供了一个很简单的机制来创建镜像或者更新现有的镜像，用户甚至可以直接从其他人那里下载一个已经做好的镜像来直接使用。
',
                'comment_count' => 0,
                'favorite_count' => 1,
                'view_count' => 17,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:23:47',
                'updated_at' => '2016-10-19 02:12:28',
            ),
            22 => 
            array (
                'id' => 29,
                'user_id' => 1,
                'category_id' => 7,
                'title' => ' Docker 仓库',
                'original_content' => '

仓库（Repository）是集中存放镜像文件的场所。有时候会把仓库和仓库注册服务器（Registry）混为一谈，并不严格区分。实际上，仓库注册服务器上往往存放着多个仓库，每个仓库中又包含了多个镜像，每个镜像有不同的标签（tag）。

仓库分为公开仓库（Public）和私有仓库（Private）两种形式。

最大的公开仓库是 [Docker Hub](https://hub.docker.com)，存放了数量庞大的镜像供用户下载。

国内的公开仓库包括 [时速云](https://hub.tenxcloud.com/) 、[网易云](https://c.163.com/hub) 等，可以提供大陆用户更稳定快速的访问。

当然，用户也可以在本地网络内创建一个私有仓库（参考本文“私有仓库”部分）。

当用户创建了自己的镜像之后就可以使用 `push` 命令将它上传到公有或者私有仓库，这样下次在另外一台机器上使用这个镜像时候，只需要从仓库上 `pull` 下来就可以了。

*注：Docker 仓库的概念跟 [Git](http://git-scm.com) 类似，注册服务器可以理解为 GitHub 这样的托管服务。
',
                'short_content' => '仓库（Repository）是集中存放镜像文件的场所。有时候会把仓库和仓库注册服务器（Registry）混为一谈，并不严格区分。实际上，仓库注册服务器上往往存放着多个仓库，每个仓库中又包含了多个镜像，每个镜像有不同的标签（tag）。
仓库分为公开仓库（Public）和私有仓库（Private）两种形式。
最大的公开仓库是 Docker Hub，存放了数量庞大的镜像供用户下载。
国内的公开仓库包括 时速云 、网易云 等，可以提供大陆用户更稳定快速的访问。
当然，用户也可以在本地网络内创建一个私有仓库（参考本',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 1,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:23:47',
                'updated_at' => '2016-10-17 08:36:23',
            ),
            23 => 
            array (
                'id' => 30,
                'user_id' => 1,
                'category_id' => 7,
                'title' => ' 多台物理主机之间的容器互联（暴露容器到真实网络中）',
                'original_content' => '
Docker 默认的桥接网卡是 docker0。它只会在本机桥接所有的容器网卡，举例来说容器的虚拟网卡在主机上看一般叫做 veth***  而 Docker 只是把所有这些网卡桥接在一起，如下：
```
[root@opnvz ~]# brctl show
bridge name     bridge id               STP enabled     interfaces
docker0         8000.56847afe9799       no              veth0889
veth3c7b
veth4061
```
在容器中看到的地址一般是像下面这样的地址：
```
root@ac6474aeb31d:~# ip a
1: lo: <LOOPBACK,UP,LOWER_UP> mtu 1500 qdisc noqueue state UNKNOWN group default
link/loopback 00:00:00:00:00:00 brd 00:00:00:00:00:00
inet 127.0.0.1/8 scope host lo
valid_lft forever preferred_lft forever
inet6 ::1/128 scope host
valid_lft forever preferred_lft forever
11: eth0: <BROADCAST,UP,LOWER_UP> mtu 1500 qdisc pfifo_fast state UP group default qlen 1000
link/ether 4a:7d:68:da:09:cf brd ff:ff:ff:ff:ff:ff
inet 172.17.0.3/16 scope global eth0
valid_lft forever preferred_lft forever
inet6 fe80::487d:68ff:feda:9cf/64 scope link
valid_lft forever preferred_lft forever
```
这样就可以把这个网络看成是一个私有的网络，通过 nat 连接外网，如果要让外网连接到容器中，就需要做端口映射，即 -p 参数。

如果在企业内部应用，或者做多个物理主机的集群，可能需要将多个物理主机的容器组到一个物理网络中来，那么就需要将这个网桥桥接到我们指定的网卡上。

### 拓扑图
主机 A 和主机 B 的网卡一都连着物理交换机的同一个 vlan 101,这样网桥一和网桥三就相当于在同一个物理网络中了，而容器一、容器三、容器四也在同一物理网络中了，他们之间可以相互通信，而且可以跟同一 vlan 中的其他物理机器互联。
![物理拓扑图](../_images/container_connect_topology.png)

### ubuntu 示例
下面以 ubuntu 为例创建多个主机的容器联网:
创建自己的网桥,编辑 /etc/network/interface 文件
```
auto br0
iface br0 inet static
address 192.168.7.31
netmask 255.255.240.0
gateway 192.168.7.254
bridge_ports em1
bridge_stp off
dns-nameservers 8.8.8.8 192.168.6.1
```
将 Docker 的默认网桥绑定到这个新建的 br0 上面，这样就将这台机器上容器绑定到 em1 这个网卡所对应的物理网络上了。

ubuntu 修改 /etc/default/docker 文件，添加最后一行内容

```
# Docker Upstart and SysVinit configuration file
# Customize location of Docker binary (especially for development testing).
#DOCKER="/usr/local/bin/docker"
# Use DOCKER_OPTS to modify the daemon startup options.
#DOCKER_OPTS="--dns 8.8.8.8 --dns 8.8.4.4"

# If you need Docker to use an HTTP proxy, it can also be specified here.
#export http_proxy="http://127.0.0.1:3128/"

# This is also a handy place to tweak where Docker\'s temporary files go.
#export TMPDIR="/mnt/bigdrive/docker-tmp"

DOCKER_OPTS="-b=br0"
```

在启动 Docker 的时候 使用 -b 参数 将容器绑定到物理网络上。重启 Docker 服务后，再进入容器可以看到它已经绑定到你的物理网络上了。

```
root@ubuntudocker:~# docker ps
CONTAINER ID        IMAGE               COMMAND             CREATED             STATUS              PORTS                        NAMES
58b043aa05eb        desk_hz:v1          "/startup.sh"       5 days ago          Up 2 seconds        5900/tcp, 6080/tcp, 22/tcp   yanlx
root@ubuntudocker:~# brctl show
bridge name     bridge id               STP enabled     interfaces
br0             8000.7e6e617c8d53       no              em1
vethe6e5
```
这样就直接把容器暴露到物理网络上了，多台物理主机的容器也可以相互联网了。需要注意的是，这样就需要自己来保证容器的网络安全了。
',
                'short_content' => 'Docker 默认的桥接网卡是 docker0。它只会在本机桥接所有的容器网卡，举例来说容器的虚拟网卡在主机上看一般叫做 veth***  而 Docker 只是把所有这些网卡桥接在一起，如下：
[root@opnvz ~]# brctl show
bridge name     bridge id               STP enabled     interfaces
docker0         8000.56847afe9799       no              veth088',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 4,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:23:47',
                'updated_at' => '2016-10-18 09:21:48',
            ),
            24 => 
            array (
                'id' => 31,
                'user_id' => 1,
                'category_id' => 7,
                'title' => ' 标准化开发测试和生产环境',
                'original_content' => '
对于大部分企业来说，搭建 PaaS 既没有那个精力，也没那个必要，用 Docker 做个人的 sandbox 用处又小了点。

可以用 Docker 来标准化开发、测试、生产环境。


![企业应用结构](../_images/enterprise_usage.png)


Docker 占用资源小，在一台 E5 128 G 内存的服务器上部署 100 个容器都绰绰有余，可以单独抽一个容器或者直接在宿主物理主机上部署 samba，利用 samba 的 home 分享方案将每个用户的 home 目录映射到开发中心和测试部门的 Windows 机器上。

针对某个项目组，由架构师搭建好一个标准的容器环境供项目组和测试部门使用，每个开发工程师可以拥有自己单独的容器，通过 `docker run -v` 将用户的 home 目录映射到容器中。需要提交测试时，只需要将代码移交给测试部门，然后分配一个容器使用 `-v` 加载测试部门的 home 目录启动即可。这样，在公司内部的开发、测试基本就统一了，不会出现开发部门提交的代码，测试部门部署不了的问题。

测试部门发布测试通过的报告后，架构师再一次检测容器环境，就可以直接交由部署工程师将代码和容器分别部署到生产环境中了。这种方式的部署横向性能的扩展性也极好。
',
                'short_content' => '对于大部分企业来说，搭建 PaaS 既没有那个精力，也没那个必要，用 Docker 做个人的 sandbox 用处又小了点。
可以用 Docker 来标准化开发、测试、生产环境。

Docker 占用资源小，在一台 E5 128 G 内存的服务器上部署 100 个容器都绰绰有余，可以单独抽一个容器或者直接在宿主物理主机上部署 samba，利用 samba 的 home 分享方案将每个用户的 home 目录映射到开发中心和测试部门的 Windows 机器上。
针对某个项目组，由架构师搭建好一个标准的容器环境',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:23:47',
                'updated_at' => '2016-10-17 08:23:47',
            ),
            25 => 
            array (
                'id' => 32,
                'user_id' => 1,
                'category_id' => 7,
                'title' => ' 使用 Supervisor 来管理进程',
                'original_content' => '
Docker 容器在启动的时候开启单个进程，比如，一个 ssh 或者 apache 的 daemon 服务。但我们经常需要在一个机器上开启多个服务，这可以有很多方法，最简单的就是把多个启动命令放到一个启动脚本里面，启动的时候直接启动这个脚本，另外就是安装进程管理工具。

本小节将使用进程管理工具 supervisor 来管理容器中的多个进程。使用 Supervisor 可以更好的控制、管理、重启我们希望运行的进程。在这里我们演示一下如何同时使用 ssh 和 apache 服务。

### 配置
首先创建一个 Dockerfile，内容和各部分的解释如下。
```
FROM ubuntu:13.04
MAINTAINER examples@docker.com
RUN echo "deb http://archive.ubuntu.com/ubuntu precise main universe" > /etc/apt/sources.list
RUN apt-get update
RUN apt-get upgrade -y
```

### 安装 ssh、apache 和 supervisor
```
RUN apt-get install -y --force-yes  perl-base=5.14.2-6ubuntu2
RUN apt-get install -y apache2.2-common
RUN apt-get install -y openssh-server apache2 supervisor
RUN mkdir -p /var/run/sshd
RUN mkdir -p /var/log/supervisor
```

这里安装 3 个软件，还创建了 2 个 ssh 和 supervisor 服务正常运行所需要的目录。
```
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf
```
添加 supervisord 的配置文件，并复制配置文件到对应目录下面。

```
EXPOSE 22 80
CMD ["/usr/bin/supervisord"]
```
这里我们映射了 22 和 80 端口，使用 supervisord 的可执行路径启动服务。


### supervisor配置文件内容
```
[supervisord]
nodaemon=true
[program:sshd]
command=/usr/sbin/sshd -D

[program:apache2]
command=/bin/bash -c "source /etc/apache2/envvars && exec /usr/sbin/apache2 -DFOREGROUND"
```
配置文件包含目录和进程，第一段 supervsord 配置软件本身，使用 nodaemon 参数来运行。第二段包含要控制的 2 个服务。每一段包含一个服务的目录和启动这个服务的命令。

### 使用方法
创建镜像。
```
$ sudo docker build -t test/supervisord .
```
启动 supervisor 容器。
```
$ sudo docker run -p 22 -p 80 -t -i test/supervisord
2013-11-25 18:53:22,312 CRIT Supervisor running as root (no user in config file)
2013-11-25 18:53:22,312 WARN Included extra file "/etc/supervisor/conf.d/supervisord.conf" during parsing
2013-11-25 18:53:22,342 INFO supervisord started with pid 1
2013-11-25 18:53:23,346 INFO spawned: \'sshd\' with pid 6
2013-11-25 18:53:23,349 INFO spawned: \'apache2\' with pid 7
```
使用 `docker run` 来启动我们创建的容器。使用多个 `-p` 来映射多个端口，这样我们就能同时访问 ssh 和 apache 服务了。

可以使用这个方法创建一个只有 ssh 服务的基础镜像，之后创建镜像可以使用这个镜像为基础来创建
',
                'short_content' => 'Docker 容器在启动的时候开启单个进程，比如，一个 ssh 或者 apache 的 daemon 服务。但我们经常需要在一个机器上开启多个服务，这可以有很多方法，最简单的就是把多个启动命令放到一个启动脚本里面，启动的时候直接启动这个脚本，另外就是安装进程管理工具。
本小节将使用进程管理工具 supervisor 来管理容器中的多个进程。使用 Supervisor 可以更好的控制、管理、重启我们希望运行的进程。在这里我们演示一下如何同时使用 ssh 和 apache 服务。
配置
首先创建一个 Dock',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 1,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:23:47',
                'updated_at' => '2016-10-17 10:28:09',
            ),
            26 => 
            array (
                'id' => 33,
                'user_id' => 1,
                'category_id' => 7,
                'title' => ' 创建 tomcat/weblogic 集群',
                'original_content' => '### 安装 tomcat 镜像
准备好需要的 jdk、tomcat 等软件放到 home 目录下面，启动一个容器
```
docker run -t -i -v /home:/opt/data  --name mk_tomcat ubuntu /bin/bash
```
这条命令挂载本地 home 目录到容器的 /opt/data 目录，容器内目录若不存在，则会自动创建。接下来就是 tomcat 的基本配置，jdk 环境变量设置好之后，将 tomcat 程序放到 /opt/apache-tomcat 下面
编辑 /etc/supervisor/conf.d/supervisor.conf 文件，添加 tomcat 项
```
[supervisord]
nodaemon=true

[program:tomcat]
command=/opt/apache-tomcat/bin/startup.sh

[program:sshd]
command=/usr/sbin/sshd -D
```

```
docker commit  ac6474aeb31d  tomcat
```

新建 tomcat 文件夹，新建 Dockerfile。
```
FROM mk_tomcat
EXPOSE  22 8080
CMD ["/usr/bin/supervisord"]
```
根据 Dockerfile 创建镜像。
```
docker build tomcat tomcat
```
### 安装 weblogic 镜像

步骤和 tomcat 基本一致，这里贴一下配置文件
```
supervisor.conf
[supervisord]
nodaemon=true


[program:weblogic]
command=/opt/Middleware/user_projects/domains/base_domain/bin/startWebLogic.sh

[program:sshd]
command=/usr/sbin/sshd -D
dockerfile
FROM weblogic
EXPOSE  22 7001
CMD ["/usr/bin/supervisord"]
```

### tomcat/weblogic 镜像的使用
#### 存储的使用
在启动的时候，使用 `-v` 参数

-v, --volume=[]            Bind mount a volume (e.g. from the host: -v /host:/container, from docker: -v /container)

将本地磁盘映射到容器内部，它在主机和容器之间是实时变化的，所以我们更新程序、上传代码只需要更新物理主机的目录就可以了

#### tomcat 和 weblogic 集群的实现
tomcat 只要开启多个容器即可
```
docker run -d -v -p 204:22 -p 7003:8080 -v /home/data:/opt/data --name tm1 tomcat /usr/bin/supervisord
docker run -d -v -p 205:22 -p 7004:8080 -v /home/data:/opt/data --name tm2 tomcat /usr/bin/supervisord
docker run -d -v -p 206:22 -p 7005:8080 -v /home/data:/opt/data --name tm3 tomcat /usr/bin/supervisord
```

这里说一下 weblogic 的配置，大家知道 weblogic 有一个域的概念。如果要使用常规的 administrator +node 的方式部署，就需要在 supervisord 中分别写出 administartor server 和 node server 的启动脚本，这样做的优点是：
* 可以使用 weblogic 的集群，同步等概念
* 部署一个集群应用程序，只需要安装一次应用到集群上即可

缺点是：
* Docker 配置复杂了
* 没办法自动扩展集群的计算容量，如需添加节点，需要在 administrator 上先创建节点，然后再配置新的容器 supervisor 启动脚本，然后再启动容器

另外种方法是将所有的程序都安装在 adminiserver 上面，需要扩展的时候，启动多个节点即可，它的优点和缺点和上一种方法恰恰相反。（建议使用这种方式来部署开发和测试环境）
```
docker run -d -v -p 204:22 -p 7001:7001 -v /home/data:/opt/data --name node1 weblogic /usr/bin/supervisord
docker run -d -v -p 205:22 -p 7002:7001 -v /home/data:/opt/data --name node2 weblogic /usr/bin/supervisord
docker run -d -v -p 206:22 -p 7003:7001 -v /home/data:/opt/data --name node3 weblogic /usr/bin/supervisord
```

这样在前端使用 nginx 来做负载均衡就可以完成配置了
',
                'short_content' => '安装 tomcat 镜像
准备好需要的 jdk、tomcat 等软件放到 home 目录下面，启动一个容器
docker run -t -i -v /home:/opt/data  --name mk_tomcat ubuntu /bin/bash

这条命令挂载本地 home 目录到容器的 /opt/data 目录，容器内目录若不存在，则会自动创建。接下来就是 tomcat 的基本配置，jdk 环境变量设置好之后，将 tomcat 程序放到 /opt/apache-tomcat 下面
编辑 /etc/s',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 8,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:23:47',
                'updated_at' => '2016-10-18 10:07:13',
            ),
            27 => 
            array (
                'id' => 34,
                'user_id' => 1,
                'category_id' => 7,
                'title' => ' Compose 命令说明',
                'original_content' => '

大部分命令都可以运行在一个或多个服务上。如果没有特别的说明，命令则应用在项目所有的服务上。

执行 `docker-compose [COMMAND] --help` 查看具体某个命令的使用说明。

基本的使用格式是
```sh
docker-compose [options] [COMMAND] [ARGS...]
```

## 选项

* `--verbose` 输出更多调试信息。
* `--version` 打印版本并退出。
* `-f, --file FILE` 使用特定的 compose 模板文件，默认为 `docker-compose.yml`。
* `-p, --project-name NAME` 指定项目名称，默认使用目录名称。

## 命令

### `build`

构建或重新构建服务。

服务一旦构建后，将会带上一个标记名，例如 web_db。

可以随时在项目目录下运行 `docker-compose build` 来重新构建服务。

### `help`

获得一个命令的帮助。

### `kill`

通过发送 `SIGKILL` 信号来强制停止服务容器。支持通过参数来指定发送的信号，例如
```sh
$ docker-compose kill -s SIGINT
```

### `logs`

查看服务的输出。

### `port`

打印绑定的公共端口。

### `ps`

列出所有容器。

### `pull`

拉取服务镜像。

### `rm`

删除停止的服务容器。

### `run`

在一个服务上执行一个命令。

例如：

```
$ docker-compose run ubuntu ping docker.com
```

将会启动一个 ubuntu 服务，执行 `ping docker.com` 命令。

默认情况下，所有关联的服务将会自动被启动，除非这些服务已经在运行中。

该命令类似启动容器后运行指定的命令，相关卷、链接等等都将会按照期望创建。

两个不同点：
* 给定命令将会覆盖原有的自动运行命令；
* 不会自动创建端口，以避免冲突。

如果不希望自动启动关联的容器，可以使用 `--no-deps` 选项，例如

```
$ docker-compose run --no-deps web python manage.py shell
```

将不会启动 web 容器所关联的其它容器。

### `scale`

设置同一个服务运行的容器个数。

通过 `service=num` 的参数来设置数量。例如：

```
$ docker-compose scale web=2 worker=3
```

### `start`

启动一个已经存在的服务容器。

### `stop`

停止一个已经运行的容器，但不删除它。通过 `docker-compose start` 可以再次启动这些容器。

### `up`

构建，（重新）创建，启动，链接一个服务相关的容器。

链接的服务都将会启动，除非他们已经运行。

默认情况， `docker-compose up` 将会整合所有容器的输出，并且退出时，所有容器将会停止。

如果使用 `docker-compose up -d` ，将会在后台启动并运行所有的容器。

默认情况，如果该服务的容器已经存在， `docker-compose up` 将会停止并尝试重新创建他们（保持使用 `volumes-from` 挂载的卷），以保证 `docker-compose.yml` 的修改生效。如果你不想容器被停止并重新创建，可以使用 `docker-compose up --no-recreate`。如果需要的话，这样将会启动已经停止的容器。

## 环境变量

环境变量可以用来配置 Compose 的行为。

以`DOCKER_`开头的变量和用来配置 Docker 命令行客户端的使用一样。如果使用 boot2docker , `$(boot2docker shellinit)` 将会设置它们为正确的值。

### `COMPOSE_PROJECT_NAME`

设置通过 Compose 启动的每一个容器前添加的项目名称，默认是当前工作目录的名字。

### `COMPOSE_FILE`

设置要使用的 `docker-compose.yml` 的路径。默认路径是当前工作目录。

### `DOCKER_HOST`

设置 Docker daemon 的地址。默认使用 `unix:///var/run/docker.sock`，与 Docker 客户端采用的默认值一致。

### `DOCKER_TLS_VERIFY`

如果设置不为空，则与 Docker daemon 交互通过 TLS 进行。

### `DOCKER_CERT_PATH`

配置 TLS 通信所需要的验证（`ca.pem`、`cert.pem` 和 `key.pem`）文件的路径，默认是 `~/.docker` 。
',
                'short_content' => '大部分命令都可以运行在一个或多个服务上。如果没有特别的说明，命令则应用在项目所有的服务上。
执行 docker-compose [COMMAND] --help 查看具体某个命令的使用说明。
基本的使用格式是
docker-compose [options] [COMMAND] [ARGS...]

选项


--verbose 输出更多调试信息。

--version 打印版本并退出。

-f, --file FILE 使用特定的 compose 模板文件，默认为 docker-compose.yml。',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 1,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:23:47',
                'updated_at' => '2016-10-17 10:28:05',
            ),
            28 => 
            array (
                'id' => 35,
                'user_id' => 1,
                'category_id' => 7,
                'title' => ' 安装',
                'original_content' => '

安装 Compose 之前，要先安装 Docker，在此不再赘述。

### PIP 安装
这种方式最为推荐。

执行命令。
```sh
$ sudo pip install -U docker-compose
```

安装成功后，可以查看 `docker-compose` 命令的用法。
```sh
$ docker-compose -h
Fast, isolated development environments using Docker.

Usage:
docker-compose [options] [COMMAND] [ARGS...]
docker-compose -h|--help

Options:
--verbose                 Show more output
--version                 Print version and exit
-f, --file FILE           Specify an alternate compose file (default: docker-compose.yml)
-p, --project-name NAME   Specify an alternate project name (default: directory name)

Commands:
build     Build or rebuild services
help      Get help on a command
kill      Kill containers
logs      View output from containers
port      Print the public port for a port binding
ps        List containers
pull      Pulls service images
rm        Remove stopped containers
run       Run a one-off command
scale     Set number of containers for a service
start     Start services
stop      Stop services
restart   Restart services
up        Create and start containers
```

之后，可以添加 bash 补全命令。
```sh
$ curl -L https://raw.githubusercontent.com/docker/compose/1.2.0/contrib/completion/bash/docker-compose > /etc/bash_completion.d/docker-compose

```

### 二进制包
发布的二进制包可以在 [https://github.com/docker/compose/releases](https://github.com/docker/compose/releases) 找到。

下载后直接放到执行路径即可。

例如，在常见的 Linux 平台上。

```
$ sudo curl -L https://github.com/docker/compose/releases/download/1.2.0/docker-compose-`uname -s`-`uname -m` > /usr/local/bin/docker-compose
$ sudo chmod a+x /usr/local/bin/docker-compose
```


',
                'short_content' => '安装 Compose 之前，要先安装 Docker，在此不再赘述。
PIP 安装
这种方式最为推荐。
执行命令。
$ sudo pip install -U docker-compose

安装成功后，可以查看 docker-compose 命令的用法。
$ docker-compose -h
Fast, isolated development environments using Docker.

Usage:
docker-compose [options] [COMMAND] [ARGS...',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:23:47',
                'updated_at' => '2016-10-17 08:23:47',
            ),
            29 => 
            array (
                'id' => 36,
                'user_id' => 1,
                'category_id' => 7,
                'title' => ' 简介',
                'original_content' => '
Compose 项目目前在 [Github](https://github.com/docker/compose) 上进行维护，目前最新版本是 1.2.0。

Compose 定位是“defining and running complex applications with Docker”，前身是 Fig，兼容 Fig 的模板文件。

Dockerfile 可以让用户管理一个单独的应用容器；而 Compose 则允许用户在一个模板（YAML 格式）中定义一组相关联的应用容器（被称为一个 `project`，即项目），例如一个 Web 服务容器再加上后端的数据库服务容器等。

![](../_images/docker_compose.jpg)

该项目由 Python 编写，实际上调用了 Docker 提供的 API 来实现。
',
                'short_content' => 'Compose 项目目前在 Github 上进行维护，目前最新版本是 1.2.0。
Compose 定位是“defining and running complex applications with Docker”，前身是 Fig，兼容 Fig 的模板文件。
Dockerfile 可以让用户管理一个单独的应用容器；而 Compose 则允许用户在一个模板（YAML 格式）中定义一组相关联的应用容器（被称为一个 project，即项目），例如一个 Web 服务容器再加上后端的数据库服务容器等。

该项目由',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:23:47',
                'updated_at' => '2016-10-17 08:23:47',
            ),
            30 => 
            array (
                'id' => 37,
                'user_id' => 1,
                'category_id' => 7,
                'title' => ' 使用',
                'original_content' => '

### 术语
首先介绍几个术语。

* 服务（service）：一个应用容器，实际上可以运行多个相同镜像的实例。
* 项目(project)：由一组关联的应用容器组成的一个完整业务单元。

可见，一个项目可以由多个服务（容器）关联而成，Compose 面向项目进行管理。

### 场景
下面，我们创建一个经典的 Web 项目：一个 [Haproxy](http://www.haproxy.org/)，挂载三个 Web 容器。

创建一个 `compose-haproxy-web` 目录，作为项目工作目录，并在其中分别创建两个子目录：`haproxy` 和 `web`。

### Web 子目录

这里用 Python 程序来提供一个简单的 HTTP 服务，打印出访问者的 IP 和 实际的本地 IP。

#### index.py

编写一个 `index.py` 作为服务器文件，代码为
```sh
#!/usr/bin/python
#authors: yeasy.github.com
#date: 2013-07-05

import sys
import BaseHTTPServer
from SimpleHTTPServer import SimpleHTTPRequestHandler
import socket
import fcntl
import struct
import pickle
from datetime import datetime
from collections import OrderedDict

class HandlerClass(SimpleHTTPRequestHandler):
def get_ip_address(self,ifname):
s = socket.socket(socket.AF_INET, socket.SOCK_DGRAM)
return socket.inet_ntoa(fcntl.ioctl(
s.fileno(),
0x8915,  # SIOCGIFADDR
struct.pack(\'256s\', ifname[:15])
)[20:24])
def log_message(self, format, *args):
if len(args) < 3 or "200" not in args[1]:
return
try:
request = pickle.load(open("pickle_data.txt","r"))
except:
request=OrderedDict()
time_now = datetime.now()
ts = time_now.strftime(\'%Y-%m-%d %H:%M:%S\')
server = self.get_ip_address(\'eth0\')
host=self.address_string()
addr_pair = (host,server)
if addr_pair not in request:
request[addr_pair]=[1,ts]
else:
num = request[addr_pair][0]+1
del request[addr_pair]
request[addr_pair]=[num,ts]
file=open("index.html", "w")
file.write("<!DOCTYPE html> <html> <body><center><h1><font color=\\"blue\\" face=\\"Georgia, Arial\\" size=8><em>HA</em></font> Webpage Visit Results</h1></center>");
for pair in request:
if pair[0] == host:
guest = "LOCAL: "+pair[0]
else:
guest = pair[0]
if (time_now-datetime.strptime(request[pair][1],\'%Y-%m-%d %H:%M:%S\')).seconds < 3:
file.write("<p style=\\"font-size:150%\\" >#"+ str(request[pair][1]) +": <font color=\\"red\\">"+str(request[pair][0])+ "</font> requests " + "from &lt<font color=\\"blue\\">"+guest+"</font>&gt to WebServer &lt<font color=\\"blue\\">"+pair[1]+"</font>&gt</p>")
else:
file.write("<p style=\\"font-size:150%\\" >#"+ str(request[pair][1]) +": <font color=\\"maroon\\">"+str(request[pair][0])+ "</font> requests " + "from &lt<font color=\\"navy\\">"+guest+"</font>&gt to WebServer &lt<font color=\\"navy\\">"+pair[1]+"</font>&gt</p>")
file.write("</body> </html>");
file.close()
pickle.dump(request,open("pickle_data.txt","w"))

if __name__ == \'__main__\':
try:
ServerClass  = BaseHTTPServer.HTTPServer
Protocol     = "HTTP/1.0"
addr = len(sys.argv) < 2 and "0.0.0.0" or sys.argv[1]
port = len(sys.argv) < 3 and 80 or int(sys.argv[2])
HandlerClass.protocol_version = Protocol
httpd = ServerClass((addr, port), HandlerClass)
sa = httpd.socket.getsockname()
print "Serving HTTP on", sa[0], "port", sa[1], "..."
httpd.serve_forever()
except:
exit()
```

#### index.html
生成一个临时的 `index.html` 文件，其内容会被 index.py 更新。
```sh
$ touch index.html
```

#### Dockerfile
生成一个 Dockerfile，内容为
```sh
FROM python:2.7
WORKDIR /code
ADD . /code
EXPOSE 80
CMD python index.py
```

### haproxy 目录
在其中生成一个 `haproxy.cfg` 文件，内容为
```sh
global
log 127.0.0.1 local0
log 127.0.0.1 local1 notice

defaults
log global
mode http
option httplog
option dontlognull
timeout connect 5000ms
timeout client 50000ms
timeout server 50000ms

listen stats :70
stats enable
stats uri /

frontend balancer
bind 0.0.0.0:80
mode http
default_backend web_backends

backend web_backends
mode http
option forwardfor
balance roundrobin
server weba weba:80 check
server webb webb:80 check
server webc webc:80 check
option httpchk GET /
http-check expect status 200
```
### docker-compose.yml
编写 docker-compose.yml 文件，这个是 Compose 使用的主模板文件。内容十分简单，指定 3 个 web 容器，以及 1 个 haproxy 容器。

```sh
weba:
build: ./web
expose:
- 80

webb:
build: ./web
expose:
- 80

webc:
build: ./web
expose:
- 80

haproxy:
image: haproxy:latest
volumes:
- ./haproxy:/haproxy-override
- ./haproxy/haproxy.cfg:/usr/local/etc/haproxy/haproxy.cfg:ro
links:
- weba
- webb
- webc
ports:
- "80:80"
- "70:70"
expose:
- "80"
- "70"
```

### 运行 compose 项目
现在 compose-haproxy-web 目录长成下面的样子。
```sh
compose-haproxy-web
├── docker-compose.yml
├── haproxy
│   └── haproxy.cfg
└── web
├── Dockerfile
├── index.html
└── index.py
```
在该目录下执行 `docker-compose up` 命令，会整合输出所有容器的输出。
```
$sudo docker-compose up
Recreating composehaproxyweb_webb_1...
Recreating composehaproxyweb_webc_1...
Recreating composehaproxyweb_weba_1...
Recreating composehaproxyweb_haproxy_1...
Attaching to composehaproxyweb_webb_1, composehaproxyweb_webc_1, composehaproxyweb_weba_1, composehaproxyweb_haproxy_1
```

此时访问本地的 80 端口，会经过 haproxy 自动转发到后端的某个 web 容器上，刷新页面，可以观察到访问的容器地址的变化。

访问本地 70 端口，可以查看到 haproxy 的统计信息。

当然，还可以使用 consul、etcd 等实现服务发现，这样就可以避免手动指定后端的 web 容器了，更为灵活。
',
                'short_content' => '术语
首先介绍几个术语。

服务（service）：一个应用容器，实际上可以运行多个相同镜像的实例。
项目(project)：由一组关联的应用容器组成的一个完整业务单元。

可见，一个项目可以由多个服务（容器）关联而成，Compose 面向项目进行管理。
场景
下面，我们创建一个经典的 Web 项目：一个 Haproxy，挂载三个 Web 容器。
创建一个 compose-haproxy-web 目录，作为项目工作目录，并在其中分别创建两个子目录：haproxy 和 web。
Web 子目录
这里用 Py',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 1,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:23:47',
                'updated_at' => '2016-10-18 01:23:34',
            ),
            31 => 
            array (
                'id' => 38,
                'user_id' => 1,
                'category_id' => 7,
                'title' => ' YAML 模板文件',
                'original_content' => '

默认的模板文件是 `docker-compose.yml`，其中定义的每个服务都必须通过 `image` 指令指定镜像或 `build` 指令（需要 Dockerfile）来自动构建。

其它大部分指令都跟 `docker run` 中的类似。

如果使用 `build` 指令，在 `Dockerfile` 中设置的选项(例如：`CMD`, `EXPOSE`, `VOLUME`, `ENV` 等) 将会自动被获取，无需在 `docker-compose.yml` 中再次设置。

### `image`

指定为镜像名称或镜像 ID。如果镜像在本地不存在，`Compose` 将会尝试拉去这个镜像。

例如：
```sh
image: ubuntu
image: orchardup/postgresql
image: a4bc65fd
```

### `build`

指定 `Dockerfile` 所在文件夹的路径。 `Compose` 将会利用它自动构建这个镜像，然后使用这个镜像。

```
build: /path/to/build/dir
```

### `command`

覆盖容器启动后默认执行的命令。

```sh
command: bundle exec thin -p 3000
```

### `links`

链接到其它服务中的容器。使用服务名称（同时作为别名）或服务名称：服务别名 `（SERVICE:ALIAS）` 格式都可以。

```sh
links:
- db
- db:database
- redis
```

使用的别名将会自动在服务容器中的 `/etc/hosts` 里创建。例如：

```sh
172.17.2.186  db
172.17.2.186  database
172.17.2.187  redis
```

相应的环境变量也将被创建。

### `external_links`
链接到 docker-compose.yml 外部的容器，甚至 并非 `Compose` 管理的容器。参数格式跟 `links` 类似。

```
external_links:
- redis_1
- project_db_1:mysql
- project_db_1:postgresql
```


### `ports`

暴露端口信息。

使用宿主：容器 `（HOST:CONTAINER）`格式或者仅仅指定容器的端口（宿主将会随机选择端口）都可以。

```
ports:
- "3000"
- "8000:8000"
- "49100:22"
- "127.0.0.1:8001:8001"
```

*注：当使用 `HOST:CONTAINER` 格式来映射端口时，如果你使用的容器端口小于 60 你可能会得到错误得结果，因为 `YAML` 将会解析 `xx:yy` 这种数字格式为 60 进制。所以建议采用字符串格式。*


### `expose`

暴露端口，但不映射到宿主机，只被连接的服务访问。

仅可以指定内部端口为参数

```sh
expose:
- "3000"
- "8000"
```

### `volumes`

卷挂载路径设置。可以设置宿主机路径 （`HOST:CONTAINER`） 或加上访问模式 （`HOST:CONTAINER:ro`）。

```sh
volumes:
- /var/lib/mysql
- cache/:/tmp/cache
- ~/configs:/etc/configs/:ro
```

### `volumes_from`

从另一个服务或容器挂载它的所有卷。

```sh
volumes_from:
- service_name
- container_name
```

### `environment`

设置环境变量。你可以使用数组或字典两种格式。

只给定名称的变量会自动获取它在 Compose 主机上的值，可以用来防止泄露不必要的数据。

```
environment:
RACK_ENV: development
SESSION_SECRET:

environment:
- RACK_ENV=development
- SESSION_SECRET
```

### `env_file`
从文件中获取环境变量，可以为单独的文件路径或列表。

如果通过 `docker-compose -f FILE` 指定了模板文件，则 `env_file` 中路径会基于模板文件路径。

如果有变量名称与 `environment` 指令冲突，则以后者为准。

```sh
env_file: .env

env_file:
- ./common.env
- ./apps/web.env
- /opt/secrets.env
```

环境变量文件中每一行必须符合格式，支持 `#` 开头的注释行。

```sh
# common.env: Set Rails/Rack environment
RACK_ENV=development
```

### `extends`
基于已有的服务进行扩展。例如我们已经有了一个 webapp 服务，模板文件为 `common.yml`。
```sh
# common.yml
webapp:
build: ./webapp
environment:
- DEBUG=false
- SEND_EMAILS=false
```

编写一个新的 `development.yml` 文件，使用 `common.yml` 中的 webapp 服务进行扩展。
```sh
# development.yml
web:
extends:
file: common.yml
service: webapp
ports:
- "8000:8000"
links:
- db
environment:
- DEBUG=true
db:
image: postgres
```
后者会自动继承 common.yml 中的 webapp 服务及相关环节变量。


### `net`

设置网络模式。使用和 `docker client` 的 `--net` 参数一样的值。

```sh
net: "bridge"
net: "none"
net: "container:[name or id]"
net: "host"
```

### `pid`
跟主机系统共享进程命名空间。打开该选项的容器可以相互通过进程 ID 来访问和操作。

```sh
pid: "host"
```

### `dns`

配置 DNS 服务器。可以是一个值，也可以是一个列表。

```sh
dns: 8.8.8.8
dns:
- 8.8.8.8
- 9.9.9.9
```

### `cap_add, cap_drop`
添加或放弃容器的 Linux 能力（Capabiliity）。
```sh
cap_add:
- ALL

cap_drop:
- NET_ADMIN
- SYS_ADMIN
```

### `dns_search`

配置 DNS 搜索域。可以是一个值，也可以是一个列表。

```sh
dns_search: example.com
dns_search:
- domain1.example.com
- domain2.example.com
```

### `working_dir, entrypoint, user, hostname, domainname, mem_limit, privileged, restart, stdin_open, tty, cpu_shares`

这些都是和 `docker run` 支持的选项类似。

```
cpu_shares: 73

working_dir: /code
entrypoint: /code/entrypoint.sh
user: postgresql

hostname: foo
domainname: foo.com

mem_limit: 1000000000
privileged: true

restart: always

stdin_open: true
tty: true
```
',
                'short_content' => '默认的模板文件是 docker-compose.yml，其中定义的每个服务都必须通过 image 指令指定镜像或 build 指令（需要 Dockerfile）来自动构建。
其它大部分指令都跟 docker run 中的类似。
如果使用 build 指令，在 Dockerfile 中设置的选项(例如：CMD, EXPOSE, VOLUME, ENV 等) 将会自动被获取，无需在 docker-compose.yml 中再次设置。
image
指定为镜像名称或镜像 ID。如果镜像在本地不存在，Compose',
                'comment_count' => 0,
                'favorite_count' => 0,
                'view_count' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 08:23:47',
                'updated_at' => '2016-10-17 08:23:47',
            ),
            32 => 
            array (
                'id' => 39,
                'user_id' => 1,
                'category_id' => 7,
            'title' => '后台(background)运行',
                'original_content' => '

更多的时候，需要让 Docker在后台运行而不是直接把执行命令的结果输出在当前宿主机下。此时，可以通过添加 `-d` 参数来实现。

下面举两个例子来说明一下。

如果不使用 `-d` 参数运行容器。
```
$ sudo docker run ubuntu:14.04 /bin/sh -c "while true; do echo hello world; sleep 1; done"
hello world
hello world
hello world
hello world
```
容器会把输出的结果(STDOUT)打印到宿主机上面

如果使用了 `-d` 参数运行容器。
```
$ sudo docker run -d ubuntu:14.04 /bin/sh -c "while true; do echo hello world; sleep 1; done"
77b2dc01fe0f3f1265df143181e7b9af5e05279a884f4776ee75350ea9d8017a
```
此时容器会在后台运行并不会把输出的结果(STDOUT)打印到宿主机上面(输出结果可以用docker logs 查看)。

**注：** 容器是否会长久运行，是和docker run指定的命令有关，和 `-d` 参数无关。

使用 `-d` 参数启动后会返回一个唯一的 id，也可以通过 `docker ps` 命令来查看容器信息。
```
$ sudo docker ps
CONTAINER ID  IMAGE         COMMAND               CREATED        STATUS       PORTS NAMES
77b2dc01fe0f  ubuntu:14.04  /bin/sh -c \'while tr  2 minutes ago  Up 1 minute        agitated_wright
```
要获取容器的输出信息，可以通过 `docker logs` 命令。
```
$ sudo docker logs [container ID or NAMES]
hello world
hello world
hello world
. . .
```
',
                'short_content' => '更多的时候，需要让 Docker在后台运行而不是直接把执行命令的结果输出在当前宿主机下。此时，可以通过添加 -d 参数来实现。
下面举两个例子来说明一下。
如果不使用 -d 参数运行容器。
$ sudo docker run ubuntu:14.04 /bin/sh -c &quot;while true; do echo hello world; sleep 1; done&quot;
hello world
hello world
hello world
hello world

容器会把输出的结果(',
                    'comment_count' => 0,
                    'favorite_count' => 0,
                    'view_count' => 0,
                    'deleted_at' => NULL,
                    'created_at' => '2016-10-17 08:23:47',
                    'updated_at' => '2016-10-17 08:23:47',
                ),
                33 => 
                array (
                    'id' => 40,
                    'user_id' => 1,
                    'category_id' => 7,
                    'title' => ' 进入容器',
                    'original_content' => '
在使用 `-d` 参数时，容器启动后会进入后台。
某些时候需要进入容器进行操作，有很多种方法，包括使用 `docker attach` 命令或 `nsenter` 工具等。
### attach 命令
`docker attach` 是Docker自带的命令。下面示例如何使用该命令。
```
$ sudo docker run -idt ubuntu
243c32535da7d142fb0e6df616a3c3ada0b8ab417937c853a9e1c251f499f550
$ sudo docker ps
CONTAINER ID        IMAGE               COMMAND             CREATED             STATUS              PORTS               NAMES
243c32535da7        ubuntu:latest       "/bin/bash"         18 seconds ago      Up 17 seconds                           nostalgic_hypatia
$sudo docker attach nostalgic_hypatia
root@243c32535da7:/#
```
但是使用 `attach` 命令有时候并不方便。当多个窗口同时 attach 到同一个容器的时候，所有窗口都会同步显示。当某个窗口因命令阻塞时,其他窗口也无法执行操作了。

### nsenter 命令
#### 安装
`nsenter` 工具在 util-linux 包2.23版本后包含。
如果系统中 util-linux 包没有该命令，可以按照下面的方法从源码安装。
```
$ cd /tmp; curl https://www.kernel.org/pub/linux/utils/util-linux/v2.24/util-linux-2.24.tar.gz | tar -zxf-; cd util-linux-2.24;
$ ./configure --without-ncurses
$ make nsenter && sudo cp nsenter /usr/local/bin
```

#### 使用
`nsenter` 可以访问另一个进程的命名空间。nsenter 要正常工作需要有 root 权限。
很不幸，Ubuntu 14.04 仍然使用的是 util-linux 2.20。安装最新版本的 util-linux（2.24）版，请按照以下步骤：
```
$ wget https://www.kernel.org/pub/linux/utils/util-linux/v2.24/util-linux-2.24.tar.gz; tar xzvf util-linux-2.24.tar.gz
$ cd util-linux-2.24
$ ./configure --without-ncurses && make nsenter
$ sudo cp nsenter /usr/local/bin
```
为了连接到容器，你还需要找到容器的第一个进程的 PID，可以通过下面的命令获取。
```
PID=$(docker inspect --format "{{ .State.Pid }}" <container>)
```
通过这个 PID，就可以连接到这个容器：
```
$ nsenter --target $PID --mount --uts --ipc --net --pid
```
下面给出一个完整的例子。
```
$ sudo docker run -idt ubuntu
243c32535da7d142fb0e6df616a3c3ada0b8ab417937c853a9e1c251f499f550
$ sudo docker ps
CONTAINER ID        IMAGE               COMMAND             CREATED             STATUS              PORTS               NAMES
243c32535da7        ubuntu:latest       "/bin/bash"         18 seconds ago      Up 17 seconds                           nostalgic_hypatia
$ PID=$(docker-pid 243c32535da7)
10981
$ sudo nsenter --target 10981 --mount --uts --ipc --net --pid
root@243c32535da7:/#
```
更简单的，建议大家下载
[.bashrc_docker](https://github.com/yeasy/docker_practice/raw/master/_local/.bashrc_docker)，并将内容放到 .bashrc 中。
```
$ wget -P ~ https://github.com/yeasy/docker_practice/raw/master/_local/.bashrc_docker;
$ echo "[ -f ~/.bashrc_docker ] && . ~/.bashrc_docker" >> ~/.bashrc; source ~/.bashrc
```
这个文件中定义了很多方便使用 Docker 的命令，例如 `docker-pid` 可以获取某个容器的 PID；而 `docker-enter` 可以进入容器或直接在容器内执行命令。
```
$ echo $(docker-pid <container>)
$ docker-enter <container> ls
```
',
                    'short_content' => '在使用 -d 参数时，容器启动后会进入后台。
某些时候需要进入容器进行操作，有很多种方法，包括使用 docker attach 命令或 nsenter 工具等。
attach 命令
docker attach 是Docker自带的命令。下面示例如何使用该命令。
$ sudo docker run -idt ubuntu
243c32535da7d142fb0e6df616a3c3ada0b8ab417937c853a9e1c251f499f550
$ sudo docker ps
CONTAINER ID',
                    'comment_count' => 0,
                    'favorite_count' => 0,
                    'view_count' => 0,
                    'deleted_at' => NULL,
                    'created_at' => '2016-10-17 08:23:47',
                    'updated_at' => '2016-10-17 08:23:47',
                ),
                34 => 
                array (
                    'id' => 41,
                    'user_id' => 1,
                    'category_id' => 7,
                    'title' => '导出和导入容器',
                    'original_content' => '

###导出容器
如果要导出本地某个容器，可以使用 `docker export` 命令。
```
$ sudo docker ps -a
CONTAINER ID        IMAGE               COMMAND             CREATED             STATUS                    PORTS               NAMES
7691a814370e        ubuntu:14.04        "/bin/bash"         36 hours ago        Exited (0) 21 hours ago                       test
$ sudo docker export 7691a814370e > ubuntu.tar
```
这样将导出容器快照到本地文件。

###导入容器快照
可以使用 `docker import` 从容器快照文件中再导入为镜像，例如
```
$ cat ubuntu.tar | sudo docker import - test/ubuntu:v1.0
$ sudo docker images
REPOSITORY          TAG                 IMAGE ID            CREATED              VIRTUAL SIZE
test/ubuntu         v1.0                9d37a6082e97        About a minute ago   171.3 MB
```
此外，也可以通过指定 URL 或者某个目录来导入，例如
```
$sudo docker import http://example.com/exampleimage.tgz example/imagerepo
```

*注：用户既可以使用 `docker load` 来导入镜像存储文件到本地镜像库，也可以使用 `docker import` 来导入一个容器快照到本地镜像库。这两者的区别在于容器快照文件将丢弃所有的历史记录和元数据信息（即仅保存容器当时的快照状态），而镜像存储文件将保存完整记录，体积也要大。此外，从容器快照文件导入时可以重新指定标签等元数据信息。


',
                    'short_content' => '###导出容器
如果要导出本地某个容器，可以使用 docker export 命令。
$ sudo docker ps -a
CONTAINER ID        IMAGE               COMMAND             CREATED             STATUS                    PORTS               NAMES
7691a814370e        ubuntu:14.04        &quot;/bin/bash&quot',
                    'comment_count' => 0,
                    'favorite_count' => 0,
                    'view_count' => 0,
                    'deleted_at' => NULL,
                    'created_at' => '2016-10-17 08:23:47',
                    'updated_at' => '2016-10-17 08:23:47',
                ),
                35 => 
                array (
                    'id' => 42,
                    'user_id' => 1,
                    'category_id' => 7,
                    'title' => '删除容器',
                    'original_content' => '
可以使用 `docker rm` 来删除一个处于终止状态的容器。
例如
```
$sudo docker rm  trusting_newton
trusting_newton
```
如果要删除一个运行中的容器，可以添加 `-f` 参数。Docker 会发送 `SIGKILL` 信号给容器。


##清理所有处于终止状态的容器
用 `docker ps -a` 命令可以查看所有已经创建的包括终止状态的容器，如果数量太多要一个个删除可能会很麻烦，用 `docker rm $(docker ps -a -q)` 可以全部清理掉。

*注意：这个命令其实会试图删除所有的包括还在运行中的容器，不过就像上面提过的 `docker rm` 默认并不会删除运行中的容器。',
                    'short_content' => '可以使用 docker rm 来删除一个处于终止状态的容器。
例如
$sudo docker rm  trusting_newton
trusting_newton

如果要删除一个运行中的容器，可以添加 -f 参数。Docker 会发送 SIGKILL 信号给容器。
##清理所有处于终止状态的容器
用 docker ps -a 命令可以查看所有已经创建的包括终止状态的容器，如果数量太多要一个个删除可能会很麻烦，用 docker rm $(docker ps -a -q) 可以全部清理掉。
*注意：这个命',
                    'comment_count' => 0,
                    'favorite_count' => 0,
                    'view_count' => 0,
                    'deleted_at' => NULL,
                    'created_at' => '2016-10-17 08:23:47',
                    'updated_at' => '2016-10-17 08:23:47',
                ),
                36 => 
                array (
                    'id' => 43,
                    'user_id' => 1,
                    'category_id' => 7,
                    'title' => '启动容器',
                    'original_content' => '
启动容器有两种方式，一种是基于镜像新建一个容器并启动，另外一个是将在终止状态（stopped）的容器重新启动。

因为 Docker 的容器实在太轻量级了，很多时候用户都是随时删除和新创建容器。

###新建并启动
所需要的命令主要为 `docker run`。

例如，下面的命令输出一个 “Hello World”，之后终止容器。
```
$ sudo docker run ubuntu:14.04 /bin/echo \'Hello world\'
Hello world
```
这跟在本地直接执行 `/bin/echo \'hello world\'` 几乎感觉不出任何区别。

下面的命令则启动一个 bash 终端，允许用户进行交互。
```
$ sudo docker run -t -i ubuntu:14.04 /bin/bash
root@af8bae53bdd3:/#
```
其中，`-t` 选项让Docker分配一个伪终端（pseudo-tty）并绑定到容器的标准输入上， `-i` 则让容器的标准输入保持打开。

在交互模式下，用户可以通过所创建的终端来输入命令，例如
```
root@af8bae53bdd3:/# pwd
/
root@af8bae53bdd3:/# ls
bin boot dev etc home lib lib64 media mnt opt proc root run sbin srv sys tmp usr var
```

当利用 `docker run` 来创建容器时，Docker 在后台运行的标准操作包括：

* 检查本地是否存在指定的镜像，不存在就从公有仓库下载
* 利用镜像创建并启动一个容器
* 分配一个文件系统，并在只读的镜像层外面挂载一层可读写层
* 从宿主主机配置的网桥接口中桥接一个虚拟接口到容器中去
* 从地址池配置一个 ip 地址给容器
* 执行用户指定的应用程序
* 执行完毕后容器被终止

###启动已终止容器
可以利用 `docker start` 命令，直接将一个已经终止的容器启动运行。

容器的核心为所执行的应用程序，所需要的资源都是应用程序运行所必需的。除此之外，并没有其它的资源。可以在伪终端中利用 `ps` 或 `top` 来查看进程信息。
```
root@ba267838cc1b:/# ps
PID TTY          TIME CMD
1 ?        00:00:00 bash
11 ?        00:00:00 ps
```
可见，容器中仅运行了指定的 bash 应用。这种特点使得 Docker 对资源的利用率极高，是货真价实的轻量级虚拟化。
',
                    'short_content' => '启动容器有两种方式，一种是基于镜像新建一个容器并启动，另外一个是将在终止状态（stopped）的容器重新启动。
因为 Docker 的容器实在太轻量级了，很多时候用户都是随时删除和新创建容器。
###新建并启动
所需要的命令主要为 docker run。
例如，下面的命令输出一个 “Hello World”，之后终止容器。
$ sudo docker run ubuntu:14.04 /bin/echo \'Hello world\'
Hello world

这跟在本地直接执行 /bin/echo \'hel',
                    'comment_count' => 0,
                    'favorite_count' => 0,
                    'view_count' => 0,
                    'deleted_at' => NULL,
                    'created_at' => '2016-10-17 08:23:47',
                    'updated_at' => '2016-10-17 08:23:47',
                ),
                37 => 
                array (
                    'id' => 44,
                    'user_id' => 1,
                    'category_id' => 7,
                    'title' => '终止容器',
                    'original_content' => '
可以使用 `docker stop` 来终止一个运行中的容器。

此外，当Docker容器中指定的应用终结时，容器也自动终止。
例如对于上一章节中只启动了一个终端的容器，用户通过 `exit` 命令或 `Ctrl+d` 来退出终端时，所创建的容器立刻终止。

终止状态的容器可以用 `docker ps -a` 命令看到。例如
```
sudo docker ps -a
CONTAINER ID        IMAGE                    COMMAND                CREATED             STATUS                          PORTS               NAMES
ba267838cc1b        ubuntu:14.04             "/bin/bash"            30 minutes ago      Exited (0) About a minute ago                       trusting_newton
98e5efa7d997        training/webapp:latest   "python app.py"        About an hour ago   Exited (0) 34 minutes ago                           backstabbing_pike
```

处于终止状态的容器，可以通过 `docker start` 命令来重新启动。

此外，`docker restart` 命令会将一个运行态的容器终止，然后再重新启动它。
',
                    'short_content' => '可以使用 docker stop 来终止一个运行中的容器。
此外，当Docker容器中指定的应用终结时，容器也自动终止。
例如对于上一章节中只启动了一个终端的容器，用户通过 exit 命令或 Ctrl+d 来退出终端时，所创建的容器立刻终止。
终止状态的容器可以用 docker ps -a 命令看到。例如
sudo docker ps -a
CONTAINER ID        IMAGE                    COMMAND                CREATED        ',
                    'comment_count' => 0,
                    'favorite_count' => 0,
                    'view_count' => 0,
                    'deleted_at' => NULL,
                    'created_at' => '2016-10-17 08:23:47',
                    'updated_at' => '2016-10-17 08:23:47',
                ),
                38 => 
                array (
                    'id' => 45,
                    'user_id' => 1,
                    'category_id' => 6,
                    'title' => '2016年10月18日随手记事',
                    'original_content' => '今天的随手记事

唧唧复唧唧，

木兰当户织。

不闻机杼声，

惟闻女叹息。

问女何所思，

问女何所忆。

女亦无所思，

女亦无所忆。

昨夜见军帖，

可汗大点兵，

军书十二卷，

卷卷有爷名。

阿爷无大儿，

木兰无长兄。',
                    'short_content' => '今天的随手记事
唧唧复唧唧，
木兰当户织。
不闻机杼声，
惟闻女叹息。
问女何所思，
问女何所忆。
女亦无所思，
女亦无所忆。
昨夜见军帖，
可汗大点兵，
军书十二卷，
卷卷有爷名。
阿爷无大儿，
木兰无长兄。
',
                    'comment_count' => 0,
                    'favorite_count' => 0,
                    'view_count' => 94,
                    'deleted_at' => '2016-10-18 05:35:47',
                    'created_at' => '2016-10-18 02:12:39',
                    'updated_at' => '2016-10-18 05:35:47',
                ),
                39 => 
                array (
                    'id' => 46,
                    'user_id' => 1,
                    'category_id' => 6,
                    'title' => '物理互联',
                    'original_content' => 'Docker 默认的桥接网卡是 docker0。它只会在本机桥接所有的容器网卡，举例来说容器的虚拟网卡在主机上看一般叫做 veth***  而 Docker 只是把所有这些网卡桥接在一起，如下：
```
[root@opnvz ~]# brctl show
bridge name     bridge id               STP enabled     interfaces
docker0         8000.56847afe9799       no              veth0889
veth3c7b
veth4061
```
在容器中看到的地址一般是像下面这样的地址：
```
root@ac6474aeb31d:~# ip a
1: lo: <LOOPBACK,UP,LOWER_UP> mtu 1500 qdisc noqueue state UNKNOWN group default
link/loopback 00:00:00:00:00:00 brd 00:00:00:00:00:00
inet 127.0.0.1/8 scope host lo
valid_lft forever preferred_lft forever
inet6 ::1/128 scope host
valid_lft forever preferred_lft forever
11: eth0: <BROADCAST,UP,LOWER_UP> mtu 1500 qdisc pfifo_fast state UP group default qlen 1000
link/ether 4a:7d:68:da:09:cf brd ff:ff:ff:ff:ff:ff
inet 172.17.0.3/16 scope global eth0
valid_lft forever preferred_lft forever
inet6 fe80::487d:68ff:feda:9cf/64 scope link
valid_lft forever preferred_lft forever
```
这样就可以把这个网络看成是一个私有的网络，通过 nat 连接外网，如果要让外网连接到容器中，就需要做端口映射，即 -p 参数。

如果在企业内部应用，或者做多个物理主机的集群，可能需要将多个物理主机的容器组到一个物理网络中来，那么就需要将这个网桥桥接到我们指定的网卡上。

### 拓扑图
主机 A 和主机 B 的网卡一都连着物理交换机的同一个 vlan 101,这样网桥一和网桥三就相当于在同一个物理网络中了，而容器一、容器三、容器四也在同一物理网络中了，他们之间可以相互通信，而且可以跟同一 vlan 中的其他物理机器互联。
![物理拓扑图](../_images/container_connect_topology.png)

### ubuntu 示例
下面以 ubuntu 为例创建多个主机的容器联网:
创建自己的网桥,编辑 /etc/network/interface 文件
```
auto br0
iface br0 inet static
address 192.168.7.31
netmask 255.255.240.0
gateway 192.168.7.254
bridge_ports em1
bridge_stp off
dns-nameservers 8.8.8.8 192.168.6.1
```
将 Docker 的默认网桥绑定到这个新建的 br0 上面，这样就将这台机器上容器绑定到 em1 这个网卡所对应的物理网络上了。

ubuntu 修改 /etc/default/docker 文件，添加最后一行内容

```
# Docker Upstart and SysVinit configuration file
# Customize location of Docker binary (especially for development testing).
#DOCKER="/usr/local/bin/docker"
# Use DOCKER_OPTS to modify the daemon startup options.
#DOCKER_OPTS="--dns 8.8.8.8 --dns 8.8.4.4"

# If you need Docker to use an HTTP proxy, it can also be specified here.
#export http_proxy="http://127.0.0.1:3128/"

# This is also a handy place to tweak where Docker\'s temporary files go.
#export TMPDIR="/mnt/bigdrive/docker-tmp"

DOCKER_OPTS="-b=br0"
```

在启动 Docker 的时候 使用 -b 参数 将容器绑定到物理网络上。重启 Docker 服务后，再进入容器可以看到它已经绑定到你的物理网络上了。

```
root@ubuntudocker:~# docker ps
CONTAINER ID        IMAGE               COMMAND             CREATED             STATUS              PORTS                        NAMES
58b043aa05eb        desk_hz:v1          "/startup.sh"       5 days ago          Up 2 seconds        5900/tcp, 6080/tcp, 22/tcp   yanlx
root@ubuntudocker:~# brctl show
bridge name     bridge id               STP enabled     interfaces
br0             8000.7e6e617c8d53       no              em1
vethe6e5
```
这样就直接把容器暴露到物理网络上了，多台物理主机的容器也可以相互联网了。需要注意的是，这样就需要自己来保证容器的网络安全了。

嗯.. 非常安全',
                    'short_content' => 'Docker 默认的桥接网卡是 docker0。它只会在本机桥接所有的容器网卡，举例来说容器的虚拟网卡在主机上看一般叫做 veth***  而 Docker 只是把所有这些网卡桥接在一起，如下：
[root@opnvz ~]# brctl show
bridge name     bridge id               STP enabled     interfaces
docker0         8000.56847afe9799       no              veth088',
                    'comment_count' => 0,
                    'favorite_count' => 0,
                    'view_count' => 5,
                    'deleted_at' => NULL,
                    'created_at' => '2016-10-19 06:50:39',
                    'updated_at' => '2016-10-19 06:54:16',
                ),
            ));
        
        
    }
}
