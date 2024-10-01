import { Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { CursoComponent } from './curso/curso.component';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [
    RouterOutlet,
    CursoComponent
  ],
  templateUrl: './app.component.html',
  styleUrl: './app.component.css'
})
export class AppComponent {
  title = 'app-php';
}
