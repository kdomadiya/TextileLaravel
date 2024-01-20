<template>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
      <Sidebar></Sidebar>
      <!-- / Menu -->
      <!-- Layout container -->
      <div class="layout-page">
       <NavBar></NavBar>
<!--/////////////////////////////    form     //////////////////////////////-->
        <!-- Content wrapper -->
        <div class="container-xxl flex-grow-1 container-p-y">
          <form @submit.prevent="createItems">
          <div class="row invoice-add">
            <!-- Invoice Add-->
            <div class="col-lg-9 col-12 mb-lg-0 mb-4">
              <div class="card invoice-preview-card">
                <div class="card-body">
                  <div class="row m-sm-4 m-0">
                    <div class="col-md-7 mb-md-0 mb-4 ps-0">
                      <div class="d-flex svg-illustration mb-4 gap-2 align-items-center">
                        <div class="app-brand-logo demo">
                          <svg
                            width="32"
                            height="22"
                            viewBox="0 0 32 22"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                              fill="#7367F0"
                            ></path>
                            <path
                              opacity="0.06"
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                              fill="#161616"
                            ></path>
                            <path
                              opacity="0.06"
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                              fill="#161616"
                            ></path>
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                              fill="#7367F0"
                            ></path>
                          </svg>
                        </div>
                        <span class="app-brand-text fw-bold fs-4"> Vuexy </span>
                      </div>
                      <select
                        class="form-control select2"
                        name="group_id"
                        aria-label="Default select example"
                        v-model="order.account_id"
                       v-on:change="create">
                        <option selected>Open this select Account</option>
                        <option v-for="account in accounts" :value="account.id">
                          {{ account.name }}
                        </option>
                      </select>
                      <!-- <p class="mb-2">Office 149, 450 South Brand Brooklyn</p>
                      <p class="mb-2">San Diego County, CA 91905, USA</p>
                      <p class="mb-3">+1 (123) 456 7891, +44 (876) 543 2198</p> -->
                    </div>
                    <div class="col-md-5">
                      <dl class="row mb-2">
                        <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end ps-0">
                          <span class="h4 text-capitalize mb-0 text-nowrap">Quotation</span>
                        </dt>
                        <dd
                          class="col-sm-6 d-flex justify-content-md-end pe-0 ps-0 ps-sm-2"
                        >
                          <div class="input-group input-group-merge disabled w-px-150">
                            <span class="input-group-text">#</span>
                            <input
                              type="text"
                              class="form-control"
                              placeholder="3905"
                              value="3905"
                              id="invoiceId"
                            />
                          </div>
                        </dd>
                        <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end ps-0">
                          <span class="fw-normal">Date:</span>
                        </dt>
                        <dd class="col-sm-6 d-flex justify-content-md-end pe-0 ps-0 ps-sm-2" >
                          <input
                            type="date"
                            class="form-control w-px-150 date-picker flatpickr-input"
                            placeholder="YYYY-MM-DD"
                            v-model="order.date"
                          />
                        </dd>
                      </dl>
                    </div>
                  </div>
                  <hr class="my-3"/>
                <!-- ------------------------------------------------------>
                <div v-for="(item, index) in orderItems" :key="index" >
                    <div class="mb-3" data-repeater-list="group-a">
                      <div class="repeater-wrapper pt-0 pt-md-4"
                        data-repeater-item=""
                        style="">
                        <div class="d-flex border rounded position-relative pe-0">
                          <div class="row w-100 p-3">
                        <div class="col-md-6 col-12 mb-md-0 mb-3">
                            <p class="mb-2 repeater-title">Item</p>
                        <select
                        class="form-control select2"
                        name="group_id"
                        :id="'product_' + index"
                        aria-label="Default select example"
                        v-model="item.product_id">
                        <option selected>Open this select Account</option>
                        <option v-for="product in products" :value="product.id">
                          {{ product.name }}
                        </option>
                      </select>
                            </div>
                            <div class="col-md-3 col-12 mb-md-0 mb-3">
                              <p class="mb-2 repeater-title">Amount</p>
                              <input
                                type="number"
                                class="form-control invoice-item-price mb-3"
                                placeholder="00"
                                min="12"
                                :id="'amount_' + index"
                                v-model="item.unit_price" v-on:input="calculateSum"
                              />
                            </div>
                            <div class="col-md-2 col-12 mb-md-0 mb-3">
                              <p class="mb-2 repeater-title">Qty</p>
                              <input
                                type="number"
                                class="form-control invoice-item-qty"
                                placeholder="1"
                                min="1"
                                max="50"
                                :id="'quantity_' + index"
                                v-model="item.quantity" v-on:input="calculateSum"
                              />
                            </div>
                            <div class="col-md-1 col-12 pe-0">
                              <p class="mb-2 repeater-title">Price</p>
                              <p class="mb-0">
                              <input
                                type="text"
                                class="form-control invoice-item-qty"
                                placeholder="Price"
                                :id="'price_' + index"
                                :disabled="10"
                                v-model="item.price"/></p>
                            </div>
                          </div>
                          <div
                            class="d-flex flex-column align-items-center justify-content-between border-start p-2">
                            <button type="button" @click="removeItem(index)"> <i class="ti ti-x cursor-pointer" data-repeater-delete=""></i></button>
                            <div class="dropdown">
                              <i
                                class="ti ti-settings ti-xs cursor-pointer more-options-dropdown"
                                role="button"
                                id="dropdownMenuButton"
                                data-bs-toggle="dropdown"
                                data-bs-auto-close="outside"
                                aria-expanded="false"
                              >
                              </i>
                              <div
                                class="dropdown-menu dropdown-menu-end w-px-300 p-3"
                                aria-labelledby="dropdownMenuButton"
                              >
                                <div class="row g-3">
                                  <div class="col-12">
                                    <label for="discountInput" class="form-label"
                                      >Discount(%)</label>
                                    <input
                                      type="number"
                                      class="form-control"
                                      id="discountInput"
                                      min="0"
                                      max="100"
                                    />
                                  </div>
                                  <div class="col-md-6">
                                    <label for="taxInput1" class="form-label"
                                      >Tax 1</label
                                    >
                                    <select
                                      name="group-a[3][tax-1-input]"
                                      id="taxInput1"
                                      class="form-select tax-select">
                                      <option value="0%" selected="">0%</option>
                                      <option value="1%">1%</option>
                                      <option value="10%">10%</option>
                                      <option value="18%">18%</option>
                                      <option value="40%">40%</option>
                                    </select>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="taxInput2" class="form-label">Tax 2</label>
                                    <select
                                      name="group-a[3][tax-2-input]"
                                      id="taxInput2"
                                      class="form-select tax-select" >
                                      <option value="0%" selected="">0%</option>
                                      <option value="1%">1%</option>
                                      <option value="10%">10%</option>
                                      <option value="18%">18%</option>
                                      <option value="40%">40%</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="dropdown-divider my-3"></div>
                                <button
                                  type="button"
                                  class="btn btn-label-primary btn-apply-changes waves-effect">
                                  Apply
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                     </div>
                    <!-- ------ -->
                    <div class="row pb-4">
                      <div class="col-12">
                        <button
                          type="button"
                          class="btn btn-primary waves-effect waves-light"
                          data-repeater-create=""
                          @click="addItem" >
                          Add Item
                        </button>
                      </div>
                    </div>
                  <hr class="my-3" />
                  <div class="row p-0 p-sm-4">
                    <div class="col-md-6 mb-md-0 mb-3">
                      <div class="d-flex align-items-center mb-3">
                        <label for="salesperson" class="form-label me-4 fw-medium"
                          >Salesperson:</label
                        >
                        <input
                          type="text"
                          class="form-control ms-3"
                          id="salesperson"
                          placeholder="Edward Crowley"
                        />
                      </div>
                      <input
                        type="text"
                        class="form-control"
                        id="invoiceMsg"
                        placeholder="Thanks for your business" />
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                      <div class="invoice-calculations">
                        <div class="d-flex justify-content-between mb-2">
                          <span class="w-px-100">Subtotal:</span>
                          <span class="fw-medium">$ {{ this.order.subtotal }}</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                          <span class="w-px-100">Tax:</span>
                          <span class="fw-medium">$ {{ this.order.tax }}</span>
                        </div>
                        <hr />
                        <div class="d-flex justify-content-between">
                          <span class="w-px-100">Total:</span>
                          <span class="fw-medium">$ {{ this.order.total }}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Invoice Add-->
            <!-- Invoice Actions -->
            <div class="col-lg-3 col-12 invoice-actions">
              <div class="card mb-4">
                <div class="card-body">
                 <button
                          type="button"
                          class="btn btn-label-primary d-grid w-100 waves-effect"
                          data-repeater-create=""
                          @click="qoutation"
                        >
                         Update
                        </button>
                  <button type="submit"  class="btn btn-label-secondary d-grid w-100 waves-effect">
                    Order
                  </button>
                </div> 
              </div>
              <div>
              </div>
            </div>
            <!-- /Invoice Actions -->
          </div>
        </form>
          <!-- /Send Invoice Sidebar -->
          <!-- /Offcanvas -->
          <router-view></router-view>
          <Footer></Footer>
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div
      class="drag-target"
      style="
        touch-action: pan-y;
        user-select: none;
        -webkit-user-drag: none;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0); "></div>
  </div>
