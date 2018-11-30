import { User } from './../../../interfaces/user';
import { UsersService } from './../../../services/users.service';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-navbar-backpage',
  templateUrl: './navbar-backpage.component.html',
  styleUrls: ['./navbar-backpage.component.css']
})
export class NavbarBackpageComponent implements OnInit {

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
  constructor(private usersService:UsersService) {
    this.getUser();
  }

  ngOnInit() {
  }

  getUser(){
    this.usersService.get(1).subscribe((data:User)=>{
      this.user=data;
      this.user.photo = this.usersService.BASE_URL + this.user.photo;
    },(error)=>{
      console.log(error);
    });
  }

}
