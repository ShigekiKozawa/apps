<template>
  <FormWrapper>
    <div>
      <FormField class="table w100">
        <h2 class="title">プロフィール</h2>
        <div class="contentLeft">
          <FormButton class="edit" @click="$emit('edit')">
            変更する
          </FormButton>
        </div>
      </FormField>
      <FormField class="table">
        <p>{{ labels.image }}</p>
        <div class="avatarPreview">
          <div id="imagePreview" :style="`background-image: url(${params.image});`"></div>
        </div>
      </FormField>
      <FormField class="table">
        <p>{{ labels.name }}</p>
        <p>{{ params.name }}</p>
      </FormField>
      <FormField class="table">
        <p>{{ labels.bio }}</p>
        <p>{{ params.bio }}</p>
      </FormField>
      <FormField class="table">
        <p>{{ labels.tel }}</p>
        <p>{{ params.tel }}</p>
      </FormField>
      <FormField class="table">
        <p>{{ labels.email }}</p>
        <p>{{ params.email }}</p>
      </FormField>
      <FormField class="table">
        <p>{{ labels.password }}</p>
        <p>{{ params.password }}</p>
      </FormField>
      <FormField class="table">
        <p>{{ labels.years }}</p>
        <p>{{ params.years.year }}年 {{ params.years.month }}月 {{ params.years.day }}日</p>
      </FormField>
      <FormField class="table">
        <p>{{ labels.country }}</p>
        <p>{{ params.country.national }} <span v-if="params.country.name != null">国名：{{ params.country.name }}</span></p>
      </FormField>
      <FormField class="table">
        <p>{{ labels.skills }}</p>
        <ul class="skillList">
          <li v-for="skill in params.skills" :key="skill.id">{{ skill }}</li>
        </ul>
      </FormField>
      <FormField class="table">
        <p>{{ labels.experience }}</p>
        <p>{{ params.experience }}</p>
      </FormField>
    </div>
  </FormWrapper>
</template>

<script>
  import FormWrapper from '../components/FormWrapper.vue'
  import FormField from '../components/FormField.vue'
  import FormButton from '../components/FormButton.vue'
  export default {
    name: 'FormConfirm',
    components: {
      FormWrapper,
      FormField,
      FormButton
    },
    props: {
      image: String,
      labels: Object,
      params: Object
    }
  }
</script>