<template>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6 m-auto">
                <!-- {{ errors}} -->
                <div class="card">
                    <div class="card-header">
                        <router-link :to="{ name: 'List' }" class="btn btn-info"
                            >List</router-link
                        >
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="storeData()" action="">
                            <div class="mb-3">
                                <label for="name" class="form-label"
                                    >Name</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    placeholder="create name"
                                    v-model="form.name"
                                />
                                <span v-if="errors.name" class="text-danger"> {{ errors.name[0] }} </span>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label"
                                    >Email</label
                                >
                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    placeholder="type email"
                                    v-model="form.email"
                                />
                                <span v-if="errors.email" class="text-danger"> {{ errors.email[0] }} </span>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label"
                                    >Phone</label
                                >
                                <input
                                    type="phone"
                                    class="form-control"
                                    id="phone"
                                    placeholder="type phone"
                                    v-model="form.phone"
                                />
                                <span v-if="errors.phone" class="text-danger"> {{ errors.phone[0] }} </span>
                            </div>
                            <div class="md-3">
                                <label for="gender">Gender</label>
                                <select
                                    name="gender"
                                    class="form-control"
                                    id="gender"
                                    v-model="form.gender"
                                >
                                    <option value="" selected>
                                        Select One
                                    </option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <span v-if="errors.gender" class="text-danger"> {{ errors.gender[0] }} </span>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "Add",
    data() {
        return {
            form:{
                name:'',
                email:'',
                phone:'',
                gender:'',
            },
            errors:[],
        }
    },
    methods: {
        storeData(){
            // console.log(this.form);
            axios.post('/api/students/',this.form)
            .then(res => {
                // console.log(res.status);
                if (res.status === 200) {
                    this.form = ''
                    this.errors = ''

                }
            })
            .catch(err => {
                this.errors = err.response.data.errors;
                // console.error(err.response.data.errors);
            })
        }
    },
};
</script>
<style lang=""></style>
