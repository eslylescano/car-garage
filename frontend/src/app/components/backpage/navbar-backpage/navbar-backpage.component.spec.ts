import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { NavbarBackpageComponent } from './navbar-backpage.component';

describe('NavbarBackpageComponent', () => {
  let component: NavbarBackpageComponent;
  let fixture: ComponentFixture<NavbarBackpageComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ NavbarBackpageComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(NavbarBackpageComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
