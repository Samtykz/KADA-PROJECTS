import { HttpClient } from '@angular/common/http';
import { Component } from '@angular/core';
import { FormControl, FormGroup, ReactiveFormsModule } from '@angular/forms';

@Component({
  selector: 'app-registro-cliente',
  standalone: true,
  imports: [ReactiveFormsModule],
  templateUrl: './registro-cliente.component.html',
  styleUrl: './registro-cliente.component.css'
})
export class RegistroClienteComponent {
  form:FormGroup;

  constructor(private readonly http:HttpClient){
    this.form = new FormGroup({
      clie_Documento_PK: new FormControl(''),
      clie_nombre: new FormControl(''),
      clie_apellido: new FormControl(''),
      clie_Telefono: new FormControl(''),
      clie_Telefono2: new FormControl(''),
      clie_direccion: new FormControl(''),
      clie_correo: new FormControl(''),
      id_TipoDocumento_FK: new FormControl(''),
      contrasena: new FormControl(''),
    })
  }

  onSubmit(){
    if (this.form.valid) {
      const datos = this.form.value;
      this.http.post('http://localhost:8000/api/cliente/', datos)
        .subscribe({
          next: (respuesta) => {
            console.log('Datos enviados exitosamente', respuesta);
          },
          error: (error) => {
            console.error('Error al enviar datos', error);
          }
        });
    } else{
      console.log('Formulario Invalido')
    }
  }
}
