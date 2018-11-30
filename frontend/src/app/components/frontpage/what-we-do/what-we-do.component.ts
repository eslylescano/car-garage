import { Service } from './../../../interfaces/service';
import { ServicesService } from './../../../services/services.service';
import { Router } from '@angular/router';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-what-we-do',
  templateUrl: './what-we-do.component.html',
  styleUrls: ['./what-we-do.component.css']
})
export class WhatWeDoComponent implements OnInit {
  service:Service={
    image:null,
    id:null,
    description:null,
    user_id:null,
    data_service_id:null,
    name:null,
    created_at:null,
    updated_at:null
  };
  baseUrl=null;
  services:Service[];
  constructor(private servicesService:ServicesService, private router:Router) {
    this.baseUrl=servicesService.BASE_URL;
    this.getServices();
  }

  ngOnInit() {
  }

  getServices(){
    this.servicesService.getServices().subscribe((data:Service[])=>{
      this.services=data;
      console.log(this.services);
    },(error)=>{
      console.log(error);
    });
  }

}
