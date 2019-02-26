<template>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" v-model="project.name" class="form-control">
            </div>
            <div class="form-group">
                <label for="summery">Summery {{selectedImg.length}} </label>
                <textarea v-model="project.summery" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="features">features</label> 
                            <ul class="ist-groupl pl-0" >
                                <li class="list-group-item"   v-for="(feat,id) in project.features" :key="id" >
                                    <div class="row">
                                        <div class="col-md-12"></div>
                                        <div class="col-md-10">{{feat.feat}}</div>
                                        <div class="col-md-2">
                                            <a id="enter" class="btn btn-dark" @click="removeFeat(id)"> <i class="fa fa-minus"></i></a>
                                        </div>
                                    </div>                              
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <input type="text" v-model="item" class="form-control" >  
                                        </div>
                                        <div class="col-md-2">
                                            <a id="enter" class="btn btn-dark" @click="addNewFeat()"> <i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>   
                                </li>
                            </ul>                                 
                        </div>        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="features">tech wrap-ups</label> 
                            <ul class="ist-groupl pl-0" >
                                <li class="list-group-item"  v-for="( wrap ,id ) in project.wraps" :key="id" >
                                    <div class="row">
                                        <div class="col-md-10">{{wrap.wrap}}</div>
                                        <div class="col-md-2">
                                            <a id="enter" class="btn btn-dark" @click="removeWrap(id)"> <i class="fa fa-minus"></i></a>
                                        </div>
                                    </div>            
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <input type="text" v-model="wrap" class="form-control" >  
                                        </div>
                                        <div class="col-md-2">
                                            <a id="enter" class="btn btn-dark" @click="addNewWrap()"> <i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>   
                                </li>
                            </ul>                                 
                        </div> 
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="show-imgs">
                    <vue-select-image :dataImages="images" :h="h" :w="h" 
                    :isMultiple="true" :selectedImages="initialSelected"
                    @onselectmultipleimage="selectedImg">
                    </vue-select-image>  
                    </div>
                                            
                </div>    
            </div>     
            <div class="form-group">
                <label for="techs">Select techs </label>
                <!-- <select class="form-control"  multiple v-model="project.techs">
                    <option  v-for="( tech, id) in techs " :key="id" :value="tech.id"> {{tech.name}} </option>
                </select>    -->
                    <multiselect v-model="value" label="name" track-by="name"  :options="options" :multiple="true" :close-on-select="false" :clear-on-select="false"></multiselect>
            </div>       
            <div class="form-group" v-show="addNew">
                <button class="btn btn-dark btn-block" @click.prevent="store">ADD NEW</button>
            </div>
            <div class="form-group" v-show="!addNew">
                <button class="btn btn-dark btn-block" @click.prevent="update">UPDATE</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
data(){
    return {
        addNew:true,editId:'',
        item:'',wrap:'',id:0,id2:0,value:'',options:[],
        project:{ name:'',summery:'',wraps:[],techs:[] ,features:[],screenshot:[]},
        techsUrl :'/techs',techs:[],imgUrl:'/gallery/imgs',imgs:[],images:[],
        initialSelected:[], initalImg:[],
        h:'60px' , finalImg :[],data:[],
        editData:{ title:'',summery:'',wraps:[],techs:[] ,features:[],screenshot:[]},
    }
},
props:[
    'edited',
    'shots'
],
created(){
    if(!this.shots) return;
    this.data = JSON.parse(this.shots);
    this.data.forEach(img => {
        var selected ={id:'', src:'',alt:''};
        selected.id = img.id;
        selected.src = img.src;
        selected.alt = img.alt;
        this.initialSelected.push(selected);
    });

     },
mounted(){
    this.getTechs();
    this.getImg();
    this.checkEdit();
},
methods:{
    checkEdit(){
        if(!this.edited) return;
        this.addNew = false;
            fetch('/projects/show/'+this.edited)
            .then(res =>res.json())
            .then(res =>{
            this.project.name = res.title;
            this.project.summery = res.summery;
            this.project.features = Object.values(res.features);
            this.project.wraps =   Object.values(res.wraps);  
            this.value = res.techs;
            this.editId = res.id;
        });  
    },
    update(){
        this.project.techs = this.value.map(val=>val["id"]);

        // console.log(this.project.techs);
        axios.put('/projects/'+this.editId,this.project)
        .then(res => console.log("updated"));
    },
    getTechs(){
        fetch(this.techsUrl)
        .then(res=>res.json())
        .then(res =>{
            this.techs = res.data;
            this.options = this.techs.map(tech => tech);
            // console.log(this.options);
        });
    },
    getImg(){
        fetch(this.imgUrl)
        .then(res=>res.json())
        .then(res=>{
            this.imgs =res.data;
            this.dataImages();
            this.selectedImages();
        })
    },
    addNewWrap(){
        var wrap= this.wrap ;
        if(!this.wrap || !this.wrap.trim()) return  ;
        this.project.wraps.push({id:++this.id2,wrap: this.wrap});
        this.wrap='';
    },
    removeWrap(wrap){
        this.project.wraps.splice(wrap,1);
    },
    addNewFeat(){
        var item= this.item ;
        if(!this.item || !this.item.trim() ) return;
        this.project.features.push({id:++this.id,feat: this.item});
        this.item='';
    },
    removeFeat(item){
        this.project.features.splice(item,1);
    },
    store(){
        this.project.techs = this.value.map(val=>val["id"]);
        // console.log(this.project.techs);
        axios.post('/projects',this.project)
        .then(res=>{
            console.log('done');
        });
    },
    dataImages(){
        this.imgs.forEach(img => {
            var image = {id:'',src:'',alt:''};     
            image.id = img.id;
            image.src = "/gallery/"+img.name;
            image.alt = img.name;
            this.images.push(image);
        });
    },
    selectedImg(selected){
        this.project.screenshot =  selected.map(img => img.id) ;
    },
    selectedImages (){} 
  
},
   
}
</script>

