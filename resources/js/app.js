import './bootstrap'
import { createApp } from 'vue'
import vSelect from 'vue-select'

// Components ---------------------------------------------------
import TheProductList from './components/Products/TheProductList.vue'
import TheCategoryList from './components/Category/TheCategoryList.vue'
import SearchProduct from './components/Search/SearchProduct.vue'
import BackendError from './components/Components/BackendError.vue'

const app = createApp({
	components: {
		TheProductList,
		TheCategoryList,
		SearchProduct
	}
})

app.component('v-select', vSelect)
app.component('backend-error', BackendError)
app.mount('#app')
