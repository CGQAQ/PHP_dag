<template>
  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
      <a class="navbar-brand" href="#/">DrawAndGuessGame</a>
      <div id="login-form">
        <form class="form-inline">
        <input class="form-control mr-sm-2" placeholder="用户名">
        <input class="form-control mr-sm-2" placeholder="密码">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">登录</button>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">注册</button>
        </form>
      </div>
    </nav>
  </div>
</template>

<script>
export default {
  name: 'navigationBar'

}
</script>
