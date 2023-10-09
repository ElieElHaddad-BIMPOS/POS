<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    logincode: '',
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.transform(data => ({
        ...data,
        remember: form.remember ? 'on' : '',
    })).post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>
<style>
.labels{
    color: goldenrod;
    font-weight: 800;
}
.btn-login-submit {
    background-color: goldenrod;
    color: black;
}
/* Style for the input field */
#calculator-input {
    width: 100%;
    padding: 10px;
    font-size: 18px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 10px;
    text-align: right;
}

/* Style for the calculator buttons */
.calculator {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
    margin-top: 20px;
}

.digit {
    width: 100%;
    padding: 10px;
    font-size: 20px;
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.2s;
    color: black
}

.digit:hover {
    background-color: goldenrod;
    color: black;
}

/* Style for the clear a */
#clear-a {
    width: 100%;
    padding: 10px;
    font-size: 20px;
    background-color: #ff6347;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.2s;
}

#clear-a:hover {
    background-color: #ff4136;
}
.clear {
    text-decoration: none;
    text-align: center;
}
.login-btn {
    width:400px;
    height:60px;
}
.error-msg{
    color:goldenrod;
}
</style>
<template>
    <Head title="Log in" />

    <AuthenticationCard > 
        <template #logo>
            <AuthenticationCardLogo />
        </template>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form  @submit.prevent="submit">
            <div>
                <InputLabel class="labels" for="logincode" value="Enter Login Code" />
                <TextInput
                    id="logincode"
                    v-model="form.logincode"
                    type="number"
                    class="mt-1 block w-full"
                    required
                    autofocus
                    autocomplete="username"
                />
                <InputError class="error-msg mt-2" :message="form.errors.logincode" />
            </div>
            <div class="calculator">
                <a class="btn digit" @click="appendToInput('1')">1</a>
                <a class="btn digit" @click="appendToInput('2')">2</a>
                <a class="btn digit" @click="appendToInput('3')">3</a>
                <a class="btn digit" @click="appendToInput('4')">4</a>
                <a class="btn digit" @click="appendToInput('5')">5</a>
                <a class="btn digit" @click="appendToInput('6')">6</a>
                <a class="btn digit" @click="appendToInput('7')">7</a>
                <a class="btn digit" @click="appendToInput('8')">8</a>
                <a class="btn digit" @click="appendToInput('9')">9</a>
                <a style="visibility: hidden;" class="btn digit"></a>
                <a class="btn digit" @click="appendToInput('0')">0</a>

                <a class="digit clear" @click="clearInput">Clear</a>

            </div>
            <audio id="click-sound">
                <source src="audio/beep.wav" type="audio/mpeg">
            </audio>



            <div class="flex items-center justify-center mt-4">


                <PrimaryButton class="login-btn btn-login-submit" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>
            </div>
            <div class="block mt-4 flex justify-between items-center">
                <label class="flex items-center">
                    <Checkbox v-model:checked="form.remember" name="remember" />
                    <span class="ml-2 text-sm text-gray-600 labels">Remember me</span>
                </label>
                <Link :href="route('password.request')" class="items-end labels underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Forgot your password?
                </Link>
            </div>
        </form>
    </AuthenticationCard>
</template>
<script>
export default {
    data() {
    return {
    };
  }, 
  methods: {
    appendToInput(value) {
      this.form.logincode += value;
      const clickSound = document.getElementById('click-sound');
      if (clickSound) {
        clickSound.currentTime = 0;
        clickSound.play();
      }
    },
    clearInput() {
      this.form.logincode = '';
    },
  }
}
</script>
