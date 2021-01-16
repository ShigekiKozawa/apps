<template>
  <FormWrapper>
    <div>
      <FormField class="textCenter">
        <p>変更が完了しました。</p>
        <FormButton class="completed" @click="$emit('completed')">
          プロフィール画面へ
        </FormButton>
      </FormField>
    </div>
  </FormWrapper>
</template>

<script>
  import FormWrapper from '../components/FormWrapper.vue'
  import FormField from '../components/FormField.vue'
  import FormButton from '../components/FormButton.vue'
  export default {
    name: 'FormCompleted',
    components: {
      FormWrapper,
      FormField,
      FormButton
    }
  }
</script>