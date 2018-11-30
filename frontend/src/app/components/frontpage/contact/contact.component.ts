import { User } from './../../../interfaces/user';
import { Router } from '@angular/router';
import { UsersService } from './../../../services/users.service';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-contact',
  templateUrl: './contact.component.html',
  styleUrls: ['./contact.component.css']
})
export class ContactComponent implements OnInit {

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
    },(error)=>{
      console.log(error);
    });
  }

}
