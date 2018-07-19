<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- Styles -->
    <link href="<?php echo base_url(); ?>asset/css/app.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>asset/js/app.js"></script>
</head>
<body>
    <div>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="http://web.facebook.com/marlontamo" target="_blank">
                        Codeigniter + Vue JS (simple crud system)-  <small> By Marloonie</small>
                    </a>
                </div>                
            </div>
        </nav>
        <div id="app">
            <!-- contents starts here  -->
            <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Products Items</div>

                <div class="panel-body">
                    <h3 v-if="loading" class="text-info">Loading...</h3>
                    <h3 v-if="message" class="text-success">{{ message.text }}</h3>
                    <form id="itemsForm" class="form-horizontal" v-on:submit.prevent="validateBeforeSubmit">
                    
                        <div v-bind:class="{'form-group':true, 'col-md-8':true, 'col-md-offset-2' : true, 'has-error':errors.has('code')}">
                            <label for="code" class="control-label">Code</label>
                            <input type="text" v-validate="'required|numeric'" id="code" v-model="newItems.code" name="code" class="form-control input-sm">
                            <span v-show="errors.has('code')" class="text-danger">{{ errors.first('code') }}</span>
                        </div>
                        <div v-bind:class="{'form-group':true, 'col-md-8':true, 'col-md-offset-2' : true, 'has-error':errors.has('price')}">
                            <label for="price" class="control-label">Price</label>
                            <input type="text" v-validate="'required|numeric'" id="price" v-model="newItems.price" name="price" class="form-control input-sm">
                            <span v-show="errors.has('price')" class="text-danger">{{ errors.first('price') }}</span>
                        </div>
                        <div v-bind:class="{'form-group':true, 'col-md-8':true, 'col-md-offset-2' : true, 'has-error':errors.has('name')}">
                            <label for="name" class="control-label">Name</label>
                            <input type="text" v-validate="'required'" id="name" v-model="newItems.name" name="name" class="form-control input-sm">
                            <span v-show="errors.has('name')" class="text-danger">{{ errors.first('name') }}</span>
                        </div>
                        <div class="form-group col-md-8 col-md-offset-2">
                            <button v-if="!onEdit" class="btn btn-primary btn-xs">Add New</button>
                            <button v-if="onEdit" class="btn btn-primary btn-xs">Update</button>
                            <button type="reset" class="btn btn-default btn-xs">Reset</button>
                            <button v-if="onEdit" v-on:click="createNew" class="btn  btn-xs btn-info">Create New</button>
                        </div>
                    </form>
                    <div class="col-md-12">
                        <h3>
                           List Products Items  and Details
                            <button v-on:click="deleteSelected" class="btn btn-xs btn-danger pull-right">Delete Selected</button>
                        </h3>
                    </div>
                    <table class="table table-stripped">
                        <tr>
                            <th><input type="checkbox" v-on:click="checkAll" v-model="selectedAll"></th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                        <tr v-for="row in rows">
                            <td><input type="checkbox" v-model="row.selected" v-on:click="checkSelectAll"></td>
                            <td>{{ row.code }}</td>
                            <td>{{ row.name }}</td>
                            <td>{{row.price}}</td>
                            <td>
                                <button class="btn btn-primary btn-xs" v-on:click="edit(row.id)">Edit</button>
                            </td>
                        </tr>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content ends here  -->
        </div>
    </div>

    <!-- Scripts -->
    <script src="<?php echo base_url('asset/js/vue/vue.min.js'); ?>"></script>
    <script src="<?php echo base_url(); ?>asset/js/vee-validate/vee-validate.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/axios/axios.min.js"></script>
    <script src= "<?php echo base_url(); ?>assets/asset/js/thisapp/home.js">
       
    </script>

</body>
</html>
