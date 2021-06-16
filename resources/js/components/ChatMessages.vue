<template>
    <ul>
        <li class="dokter-msg" v-for="message in messages">
            <p>{{ message.message }}</p>                               
        </li>
    </ul>

</template>

<script>
  export default {
    props: ['messages']
  };
</script>