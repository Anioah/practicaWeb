<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component desde Vue</div>

                    <div class="card-body">
                            <form >
                                    <input v-model="alumno.nombre" type="text" name="nombre" id="nombre" placeholder="nombre">
                                    <input v-model="alumno.apellido_paterno" type="text" name="apellido_paterno" id="apellido_paterno" placeholder="apellido paterno">
                                    <input v-model="alumno.apellido_materno" type="text" name="apellido_materno" id="apellido_materno" placeholder="apellido materno">
                                    <input v-model="alumno.sexo" type="text" name="sexo" id="sexo" placeholder="sexo">
                                    <input v-model="alumno.edad" type="number" name="edad" id="edad" placeholder="edad">
                                    <input type="button" value="Enviar" v-on:click="evento">
                            </form>
                            <div>
                                <ul class="list-group" v-for="alumno in lista_alumnos" :key="alumno.id">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                       {{alumno.nombre}} {{alumno.ap_paterno}} {{alumno.ap_materno}}: Sexo {{alumno.sexo}}
                                        <span class="badge badge-primary badge-pill">{{alumno.edad}}</span>
                                    </li>
                                </ul>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:["alumnos"], 
        mounted() {
            this.lista_alumnos = JSON.parse(this.alumnos)
            console.log(this.lista_alumnos)
        },
        data(){
            return {
                lista_alumnos:null,
                alumno:{
                        nombre:"",
                        apellido_paterno:"",
                        apellido_materno:"",
                        sexo:"",
                        edad:""
                }

            }
        },
        methods:{
            evento:function(){
                let self = this;
                axios.post('/info', this.alumno)
                .then(function (response){
                    self.lista_alumnos.push(response.data);
                })
                .catch(function (error){
                    console.log(error);
                });
            }
        }
    }
</script>
