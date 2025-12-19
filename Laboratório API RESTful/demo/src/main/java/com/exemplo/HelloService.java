package com.exemplo;

import jakarta.ejb.Stateless;

// EJB Stateless que fornece a lógica de negócio
@Stateless
public class HelloService {

    public String sayHello(String name) {
        return "Olá, " + name + "! Bem-vindo à API EJB.";
    }
}
