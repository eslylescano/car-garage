import { TestimonialsService } from './../../../services/testimonials.service';
import { Component, OnInit } from '@angular/core';
import { Testimonial } from 'src/app/interfaces/testimonial';

@Component({
  selector: 'app-testimonies',
  templateUrl: './testimonies.component.html',
  styleUrls: ['./testimonies.component.css']
})
export class TestimoniesComponent implements OnInit {
  testimonial:Testimonial={

    image:null,
    id:null,
    message:null,
    user_id:null,
    email:null,
    name:null,
    created_at:null,
    updated_at:null
  };
testimonials:Testimonial[];


edit=false;
  constructor(private testimonialsService:TestimonialsService) {
    this.getTestimonials();
  }

  ngOnInit() {
  }

  getTestimonials(){
    this.testimonialsService.getTestimonials().subscribe((data:Testimonial[])=>{
      this.testimonials=data;
      console.log(data);
    },(error)=>{

    });
  }

  editTestimonial(testimonial){
this.edit=true;
this.testimonial=testimonial;
  }

  saveTestimonial(){
    this.testimonialsService.edit(this.testimonial).subscribe((data)=>{
      console.log(data);
      this.getTestimonials();
      this.empyTestimonial();
    },(error)=>{

    });
    this.edit=false;
  }
  deleteTestimonial(testimonial){
    this.testimonialsService.delete(testimonial).subscribe((data)=>{
      this.getTestimonials();
    },(error)=>{

    });
  }

  empyTestimonial(){
    this.testimonial.image=null;
    this.testimonial.id=null;
    this.testimonial.message=null;
    this.testimonial.user_id=null;
    this.testimonial.email=null;
    this.testimonial.name=null;
    this.testimonial.created_at=null;
    this.testimonial.updated_at=null;
  }

}
