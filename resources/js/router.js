import patients from "./components/Patients/Index";
import users from "./components/Users/Index"

export const routes = [{
    component: patients,
    path: '/patients'
},
    {
        component: users,
        path: "/users"
    }
]
