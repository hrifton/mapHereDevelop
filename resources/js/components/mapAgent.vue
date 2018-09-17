<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">MapAgent</div>

                    <div class="card-body">
                        <div id="map" style="width: 100%; height: 600px; background: grey" />.
                    </div>
                </div>
            </div>
        </div>
         <div>
<b-form-group class="col-3" label="Select Agent" >
   <b-form-select v-model="selected">
  <option v-for="item in items" v-bind:value="item.id">
    {{ item.name +"  "+item.firstname }}
  </option>
</b-form-select>
</b-form-group>
 
  </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                selected:'',
                    items:[],
                    agent:'',
              
            }
        },
        mounted() {
         axios.get('/agent').then(response=>(this.items=response.data));
        
      },
      watch:{
          selected:function(value){
              axios.get('/agent/'+value).then(response=>(this.agent=response.data));
                
          },
          agent:function(value){
              
		addInfoBubble(map,value);
            
          }
      }



    }
</script>
