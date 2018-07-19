 var apiUrl = 'http://localhost/login-reg/';                
    Vue.use(VeeValidate);
    var app = new Vue({
        el: '#app',
        data: {
            newItems: {
                selected: false,
                code: '',
                price: '',
                name: ''
            },
            rows: [],
            onEdit: false,
            selectedAll: false,
            delete: [],
            loading: true,
            message: []
        },
        created() {
            this.getRows()
        },
        methods: {
            validateBeforeSubmit: function() {
                var vm = this
                this.$validator.validateAll().then(function(isValid) {
                    if(!isValid) return;
                    vm.startLoading()
                    var url = apiUrl+'home/insert'
                    var message = 'Items added successfully'

                    if(vm.onEdit) {
                        url = apiUrl+'home/update/'+vm.onEdit
                        message = 'Items Updated successfully'
                    } 

                    axios.post(url,
                    new FormData($('#itemsForm')[0])).then(function(response) {
                        vm.getRows()
                        vm.createNew()
                        vm.showMessage(message)
                        vm.endLoading()                        
                    }).catch(function(e) {
                        
                    })
                });
            },
            getRows: function() {
                axios.get(apiUrl+'home/get_data').then(
                    result => {
                        this.rows = result.data,
                        this.endLoading()
                    }
                );
            },
            createNew: function() {               
                this.onEdit = false
                this.newItems = {
                    selected:false,
                    code:'', 
                    price:'',
                    name:''
                }
            },
            edit: function(id) {
                this.onEdit = id
                this.startLoading()
                this.newItems = {
                    selected:false,
                    code:'',
                    price:'', 
                    name:''
                }
                axios.get(apiUrl+'home/edit/'+id).then(
                    result => {
                        this.newItems.code = result.data.code,
                        this.newItems.price = result.data.price,
                        this.newItems.name = result.data.name,
                        this.endLoading()
                    }
                );
            },
            checkAll: function() {
                if(this.selectedAll) {
                    this.selectedAll = true;
                    this.rows.forEach(function(row) {
                        row.selected = true
                    })
                } else {
                    this.selectedAll = false;
                    this.rows.forEach(function(row) {
                        row.selected = false
                    })
                }
            },
            checkSelectAll: function() {
                var check = true;
                this.rows.forEach(function (row) {
                    if (row.selected == false) {
                        check = false;
                    } 
                });
                this.selectedAll = check;
            },
            deleteSelected: function() {
                var conf = confirm("Are you sure to delete?");
                if(!conf) return true;
                var vm = this;
                this.startLoading()
                this.rows.forEach(function(row) {
                    if(row.selected) {
                        vm.delete.push({id:row.id})
                    }
                })
                axios.post(apiUrl+'home/delete/',this.delete).then(function(response) {
                        
                    vm.getRows()
                    vm.selectedAll = false
                    vm.createNew()
                    vm.showMessage('Deleted items successfully')
                    vm.endLoading()
                })
                
            },
            startLoading: function() {
                this.loading = true
            },
            endLoading: function() {
                this.loading = false
            },
            showMessage: function(message, status = 'success') {
                this.message = {text:message, status:status}
                this.removeMessage()
            },
            removeMessage: function() {
                var msg = this
                setTimeout(function() {
                    msg.message = {text:'', status:''}
                }, 5000)
            }
        }
    })