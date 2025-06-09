import { Injectable } from '@angular/core';
import { Router } from '@angular/router';
@Injectable({
  providedIn: 'root'
})
export class AuthService {

  constructor(private router: Router) { }

  isAuthenticated() : boolean {
    if (typeof window !== 'undefined' && window.localStorage) {
      return !!localStorage.getItem('token')
    }
    return false;
  }

  
  logout() {
    if (typeof window !== 'undefined' && window.localStorage) {
      localStorage.removeItem('token');
      console.log('Token elimidado')
    }
    this.router.navigate(['inicio-sesion']);
  }



}
