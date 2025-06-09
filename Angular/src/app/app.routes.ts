import { Routes } from '@angular/router';
import { InicioComponent } from './componentes/inicio/inicio.component';
import { RegistroClienteComponent } from './componentes/registro-cliente/registro-cliente.component';
import { RegistroPedidoComponent } from './componentes/registro-pedido/registro-pedido.component';
import { InicioSesionComponent } from './componentes/inicio-sesion/inicio-sesion.component';
import { Component } from '@angular/core';
import { AuthService } from './auth.service';
import { CatalogoComponent } from './componentes/catalogo/catalogo.component';
import { ServiciosComponent } from './componentes/servicios/servicios.component';
import { ContactosComponent } from './componentes/contactos/contactos.component';
import { LoginAdmiComponent } from './componentes/login-admi/login-admi.component';
import { GestionTablasComponent } from './componentes/gestion-tablas/gestion-tablas.component';
import { CarritoComponent } from './componentes/carrito/carrito.component';



export const routes: Routes = [
    {path:'inicio', component:InicioComponent},
    {path:'registro-cliente', component:RegistroClienteComponent},
    {path:'regPedido', component:RegistroPedidoComponent},
    {path:'inicio-sesion', component:InicioSesionComponent},
    {path:'catalogo', component:CatalogoComponent},
    {path:'servicios', component:ServiciosComponent},
    {path:'contactos', component:ContactosComponent},
    {path:'loginAdmi', component:LoginAdmiComponent},
    {path:'gestiontablas', component:GestionTablasComponent},
    {path:'carrito', component:CarritoComponent},

   
    
    
];