import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-curso',
  standalone: true,
  imports: [],
  templateUrl: './curso.component.html',
  styleUrl: './curso.component.css'
})
export class CursoComponent implements OnInit {

  // Construtor
  constructor() {};
  
  // Inicializador
  ngOnInit() {};

  // Cadastro
  cadastro(): void {
    alert('Cadastro');
  }

  // Seleção
  selecao(): void {
    alert('Seleção');
  }

  // Alterar
  alterar(): void {
    alert('Alterar');
  }

  // Excluir
  excluir(): void {
    alert('Excluir');
  }


}
