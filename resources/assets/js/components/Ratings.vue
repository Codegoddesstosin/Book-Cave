<template>
  <div>
        <form @submit.prevent="addRatings" class="mb-3">
      
          <div class="form-group">

            <label for="recipient-name" class="col-form-label">Rate it!:</label>

         <star-rating v-model="Bookreview.rating">
            </star-rating>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Tell us More!:</label>
            <textarea class="form-control" v-model="Bookreview.description"  id="message-text"></textarea>
          </div>
          
          <input type="hidden" v-model="Bookreview.book_id" value="{{ $book->id}}">
          <button type="submit" class="button">Submit</button>

        </form>
      </div>
</template>

<script>
    export default {
       props: [ 'book', 'url'],
       data ()
       {
           return {
               Bookreview: {}

           }
       },

	created() {
  			this.addRatings(); 
  		},
  		


       methods: {

          addRatings()
          {
                alert('now working")
              console.log('new')
              this.Bookreview.book_id = this.book_id;
              axios.get(this.url, this.Bookreview)
              .then(data => {
                   location:reload();

              })
              .catch(error => {
                  console.log(error);
              })


          }
       }

       }

</script>


<script src="https://unpkg.com/vue-star-rating/dist/star-rating.min.js"></script>