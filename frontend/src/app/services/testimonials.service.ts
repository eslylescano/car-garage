import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class TestimonialsService {
  BASE_URL='http://localhost:8888/car-garage/backend/public/';
  API_URL='http://localhost:8888/car-garage/backend/public/api';
  constructor(private httpClient:HttpClient) { }

  getTestimonials(){
    const headers = new HttpHeaders({'Content-Type':'application/json'});
    return this.httpClient.get(this.API_URL+'/testimonials',{headers:headers});
  }

  create(testimonial){
    const headers = new HttpHeaders({'Content-Type':'application/json'});
    return this.httpClient.post(this.API_URL+'/testimonials',testimonial,{headers:headers});
  }

  edit(testimonial){
    const headers = new HttpHeaders({'Content-Type':'application/json'});
    return this.httpClient.put(this.API_URL+'/testimonials/'+testimonial.id,testimonial,{headers:headers});
  }

  delete(testimonial){
    const headers = new HttpHeaders({'Content-Type':'application/json'});
    return this.httpClient.delete(this.API_URL+'/testimonials/'+testimonial.id,{headers:headers});
  }
}
