const { createApp } = Vue;
createApp({
    data() {
        return {
            todoList: [],
        };
    },
    created() {
        // chiamata axios per prelevare i dati
    }
}).mount('#app')