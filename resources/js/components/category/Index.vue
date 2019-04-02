<template>
    <div>
        <section class="section">
            <div class="container">
                <div class="columns">
                    <div class="column is-3">
                        <p class="subtitle">Categories</p>
                        <a class="button is-primary is-block" @click="showModal">Add</a>
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin aliquet gravida justo et ultricies. 
                            Mauris sodales pellentesque diam ut varius. Nulla condimentum velit sit amet turpis fermentum dictum. 
                            eu tortor. Sed at suscipit erat.</p>
                    </div>
                    <div class="column is-9">
                        <div class="columns is-multiline">
                            <div class="column is-4" v-for="(category, index) in categories" :key="index">
                                <div class="card">
                                    <div class="card-icons">
                                        <a class="button is-info"><i class="fa fa-pencil"></i></a>
                                        <a class="button is-danger"><i class="fa fa-trash"></i></a>
                                    </div>
                                    <div class="card-image">
                                        <figure class="image is-4by3">
                                            <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                                        </figure>
                                    </div>
                                </div>
                                <p class="subtitle is-capitalized" style="margin-top:.5rem;">{{ category.name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal" :class="{'is-active':isActive}">
            <div class="modal-background"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">Category</p>
                    <button class="delete" @click="closeModal" aria-label="close"></button>
                </header>
                <section class="modal-card-body">
                    <form>
                        <div class="field">
                            <label class="label">Name</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Text input">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Display Order</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Integer input">
                            </div>
                        </div>
                        <vue-dropzone ref="myVueDropzone" id="dropzone" :options="dropzoneOptions"></vue-dropzone>
                    </form>
                </section>
                <footer class="modal-card-foot">
                    <button class="button is-success">Save changes</button>
                    <button class="button" @click="closeModal">Cancel</button>
                </footer>
            </div>
        </div>
    </div>
</template>

<script>
import vue2Dropzone from 'vue2-dropzone';
import 'vue2-dropzone/dist/vue2Dropzone.min.css';
export default {
    components: {
        vueDropzone: vue2Dropzone
    },
    data() {
        return {
            dropzoneOptions: {
                url: '/api/add-image',
                thumbnailWidth: 150,
                maxFilesize: 0.5,
                maxFiles: 1,
                acceptedFiles:'image/*',
                addRemoveLinks: true, 
                headers: { 
                    'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
                },
                success(file, res) {
                    console.log(res);
                    console.log(file);
                    file.filename = res;
                }
            },
            categories: {},
            isActive: false
        }
    },
    mounted() {
        this.getCategories();
    },
    methods: {
        getCategories() {
            axios.get('/api/categories')
            .then(response => {
                // handle success
                this.categories = response.data.data;
            })
            .catch(error => {
                // handle error
                console.log(error);
            });
        },
        addCategory() {
            let files = this.$refs.dropzone.getAccesptedFiles();
            console.log(files);
            axios.post('/api/category')
            .then(response => {
                // handle success
            })
            .catch(error => {
                // handle error
                console.log(error);
            });
        },
        showModal() {
            this.isActive = true
        },
        closeModal() {
            this.isActive = false
        }
    },
}
</script>