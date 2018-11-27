import { User } from './../../../interfaces/user';
import {  HttpClient,HttpClientModule } from '@angular/common/http';
import { UsersService } from './../../../services/users.service';
import { Component, OnInit } from '@angular/core';


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
    youtube:null
  };

  constructor(private usersService:UsersService, private httpClient:HttpClient) {
    this.usersService.get(1).subscribe((data:User)=>{
      this.user=data;
      console.log(this.user);
    },(error)=>{
      console.log(error);
    });
  }

  ngOnInit() {
  }

}
