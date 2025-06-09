import { ComponentFixture, TestBed } from '@angular/core/testing';

import { LoginAdmiComponent } from './login-admi.component';

describe('LoginAdmiComponent', () => {
  let component: LoginAdmiComponent;
  let fixture: ComponentFixture<LoginAdmiComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [LoginAdmiComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(LoginAdmiComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
