import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { AuthService } from '../../auth.service';

@Component({
  selector: 'app-navegacion',
  standalone: true,
  imports: [RouterLink],
  templateUrl: './navegacion.component.html',
  styleUrl: './navegacion.component.css'
})
export class NavegacionComponent {
  
  constructor(private readonly authService: AuthService) {}

  onlogout() {
    this.authService.logout();
  }

}
