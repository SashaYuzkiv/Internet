import {useState} from 'react';
import logo from './logo.svg';
import './App.css';
import Header from './components/Header/Header';
import ProductList from './components/Product/ProductList';

function App() {

const [products, setProducts] = useState([
{id: 1, title: 'Product 1', price: 899},
{id: 2, title: 'Product 2', price:982},
{id: 3, title: 'Product 3', price:322},
{id: 4, title: 'Product 4', price: 763},
{id: 5, title: 'Product 5', price: 389}
]);

const deleteProduct = ( productId ) => {
  const newProducts = products.filter( product => product.id !== productId)
  setProducts(newProducts);
}
  return (
    <div className="App">
    <Header/>
    <ProductList products={ products } deleteProduct={ deleteProduct }/>
    
    </div>
  );
}

export default App;