import { Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';

import { CabeceraComponent } from "./componentes/cabecera/cabecera.component";
import { NavegacionComponent } from "./componentes/navegacion/navegacion.component";
import { PieComponent } from "./componentes/pie/pie.component";

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [RouterOutlet, CabeceraComponent, NavegacionComponent, PieComponent,],
  templateUrl: './app.component.html',
  styleUrl: './app.component.css'
})
export class AppComponent {
  title = 'kada';
  mostrarCabeceraYpie = true;
}

