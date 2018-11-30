import { ExperienceComponent } from './components/backpage/experience/experience.component';
import { AbilitiesComponent } from './components/backpage/abilities/abilities.component';
import { BackpageComponent } from './components/backpage/backpage.component';
import { NgModule, Component } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { FrontpageComponent } from './components/frontpage/frontpage.component';
import { MeComponent } from './components/backpage/me/me.component';
import { StudiesComponent } from './components/backpage/studies/studies.component';
import { TestimoniesComponent } from './components/backpage/testimonies/testimonies.component';
import { ServicesComponent } from './components/backpage/services/services.component';

const routes: Routes = [
  {
    path:'',
    component:FrontpageComponent
  },{
    path:'admin',
    component:BackpageComponent,
    children:[
      {
        path:'me',
        component:MeComponent
      },
      {
        path:'abilities',
        component:AbilitiesComponent
      },
      {
        path:'services',
        component:ServicesComponent
      },
      {
        path:'studies',
        component:StudiesComponent
      },
      {
        path:'testimonies',
        component:TestimoniesComponent
      }
    ]
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes/*,{useHash:true}*/)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
