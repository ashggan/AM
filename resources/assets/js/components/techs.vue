</<template>
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-10 offset-md-1 mb-5">
            <h2>Techs ( {{techs.length}} ) </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row" v-show="!editData">
                    <!-- <form> -->
                    <div class="col-md-11">
                        <div class="form-group">
                            <input type="text" class="form-control" v-model="tech.name" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <button class="btn btn-dark " type="submit" @click.prevent="store()"><i class="fa fa-plus fa-lg"></i></button>
                        </div>
                    </div>
                    <!-- </form> -->
                </div>
                <div class="row" v-show="editData">
                    <!-- <form> -->
                    <div class="col-md-10">
                        <div class="form-group">
                            <input type="text" class="form-control" v-model="editing.name" >
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <button class="btn btn-dark " type="submit" @click.prevent="update()"><i class="fa fa-check fa-lg"></i></button>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <button class="btn btn-dark " type="submit" @click="add()"><i class="fa fa-plus fa-lg"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card ">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" v-for="tech in techs">
                        <div class="row">
                           <div class="col-md-10 ">{{tech.name}} </div>
                            <div class="col-md-1 crud"> 
                                <button class="btn btn-dark " type="submit" @click="edit(tech)"><i class="fa fa-edit fa-lg"></i></button>
                            </div>
                            <div class="col-md-1 crud"> 
                                <button class="btn btn-dark " type="submit" @click="del(tech)"><i class="fa fa-remove fa-lg"></i></button>
                            </div>
                        </div>
                        
                        </li>
                </ul>
                </div>
            </div>
        </div>
    </div>     
 </template>
 
 <script>
 export default {
    data(){
        return {
        editData : false,
        editing: {name:'',id:''},
        url:'/techs/',
        techs : [],
        tech :{ name:'' },
        deldata: {id:''},
        }   
    },
    mounted(){
        this.getAll();
    },
    methods :{
        getAll(){
            fetch(this.url)
            .then(res => res.json())
            .then(res => {
                this.techs = res.data;
            });
        },
        store(){
            axios.post(this.url,this.tech)
            .then(res =>{
                console.log(res);
                this.getAll();
            })
        },
        edit(tech){
            this.editData = true;
            this.editing.id = tech.id;
            this.editing.name = tech.name;
        },
        update(){
            axios.put(this.url+this.editing.id,this.editing)
            .then(res =>{
                this.getAll();
            });
        },
        del(tech){
            this.deldata.id = tech.id;
            axios.delete(this.url+this.deldata.id,this.deldata)
            .then(res => {
                this.getAll();
            });
        },
        add(){
            this.editData =false;
        }
    }
 }
 </script>
 