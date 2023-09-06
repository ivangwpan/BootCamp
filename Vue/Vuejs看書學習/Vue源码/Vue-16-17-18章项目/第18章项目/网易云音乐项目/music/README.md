### 基于Vue的仿网易云音乐webapp



#### 前言

------

基于Vue +  Vue-Router + Vuex + axios + Less  ，页面主要参照网易云音乐App进行编码的 , 数据来源于网易云音乐 Node.js API service [**NeteaseCloudMusicApi**],使用 vh 、vw 等视口单位 Viewport units 来适配移动端 ( 后续考虑用 rem 配合视口单位实现更好的适配 ) 



#### 在线浏览

推荐使用
- 手机扫码访问效果更佳 
- 二维码在书中可见


#### 技术栈

------

- `Vue`
- `Vue-Router`
- `Vuex`
- `Less`
- `Axios`
- `better-scroll`

#### 项目结构

------

```

│  .browserslistrc
│  .gitignore
│  babel.config.js
│  package-lock.json
│  package.json
│  postcss.config.js
│  README.md
│  vue.config.js     
└─src
    │  App.vue
    │  main.js
    │  registerServiceWorker.js
    │  router.js
    │  store.js
    ├─assets
    │  ├─css
    │  │ reset.css
    │  └─iconfont         
    └─components
        │  loading.vue
        │  progress-bar.vue
        │  scroll.vue
        ├─i-header
        │  i-header.vue
        ├─player
        │  player.vue
        ├─playingList
        │  playingList.vue
        ├─playList
        │  playList.vue
        ├─recommend
        │  recommend.vue
        │  slide.vue
        ├─search
        │  search-result.vue
        │  search.vue
        ├─singer
        │  singer.vue
        ├─song-list
        │  song-list.vue
        └─tab
           tab.vue
```



#### 已实现的功能

------

- 推荐页面

- 歌单页面

- 搜索功能 

- 歌手页面

- 播放器（播放/暂停 ，切换歌曲 ，调整播放进度，歌词，播放模式切换 ，播放列表）
感谢阅读~~~