import { BrowserModule,Title } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { LocationStrategy, PathLocationStrategy } from '@angular/common';
import { NavbarComponent } from './components/navbar/navbar.component';
import { TopContentComponent } from './components/top-content/top-content.component';
import { WhatWeDoComponent } from './components/what-we-do/what-we-do.component';
import { ContactComponent } from './components/contact/contact.component';
import { AboutComponent } from './components/about/about.component';
import { ClientsComponent } from './components/clients/clients.component';
import { CallToActionComponent } from './components/call-to-action/call-to-action.component';
import { TestimonialsComponent } from './components/testimonials/testimonials.component';
import { PricingComponent } from './components/pricing/pricing.component';
import { MottoComponent } from './components/motto/motto.component';
import { FooterComponent } from './components/footer/footer.component';
import { CountersComponent } from './components/counters/counters.component';
import { PortfolioComponent } from './components/portfolio/portfolio.component';

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
    PortfolioComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [{ provide: LocationStrategy, useClass: PathLocationStrategy }, Title],
  bootstrap: [AppComponent]
})
export class AppModule { }
