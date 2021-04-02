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
                      <!-- <th>ID</th> -->
                      <th>Name</th>
                      <th>Test Date</th>
                      <th>C-Peptide</th>
                      <th>HbA1c</th>
                      <th>Cholesterol</th>
                      <th>HDL</th>
                      <th>LDL</th>
                      <th>Triglycerides</th>
                      <th>Chol/HDL Ratio</th>
                      <th>Creatinine</th>
                      <th>TSH</th>
                      <th>Next Test</th>
                      <th>Status</th>
                      <th>Modify</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="user in users.data" :key="user.userid">
                      <!-- <td>{{ user.dmNumber }}</td> -->
                      <td>{{ user.name }}</td>
                      <td>{{ user.testDate }}</td>
                      <td>{{ user.Cpeptide }}</td>
                      <td>{{ user.hba1c }}</td>
                      <td>{{ user.cholesterol }}</td>
                      <td>{{ user.hdl }}</td>
                      <td>{{ user.ldl }}</td>
                      <td>{{ user.tg }}</td>
                      <td>{{ user.ratio }}</td>
                      <td>{{ user.cr }}</td>
                      <td>{{ user.tsh }}</td>
                      <td>{{ user.nextTest }}</td>
                      <td>Inform or Not</td>
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
            axios.get('api/inv?page=' + page)
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
              axios.get('api/inv')
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
