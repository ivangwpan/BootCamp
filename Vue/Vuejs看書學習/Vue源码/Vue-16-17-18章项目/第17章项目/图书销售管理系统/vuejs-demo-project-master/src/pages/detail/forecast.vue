<template>
  <div class="sales-board">
      <div class="sales-board-intro">
        <h2>UI设计——Web网站与APP用户界面设计教程</h2>
        <p>基础知识点精讲，注重实战案例分析与演练，提供教学大纲、教学课件、源代码配套资源。</p>
      </div>
      <div class="sales-board-form">
          <div class="sales-board-line">
              <div class="sales-board-line-left">
                  购买数量：
              </div>
              <div class="sales-board-line-right">
                  <v-counter :max="100" :min="20"></v-counter>
              </div>
          </div>
          <div class="sales-board-line">
              <div class="sales-board-line-left">
                  媒介：
              </div>
              <div class="sales-board-line-right">
                  <v-mul-chooser :selections="versionList"></v-mul-chooser>
              </div>
          </div>
          <div class="sales-board-line">
              <div class="sales-board-line-left">
                  售后时间：
              </div>
              <div class="sales-board-line-right">
                  一年
              </div>
          </div>
          <div class="sales-board-line">
              <div class="sales-board-line-left">
                  总价：
              </div>
              <div class="sales-board-line-right">
                  69.9 元
              </div>
          </div>
          <div class="sales-board-line">
              <div class="sales-board-line-left">&nbsp;</div>
              <div class="sales-board-line-right">
                  <div class="button">
                    立即购买
                  </div>
              </div>
          </div>
      </div>
      <div class="sales-board-des">
        <h2>内容简介</h2>
        <p>用户界面设计是软件开发中不可缺少的一个环节。本书从软件工程的角度出发，参考软件生命周期开发模型，深入讲解用户界面设计中的每项活动，并以丰富的实例说明如何设计与实现用户界面。本书共分三部分： 第一部分介绍用户界面设计的基本概念，界面设计与软件系统的关系，以及设计的原则；第二部分从软件工程角度论述用户界面设计；第三部分主要通过实例讲述界面控件以及界面的设计与实现。本书对软件工程和UI设计的从业人员有指导意义，同时也非常适合对于界面设计感兴趣的读者学习参考。</p>
      </div>
  </div>
</template>

<script>
import VCounter from '../../components/base/counter'
import VMulChooser from '../../components/base/multiplyChooser'
export default {
  components: {
    VCounter,
    VMulChooser
  },
  data () {
    return {
      versionList: [
        {
          label: '纸质书',
          value: 0
        },
        {
          label: 'pdf',
          value: 1
        },
        {
          label: '邮件',
          value: 2
        },
        {
          label: '电子版',
          value: 3
        }
      ]
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
