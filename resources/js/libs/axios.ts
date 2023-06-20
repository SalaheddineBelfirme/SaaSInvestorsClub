import axios from "axios";

const axiosIns = axios.create({
    baseURL: "http://localhost:8000",
    withCredentials: true,
    
    headers: {
        common: {
            "X-Requested-With": "XMLHttpRequest",
            'Authorization': 'Bearer ' + localStorage.getItem('authToken'),
        } 
    }
});

 

export default axiosIns;