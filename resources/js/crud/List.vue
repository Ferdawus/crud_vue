<template>
    <div>
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <router-link
                                :to="{ name: 'Add' }"
                                class="btn btn-primary"
                                >Add</router-link
                            >
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
                                    <tr
                                        v-for="(student, index) in students"
                                        :key="index"
                                    >
                                        <th scope="row">{{ ++index }}</th>
                                        <td>{{ student.name }}</td>
                                        <td>{{ student.email }}</td>
                                        <td>{{ student.phone }}</td>
                                        <td>{{ student.gender }}</td>
                                        <td>
                                            <router-link
                                                :to="{
                                                    name: 'Edit',
                                                    params: { id: student.id },
                                                }"
                                                class="btn btn-primary"
                                                >Edit</router-link
                                            >
                                            <a
                                                href=""
                                                @click.prevent="
                                                    destroy(student.id)
                                                "
                                                class="btn btn-danger ms-3"
                                                >Delete</a
                                            >
                                        </td>
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
import axios from "axios";

export default {
    data() {
        return {
            students: [],
        };
    },
    mounted() {
        this.fetchData();
    },
    methods: {
        fetchData() {
            axios
                .get("/api/students")
                .then((res) => {
                    this.students = res.data;
                    // console.log(res.data);
                })
                .catch((err) => {
                    console.error(err);
                });
        },
        destroy(id) {
            if (!window.confirm("Are You share to delete")) {
                return;
            }
            axios
                .delete("/api/students/" + id)
                .then((res) => {
                    // console.log(res)
                    if (res.status === 200) {
                        this.fetchData();
                    }
                })
                .catch((err) => {
                    console.error(err);
                });
        },
    },
};
</script>
<style></style>
