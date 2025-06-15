import { HttpClient } from '@angular/common/http';
import { Component } from '@angular/core';
import { FormControl, FormGroup, Validators, ReactiveFormsModule } from '@angular/forms';
import { Router, RouterModule } from '@angular/router';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-inicio-sesion',
  standalone: true,
  imports: [CommonModule, ReactiveFormsModule, RouterModule],
  templateUrl: './inicio-sesion.component.html',
  styleUrl: './inicio-sesion.component.css'
})
export class InicioSesionComponent {
  form: FormGroup;
  mensajeError: string = '';

  constructor(private readonly http: HttpClient, private readonly router: Router) {
    this.form = new FormGroup({
      clie_correo: new FormControl('', [Validators.required, Validators.email]),
      contrasena: new FormControl('', [Validators.required, Validators.minLength(6)])
    });
  }

  onLogin() {
    if (this.form.invalid) {
      this.form.markAllAsTouched();
      return;
    }
    const datos = this.form.value;
    this.http.post<{ token: string }>('http://20.224.16.209:8000/api/login', datos)
      .subscribe({
        next: (respuesta) => {
          console.log('Inicio de sesión exitoso', respuesta);
          this.router.navigate(['/inicio']);
        },
        error: (error) => {
          console.log('Error al iniciar sesión', error);
          this.mensajeError = 'Correo o contraseña incorrectos.';
        }
      });
  }
}