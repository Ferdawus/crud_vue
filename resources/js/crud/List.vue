<template>
    <div>
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <router-link :to="{name:'Add'}" class="btn btn-primary">Add</router-link>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered border-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';

export default {
    data() {
        return {
            students:[],
        }
    },
    mounted() {
        this.fetchData();
    },
    methods: {
        fetchData(){
            axios.get("/api/students")
        .then(res => {
            this.students = res.data
            console.log(res)
        })
        .catch(err => {
            console.error(err);
        })
        }
    },
};
</script>
<style></style>
