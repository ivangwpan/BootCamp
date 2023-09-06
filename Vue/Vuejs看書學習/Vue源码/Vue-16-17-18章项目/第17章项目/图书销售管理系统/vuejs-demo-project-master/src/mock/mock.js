import Mock from 'mockjs'

Mock.mock(/getNewsList/, {
    'list|2': [{
        'url': '@url',
        'title': '计算机图书上新'
    }]
})
Mock.mock(/getPrice/, {
	'number|1-100': 100 
})
Mock.mock(/createOrder/, 'number|1-100')

Mock.mock(/getBoardList/, [
        {
          title: 'Excel报表一劳永逸（数据+函数+表格）',
          description: '解决各种在工作中遇到的表格问题',
          id: 'car',
          toKey: 'analysis',
          saleout: '@boolean'
        },
        {
          title: 'UI设计——Web网站与APP用户界面设计教程',
          description: '描绘出各种简洁大方的界面',
          id: 'earth',
          toKey: 'count',
          saleout: '@boolean'
        },
        {
          title: 'Python从零学习到项目实践',
          description: '通过项目实践了解Python程序',
          id: 'loud',
          toKey: 'forecast',
          saleout: '@boolean'
        },
        {
          title: 'Java程序设计习题精编（第2版）',
          description: 'Java已经成为现在计算机应用开发领域的主流程序设计语言之一',
          id: 'hill',
          toKey: 'publish',
          saleout: '@boolean'
        }
])

Mock.mock(/getProductList/, {
        pc: {
          title: '计算机操作类图书',
          list: [
            {
              name: 'Excle表格',
              url: '@url',
              hot: '@boolean'
            },
            {
              name: 'PPT编辑',
              url: '@url',
              hot: '@boolean'
            },
            {
              name: 'Python案例',
              url: '@url',
              hot: '@boolean'
            },
            {
              name: 'UI设计',
              url: '@url',
              hot: '@boolean'
            }
          ]
        },
        app: {
          title: '计算机语言类图书',
          last: true,
          list: [
            {
              name: 'Java类',
              url: '@url',
              hot: '@boolean'
            },
            {
              name: 'C语言',
              url: '@url',
              hot: '@boolean'
            },
            {
              name: 'Python类',
              url: '@url',
              hot: '@boolean'
            },
            {
              name: 'vue类',
              url: '@url',
              hot: '@boolean'
            }
          ]
        }
})
Mock.mock(/getTableData/, {
    "total": 25,
    "list|25": [
      {
        "orderId": "@id",
        "product": "@ctitle(4)",
        "version": "@ctitle(3)",
        "period": "@integer(1,5)年",
        "buyNum": "@integer(1,8)",
        "date": "@date()",
        "amount": "@integer(10, 500)元"
      }
    ]
})