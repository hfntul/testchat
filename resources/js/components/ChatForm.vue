<template>
    <div class="type-msg">
        <div class="input-msg">
            <input id="input-me" type="text" name="message" placeholder="Type your message here..." v-model="newMessage" @keyup.enter="sendMessage">
        </div>
        <span class="btn send-button" type="submit" @click="sendMessage">
                <i class="fa fa-send"> </i>        
        </span>
    </div>
    
</template>

<script>
    export default {
        props: ['user'],

        data() {
            return {
                newMessage: ''
            }
        },

        methods: {
            sendMessage() {
                this.$emit('messagesent', {
                    user: this.user,
                    message: this.newMessage
                });

                this.newMessage = '';
            },
        }    
    }
</script>
