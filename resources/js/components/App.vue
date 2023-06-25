<template>
    <div class="container">
        <p>
            <router-link to="/">Home</router-link>
            <router-link to="/about">About</router-link>
        </p>
        <div>
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
    export default {
    name: "App"

}
</script>

