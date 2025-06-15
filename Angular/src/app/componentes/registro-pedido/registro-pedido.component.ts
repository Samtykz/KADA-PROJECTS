import { HttpClient } from '@angular/common/http';
import { Component } from '@angular/core';
import { FormControl, FormGroup, ReactiveFormsModule } from '@angular/forms';
import { RouterLink, RouterOutlet } from '@angular/router';

@Component({
  selector: 'app-registro-pedido',
  standalone: true,
  imports: [RouterOutlet, RouterLink, ReactiveFormsModule],
  templateUrl: './registro-pedido.component.html',
  styleUrl: './registro-pedido.component.css'
})
export class RegistroPedidoComponent {
  form:FormGroup;

  constructor(private readonly http:HttpClient){
    this.form= new FormGroup({
      fechaPedido: new FormControl(''),
      horaPedido: new FormControl(''),
      clie_Documento_FK: new FormControl(''),

    })
  }

  onSubmit(){
    if (this.form.valid) {
      const datos = this.form.value;
      this.http.post('http://localhost:8000/api/pedido/', datos)
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