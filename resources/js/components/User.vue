<template>
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users Table</h3>

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
                    <tr v-for="user in users" :key="user.dmNumber">
                      <td>{{ user.dmNumber }}</td>
                      <td>{{ user.name }}</td>
                      <td>{{ user.recDate.recDate }}</td>
                      <td>{{ user.fbs.fbs }}</td>
                      <td>{{ user.breakfast.breakfast }}</td>
                      <td>{{ user.nuts.nuts }}</td>
                      <td>{{ user.lunch.lunch }}</td>
                      <td>{{ user.rbs.rbs }}</td>
                      <td>{{ user.fruits.fruits }}</td>
                      <td>{{ user.dinner.dinner }}</td>
                      <td>
                        <a href="#">
                          <i class="fas fa-comment-medical"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
</template>

<script>
    export default {
        data(){
          return{
             users: {}

          }
        },
        mounted() {
            axios.get('api/admin')
            .then((res) => {
              this.users = res.data.data
            })
        }
    }
</script>
