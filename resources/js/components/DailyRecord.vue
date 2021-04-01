<template>
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daily Records</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Date</th>
                      <th>FBS</th>
                      <th>Breakfast</th>
                      <th>Nuts</th>
                      <th>Lunch</th>
                      <th>RBS</th>
                      <th>Fruits</th>
                      <th>Dinner</th>
                      <th>Comment</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="user in users.data" :key="user.userid">
                      <td>{{ user.dmNumber }}</td>
                      <td>{{ user.name }}</td>
                      <td>{{ user.recDate }}</td>
                      <td>{{ user.fbs }}</td>
                      <td>{{ user.Breakfast }}</td>
                      <td>{{ user.nuts }}</td>
                      <td>{{ user.lunch }}</td>
                      <td>{{ user.rbs }}</td>
                      <td>{{ user.fruits }}</td>
                      <td>{{ user.dinner }}</td>
                      <td>
                        <a href="#" @click="doctorComment(user)" data-toggle="modal" data-target="#addNew">
                          <i class="fas fa-comment-medical"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <pagination :data="users" @pagination-change-page="getResults"></pagination>
              </div>
            </div>
            <!-- /.card -->
          </div>

        <div class="modal fade" id="addNew" tabindex="-1" aria-labelledby="addNewLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewLabel">doctorComment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form @submit.prevent="addComment">
                <div class="modal-body">

                  <input v-model="form.userid" type="hidden" name="userid">

                  <div class="form-group">
                    <input v-model="form.name" type="text" name="name" placeholder="Name"
                        class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                    <has-error :form="form" field="name"></has-error>
                    </div>

                    <div class="form-group">
                    <textarea v-model="form.doctorComment" type="text" name="doctorComment" placeholder="Write Your Comment Here..."
                        class="form-control" :class="{ 'is-invalid': form.errors.has('doctorComment') }"></textarea>
                    <has-error :form="form" field="doctorComment"></has-error>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
            </div>
        </div>
    </div>
        </div>
</template>

<script>
    export default {
        data(){
          return{
             users: {},
             form: new Form({
                userid: '',
                name: '',
                doctorComment: '',
             })

          }
        },
        methods: {
          getResults(page = 1) {
            axios.get('api/dailyrecord?page=' + page)
              .then(response => {
                this.users = response.data
              });
          },
          addComment(){
              this.form.post('api/doctor')
              .then(()=>{
                 $('#addNew').modal('hide')
                    toast.fire({
                        icon: 'success',
                        title: 'Comment Sent!'
                        })
              })
          },
          doctorComment(user){
              this.form.fill(user)
          },
          loadUsers(){
              axios.get('api/dailyrecord')
              .then((res) => {
                this.users = res.data
              })
           }
        },
        mounted() {
           this.loadUsers();
            
        }
    }
</script>
