<script setup>
import BackOfficeLayout from '@/Layouts/BackOfficeLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import NavLink from '@/Components/NavLink.vue';

</script>
<style>
.product-table {

  width: 100%;
  padding: 10px;
  background-color: #212529;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  overflow: auto;
}
.table {
  align-content: center;
  align-self: center;
}
th {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis; /* You can also use 'clip' or 'initial' as per your preference */
}
tr {
  vertical-align: middle;
  text-align: center; /* If you want to center the content horizontally as well */
  height: 100%; /* This ensures the row takes up the full height of its parent container */
}
.status-active {
  background-color: aquamarine;
  color: black;
  border-radius: 10px;
  padding:2px;
}
.status-not-active {
  background-color:brown;
  color: white;
  border-radius: 10px;
  padding:2px;
}
.custom-button {
  width: 50px; /* Set your desired width */
  height: 50px; /* Set your desired height */
  font-size: 20px; /* Set your desired font size */
  margin-right: 10px;
}
.modal {
  --bs-modal-width: 1200px;
}
.box {
  border: 1px solid rgba(0, 0, 0, 0.1);
  box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.2);
  padding:20px;
  border-radius: 10px;
}
.form-group {
  margin-bottom: 10px;
}
.form-control{
  border-color: rgba(0, 0, 0, 0.2) !important;
}
label {
  display: inline-block;
  font-size: 12px;
  color: rgba(0, 0,0, 0.6);
}
input::placeholder {
    font-size: 13px;
}
textarea::placeholder {
    font-size: 12px;
}
.media-upload {
  margin-top: 20px;
  border: 2px dotted #ccc;
  padding: 20px;
  text-align: center;
  background-color: #f9f9f9;
}

.media-upload label {
  display: block;
  font-size: 18px;
  margin-bottom: 10px;
}

.media-preview {
  position: relative;
}

.drop-area {
  border: 2px dashed #ccc;
  padding: 20px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.drop-area p {
  font-size: 16px;
  margin: 0;
}

.drop-area button {
  background-color: #4CAF50;
  color: white;
  border: none;
  padding: 5px 20px;
  cursor: pointer;
  transition: background-color 0.3s;
  border-radius: 5px;
}

.drop-area button:hover {
  background-color: #45a049;
}

/* Hide the file input element */
input[type="file"] {
  display: none;
}

/* Styling the image preview */
#image-preview {
  max-width: 100%;
  max-height: 200px;
  margin-top: 10px;
}

/* Style for the selected file name (optional) */
.selected-file-name {
  font-weight: bold;
  margin-top: 10px;
}

.form-label {
  font-size: 18px;
  color: #979797;
  font-weight: 800;
}
.form-input-container {
  margin-bottom: 10px;
}

.barcode-setting-container {
  background-color: #CCCCCC;
  border-radius: 5px;
  padding: 20px;
}

.barccode-btns {
  text-align: start;
}

.hidden-labels {
  visibility: hidden;
}

.price-switch-container {
  background-color: #cccccc;
  padding: 5px;
  border-radius: 5px;


}
</style>
<template>
    <BackOfficeLayout title="Products">

        
      <div class="">
        <div class="row">
          <div class="col-xl-5">
            <div class="form-input-container">
              <label for="dropdown1" class="form-label">Product Description</label>
              <div class="dropdown w-100">
                <select class="form-select" aria-label="Default select example" v-model="selectedOption1">
                  <option disabled value="">Select an option</option>
                  <option v-for="option in options" :value="option.value">{{ option.label }}</option>
                </select>
              </div>
            </div>
            <div class="form-input-container"> 
              <label for="dropdown1" class="form-label">Report Category</label>
              <div class="dropdown w-100">
                <select class="form-select" aria-label="Default select example" v-model="selectedOption1">
                  <option disabled value="">Select an option</option>
                  <option v-for="option in options" :value="option.value">{{ option.label }}</option>
                </select>
              </div>
            </div>
            <div class="form-input-container">
              <label for="dropdown1" class="form-label">Product Type</label>
              <div class="dropdown w-100">
                <select class="form-select" aria-label="Default select example" v-model="selectedOption1">
                  <option disabled value="">Select an option</option>
                  <option v-for="option in options" :value="option.value">{{ option.label }}</option>
                </select>
              </div>
            </div>
            <div class="form-input-container">

              <div class="form-group row">
                  <div class="col-xl-5">
                    <label for="dropdown1" class="form-label">Selling Price</label>
                    <input type="currency" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0.00$">
                  </div>
                  <div class="col-xl-7">
                    <label class="form-label hidden-labels" for="exampleInputEmail2">.</label>
                    <div class="form-check form-switch price-switch-container">
                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                      <label class="form-check-label" for="flexSwitchCheckChecked">Manual Price?</label>
                    </div>
                  </div>
                </div>
            </div>

          </div>
          <div class="col-xl-5">
            <div class="form-input-container">
              <label for="dropdown1" class="form-label">Concept</label>
              <div class="dropdown w-100">
                <select class="form-select" aria-label="Default select example" v-model="selectedOption1">
                  <option disabled value="">Select an option</option>
                  <option v-for="option in options" :value="option.value">{{ option.label }}</option>
                </select>
              </div>
            </div>
            <div class="form-input-container">
              <label for="dropdown1" class="form-label">Barcode Settings</label>
              <div class="barcode-setting-container">
                <div class="form-group row">
                  <div class="col-xl-5">
                    <label class="form-label" for="exampleInputEmail1">Barcode 1</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0912256548899787954466644">
                  </div>
                  <div class="col-xl-7">
                    <label class="form-label hidden-labels" for="exampleInputEmail2">.</label>
                    <button type="button" class="btn btn-secondary form-control barccode-btns" id="exampleInputEmail2">More Barcodes</button>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-xl-5">
                    <label class="form-label" for="exampleInputEmail1">Barcode 2</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="05226649988774565411223">
                  </div>
                  <div class="col-xl-7">
                    <label class="form-label hidden-labels" for="exampleInputEmail2">.</label>
                    <button type="button" class="btn btn-secondary form-control barccode-btns" id="exampleInputEmail2">More Barcodes</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-2">
            <label for="dropdown2" class="form-label">Dropdown 2</label>
            <div class="dropdown w-100">
              <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                {{ selectedOption2 ? selectedOption2 : 'Select an option' }}
              </button>
              <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton2">
                <li v-for="option in options" :key="option.value">
                  <a class="dropdown-item" href="#" @click="selectOption2(option)">{{ option.label }}</a>
                </li>
              </ul>
              <select id="dropdown2" class="form-select visually-hidden w-100" v-model="selectedOption2">
                <option disabled value="">Select an option</option>
                <option v-for="option in options" :value="option.value">{{ option.label }}</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </BackOfficeLayout>
</template>
<script>
export default {
  data() {
    return {
      options: [
        { value: 1, label: 'Option 1' },
        { value: 2, label: 'Option 2' },
        { value: 3, label: 'Option 3' }
      ],
      selectedOption1: null,
      selectedOption2: null
    };
  },
  methods: {
    selectOption1(option) {
      this.selectedOption1 = option.label;
    },
    selectOption2(option) {
      this.selectedOption2 = option.label;
    }
  }
};
</script>

<style>
.visually-hidden {
  position: absolute !important;
  clip: rect(1px, 1px, 1px, 1px);
  padding: 0 !important;
  border: 0 !important;
  height: 1px !important;
  width: 1px !important;
  overflow: hidden;
}
</style>