
<<<<<<< HEAD
import { HttpClient, HttpHeaders, HttpParams } from '@angular/common/http';
=======
import { HttpClient, HttpHeaders } from '@angular/common/http';
>>>>>>> 07772d4b5aab6335568c68094c6cab6ca4bcd58c
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class ServicesService {
  BASE_URL='http://localhost:8888/car-garage/backend/public/';
  API_URL='http://localhost:8888/car-garage/backend/public/api';
  constructor(private httpClient:HttpClient) { }

  edit(service){
    const headers = new HttpHeaders({'Content-Type':'application/json'});
    return this.httpClient.put(this.API_URL+'/services/'+service.id,service,{headers:headers});
  }
  create(service){
    const headers = new HttpHeaders({'Content-Type':'application/json'});
    return this.httpClient.post(this.API_URL+'/services',service,{headers:headers});
  }

  get(id){
    const headers = new HttpHeaders({'Content-Type':'application/json'});
    return this.httpClient.get(this.API_URL+'/services/'+id,{headers:headers});
  }

  delete(service){
    const headers = new HttpHeaders({'Content-Type':'application/json'});
    return this.httpClient.delete(this.API_URL+'/services/'+service.id,{headers:headers});
  }
  getServices(){
<<<<<<< HEAD
    let params = new HttpParams();
    params = params.append('type', '1');
    const headers = new HttpHeaders({'Content-Type':'application/json'});
    return this.httpClient.get(this.API_URL+'/services',{params:params,headers:headers});
  }
  getDataServices(){
    let params = new HttpParams();
    params = params.append('type', '2');
    const headers = new HttpHeaders({'Content-Type':'application/json'});
    return this.httpClient.get(this.API_URL+'/services',{params:params,headers:headers});
=======
    const headers = new HttpHeaders({'Content-Type':'application/json'});
    return this.httpClient.get(this.API_URL+'/services',{headers:headers});
>>>>>>> 07772d4b5aab6335568c68094c6cab6ca4bcd58c
  }
}
