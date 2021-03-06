import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class UsersService {
  BASE_URL='http://localhost:8888/car-garage/backend/public/';
  API_URL='http://localhost:8888/car-garage/backend/public/api';
  constructor(private httpClient:HttpClient) { }

  edit(user){
    const headers = new HttpHeaders({'Content-Type':'application/json'});
    return this.httpClient.put(this.API_URL+'/users/'+user.id,user,{headers:headers});
  }

  get(id){
    const headers = new HttpHeaders({'Content-Type':'application/json'});
    return this.httpClient.get(this.API_URL+'/users/'+id,{headers:headers});
  }
}
