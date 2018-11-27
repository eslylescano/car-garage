import { BrowserModule,Title } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { AppRoutingModule } from './app-routing.module';
import { FormsModule } from '@angular/forms';
import { AppComponent } from './app.component';
import { LocationStrategy, PathLocationStrategy } from '@angular/common';
import { HttpClientModule } from '@angular/common/http';
import { NavbarComponent } from './components/frontpage/navbar/navbar.component';
import { TopContentComponent } from './components/frontpage/top-content/top-content.component';
import { WhatWeDoComponent } from './components/frontpage/what-we-do/what-we-do.component';
import { ContactComponent } from './components/frontpage/contact/contact.component';
import { AboutComponent } from './components/frontpage/about/about.component';
import { ClientsComponent } from './components/frontpage/clients/clients.component';
import { CallToActionComponent } from './components/frontpage/call-to-action/call-to-action.component';
import { TestimonialsComponent } from './components/frontpage/testimonials/testimonials.component';
import { PricingComponent } from './components/frontpage/pricing/pricing.component';
import { MottoComponent } from './components/frontpage/motto/motto.component';
import { FooterComponent } from './components/frontpage/footer/footer.component';
import { CountersComponent } from './components/frontpage/counters/counters.component';
import { PortfolioComponent } from './components/frontpage/portfolio/portfolio.component';
import { LoginComponent } from './components/backpage/login/login.component';
import { RegisterComponent } from './components/backpage/register/register.component';
import { FrontpageComponent } from './components/frontpage/frontpage.component';
import { BackpageComponent } from './components/backpage/backpage.component';
import { MeComponent } from './components/backpage/me/me.component';
import { ExperienceComponent } from './components/backpage/experience/experience.component';
import { StudiesComponent } from './components/backpage/studies/studies.component';
import { AbilitiesComponent } from './components/backpage/abilities/abilities.component';
import { TestimoniesComponent } from './components/backpage/testimonies/testimonies.component';
import { NavbarBackpageComponent } from './components/backpage/navbar-backpage/navbar-backpage.component';

@NgModule({
  declarations: [
    AppComponent,
    NavbarComponent,
    TopContentComponent,
    WhatWeDoComponent,
    ContactComponent,
    AboutComponent,
    ClientsComponent,
    CallToActionComponent,
    TestimonialsComponent,
    PricingComponent,
    MottoComponent,
    FooterComponent,
    CountersComponent,
    PortfolioComponent,
    LoginComponent,
    RegisterComponent,
    FrontpageComponent,
    BackpageComponent,
    MeComponent,
    ExperienceComponent,
    StudiesComponent,
    AbilitiesComponent,
    TestimoniesComponent,
    NavbarBackpageComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule
  ],
  providers: [{ provide: LocationStrategy, useClass: PathLocationStrategy }, Title],
  bootstrap: [AppComponent]
})
export class AppModule { }
