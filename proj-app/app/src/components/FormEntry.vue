<template>
  <FormWrapper>
    <FormEntryFirst
      :labels="labels"
      :innerParams="innerParams"
      @next="next"
      v-if="page === ENTRY_PAGE.FIRST_PAGE" />
    <FormEntrySecond
      :labels="labels"
      :innerParams="innerParams"
      @confirm="confirm"
      @back="back"
      v-else-if="page === ENTRY_PAGE.SECOND_PAGE" />
  </FormWrapper>
</template>

<script>
  import FormWrapper from '../components/FormWrapper.vue'
  import FormEntryFirst from '../components/FormEntryFirst.vue'
  import FormEntrySecond from '../components/FormEntrySecond.vue'
  export default {
    name: 'FormEntry',
    components: {
      FormWrapper,
      FormEntryFirst,
      FormEntrySecond
    },
    props: {
      labels: Object,
      params: Object
    },
    data() {
      const ENTRY_PAGE = Object.freeze({
        FIRST_PAGE: 1,
        SECOND_PAGE: 2
      })
      return {
        isActive: false,
        innerParams: {},
        page: 1,
        ENTRY_PAGE: ENTRY_PAGE
      }
    },
    created() {
      this.innerParams = this.params
    },
    methods: {
      previewActive(isActive) {
        this.isActive = isActive
      },
      next() {
        this.page = this.ENTRY_PAGE.SECOND_PAGE
      },
      back() {
        this.page = this.ENTRY_PAGE.FIRST_PAGE
      },
      confirm() {
        this.$emit('data-update', this.innerParams)
      }
    }
  }
</script>