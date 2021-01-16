<template>
  <div>
    <FormField>
      <h3 class="subTitle">生年月日</h3>
      <select v-model="innerParams.years.year">
        <option v-for="n in YEARS.YEARS_YEAR" :value="n + YEARS.YEARS_YEAR_AVERAGE" :key="n.id">
          {{ n + YEARS.YEARS_YEAR_AVERAGE }}
        </option>
      </select>年
      <select v-model="innerParams.years.month">
        <option v-for="n in YEARS.YEARS_MONTH" :value="n" :key="n.id">
          {{ n }}
        </option>
      </select>月
      <select v-model="innerParams.years.day">
        <option v-for="n in YEARS.YEARS_DAY" :value="n" :key="n.id">
          {{ n }}
        </option>
      </select>日
    </FormField>
    <FormField>
      <h3 class="subTitle">国籍</h3>
      <label>
        <input
          type="radio"
          name="country"
          value="日本"
          @click="isShow = false"
          v-model="innerParams.country.national">日本
      </label>
      <label>
        <input
          type="radio"
          name="country"
          value="外国"
          @click="isShow = true"
          v-model="innerParams.country.national">外国
      </label>
      <div v-if="isShow">
        <input
          type="text"
          name="country"
          placeholder="国名を記入してください。"
          class="mb0"
          v-model="innerParams.country.name">
      </div>
    </FormField>
    <FormField>
      <h3>使用できるプログラミング言語</h3>
      <label v-for="skill in values.skills" :key="skill.id">
        <input
          type="checkbox"
          name="skills"
          :value="skill"
          v-model="innerParams.skills">{{ skill }}
      </label>
    </FormField>
    <FormField>
      <h3 class="subTitle">エンジニア経験年数</h3>
      <label v-for="experience in values.experiences" :key="experience.id">
        <input
          type="radio"
          name="experience"
          :value="experience"
          v-model="innerParams.experience">{{ experience }}
      </label>
    </FormField>
    <FormField>
      <FormButton @click="$emit('back')">
        戻る
      </FormButton>
      <FormButton class="confirm" @click="$emit('confirm')">
        確認する
      </FormButton>
    </FormField>
  </div>
</template>

<script>
  import FormField from '../components/FormField.vue'
  import FormButton from '../components/FormButton.vue'
  export default {
    name: 'FormEntrySecond',
    components: {
      FormField,
      FormButton
    },
    props: {
      labels: Object,
      innerParams: Object
    },
    data() {
      const YEARS = Object.freeze({
        YEARS_YEAR: 100,
        YEARS_YEAR_AVERAGE: 1919,
        YEARS_MONTH: 12,
        YEARS_DAY: 31
      })
      return {
        isActive: false,
        isShow: false,
        values: {
          skills: [
            "C",
            "C++",
            "C#",
            "Java",
            "PHP",
            "Perl",
            "Python",
            "Go",
            "Ruby",
            "SQL",
            "HTML",
            "CSS",
            "JavaScript(ES2016)",
            "JavaScript(AngularJS)",
            "JavaScript(React)",
            "JavaScript(Vue)",
            "JavaScript(jQuery)",
            "JavaScript(Node)",
            "TypeScript"
          ],
          experiences: [
            "1~3年",
            "4~6年",
            "5~8年",
            "8~10年",
            "10年以上"
          ]
        },
        YEARS: YEARS
      }
    },
    methods: {
      previewActive(isActive) {
        this.isActive = isActive
      }
    }
  }
</script>