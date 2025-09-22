<style>
.my-input { border:none; color:#132760; }
.my-label { font-weight:bold; color:#13275F; margin-right:10px; }
.my-label2 { font-weight:bold; color:#13275F; margin-top:15px; }
.my-email { color:#13275F; text-decoration:none; }
.my-input-interests { margin-right:10px; }
.my-lbl-interests { margin-right:60px; color:#132760; }
.my-text-red { color: red; font-size: 12px; margin-left: 100px; }
.btn-green { width:100px; color:#FFF; background-color:#90B53F; border-radius:0px; }
.center-div {
    display: flex;
    font-weight: bold;
    align-items: center;
    justify-content: center;
    background-color:#132760;
    color:#FFF;
}
.center-div2 {
    display: flex;
    align-items: center;
    justify-content: center;
}
.center-div2 .circle {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #ddd;
    border-radius: 50%;
    width: 100px;
    height: 100px;
    cursor: pointer;
}
.center-div2 .circle i {
    font-size: 48px;
    color: #132760; /* например, цвет иконки */
}
/* Серый прямоугольный чекбокс без скругления */
input[type="checkbox"] {
    appearance: none;       /* убирает стандартный стиль */
    -webkit-appearance: none;
    width: 18px;
    height: 18px;
    border: 2px solid #9CA4AA; /* серый цвет рамки */
    border-radius: 0;       /* убираем скругления */
    outline: none;
    cursor: pointer;
    position: relative;
}
/* При включении галочки */
input[type="checkbox"]:checked {
    //background-color: #13275F; /* цвет заполнения при чекнутом */
}
/* Галочка через псевдоэлемент */
input[type="checkbox"]:checked::after {
    //content: '✔';
    color: white;
    font-size: 14px;
    position: absolute;
    top: 0;
}
.form-check-input[type="checkbox"] {
    border-radius: 0;
    outline: none;
}
.form-check-input:checked {
    background-color: #9CA4AA;
    border-color: #9CA4AA;
}
input[type="checkbox"]:focus {
    outline: none;
    box-shadow: none;
    border: 2px solid #9CA4AA;
}
input[type="text"]:focus {
    outline: none;
    box-shadow: none;
    border-bottom: 1px solid #DBDCDD;
}
.col:focus-within label {
    color: #D77431; /* новый цвет label при фокусе input */
}
.my-title {
    font-size: 20px;
    font-weight: bold;
    color: #13275F;
    margin-right: 10px;
}
.my-auth-data-text { font-size:14px; color:#666666; }
.block-auth-messages { padding:25px 15px; border:1px solid #DBDCDD; }
</style>

<template>
    <div class="row m-0">
        <div class="col-md-12" style="margin:30px 0;">
            <div v-if="pending">Загрузка...</div>
            <div v-else-if="error">Ошибка: {{ error.message }}</div>
            <div v-else>
                <div class="row">
                    <div class="col-md-1 ps-3 center-div" style="background-color:#132760; color:#FFF; border-top:1px solid #DBDCDD; border-left:1px solid #DBDCDD; border-bottom:1px solid #DBDCDD;">
                        <div>Test R</div>
                    </div>
                    <div class="col-md-1 center-div2" style="border-top:1px solid #DBDCDD; border-bottom:1px solid #DBDCDD;">
                        <div class="circle">
                            <i class="bi bi-camera"></i>
                        </div>
                    </div>
                    <div class="col-md-10" style="border-top:1px solid #DBDCDD; border-right:1px solid #DBDCDD; border-bottom:1px solid #DBDCDD;">
                        <form @submit.prevent="submitForm" class="max-w-md mx-auto">
                            <div class="row my-4">
                                <div class="col">
                                    <label for="id_country" class="w-20 text-right my-label" >Country</label>
                                    <input id="id_country" type="text" v-model="country" placeholder="need to add" class="no-border input-no-focus px-3 py-2 flex-1 my-input" />
                                    <div v-if="formErrors.country" class="my-text-red">
                                        <div v-for="(err, idx) in formErrors.country" :key="idx">{{ err }}</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="id_id_code" class="w-20 text-right my-label" >ID Code</label>
                                    <input id="id_id_code" type="text" v-model="id_code" placeholder="need to add" class="no-border px-3 py-2 flex-1 my-input" />
                                    <div v-if="formErrors.id_code" class="my-text-red">
                                        <div v-for="(err, idx) in formErrors.id_code" :key="idx">{{ err }}</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="id_facebook" class="w-20 text-right my-label" >Facebook</label>
                                    <input id="id_facebook" type="text" v-model="facebook" placeholder="need to add" class="no-border px-3 py-2 flex-1 my-input" />
                                    <div v-if="formErrors.facebook" class="my-text-red">
                                        <div v-for="(err, idx) in formErrors.facebook" :key="idx">{{ err }}</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="id_phones" class="w-20 text-right my-label" >Phones</label>
                                    <input id="id_phones" type="text" v-model="phones" placeholder="need to add" class="no-border px-3 py-2 flex-1 my-input" />
                                    <div v-if="formErrors.phones" class="my-text-red">
                                        <div v-for="(err, idx) in formErrors.phones" :key="idx">{{ err }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-4">
                                <div class="col">
                                    <label for="id_address" class="w-20 text-right my-label" >Address</label>
                                    <input id="id_address" type="text" v-model="address" placeholder="need to add" class="no-border px-3 py-2 flex-1 my-input" />
                                    <div v-if="formErrors.address" class="my-text-red">
                                        <div v-for="(err, idx) in formErrors.address" :key="idx">{{ err }}</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="id_birthday" class="w-20 text-right my-label" >Birthday</label>
                                    <input id="id_birthday" type="text" v-model="birthday" placeholder="need to add" class="no-border px-3 py-2 flex-1 my-input" />
                                    <div v-if="formErrors.birthday" class="my-text-red">
                                        <div v-for="(err, idx) in formErrors.birthday" :key="idx">{{ err }}</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="id_linkedin" class="w-20 text-right my-label" >Linked</label>
                                    <input id="id_linkedin" type="text" v-model="linkedin" placeholder="need to add" class="no-border px-3 py-2 flex-1 my-input" />
                                    <div v-if="formErrors.linkedin" class="my-text-red">
                                        <div v-for="(err, idx) in formErrors.linkedin" :key="idx">{{ err }}</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="id_mobile" class="w-20 text-right my-label" >Mobile</label>
                                    <input id="id_mobile" type="text" v-model="mobile" placeholder="need to add" class="no-border px-3 py-2 flex-1 my-input" />
                                    <div v-if="formErrors.mobile" class="my-text-red">
                                        <div v-for="(err, idx) in formErrors.mobile" :key="idx">{{ err }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-4">
                                <div class="col">
                                    <label for="id_postcode" class="w-20 text-right my-label" >Postcode</label>
                                    <input id="id_postcode" type="text" v-model="postcode" placeholder="need to add" class="no-border px-3 py-2 flex-1 my-input" />
                                    <div v-if="formErrors.postcode" class="my-text-red">
                                        <div v-for="(err, idx) in formErrors.postcode" :key="idx">{{ err }}</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="d-flex align-items-center">
                                        <label for="id_photo" class="w-20 text-right my-label mb-0">ID Photo</label>
                                        <i v-if="id_photo" class="bi bi-check-lg text-success ms-2" style="font-size: 24px;"></i>
                                        <i v-else class="bi bi-x-lg text-danger ms-2" style="font-size: 24px;"></i>
                                    </div>
                                    <div v-if="formErrors.id_photo" class="my-text-red">
                                        <div v-for="(err, idx) in formErrors.id_photo" :key="idx">{{ err }}</div>
                                    </div>
                                </div>
                                <div class="col"></div>
                                <div class="col">
                                    <label for="id_home" class="w-20 text-right my-label" >Home</label>
                                    <input id="id_home" type="text" v-model="home" placeholder="need to add" class="no-border px-3 py-2 flex-1 my-input" />
                                    <div v-if="formErrors.home" class="my-text-red">
                                        <div v-for="(err, idx) in formErrors.home" :key="idx">{{ err }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-4">
                                <div class="col-9 d-flex align-items-center">
                                    <label for="id_interests" class="my-label" style="" >Interests</label>

                                    <div class="d-flex gap-3 flex-wrap">
                                        <div class="">
                                            <input class="form-check-input my-input-interests" type="checkbox" id="higth-tech" v-model="interests" value="hight-tech" />
                                            <label class="form-check-label my-lbl-interests" for="higth-tech" style="" >Hight-tech</label>
                                        </div>
                                        <div class="">
                                            <input class="form-check-input my-input-interests" type="checkbox" id="medicine" v-model="interests" value="medicine" />
                                            <label class="form-check-label my-lbl-interests" for="medicine" >Medicine</label>
                                        </div>
                                        <div class="">
                                            <input class="form-check-input my-input-interests" type="checkbox" id="money" v-model="interests" value="money" />
                                            <label class="form-check-label my-lbl-interests" for="money" >Money</label>
                                        </div>
                                        <div class="">
                                            <input class="form-check-input my-input-interests" type="checkbox" id="sentences" v-model="interests" value="sentences" />
                                            <label class="form-check-label my-lbl-interests" for="sentences" >Sentences</label>
                                        </div>
                                        <div class="">
                                            <input class="form-check-input my-input-interests" type="checkbox" id="independent" v-model="interests" value="independent" />
                                            <label class="form-check-label my-lbl-interests" for="independent" >Independent</label>
                                        </div>
                                        <div class="">
                                            <input class="form-check-input my-input-interests" type="checkbox" id="other" v-model="interests" value="other" />
                                            <label class="form-check-label my-lbl-interests" for="other" >Other</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 d-flex justify-content-center align-items-center" >
                                    <button type="submit" class="btn btn-green" >Save</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex p-0" style="gap:25px; margin:0;" >
            <div class="block-auth-messages" style="flex:0 0 16.666%;">
                <div>
                    <div class="my-title">Auth data</div>

                    <div class="my-label2">Password</div>
                    <div class="my-auth-data-text" >change password</div>

                    <div class="my-label2">Email</div>
                    <a :href="`mailto:${profile?.email}`" class="my-email">{{ profile?.email }}</a>
                    <div class="my-auth-data-text" >change email</div>
                </div>
            </div>
            <div class="block-auth-messages" style="flex:1;" >
                <div>
                    <div class="my-title">Messages</div>
                </div>
            </div>
        </div>

    </div>
</template>

<script setup>
import { useRoute, useAsyncData, watch } from '#imports'

const route = useRoute()

const country   = ref('')
const id_code   = ref('')
const facebook  = ref('')
const phones    = ref('')
const address   = ref('')
const birthday  = ref('')
const linkedin  = ref('')
const mobile    = ref('')
const postcode  = ref('')
const id_photo  = ref('')
const home      = ref('')
const interests = ref([])

const profile = ref(null)
const error = ref(null)
const pending = ref(false)

async function loadProfile(id) {
pending.value = true
error.value = null

try {
        const { data } = await useFetch(`http://localhost:8000/api/profile/${id}`)
        profile.value = data.value
        if (profile.value) {
            country.value = profile.value.country || ''
            id_code.value = profile.value.id_code || ''
            facebook.value = profile.value.facebook || ''
            phones.value = profile.value.phones || ''
            address.value = profile.value.address || ''
            birthday.value = profile.value.birthday || ''
            linkedin.value = profile.value.linkedin || ''
            mobile.value = profile.value.mobile || ''
            postcode.value = profile.value.postcode || ''
            id_photo.value = profile.value.id_photo || ''
            home.value = profile.value.home || ''

            interests.value = profile.value.interests
            ? profile.value.interests.split(',')   // <-- превращаем строку в массив
            : []
        }
    } catch (e) {
        error.value = e
    } finally {
        pending.value = false
    }
}

// загрузка при первой отрисовке
loadProfile(route.params.id)

// следим за изменением id в урле
watch(() => route.params.id,
    (newId) => {
    if (newId) loadProfile(newId)
})

const formErrors = ref({})

async function submitForm() {
    const data = {
        country: country.value,
        id_code: id_code.value,
        facebook: facebook.value,
        phones: phones.value,
        address: address.value,
        birthday: birthday.value,
        linkedin: linkedin.value,
        mobile: mobile.value,
        postcode: postcode.value,
        id_photo: id_photo.value,
        home: home.value,
        interests: interests.value.join(',')  // "1,3,5"
    }

    formErrors.value = {} // очищаем предыдущие ошибки

    try {
        const response = await fetch(`http://localhost:8000/api/profile/${route.params.id}`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data),
            credentials: 'include' // если Laravel возвращает куки
        })

        if (!response.ok) {
            if (response.status === 422) {
                const resData = await response.json()
                formErrors.value = resData.errors // сохраняем ошибки
            } else {
                throw new Error('Ошибка при обновлении профиля')
            }
        } else {
            const result = await response.json()
            console.log('Обновлено:', result)
        }

        const result = await response.json()
        console.log('Обновлено:', result)
    } catch (error) {
        if (error.response && error.response._data.errors) {
            console.log(error.response._data.errors) // тут массив ошибок по каждому полю
        }
    }
}

// Указываем layout для страницы
definePageMeta({ layout: 'profile' })
</script>
