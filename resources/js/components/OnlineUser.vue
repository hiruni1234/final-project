<!--<template lang="html">-->
     <!--<i class="fa fa-circle green" v-if="checkUser()"></i>-->
     <!--<i class="fa fa-circle red" v-else></i>-->
<!--</template>-->

<!--<script>-->
    <!--export default {-->
        <!--props: ['friend', 'onlineusers'],-->
        <!--methods: {-->
            <!--checkUser: function() {-->
                <!--return _.find(this.onlineusers, {id: this.friend.id});-->
            <!--}-->
        <!--}-->
    <!--}-->
<!--</script>-->

<!--<style lang="css">-->
    <!--.red {-->
        <!--color: red;-->
    <!--}-->
    <!--.green {-->
        <!--color: green;-->
    <!--}-->
<!--</style>-->
<template lang="html">

</template>

<script>
    export default{
        props: ['friend', 'onlineusers'],
        methods: {
            checkUser: function() {
                return _.find(this.onlineusers, {id: this.friend.id});
            }
        }
    }
</script>

<style lang="css">
    .red {
        color: red;
    }
    .green {
        color: green;
    }
</style>
