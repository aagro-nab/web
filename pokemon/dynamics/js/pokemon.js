//----------------------------LAYOUT DE OBJETOS----------------------------

//POKEMON
//vida, ataque, ataque especial, defensa, defensa especial, velocidad, tipo principal, tipo secundario(opcional), set de 4 movimientos

class pokemon{
    constructor(name, nivel, vida, ataque, ataque_especial, defensa, defensa_especial, velocidad, tipo_principal, tipo_secundario, movimientos){
        this.name = name;
        this.niv = nivel;
        this.vida = vida;
        this.at = ataque;
        this.at_sp = ataque_especial;
        this.def = defensa;
        this.def_sp = defensa_especial;
        this.vel = velocidad;
        this.tipo = tipo_principal;
        this.tipo2 = tipo_secundario;
        this.set = movimientos;
    };

    ataque(atacante, atacado){
        console.log("-----> Es el turno de " + atacante.name);
        // seleccionar movimiento random
        let rand = Math.random() * (3 - 0) + 0;
        rand = Math.round(rand);
        let us_mov = atacante.set[rand];
        // * ataca a *
        console.log(atacante.name + " ataca a " + atacado.name + " con " + us_mov.nombre);
        //let danio = [atacante.niv * atacante.at * us_mov.potencia]/ atacado.def / 27;
        //danio = Math.round(danio);
        let dani = 0.001 * 65 * (((0.2* atacante.niv + 1)* atacante.at * us_mov.potencia)/25 + atacado.def);
        dani = Math.round(dani);
        console.log(atacado.name + " obtuvo " + dani + " puntos de daño");
        // puntos de vida actualizados
        atacado.vida = atacado.vida - dani;
        console.log(atacado.name + " tiene " + atacado.vida + " de vida");
        //console.log(atacante.name + " tiene vida " + atacante.vida);
    };

    pokefight(retador, rival, pokeretador, pokerival){
        let perdedor;
        let turno = 1;
        //let entrenador_activo;
        while(pokeretador.vida >= 1 && pokerival.vida >= 1){
            if (turno == 1){
                //entrenador_activo = retador;
                pokeretador.ataque(pokeretador, pokerival);
                turno = 2;
            }
            else{
                //entrenador_activo = rival;
                pokeretador.ataque(pokerival, pokeretador);
                turno = 1;
            }
        }
        if(turno == 2){
            console.log("-----> " + pokerival.name + " ya no puede continuar, " + rival.nombre + " pierde y " + pokeretador.name + " y " + retador.nombre + " ganan!");
            perdedor = rival;
        }
        else{
            console.log("-----> " + pokeretador.name + " ya no puede continuar, "  + retador.nombre + " pierde y " + pokerival.name + " y " + rival.nombre + " ganan!");
            perdedor = retador;
        }
    return perdedor;
    }
}

//MOVIMIENTOS POKEMON

class movimiento{
    constructor(nombre, potencia, probabilidad, tipo_elemental, clasificacion){
        this.nombre = nombre;
        this.potencia = potencia;
        this.prob = probabilidad;
        this.tipo_elemental = tipo_elemental;
        this.class = clasificacion;
    }
}

//ENTRENADOR POKEMON

class entrenador{
    constructor(nombre, region_origen, medallas, equipo){
    this.nombre = nombre;
    this.region = region_origen;
    this.medallas = medallas;
    this.equipo = equipo;
    }

    presentarse(){
        console.log("Hola!, Mi nombre es "+ this.nombre);
    }

    combate(retador, rival){
        let pokeretador = this.equipo[0];
        let pokerival = rival.equipo[0];
        let perdedor;
        //console.log("El equipo del retador es " + retador.equipo);
        //console.log("El equipo del retado es " + rival.equipo);
        console.log(retador.nombre + " ha retado a " + rival.nombre + " a una batalla!");
        console.log(pokeretador.name + " de " + retador.nombre + " se enfrentara contra " + pokerival.name + " de " + rival.nombre);
        //batalla!!
        perdedor = retador.equipo[0].pokefight(retador, rival, pokeretador, pokerival);
        //elimina pokemon
        perdedor.equipo.shift();
        console.log("----------------------- La batalla ha acabado y se ha eliminado al perderor");
    }
}

//----------------------------DECLARACION DE OBJETOS----------------------------

//PERSONAJES Y EQUIPOS

//------------------MOVIMIENTOS
//(potencia, probabilidad, tipo_elemental, clasificacion)
let movimiento1 = new movimiento("Burbuja", 7, 70, "Agua", "Fisico");
let movimiento2 = new movimiento("Ácido", 5, 60, "Veneno", "Fisico");
let movimiento3 = new movimiento("Cola dragón", 6, 60, "Dragon", "Fisico");
let movimiento4 = new movimiento("Salpicar", 2, 85, "Agua", "Fisico");
let movimiento5 = new movimiento("Humareda", 6, 70, "Fuego", "Fisico");
let movimiento6 = new movimiento("Hidrochorro", 7, 75, "Agua", "Fisico");
let movimiento7 = new movimiento("Terremoto", 9, 20, "Tierra", "Especial");
let movimiento8 = new movimiento("Premonicion", 8, 40, "Psiquico", "Especial");

//------------------POKEMONES - EQ 1
let swampert = new pokemon("SWAMPERT", 80, 100, 78, 80, 53, 63, 90, "Agua", "Tierra", [movimiento2, movimiento5, movimiento7, movimiento1]);
let axew = new pokemon("AXEW", 78, 100, 65, 70, 79, 89, 61, "Dragon", "Tierra", [movimiento3, movimiento8, movimiento6, movimiento4]);
let salandit = new pokemon("SALANDIT", 83, 100, 95, 87, 40, 55, 88, "Veneno", "Fuego", [movimiento5, movimiento2, movimiento3, movimiento7]);

//------------------POKEMONES - EQ 2
let magmar = new pokemon("MAGMAR", 89, 100, 70, 89, 76, 83, 70,  "Fuego", "", [movimiento4, movimiento3, movimiento6, movimiento7]);
let slowpoke = new pokemon("SLOWPOKE", 73, 100, 54, 68, 89, 97, 65, "Agua", "Psiquico", [movimiento1, movimiento8, movimiento5, movimiento2]);
let floragato = new pokemon("FLORAGATO", 79, 100, 84, 80, 73, 79, 88, "Agua", "Tierra", [movimiento7, movimiento2, movimiento3, movimiento5]);

//------------------EQ 1
let equipo1 = [swampert, axew, salandit];
//let equipo1ver = new equipo("Swampert", "Axew", "Salandit");
let personaje1 = new entrenador("SCARAMOUSCH", "Alola", 5, [swampert, axew, salandit]);
console.log(personaje1);
personaje1.presentarse();

//------------------EQ 2
let equipo2 = [magmar, slowpoke, floragato];
//let equipo2ver = new equipo("Magmar", "Slowpoke", "Floragato");
let personaje2 = new entrenador("ROWSPAN", "Kanto", 7, [magmar, slowpoke, floragato]);
console.log(personaje2);
personaje2.presentarse();


//----------------------------COMBATE----------------------------

console.log("----------------------------------------------------");
personaje1.combate(personaje1, personaje2);



