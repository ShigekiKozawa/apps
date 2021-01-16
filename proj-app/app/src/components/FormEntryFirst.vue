<template>
  <div>
    <FormField>
      <h2 class="title">プロフィールの変更</h2>
    </FormField>
    <FormField>
      <div class="avatarUploadCont">
        <div class="avatarUploadArea">
          <div class="avatarEdit">
            <input 
              type='file'
              id="imageUpload"
              accept=".png, .jpg, .jpeg"
              @change="readURL" />
            <label for="imageUpload">
              <div class="avatarPreview" :class="{'avatarPreview': true, 'isActive' : isActive}" >
                <div id="imagePreview" :style="`background-image: url(${innerParams.image});`"></div>
              </div>
            </label>
          </div>
        </div>
        <label
          for="imageUpload"
          class="text"
          @mouseover="previewActive(true)"
          @mouseleave="previewActive(false)">画像を変更する</label>
      </div>
    </FormField>
    <FormField>
      <h3 class="subTitle">{{ labels.name }}</h3>
      <input
        type="text"
        placeholder="名前を入力してください。"
        v-model="innerParams.name">
      <p v-if="errors.name" class="error">{{ errors.name }}</p>
    </FormField>
    <FormField>
      <h3 class="subTitle">{{ labels.bio }}</h3>
      <textarea
        placeholder="紹介文を入力してください。"
        v-model="innerParams.bio"
        rows="5"
        cols="40"></textarea>
    </FormField>
    <FormField>
      <h3 class="subTitle">{{ labels.tel }}</h3>
      <input
        type="text"
        placeholder="電話番号を入力してください。"
        v-model="innerParams.tel">
      <p v-if="errors.tel" class="error">{{ errors.tel }}</p>
    </FormField>
    <FormField>
      <h3 class="subTitle">{{ labels.email }}</h3>
      <input
        type="text"
        placeholder="メールアドレスを入力してください。"
        v-model="innerParams.email">
      <p v-if="errors.email" class="error">{{ errors.email }}</p>
    </FormField>
    <FormField>
      <h3 class="subTitle">{{ labels.password }}</h3>
      <input
        type="text"
        placeholder="パスワードを入力してください。"
        v-model="innerParams.password">
      <p v-if="errors.password" class="error">{{ errors.password }}</p>
    </FormField>
    <FormField>
      <FormButton class="next" @click="next">
        次へ
      </FormButton>
    </FormField>
  </div>
</template>

<script>
  import FormField from '../components/FormField.vue'
  import FormButton from '../components/FormButton.vue'
  export default {
    name: 'FormEntryFirst',
    components: {
      FormField,
      FormButton
    },
    props: {
      labels: Object,
      innerParams: Object
    },
    data() {
      return {
        isActive: false,
        isShow: false,
        errors: {}
      }
    },
    methods: {
      readURL(event) {
        const files = event.target.files
        if (files && files[0]) {
          let reader = new FileReader()
          reader.onload = (e) => {
            this.innerParams.image = e.target.result
          }
          reader.readAsDataURL(files[0])
        }
      },
      checkForm() {
        this.errors = {}
        if (!this.innerParams.name) {
          this.$set(this.errors, 'name', "※名前が入力されていません。")
        }
        if (!this.innerParams.tel) {
          this.$set(this.errors, 'tel', "※電話番号が入力されていません。")
        }else if (!this.validString(this.innerParams.tel)) {
          this.$set(this.errors, 'tel', "※電話番号は半角で入力してください。")
        }
        if (!this.innerParams.email) {
          this.$set(this.errors, 'email', "※メールアドレスが入力されていません。")
        }else if (!this.validEmail(this.innerParams.email)) {
          this.$set(this.errors, 'email', "※メールアドレスが正しい形式ではありません。")
        }
        if (!this.innerParams.password) {
          this.$set(this.errors, 'password', "※パスワードが入力されていません。")
        }else if (!this.validString(this.innerParams.password)) {
          this.$set(this.errors, 'password', "※パスワードは半角英数で入力してください。")
        }else if (this.innerParams.password.length < 8 ) {
          this.$set(this.errors, 'password', "※パスワードは8文字以上入力してください。")
        }
        return !Object.keys(this.errors).length
      },
      validString(inputdata) {
        const re = /^[A-Za-z0-9]*$/
        return re.test(inputdata)
      },
      validEmail(inputdata) {
        const re = /^[a-zA-Z0-9.!#$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
        return re.test(inputdata)
      },
      previewActive(isActive) {
        this.isActive = isActive
      },
      next() {
        if(this.checkForm()) {
          this.$emit('next')
        }
      }
    }
  }
</script>