<template>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6 m-auto">
                <div class="card">
                    <div class="card-header">
                        <router-link :to="{ name: 'List' }" class="btn btn-info"
                            >List</router-link
                        >
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                                >Email address</label
                            >
                            <input
                                type="email"
                                class="form-control"
                                id="exampleFormControlInput1"
                                placeholder="name@example.com"
                            />
                        </div>
                        <div class="mb-3">
                            <label
                                for="exampleFormControlTextarea1"
                                class="form-label"
                                >Example textarea</label
                            >
                            <textarea
                                class="form-control"
                                id="exampleFormControlTextarea1"
                                rows="3"
                            ></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "Add",
};
</script>
<style lang=""></style>
