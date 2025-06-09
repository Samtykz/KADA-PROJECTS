import { ComponentFixture, TestBed } from '@angular/core/testing';

import { GestionTablasComponent } from './gestion-tablas.component';

describe('GestionTablasComponent', () => {
  let component: GestionTablasComponent;
  let fixture: ComponentFixture<GestionTablasComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [GestionTablasComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(GestionTablasComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
