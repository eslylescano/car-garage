import { User } from './../../../interfaces/user';
import {  HttpClient,HttpClientModule } from '@angular/common/http';
import { UsersService } from './../../../services/users.service';
import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';


@Component({
  selector: 'app-me',
  templateUrl: './me.component.html',
  styleUrls: ['./me.component.css']
})
export class MeComponent implements OnInit {

  user:User ={
    name:null,
    email:null,
    last_name:null,
    phone:null,
    country:null,
    city:null,
    address:null,
    post_code:null,
    facebook:null,
    twitter:null,
    youtube:null,
    photo:null
  };



  constructor(private usersService:UsersService, private router:Router) {
    this.getUser();
  }

  ngOnInit() {
  }

  getUser(){
    this.usersService.get(1).subscribe((data:User)=>{
      this.user=data;
      console.log(this.user);
    },(error)=>{
      console.log(error);
    });
  }

  onSubmit(){
    this.usersService.update(this.user).subscribe((data)=>{
      console.log(this.user);
      console.log(data);
      this.getUser();
    },(error)=>{
      console.log(this.user);
      console.log(error);

      this.getUser();
    });
 }

 onFileSelected(event){
   let selectedFile : File = <File>event.target.files[0];
  let myReader:FileReader = new FileReader();

  myReader.onloadend = (e) => {
    this.user.photo = myReader.result;
    console.log(this.user.photo);
  }

  myReader.readAsDataURL(selectedFile);

  }

}
