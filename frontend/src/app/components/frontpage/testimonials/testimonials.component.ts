import { Testimonial } from './../../../interfaces/testimonial';
import { TestimonialsService } from './../../../services/testimonials.service';
import { Component, OnInit } from '@angular/core';
import { NgForm } from '@angular/forms';

@Component({
  selector: 'app-testimonials',
  templateUrl: './testimonials.component.html',
  styleUrls: ['./testimonials.component.css']
})
export class TestimonialsComponent implements OnInit {
  testimonial:Testimonial={

    image:null,
    id:null,
    message:null,
    user_id:null,
    name:null,
    email:null,
    created_at:null,
    updated_at:null
  };
  constructor(private testimonialsService:TestimonialsService) { }

  ngOnInit() {
  }

  saveTestimonial(){
    console.log(this.testimonial);
    this.testimonialsService.create(this.testimonial).subscribe((data)=>{
      this.emptyTestimonial();
      console.log(data);
    },(error)=>{
      console.log(error);
    });
  }

  emptyTestimonial(){
    this.testimonial.id=null;
    this.testimonial.user_id=null;
    this.testimonial.name=null;
    this.testimonial.email=null;
    this.testimonial.message=null;
    this.testimonial.image=null;
    this.testimonial.updated_at=null;
    this.testimonial.created_at=null;
  }

  onFileSelected(event){
    let selectedFile : File = <File>event.target.files[0];
   let myReader:FileReader = new FileReader();

   myReader.onloadend = (e) => {
     this.testimonial.image = myReader.result.toString();
   }

   myReader.readAsDataURL(selectedFile);

   }



}
