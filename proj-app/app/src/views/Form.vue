<template>
  <section class="form">
    <div v-if="isLoading">読み込み中</div>
    <template v-else>
      <FormProfile
        :labels="labels"
        :params="params"
        @edit="editForm"
        v-if="viewType == VIEW_TYPE.PROFILE_FORM" />
      <FormEntry
        :labels="labels"
        :params="params"
        @data-update="click"
        v-else-if="viewType === VIEW_TYPE.ENTRY_FORM" />
      <FormConfirm
        :labels="labels"
        :params="params"
        @return="returnForm"
        @completed="completedForm"
        v-else-if="viewType === VIEW_TYPE.CONFIRM_FORM" />
      <FormCompleted @completed="returnProfile" v-else-if="viewType === VIEW_TYPE.COMPLETED_FORM" />
    </template>
  </section>
</template>

<script>
  import FormProfile from '../components/FormProfile.vue'
  import FormEntry from '../components/FormEntry.vue'
  import FormConfirm from '../components/FormConfirm.vue'
  import FormCompleted from '../components/FormCompleted.vue'
  export default {
    name: 'Form',
    components: {
      FormProfile,
      FormEntry,
      FormConfirm,
      FormCompleted
    },
    data() {
      const VIEW_TYPE = Object.freeze({
        PROFILE_FORM: 1,
        ENTRY_FORM: 2,
        CONFIRM_FORM: 3,
        COMPLETED_FORM: 4
      })
      return {
        viewType: 1,
        labels: {
          image: "画像",
          name: "名前",
          bio: "自己紹介",
          tel: "電話番号",
          email: "メールアドレス",
          password: "パスワード",
          years: "生年月日",
          country: "国籍",
          skills: "使用できるプログラミング言語",
          experience: "エンジニア経験年数"
        },
        params: {
          image: "/img/default.png",
          name: "",
          bio: "",
          tel: "",
          email: "",
          password: "",
          years: {
            year: 1990,
            month: 1,
            day: 1
          },
          country: {
            national: "日本",
            name: ""
          },
          skills: [],
          experience: "1~3年"
        },
        isLoading: true,
        VIEW_TYPE: VIEW_TYPE
      }
    },
    created() {
      this.infoForm().then((data) => {
        this.params = data
        this.isLoading = false
      });
    },
    methods: {
      editForm() {
        this.viewType = this.VIEW_TYPE.ENTRY_FORM
      },
      click(data) {
        this.image = data.image
        this.params = data
        this.viewType = this.VIEW_TYPE.CONFIRM_FORM
      },
      returnForm() {
        this.viewType = this.VIEW_TYPE.ENTRY_FORM
      },
      completedForm() {
        this.change()
        this.viewType = this.VIEW_TYPE.COMPLETED_FORM
      },
      returnProfile() {
        this.viewType = this.VIEW_TYPE.PROFILE_FORM
      },
      infoForm() {
        // dataを取得（１つ）
        return fetch('http://localhost:3000/userProfile')
          .then(function (response) {
            return response.json();
          })
            .catch(function (error) {
              console.log(error);
            });
      },
      change() {
        // dataを送る
        const requestOptions = {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify(this.params)
        };
        fetch('http://localhost:3000/userProfile', requestOptions)
        .then(function (response) {
          return response.json();
        })
          .catch(function (error) {
            console.log(error);
          });
      }
    }
  }
</script>