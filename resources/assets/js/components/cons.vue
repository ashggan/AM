<template>
    <div class="row mt-5">
        <div class="card mt-2" style="width:100%" v-for="(con, id) in cons" :key="id" >
            <div class="card-body">
                <h5 class="card-title">{{cons.subject}}  </h5>
                <h6 class="card-subtitle mb-2 text-muted">{{con.email}}  </h6>
                <p class="card-text"> {{con.msg}} </p>
                <button @click="del(con.id)" class="btn btn-dark">  <i class="fa fa-remove"></i></button>
            </div>
        </div>
     </div>
</template>

<script>
export default {
data(){
    return{
        cons :[]
    }
}, 
mounted(){
    this.getall();
    console.log('live')
},
methods:{
    getall(){
        fetch('/contact/all')
        .then(res => res.json())
        .then(res=>{
             this.cons = res;
            console.log(this.cons);

        })
    },
    del(id){
        axios.delete('/contact/del/'+id)
        .then(res=>{
            this.getall();
            console.log('deleted');
        })
    }
}

}
</script>
