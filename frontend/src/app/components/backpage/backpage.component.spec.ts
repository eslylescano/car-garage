import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { BackpageComponent } from './backpage.component';

describe('BackpageComponent', () => {
  let component: BackpageComponent;
  let fixture: ComponentFixture<BackpageComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ BackpageComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(BackpageComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
