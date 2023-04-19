import { Sequelize } from 'sequelize';
 
const db = new Sequelize('CE406', 'root', '', {
    host: 'localhost',
    dialect: 'mysql'
});
 
export default db;
