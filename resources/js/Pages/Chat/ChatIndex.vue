<script setup>
import ChatLayout from "../../Layouts/ChatLayour.vue";
import {useForm} from "@inertiajs/vue3";

const  form=useForm({
    promt:"",
});

const submit=()=>{
    form.post('/chat')
}
</script>
<template>
    <ChatLayout>
        <template #aside> </template>
        <div class="w-full flex text-white"></div>
        <template #form>
            <section class="px-6 top-0">
                <div class="w-full">
                    <div class="relative flex-1 flex items-center">
                        <input
                            type="text"
                            class="w-full bg-slate-700 text-white rounded-lg"
                            placeholder="Ask Laravel AI"
                            v-model="form.promt"
                            @keyup.enter="submit"
                        />
                        <div class="absolute inset-y-0 right-0 flex items-center pl-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                            </svg>
                        </div>
                    </div>
                </div>
            </section>
        </template>
    </ChatLayout>
</template>
