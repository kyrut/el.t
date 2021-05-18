<template>
    <div class="uk-border-rounded uk-padding-small uk-box-shadow-small uk-margin-bottom">
        <form @submit.prevent="commentValid">
            <fieldset class="uk-fieldset">
                <div class="uk-flex uk-flex-wrap-between">
                    <div class="uk-width-1-1">
                        <div class="uk-margin">
                            <input class="uk-input" type="text" v-model.trim="form.guest_name" placeholder="Имя">
                            <div v-if="this.$v.form.guest_name.$dirty && !this.$v.form.guest_name.required" class="uk-text-danger uk-text-small">
                                Поле имя должно быть заполнено.
                            </div>
                            <div v-if="this.$v.form.guest_name.$dirty && !this.$v.form.guest_name.nameValid" class="uk-text-danger uk-text-small">
                                Поле имя не должно содержать цифр и латинских символов
                            </div>
                            <div v-if="this.$v.form.guest_name.$dirty && !this.$v.form.guest_name.minLength" class="uk-text-danger uk-text-small">
                                Поле имя должно содержать минимум 3 символа
                            </div>
                        </div>
                        <div class="uk-margin">
                            <textarea class="uk-textarea" rows="1" v-model.trim="form.comment" placeholder="Ваш комментарий"></textarea>
                            <div v-if="this.$v.form.comment.$dirty && !this.$v.form.comment.required" class="uk-text-danger uk-text-small">
                                Поле комментарий должно быть заполнено.
                            </div><div v-if="this.$v.form.comment.$dirty && !this.$v.form.comment.minLength" class="uk-text-danger uk-text-small">
                            Поле комментарий должно содержать минимум 1 символ
                        </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-bottom">
                    <button type="submit" class="uk-button uk-button-default">
                        <button-spin-component v-if="spinLoad"></button-spin-component>
                        <span v-else>Опубликовать</span>
                    </button>
                </div>

            </fieldset>
        </form>
    </div>
</template>

<script>
import ButtonSpinComponent from "../ButtonSpinComponent";
import { required, minLength, helpers } from 'vuelidate/lib/validators'
const nameValid = helpers.regex('nameValid', /^[А-я ]{1,}$/);
export default {
    name: "AddCommentComponent",
    components:{
        ButtonSpinComponent
    },
    data:()=>({
        spinLoad:false,
        form:{
            guest_name:'',
            comment:'',
        },
        msg:null
    }),
    validations:{
        form:{
            guest_name:{
                nameValid,
                required,
                minLength: minLength(3)
            },
            comment:{
                required,
                minLength: minLength(1)
            }
        }
    },
    methods:{
        commentValid(){
            this.$v.form.$touch()
            if(!this.$v.form.$error){
                this.addComment(this.$route.params.id)
            }else{
                console.log("не прошла");
            }
        },
        onReset() {
            this.form.comment = null
            this.form.guest_name = null
        },
        addComment(id){
            axios.post('/api/posts/'+id+'/comments', this.form, {
                    headers:{
                        'Content-type':'application/json'
                    }
                })
                .then(
                    this.spinLoad = true
                )
                .then(res => {
                    this.spinLoad = false
                    this.msgLoad = true
                    this.msg = res.data.comment
                    if(this.msg){
                        this.$emit('addToComment')
                        this.$v.form.$reset()
                    }
                    this.onReset()
                })
                .catch(err =>{

                })
        }
    }
}
</script>

<style scoped>

</style>
