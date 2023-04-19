import  express  from "express";
import db from "./config/database.js";
import productRoutes from "./routes/productRouter.js";
import userRouter from "./routes/usersRouter.js";
import dotenv from "dotenv";
import cookieParser from "cookie-parser";
import cors from "cors";

dotenv.config();
const app = express();

try {
    await db.authenticate();
    console.log('Database connected...');
} catch (error){
    console.error('Connection error:', error);
}

app.use(cors({credentials: true, origin:'http://localhost:3000'}));
app.use(express.json());
app.use('/products', productRoutes);
app.use('/users', userRouter)
app.use(cookieParser());

app.listen(5000, ()=>console.log('Server running at port 5000'));