<template>
  <div>
    <button @click="post()">POST</button>
    <button @click="put()">PUT</button>
    <button @click="patch()">PATCH</button>
    <button @click="onDelete()">DELETE</button>
  </div>
</template>

<script>
export default {
  name: 'Rest',
  created() {
    this.get()
  },
  methods: {
    getAll() {
      // dataを取得（全部）
      fetch('http://localhost:3000/posts')
      .then(function (response) {
        return response.json();
      })
        .then(function (data) {
          console.log(data);
        })
      .catch(function (error) {
        console.log(error);
      });
    },
    get() {
      // dataを取得（１つ）
      fetch('http://localhost:3000/posts/2')
      .then(function (response) {
        return response.json();
      })
        .then(function (data) {
          console.log(data);
        })
      .catch(function (error) {
        console.log(error);
      });
    },
    post() {
      // dataを送る
      const requestOptions = {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ title: "title-test", author: "author-test" })
      };
      fetch('http://localhost:3000/posts/', requestOptions)
      .then(function (response) {
        return response.json();
      })
        .then(function (data) {
          console.log(data);
        })
      .catch(function (error) {
        console.log(error);
      });
    },
    put() {
      // dataを変える
      const requestOptions = {
        method: "PUT",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ title: "title-test2", author: "author-test2" })
      };
      fetch('http://localhost:3000/posts/3', requestOptions)
      .then(function (response) {
        return response.json();
      })
        .then(function (data) {
          console.log(data);
        })
      .catch(function (error) {
        console.log(error);
      });
    },
    patch() {
      // dataの一部を変える
      const requestOptions = {
        method: "PATCH",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ title: "title-test3" })
      };
      fetch('http://localhost:3000/posts/3', requestOptions)
      .then(function (response) {
        return response.json();
      })
        .then(function (data) {
          console.log(data);
        })
      .catch(function (error) {
        console.log(error);
      });
    },
    onDelete() {
      // dataオブジェクトを消す
      const requestOptions = {
        method: "DELETE",
      };
      fetch('http://localhost:3000/posts/3', requestOptions)
      .then(function (response) {
        return response.json();
      })
        .then(function (data) {
          console.log(data);
        })
      .catch(function (error) {
        console.log(error);
      });
    }
  }
}
</script>
