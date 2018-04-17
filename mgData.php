<?php

header('Content-Type:text/html;charset=utf-8');
header('Access-Control-Allow-Origin:*');
$title = $_GET['title'];
$url = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

switch ($title){
    case 'banner':
        $arr = array(
            dirname($url).'/img/1-banner/1.jpg',
            dirname($url).'/img/1-banner/2.jpg',
            dirname($url).'/img/1-banner/3.jpg',
        );
        echo json_encode($arr);
        break;
    case 'navIcon':
        $arr = array(
            array(
                'pic' => dirname($url).'/img/2-navIcon/1.gif',
                'con' => '1分夺宝'
            ),
            array(
                'pic' => dirname($url).'/img/2-navIcon/2.jpg',
                'con' => '9.9包邮'
            ),
            array(
                'pic' => dirname($url).'/img/2-navIcon/3.gif',
                'con' => '限时快抢'
            ),
            array(
                'pic' => dirname($url).'/img/2-navIcon/4.jpg',
                'con' => '返校套装'
            ),
            array(
                'pic' => dirname($url).'/img/2-navIcon/5.png',
                'con' => '签到'
            ),
            array(
                'pic' => dirname($url).'/img/2-navIcon/6.jpg',
                'con' => '两件套49'
            ),
            array(
                'pic' => dirname($url).'/img/2-navIcon/7.jpg',
                'con' => '小个运动鞋'
            ),
            array(
                'pic' => dirname($url).'/img/2-navIcon/8.png',
                'con' => '29元美妆'
            ),
            array(
                'pic' => dirname($url).'/img/2-navIcon/9.jpg',
                'con' => '男装热卖'
            ),
            array(
                'pic' => dirname($url).'/img/2-navIcon/10.gif',
                'con' => '已抢7000件'
            ),
        );
        echo json_encode($arr);
        break;
    case 'rushBuy':
      $arr = array(
            array(
                'pic' => dirname($url).'/img/3-rushBuy/1.jpg',
                'con' => '大理石代替色眼影盘',
                'original' => '¥79',
                'discount' => '￥70.00'
            ),
            array(
                'pic' => dirname($url).'/img/3-rushBuy/2.jpg',
                'con' => '大理石代替色眼影盘',
                'original' => '¥69.3',
                'discount' => '￥70.00'

            ),

             array(
                'pic' => dirname($url).'/img/3-rushBuy/3.jpg',
                'con' => '补水锁水嫩白提亮5件套',
                'original' => '¥129',
                'discount' => '¥378'

            ),
              array(
                'pic' => dirname($url).'/img/3-rushBuy/4.jpg',
                'con' => '买一送三DVZ新款朵色气垫',
                'original' => '￥40',
                'discount' => '￥128'

            ),
               array(
                'pic' => dirname($url).'/img/3-rushBuy/5.jpg',
                'con' => '防晒喷雾全身隔离保湿补水',
                'original' => '￥39',
                'discount' => '￥118.00'

            ),
                array(
                'pic' => dirname($url).'/img/3-rushBuy/6.jpg',
                'con' => '12支天然小麦健康生活',
                'original' => '￥19',
                'discount' => '￥50.00'

            ),
                 array(
                'pic' => dirname($url).'/img/3-rushBuy/7.jpg',
                'con' => '网红八色大地色眼影盘',
                'original' => '￥19',
                'discount' => '￥50.00'

            ),
                  array(
                'pic' => dirname($url).'/img/3-rushBuy/8.jpg',
                'con' => '12支天然小麦健康生活',
                'original' => '￥19',
                'discount' => '￥50.00'

            ),
                   array(
                'pic' => dirname($url).'/img/3-rushBuy/9.jpg',
                'con' => '12支天然小麦健康生活',
                'original' => '￥19',
                'discount' => '￥50.00'

            ),
                    array(
                'pic' => dirname($url).'/img/3-rushBuy/10.jpg',
                'con' => '12支天然小麦健康生活',
                'original' => '￥19',
                'discount' => '￥50.00'

            )

        );
        echo json_encode($arr);
        break;
    case 'hotMarket':
        $arr = array(
                 array(
                    'pic' => dirname($url).'/img/6-hotMarket/1.png',
                    'con' => '新装上市'
                    ),
                 array(
                    'pic' => dirname($url).'/img/6-hotMarket/2.png',
                    'con' => '约会套装'
                    ),
                 array(
                    'pic' => dirname($url).'/img/6-hotMarket/3.png',
                    'con' => '开春卫衣'
                    ),
                 array(
                    'pic' => dirname($url).'/img/6-hotMarket/4.png',
                    'con' => '显瘦裤装'
                    ),
                 array(
                    'pic' => dirname($url).'/img/6-hotMarket/5.png',
                    'con' => '女鞋精选'
                    ),
                 array(
                    'pic' => dirname($url).'/img/6-hotMarket/6.png',
                    'con' => '气质连衣裙'
                    ),
                 array(
                    'pic' => dirname($url).'/img/6-hotMarket/7.png',
                    'con' => '内衣袜子'
                    ),
                 array(
                    'pic' => dirname($url).'/img/6-hotMarket/8.png',
                    'con' => '家居百货'
                    ),
                 array(
                    'pic' => dirname($url).'/img/6-hotMarket/9.png',
                    'con' => '开运妆容'
                    ),
                 array(
                    'pic' => dirname($url).'/img/6-hotMarket/10.png',
                    'con' => '品质男装'
                    ),
                 array(
                    'pic' => dirname($url).'/img/6-hotMarket/11.png',
                    'con' => '百搭上衣'
                    ),
                 array(
                    'pic' => dirname($url).'/img/6-hotMarket/12.png',
                    'con' => '春节美包'
                    ),
                 array(
                    'pic' => dirname($url).'/img/6-hotMarket/13.png',
                    'con' => '新装上市'
                    ),
                 array(
                    'pic' => dirname($url).'/img/6-hotMarket/14.png',
                    'con' => '零食囤货'
                    ),
                 array(
                    'pic' => dirname($url).'/img/6-hotMarket/15.png',
                    'con' => '低价短靴'
                    ),
                 array(
                    'pic' => dirname($url).'/img/6-hotMarket/16.png',
                    'con' => '点睛配饰'
                    ),

            );
        echo json_encode($arr);
        break;
    case 'groupBuy':
        break;
    case 'cheap':
        break;
    case 'like':
        $arr = array(
            array(
                'pic' => dirname($url).'/img/7-like/1.jpg',
                'label' => array('吊带连衣裙','网纱','明星同款','韩版'),
                'price' => '¥79',
                'collection' => '555',
                'collectIcon' => dirname($url).'/img/7-like/icon.jpg'
            ),
            array(
                'pic' => dirname($url).'/img/7-like/2.jpg',
                'label' => array('棒球服','宽松','韩范','白色','新款'),
                'price' => '¥69.3',
                'collection' => '834',
                'collectIcon' => dirname($url).'/img/7-like/icon.jpg'
            ),
            array(
                'pic' => dirname($url).'/img/7-like/3.jpg',
                'label' => array('时尚套装','春季','新款'),
                'price' => '¥51.69',
                'collection' => '9608',
                'collectIcon' => dirname($url).'/img/7-like/icon.jpg'
            ),
            array(
                'pic' => dirname($url).'/img/7-like/4.jpg',
                'label' => array('熊毛绒玩具','泰迪','女生'),
                'price' => '¥68.6',
                'collection' => '967',
                'collectIcon' => dirname($url).'/img/7-like/icon.jpg'
            ),
            array(
                'pic' => dirname($url).'/img/7-like/5.jpg',
                'label' => array('洗鞋神器','去黄'),
                'price' => '¥68.6',
                'collection' => '967',
                'collectIcon' => dirname($url).'/img/7-like/icon.jpg'
            ),
            array(
                'pic' => dirname($url).'/img/7-like/6.jpg',
                'label' => array('尖头单鞋','浅口','一脚蹬','扣带','懒人','百搭','韩版'),
                'price' => '¥68.6',
                'collection' => '984',
                'collectIcon' => dirname($url).'/img/7-like/icon.jpg'
            ),
            array(
                'pic' => dirname($url).'/img/7-like/7.jpg',
                'label' => array('时尚套装','中长款针织','春季','日系','字母'),
                'price' => '¥68',
                'collection' => '1.3w',
                'collectIcon' => dirname($url).'/img/7-like/icon.jpg'
            ),
            array(
                'pic' => dirname($url).'/img/7-like/8.jpg',
                'label' => array('鸽鸽','大礼包','超大','一箱'),
                'price' => '¥78.99',
                'collection' => '398',
                'collectIcon' => dirname($url).'/img/7-like/icon.jpg'
            ),
            array(
                'pic' => dirname($url).'/img/7-like/9.jpg',
                'label' => array('百搭帆布鞋','小清新','学院风','新款','春季','韩版'),
                'price' => '¥39.9',
                'collection' => '929',
                'collectIcon' => dirname($url).'/img/7-like/icon.jpg'
            ),
            array(
                'pic' => dirname($url).'/img/7-like/10.jpg',
                'label' => array('浅口单鞋','软底','粗跟','春秋季','百搭','休闲','韩版'),
                'price' => '¥69.3',
                'collection' => '741',
                'collectIcon' => dirname($url).'/img/7-like/icon.jpg'
            ),
            array(
                'pic' => dirname($url).'/img/7-like/11.jpg',
                'label' => array('工装裤','系带','字母','春季','男士'),
                'price' => '¥85',
                'collection' => '321',
                'collectIcon' => dirname($url).'/img/7-like/icon.jpg'
            ),
            array(
                'pic' => dirname($url).'/img/7-like/12.jpg',
                'label' => array('套装两件套','V领','时尚','拼色','长袖','百搭','春节'),
                'price' => '¥65.81',
                'collection' => '1035',
                'collectIcon' => dirname($url).'/img/7-like/icon.jpg'
            ),
            array(
                'pic' => dirname($url).'/img/7-like/18.jpg',
                'label' => array('抽纸','原木','家用','30包'),
                'price' => '¥39.9',
                'collection' => '95',
                'collectIcon' => dirname($url).'/img/7-like/icon.jpg'
            ),
            array(
                'pic' => dirname($url).'/img/7-like/19.jpg',
                'label' => array('牛仔裤','深色','显瘦','小脚','不规则','百搭','韩版'),
                'price' => '¥67',
                'collection' => '1963',
                'collectIcon' => dirname($url).'/img/7-like/icon.jpg'
            ),
        );
        echo json_encode($arr);
        break;
        case 'endDate':
            $arr = array(
                'year'=>2018,
                'mon'=>8,
                'date'=>1,
                'hour'=>22,
                'min'=>30,
                'sec'=>0
            );
            echo json_encode($arr);
            break;
}