</template>
<script>
import Sidebar from "../Sidebar.vue";
import Footer from "../Footer.vue";
import NavBar from "../Nav.vue";
export default {
  components: { Sidebar, Footer,NavBar },
  data() {
    return {
      orderId:null,
        order: {
        account_id: null,
        date: null,
        tax: 0,
        subtotal:0,
        total: 0,
        _method:"PUT"
        // status: null,
      },
      orderItem:{
        product_id:null,
        order_id: this.orderId,
        quantity:0,
        unit_price:0
      },
      orderItems: [],
      orderIds:null,
      currentDate: new Date(),
      accounts: null,
      sum:0,
      tax:0,
      total:0,
      products: null,
      submitted: false,
    };
  },
  mounted() {
    this.getAccounts(),
     this.getProducts(),
      this.loadCurrentDate(),
      this.addItem(),
      this.totalTax(),
      this.totalTaxTotal(),
      this.updateOrder(),
      this.qoutationShow()
  },
  methods: {
    addItem(){
      const newItem = { ...this.orderItems[this.orderItems.length - 1] };
      console.log(newItem)
      this.orderItems.push(newItem);
    },
    qoutationShow(){
      axios.get(`/api/qoutation/${this.$route.params.id}`).then(response=>{
                      const {account_id,date,tax,subtotal,total} = response.data.data[0]
                      this.order.account_id = account_id
                      this.order.account = response.data.data[0].account
                      this.order.date = date
                      this.order.tax = tax
                      this.order.subtotal = subtotal
                      this.order.total = total
                      this.orderItems = response.data.data['qoutation_items']
                  }).catch(error=>{
                      console.log(error)
                  })
    },
     removeItem(index) {
      this.orderItems.splice(index, 1);
      this.calculateOverallTotal
    },
      qoutation(){
        
      //  this.order.tax = this.tax;
      //  this.order.subtotal = this.sum;
      //  this.order.total = this.total;
       this.order['order'] = this.orderItems;
      //  axios.post(`api/qoutation`,this.order,{responseType: 'arraybuffer'}).then(response => {
      axios.post(`/api/qoutation/${this.$route.params.id}`,this.order,{responseType: 'arraybuffer'}).then(response=>{
      let blob = new Blob([response.data], { type: 'application/pdf' })
      let link = document.createElement('a')
      link.href = window.URL.createObjectURL(blob)
      link.download = 'test.pdf'
      link.click()
     this.$router.push({ name: "quotation.index" });
        })
        .catch((error) => {
          console.log(error);
        });
    },
     loadCurrentDate() {
      const now = new Date();
      const year = now.getFullYear();
      const month = (now.getMonth() + 1).toString().padStart(2, '0');
      const day = now.getDate().toString().padStart(2, '0');
      this.order.date = `${year}-${month}-${day}`;
    },
    create: function(){
        axios.post("/api/order", this.order)
        .then((response) => {
            //   this.$router.push({ name: "order.index" });
            this.orderId = response.data.data.id
        })
        .catch((error) => {
          console.log(error);
        });
    },
     createItems(){
      // this.orderItems.forEach(item => {
        //   axios.post("/api/order/item", item)
        // .then((response) => {
        //     //   this.$router.push({ name: "order.index" });
        //     this.orderId = response.data.data.id
        // })
        // .catch((error) => {
        //   console.log(error);
        // });
        // });
      this.$router.push({
              name: 'order.create',
              params: {
                orderId: 123,
                otherParam: 'example'
              }
            });
        },
    updateOrder(){
     this.order.tax = this.tax;
       this.order.subtotal = this.sum;
       this.order.total = this.total;
      axios.put('/api/order/'+this.orderId,this.order).then(response=>{
          }).catch(error=>{
            console.log(error)
        })
    },
      calculateSum: function() {
        this.calculateOverallTotal
      },
    getAccounts() {
      axios
        .get("/api/account")
        .then((response) => {
          this.accounts = response.data.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
      
      getProducts() {
      axios
        .get("/api/products")
        .then((response) => {
          this.products = response.data.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
     calculateTotal(item) {
      // Calculate total for each item
      return item.quantity * item.unit_price;
    },
     totalTax(total) {
      return (total * 18)/100 ;
    },
    totalTaxTotal(total,tax){
        return total + tax;
        }
    },
  computed: {
    calculateOverallTotal(){
      // Calculate overall total based on all items
      return this.orderItems.reduce((total, item) => {
      
        item.order_id =  this.orderId;
        this.orderItem.product_id = item.product_id;
        this.orderItem.quantity = item.quantity;
        this.orderItem.unit_price = item.unit_price;
        item.price = item.quantity * item.unit_price;
        this.order.subtotal = total + this.calculateTotal(item);
        this.order.tax = this.totalTax(this.order.subtotal);
       this.order.total = this.totalTaxTotal(this.order.subtotal,this.order.tax);
       return total + this.calculateTotal(item);
      }, 0);
    } 
  }
};
</script>
