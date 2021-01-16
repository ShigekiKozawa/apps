<template>
  <div class="field">
    <slot />
  </div>
</template>

<script>
  export default {
    name: 'FormField',
  }
</script>

<style lang="scss" scoped>
  .field {
    margin-top: 10px;
    margin-bottom: 20px;
    padding: 0 50px 0 40px;
    position: relative;
    &:first-of-type {
      margin-top: 40px;
    }
    &.table {
      margin: 0;
      padding: 20px 50px 20px 40px;
      display: flex;
      align-items: center;
      &.w100 {
        width: 100%;
      }
      &:not(:last-of-type) {
        border-bottom: 1px solid #eee;
      }
      >:first-child {
        width: 45%;
        font-size: 15px; font-weight: 600;
        color: #999;
        &.title {
          margin: 20px 0;
          font-size: 28px;
        }
      }
      >:not(:first-child) {
        font-size: 15px; font-weight: 600;
        color: #333;
      }
      .contentLeft {
        margin-left: auto;
      }
    }
    input[type="text"], input[type="password"] {
      padding: 10px 12px;
      min-width: 20em;
      font-size: 12px;
      color: #333;
      border: 1px solid #777;
      border-radius: 8px;
      &:focus {
        border-color: #333;
        outline: 0;
      }
    }
    input[type="text"] {
      margin-bottom: 10px;
    }
    input[type="checkbox"] {
      margin: 6px 4px 6px 8px;
    }
    input[type="radio"] {
      margin: 10px 4px 14px 8px;
    }
    textarea {
      padding: 10px 12px;
    }
    select {
      margin: 0 5px 10px;
      padding: 4px;
    }
    .title {
      margin: 0;
      margin-bottom: 40px;
      font-size: 28px;
      color: #999;
    }
    .subTitle {
      margin-top: 10px;
      margin-bottom: 10px;
      font-size: 14px;
      color: #333;
      line-height: 1;
    }
    .skill {
      &List {
        display: flex;
      }
      &Item {
        &:not(:last-of-type) {
          &:after {
            content: ",";
          }
        }
      }
    }
    .avatarUpload {
      &Area {
        margin-right: 20px;
        position: relative;
      }
      &Cont {
        display: flex;
        align-items: center;
        .text {
          font-weight: 600;
          cursor: pointer;
        }
        input {
          display: none;
          + label {
            display: inline-block;
            cursor: pointer;
          }
        }
        .avatarPreview {
          &:hover {
            &:before {
              opacity: 1;
            }
            &:after {
              opacity: 1;
            }
          }
          &:before {
            content: "";
            width: 30px;
            height: 30px;
            display: block;
            background: url(../assets/img/camera.png) 0 0 /contain no-repeat;
            position: absolute;
            top: calc(50% - 15px); left: calc(50% - 15px);
            z-index: 1;
            opacity: 0;
            transition: all .2s ease;
          }
          &:after {
            content: "";
            width: 100%;
            height: 100%;
            display: block;
            background: rgba(0, 0, 0, .1);
            position: absolute;
            top: 0; left: 0;
            opacity: 0;
            transition: all .2s ease;
          }
          &.isActive {
            &:before {
              opacity: 1;
            }
            &:after {
              opacity: 1;
            }
          }
        }
      }
    }
    .avatarPreview {
      width: 100px;
      height: 100px;
      position: relative;
      border-radius: 20px;
      overflow: hidden;
      > div {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
      }
    }
    .error {
      font-size: 12px; font-weight: 500;
      color: #f00;
      line-height: 1;
    }
  }
</style>