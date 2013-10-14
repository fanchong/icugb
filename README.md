iCUGB
=====
iCUBG是为CUGB创建的智能平台，旨在为校园师生提供便捷的生活学习服务。
平台分为网页版本，微信公共平台，App版本，目前网页版本包括wiki系统以及一系列的web应用，微信公共平台包括了自习室查询，课表查询，树洞等功能。手机版本还待开发。

####网页版本
网页版本基于web.py框架开发，代码文档组织如下:  
* index.py  
* model.py  
* staic  
    * js
    * css
* config  
    * url.py
    * setting.py
* templates 

####微信公共平台
mycugb公共平台使用php开发，使用页面抓取技术处理用户课表信息及自习室信息。  
__wxmpcrop.php__是为了微信墙功能而实现的模拟登录微信公共平台抓取用户头像的源代码.
