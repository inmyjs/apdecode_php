# apdecode_php

### CMSEasy企业建站源代码解密工具，适用于纯本地解密机制!
> CMSEasy自6.0版本后，就对lib/defalut目录下面的php代码进入加密了，想改个接口都不行。我是没搞明白为什么要这样搞，说好的只要保留版权信息就可以修改代码的，然后又弄个加密，加密也不弄个好点的，形同虚设（这话得悄悄的说，低调！低调！）

解密前的代码：
![](https://raw.githubusercontent.com/wiki/inmyjs/apdecode_php/images/1.png)

解密后的代码：
![](https://raw.githubusercontent.com/wiki/inmyjs/apdecode_php/images/2.png)

### 解密方法
1. clone项目至php网站目录（本地就行了），可以在根目录随便建一个decode目录，放里面
2. 把需要解密的文件复制到source目录
3. 浏览器访问http://localhost/decode/index.php

如果页面上没提示啥错误就说明成功啦，如图：
![](https://raw.githubusercontent.com/wiki/inmyjs/apdecode_php/images/4.png)

4. out目录下的文件就是解密好的文件，替换原加密文件即可

## 注意！注意！注意！
此时CMSEasy网站还不能正常访问，他们还动了点小心思，搞了个防止核心文件被篡改的机制，以/lib/defalut目录为例，有一个admin_system.php文件，就是干这个事的，把如图所示代码注释即可（当然得先把这个文件解密了再改）：
![](https://raw.githubusercontent.com/wiki/inmyjs/apdecode_php/images/3.png)

不要忘记else下面还有一个“}”也注释掉。

至此，大功告成！类似/lib/admin也有admin_system.php文件，一样处理，其他地方好像没有了。

此工具也适用于类似加密方式。

### 非常感谢您的支持
撸码不易，如果对你有所帮助，欢迎您的赞赏！微信赞赏码：

![](https://raw.githubusercontent.com/wiki/inmyjs/asweb/images/20180831154543.jpg)
