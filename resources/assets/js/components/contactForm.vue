<template>
    <div class="row contact">
        <div class="col-md-10" v-show="reply">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Thanks you!</strong> I will reply you within 24 hours 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <div class="col-md-10">
            <div class="form-group">
                <input type="email" v-model="contact.email" class="form-control" placeholder="Email" required >
            </div>
            <div class="form-group">
                <input type="text" v-model="contact.subject" class="form-control"   placeholder="Subject">
            </div>
            <div class="form-group">
                <textarea  rows="4" class="form-control" v-model="contact.msg" placeholder="Message" ></textarea>
            </div>
            <div class="form-group"> 
                <button type="submit" class="btn btn-dark btn-block" @click="send">
                    <i class="fa fa-send mr-3"></i> Send</button>
            </div>   
        </div>
      </div> 
</template>

<script>
export default {
data(){
    return{
     reply:false,  contact :  {email :'' , subject :'' ,msg : ''} ,
    }
},
mounted(){
console.log('contact is good');
},
methods :{
send(){
    axios.post('/contact',this.contact)
    .then(res =>{
        if(res.success){
        this.reply =true;
        this.contact.msg ='';
        this.contact.email ='';
        this.contact.subject ='';
        }

    })
 }
}
}
</script>

