import { Service } from './../../../interfaces/service';
import { ServicesService } from './../../../services/services.service';
import { Router } from '@angular/router';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-services',
  templateUrl: './services.component.html',
  styleUrls: ['./services.component.css']
})
export class ServicesComponent implements OnInit {

  service:Service={
<<<<<<< HEAD
    image:null,
    id:null,
    description:null,
    user_id:null,
    data_service_id:null,
    name:null,
    created_at:null,
    updated_at:null
  };

  isServiceDataEmpty=false;
  add : boolean=false;
  edit : boolean=false;
  services:Service[];
  dataServices:Service[];
  baseUrl=null;
  constructor(private servicesService:ServicesService, private router:Router) {
    this.baseUrl=servicesService.BASE_URL;
    this.getServices();
    this.getDataServices();
=======
    image:null;
    id:null;
    description:null,
    user_id:null,
    name:null
    created_at:null
    updated_at:null
  };
  add : boolean=false;
  edit : boolean=false;
  services:Service[];
  constructor(private servicesService:ServicesService, private router:Router) {
    this.getServices();
>>>>>>> 07772d4b5aab6335568c68094c6cab6ca4bcd58c

  }

  ngOnInit() {
  }

  addService(){
<<<<<<< HEAD
    this.getDataServices();
this.add=true;

=======
this.add=true;
>>>>>>> 07772d4b5aab6335568c68094c6cab6ca4bcd58c
  }

  editService(service){
    this.edit=true;
    this.service=service;
  }

  saveService(){
    if(this.edit){
<<<<<<< HEAD
      console.log('data: '+this.service);
      this.servicesService.edit(this.service).subscribe((data)=>{
        console.log(data);
        this.getServices();
        this.getDataServices();
        this.emptyService();
      },(error)=>{
        console.log(error);
        this.getServices();
        this.getDataServices();
        this.emptyService();
=======
      this.servicesService.edit(this.service).subscribe((data)=>{
        console.log(data);
        this.getServices();
        this.emptyService();
      },(error)=>{
        console.log(error);
>>>>>>> 07772d4b5aab6335568c68094c6cab6ca4bcd58c
      });
      this.edit=false;
    }
    if(this.add){
      this.servicesService.create(this.service).subscribe((data)=>{
        console.log(data);
        this.getServices();
<<<<<<< HEAD
        this.getDataServices();
        this.emptyService();
      },(error)=>{
        console.log(error);
        this.getServices();
        this.getDataServices();
        this.emptyService();
=======
        this.emptyService();
      },(error)=>{
        console.log(error);
>>>>>>> 07772d4b5aab6335568c68094c6cab6ca4bcd58c
      });
      this.add=false;
    }


  }



  deleteService(service){
    this.servicesService.delete(service).subscribe((data)=>{
<<<<<<< HEAD
      this.getServices();
      this.getDataServices();
    },(error)=>{
      console.log(error);
      this.getServices();
      this.getDataServices();
=======
      console.log(data);
      this.getServices();
    },(error)=>{
      console.log(error);
>>>>>>> 07772d4b5aab6335568c68094c6cab6ca4bcd58c
    });
  }

  getServices(){
    this.servicesService.getServices().subscribe((data:Service[])=>{
      this.services=data;
      console.log(this.services);
    },(error)=>{
      console.log(error);
    });
  }
<<<<<<< HEAD
  getDataServices(){
    this.servicesService.getDataServices().subscribe((data:Service[])=>{
      this.dataServices=data;
      this.isServiceDataEmpty=this.dataServices.length>0;
      console.log(this.dataServices);
    },(error)=>{
      console.log(error);
    });
  }
=======
>>>>>>> 07772d4b5aab6335568c68094c6cab6ca4bcd58c

  emptyService(){
    this.service.id=null;
    this.service.name=null;
    this.service.description=null;
    this.service.created_at=null;
    this.service.image=null;
    this.service.updated_at=null;
    this.service.created_at=null;
  }

}
