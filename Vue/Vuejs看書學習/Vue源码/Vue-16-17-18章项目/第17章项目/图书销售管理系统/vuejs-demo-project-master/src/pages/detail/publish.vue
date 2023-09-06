<template>
  <div class="sales-board">
      <div class="sales-board-intro">
        <h2>Java程序设计习题精编（第2版）</h2>
        <p>本书结构合理，语言简练，内容深入浅出，以案例汇总各章知识点，使读者学而知其用，体现Java编程语言的实战性特点</p>
      </div>
      <div class="sales-board-form">
          <div class="sales-board-line">
              <div class="sales-board-line-left">
                  购买数量：
              </div>
              <div class="sales-board-line-right">
                  <v-counter :max="100" :min="1"></v-counter>
              </div>
          </div>
          <div class="sales-board-line">
              <div class="sales-board-line-left">
                  行业：
              </div>
              <div class="sales-board-line-right">
                  <v-selection :selections="tradeList"></v-selection>
              </div>
          </div>
          <div class="sales-board-line">
              <div class="sales-board-line-left">
                  产品版本：
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
                  半年
              </div>
          </div>
          <div class="sales-board-line">
              <div class="sales-board-line-left">
                  总价：
              </div>
              <div class="sales-board-line-right">
                  59 元
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
        <h2>书本前言</h2>
        <h6>随着面向对象技术的不断发展，Java已经成为现在计算机应用开发领域的主流程序设计语言之一。它是计算机专业的一门必修课，也是各个计算机学院学生学习的技术主线之一。Java语言具有入门快、开发效率高、应用面广等特点，因此学习Java语言的人越来越多。

本书包含配套教材的所有教学内容的习题，包括Java简介、Java基础、程序流程控制、数组、类和对象、类和对象的扩展、Java常用系统类、Java输入输出系统、GUI图形用户界面、线程、网络编程、Java数据库操作及Android应用程序开发等内容。
</h6>

        <table class="sales-board-table">
          <tbody>
              <tr class="ui-table-row">
                  <td class="col-first">
                      <div class="intro-pic">
                          <label>本书所选择的题目涉及面广、内容丰富</label>
                      </div>
                  </td>
                  <td>
                      <div class="intro-pic">
                          <label>习题具有代表性，且对典型例题解析详尽</label>
                      </div>
                  </td>
                  <td>
                      <div class="intro-pic">
                          <label>题型多样化，使学生从不同角度分析问题</label>
                      </div>
                  </td>
                  <td>
                      <div class="intro-pic">
                          <label>结合等级考试，为学生提供学习考核标准</label>
                      </div>
                  </td>
                  
              </tr>
          </tbody>
      </table>
      </div>
  </div>
</template>

<script>
import VSelection from '../../components/base/selection'
import VCounter from '../../components/base/counter'
import VMulChooser from '../../components/base/multiplyChooser'
export default {
  components: {
    VSelection,
    VCounter,
    VMulChooser
  },
  data () {
    return {
      tradeList: [
        {
          label: '清华大学出版社',
          value: 0
        },
        
      ],
      versionList: [
        {
          label: '初级版',
          value: 0
        },
        {
          label: '中级版',
          value: 1
        },
        {
          label: '高级版',
          value: 2
        },
        {
          label: '专家版',
          value: 3
        }
      ]
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>

</style>
