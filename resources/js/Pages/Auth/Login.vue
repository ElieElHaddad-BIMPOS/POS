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
.lables{
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
}

.digit:hover {
    background-color: #e0e0e0;
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
                <InputLabel class="lables" for="logincode" value="Enter Login Code" />
                <TextInput
                    id="logincode"
                    v-model="form.logincode"
                    type="number"
                    class="mt-1 block w-full"
                    required
                    autofocus
                    autocomplete="username"
                />
                <InputError class="mt-2" :message="form.errors.email" />
            </div>
            <div class="calculator">
                <a class="digit" @click="appendToInput('1')">1</a>
                <a class="digit" @click="appendToInput('2')">2</a>
                <a class="digit" @click="appendToInput('3')">3</a>
                <a class="digit" @click="appendToInput('4')">4</a>
                <a class="digit" @click="appendToInput('5')">5</a>
                <a class="digit" @click="appendToInput('6')">6</a>
                <a class="digit" @click="appendToInput('7')">7</a>
                <a class="digit" @click="appendToInput('8')">8</a>
                <a class="digit" @click="appendToInput('9')">9</a>
                <a class="digit clear" @click="clearInput">Clear</a>
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox v-model:checked="form.remember" name="remember" />
                    <span class="ml-2 text-sm text-gray-600 lables">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link v-if="canResetPassword" :href="route('password.request')" class="lables underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Forgot your password?
                </Link>

                <PrimaryButton class="ml-4 btn-login-submit" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>
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
      this.form.logincode += value; // Append the clicked digit to the input value
    },
    clearInput() {
      this.form.logincode = ''; // Clear the input value
    },
  }
}
</script>
