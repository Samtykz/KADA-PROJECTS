import { Component } from '@angular/core';
import { FormControl, FormGroup, ReactiveFormsModule, Validators } from '@angular/forms';
import { HttpClient, HttpClientModule } from '@angular/common/http';
import { Router } from '@angular/router';
import { CommonModule } from '@angular/common';  // 💡 Importar CommonModule

@Component({
  selector: 'app-login-admi',
  standalone: true,
  imports: [CommonModule, ReactiveFormsModule, HttpClientModule], // 💡 Agregar CommonModule
  templateUrl: './login-admi.component.html',
  styleUrl: './login-admi.component.css'
})
export class LoginAdmiComponent {
  form: FormGroup;
  mensajeError: string = '';
  constructor(private http: HttpClient, private router: Router) {
    this.form = new FormGroup({
      admi_correo: new FormControl('', [Validators.required, Validators.email]),  
      admi_contrasena: new FormControl('', [Validators.required, Validators.minLength(6)])
    });
  }
  onLogin() {
    if (this.form.invalid) {
      this.form.markAllAsTouched();
      this.mensajeError = 'Por favor, completa todos los campos correctamente.';
      return;
    }
    const datos = this.form.value;
    console.log('Datos enviados:', datos);
    this.http.post<{token: string }>('http://20.224.16.209:8000/api/loginAdmin1', datos)
    .subscribe({
      next: (respuesta) => {
        console.log('Inicio de sesión exitoso', respuesta);
        this.mensajeError = '';
        this.router.navigate(['/gestiontablas']);
      },
      error: (error) => {
        console.log('Error al iniciar sesión', error);
        this.mensajeError = 'Correo o contraseña incorrectos.';
      }
    });
  }
}