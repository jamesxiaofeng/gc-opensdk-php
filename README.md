# gc-open-sdk-php

#### 介绍
谷仓开放平台-客户端PHPSDK 

#### 软件架构
软件架构说明

    ├── core //核心代码目录
    │   ├── Config.php //配置对象 apikey apisecret aes密钥(16位) 谷仓公钥
    │   ├── Engine.php //执行引擎对象,通过该对象query方法 发起服务调用
    │   ├── api //api实体对象,具体接口请参考谷仓众包开放平台接口文档. 接口文件名和接口文档中接口名称保持对应
    │   │   ├── AccountBalance.php
    │   │   ├── Bankcard3c.php
    │   │   ├── FileUpload.php
    │   │   ├── OrderInvoice.php
    │   │   ├── OrderQueryInvoice.php
    │   │   ├── PayOrder.php
    │   │   ├── PayQueryBill.php
    │   │   ├── PayQueryResult.php
    │   │   ├── PersonAuth.php
    │   │   ├── PersonSign.php
    │   │   └── PersonStatus.php
    │   ├── autoload.php //自动加载文件,项目中首先通过引入该文件,然后调用sdk中类方法
    │   ├── impl //接口文件
    │   │   ├── ApiInterface.php
    │   │   └── ConfigInterface.php
    │   └── support 工具目录
    │       ├── Aes.php
    │       ├── Rsa.php
    │       └── Support.php
    ├── demo 测试样本
    │   └── test.php
####
#### 安装教程

1.  将sdk中的 haiyin目录 放入项目第三方包应当存放合适的位置
2.  在项目bootstrap文件中引入haiyin/core/autoload.php 文件

#### 使用说明

1. php版本不得低于php5.3
2. 要求安装openssl curl 扩展模块

#### 参与贡献

1.  Fork 本仓库
2.  新建 Feat_xxx 分支
3.  提交代码
4.  新建 Pull Request


