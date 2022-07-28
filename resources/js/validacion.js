
//Login usuario //

$(document).ready(function () {
    $('#entrarSistema').click(function () {
        if ($('#correo').val() == "") {
            Swal.fire({
                type: 'warning',
                icon: 'warning',
                title: 'Falta digitar el Email',
            });
            return false;
        } else if ($('#contrasena').val() == "") {
            Swal.fire({
                type: 'warning',
                icon: 'warning',
                title: 'Falta digitar la Contraseña',
            });
            return false;
        }

        cadena = "correo=" + $('#correo').val() +
            "&contrasena=" + $('#contrasena').val();

        $.ajax({
            type: "POST",
            url: "php/login.php",
            data: cadena,
            success: function (r) {
                if (r == 1) {
                    Swal.fire({
                        type: 'success',
                        icon: 'success',
                        title: 'Logeado Correctamente',
                        showConfirmButton: false,
                        timer: 2000,
                    }).then(function () {
                        window.location.href = "view/user/index-user.php";

                    })
                } else {
                    Swal.fire({
                        type: 'error',
                        icon: 'error',
                        confirmButtonColor: '#f27474',
                        title: 'Usuario y/o contraseñas invalidos intente nuevamente.',
                    });
                }
            }
        });
    });
});

// Fin Login usuario //

// Creacion de usuario //

function crearcuenta() {

    // Obtenemos los valores de los campos de contraseñas 
    contrasena = document.getElementById('contrasena');
    ccontrasena = document.getElementById('ccontrasena');

    // Verificamos si las contraseñas no coinciden 
    if (contrasena.value != ccontrasena.value) {
        Swal.fire({
            type: 'error',
            icon: 'error',
            confirmButtonColor: '#F09A22',
            title: 'Las Contraseñas No Coinciden',
        });
        return false;
    }

    else {
        $(document).ready(function () {
            $('#registrarNuevo').ready(function () {
                if ($('#nombre').val() == "") {
                    Swal.fire({
                        type: 'warning',
                        icon: 'warning',
                        iconColor: '#F09A22',
                        confirmButtonColor: '#F09A22',
                        title: 'Digite el Nombre',
                    });
                    return false;
                } else if ($('#documento').val() == "") {
                    Swal.fire({
                        type: 'warning',
                        icon: 'warning',
                        iconColor: '#F09A22',
                        confirmButtonColor: '#F09A22',
                        title: 'Seleccione el tipo de Documento',
                    });
                    return false;
                } else if ($('#numdocumento').val() == "") {
                    Swal.fire({
                        type: 'warning',
                        icon: 'warning',
                        iconColor: '#F09A22',
                        confirmButtonColor: '#F09A22',
                        title: 'Ingrese el numero de su documento',
                    });
                    return false;
                } else if ($('#telefono').val() == "") {
                    Swal.fire({
                        type: 'warning',
                        icon: 'warning',
                        iconColor: '#F09A22',
                        confirmButtonColor: '#F09A22',
                        title: 'Digite un numero telefonico',
                    });
                    return false;
                } else if ($('#correo').val() == "") {
                    Swal.fire({
                        type: 'warning',
                        icon: 'warning',
                        iconColor: '#F09A22',
                        confirmButtonColor: '#F09A22',
                        title: 'Ingrese un correo electronico',
                    });
                    return false;
                } else if ($('#contrasena').val() == "") {
                    Swal.fire({
                        type: 'warning',
                        icon: 'warning',
                        iconColor: '#F09A22',
                        confirmButtonColor: '#F09A22',
                        title: 'Ingrese una contraseña',
                    });
                    return false;
                } else if ($('#ccontrasena').val() == "") {
                    Swal.fire({
                        type: 'warning',
                        icon: 'warning',
                        iconColor: '#F09A22',
                        confirmButtonColor: '#F09A22',
                        title: 'Confirme la contraseña',
                    });
                    return false;
                } else if ($('#locker_registrado').val() == "") {
                    Swal.fire({
                        type: 'warning',
                        icon: 'warning',
                        iconColor: '#F09A22',
                        confirmButtonColor: '#F09A22',
                        title: 'Seleccione un casillero',
                    });
                    return false;
                } else if ($('#tyc').val() == "") {
                    Swal.fire({
                        type: 'warning',
                        icon: 'warning',
                        iconColor: '#F09A22',
                        confirmButtonColor: '#F09A22',
                        title: 'Debe aceptar los terminos y condiciones',
                    });
                    return false;
                }

                cadena = "nombre=" + $('#nombre').val() +
                    "&documento=" + $('#documento').val() +
                    "&numdocumento=" + $('#numdocumento').val() +
                    "&telefono=" + $('#telefono').val() +
                    "&correo=" + $('#correo').val() +
                    "&contrasena=" + $('#contrasena').val() +
                    "&ccontrasena=" + $('#ccontrasena').val() +
                    "&locker_registrado=" + $('#locker_registrado').val() +
                    "&idRol=" + $('#idRol').val() +
                    "&tyc=" + $('#tyc').val();


                $.ajax({
                    type: "POST",
                    url: "php/registro.php",
                    data: cadena,
                    success: function (r) {

                        if (r == 2) {
                            Swal.fire({
                                type: 'warning',
                                icon: 'warning',
                                iconColor: '#05A1D3',
                                confirmButtonColor: '#05A1D3',
                                title: 'Este usuario ya existe',
                            });
                        } else if (r == 1) {
                            $('#frmRegistro')[0].reset();
                            Swal.fire({
                                type: 'success',
                                icon: 'success',
                                title: 'Usuario Creado Exitosamente!',
                                confirmButtonColor: '#51f008',
                                confirmButtonText: 'Ingresar'
                            }).then((result) => {
                                if (result.value) {
                                    window.location.href = "index.php";
                                }
                            })
                        } else {
                            Swal.fire({
                                type: 'error',
                                icon: 'error',
                                confirmButtonColor: '#f27474',
                                title: 'No se ha podido crear el usuario',
                            });
                        }
                    }
                });
            });
        });
    }
};

// Fin Creacion de usuario //

// Actualizacion usuario //

function actualizardatos() {

    // Obtenemos los valores de los campos de contraseñas 
    contrasena = document.getElementById('contrasena');
    ccontrasena = document.getElementById('ccontrasena');

    // Verificamos si las contraseñas no coinciden 
    if (contrasena.value != ccontrasena.value) {
        Swal.fire({
            type: 'error',
            icon: 'error',
            confirmButtonColor: '#F09A22',
            title: 'Las Contraseñas No Coinciden',
        });
        return false;
    }

    else {
        $(document).ready(function () {
            $('#actualizaruser').ready(function () {
                if ($('#nombre').val() == "") {
                    Swal.fire({
                        type: 'warning',
                        icon: 'warning',
                        iconColor: '#F09A22',
                        confirmButtonColor: '#F09A22',
                        title: 'Digite el Nombre',
                    });
                    return false;
                } else if ($('#telefono').val() == "") {
                    Swal.fire({
                        type: 'warning',
                        icon: 'warning',
                        iconColor: '#F09A22',
                        confirmButtonColor: '#F09A22',
                        title: 'Digite un numero telefonico',
                    });
                    return false;
                } else if ($('#contrasena').val() == "") {
                    Swal.fire({
                        type: 'warning',
                        icon: 'warning',
                        iconColor: '#F09A22',
                        confirmButtonColor: '#F09A22',
                        title: 'Ingrese una contraseña',
                    });
                    return false;
                } else if ($('#ccontrasena').val() == "") {
                    Swal.fire({
                        type: 'warning',
                        icon: 'warning',
                        iconColor: '#F09A22',
                        confirmButtonColor: '#F09A22',
                        title: 'Confirme la contraseña',
                    });
                    return false;
                }

                cadena = "nombre=" + $('#nombre').val() +
                    "&telefono=" + $('#telefono').val() +
                    "&contrasena=" + $('#contrasena').val() +
                    "&ccontrasena=" + $('#ccontrasena').val() +
                    "&correo=" + $('#correo').val();


                $.ajax({
                    type: "POST",
                    url: "../../php/update-user.php",
                    data: cadena,
                    success: function (r) {

                        if (r == 1) {
                            $('#actdates')[0].reset();
                            Swal.fire({
                                type: 'success',
                                icon: 'success',
                                title: 'Usuario Actualizado',
                                showConfirmButton: false,
                                timer: 1000,
                            }).then(function () {
                                window.location.href = "edit-user-admin.php";
                            }
                            )
                        } else {
                            Swal.fire({
                                type: 'error',
                                icon: 'error',
                                confirmButtonColor: '#f27474',
                                title: 'No se ha podido actualizar el usuario',
                            });
                        }
                    }
                });
            });
        });
    }
};

// Fin Actualizacion usuario //

// Creacion de lockers //

function createlocker() {
    $(document).ready(function () {
        $('#crearlocker').ready(function () {
            if ($('#compania').val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Digite el nombre de la compañia',
                });
                return false;
            } else if ($('#locker').val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Digite el nombre del locker',
                });
                return false;
            } else if ($('#agencia').val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Digite el nombre de la agencia',
                });
                return false;
            } else if ($('#vfirmware').val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Digite la versión del firmware',
                });
                return false;
            } else if ($('#vapp').val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Digite la versón de la app',
                });
                return false;
            } else if ($('#informacion').val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Digite informacion adicional del locker',
                });
                return false;
            } else if ($('#localizacion').val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Digite la localizacion del locker',
                });
                return false;
            } else if ($('#slots').val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Digite la cantidad de taquillas del locker',
                });
                return false;
            } else if ($('#conectado').val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Seleccione si está o no conectado',
                });
                return false;
            } else if ($('#tipo').val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Seleccione el tipo de locker',
                });
                return false;
            } else if ($('#codigo').val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Ingrese el codigo privado del locker',
                });
                return false;
            }


            cadena = "compania=" + $('#compania').val() +
                "&locker=" + $('#locker').val() +
                "&agencia=" + $('#agencia').val() +
                "&vfirmware=" + $('#vfirmware').val() +
                "&vapp=" + $('#vapp').val() +
                "&informacion=" + $('#informacion').val() +
                "&localizacion=" + $('#localizacion').val() +
                "&slots=" + $('#slots').val() +
                "&conectado=" + $('#conectado').val() +
                "&tipo=" + $('#tipo').val() +
                "&codigo=" + $('#codigo').val() +
                "&creado=" + $('#creado').val() +
                "&actualizado=" + $('#actualizado').val() +
                "&estado=" + $('#estado').val() +
                "&tamano=" + $('#tamano').val() +
                "&id=" + $('#id').val();


            $.ajax({
                type: "POST",
                url: "../../php/create-locker.php",
                data: cadena,
                success: function (r) {
                    if (r == 2) {
                        Swal.fire({
                            type: 'warning',
                            icon: 'warning',
                            iconColor: '#05A1D3',
                            confirmButtonColor: '#05A1D3',
                            title: 'Ya existe un locker con este nombre o codigo, por favor digite otro.',
                        });
                    } else if (r == 1) {
                        $('#frmcreatelocker')[0].reset();
                        Swal.fire({
                            type: 'success',
                            icon: 'success',
                            title: 'Locker Creado Exitosamente!',
                            confirmButtonColor: '#51f008',
                            confirmButtonText: 'Ingresar',
                            showConfirmButton: false,
                            timer: 1000,
                        }).then(function () {
                            window.location.reload();
                        }
                        )
                    } else {
                        Swal.fire({
                            type: 'success',
                            icon: 'success',
                            title: 'Locker Creado Exitosamente!',
                            confirmButtonColor: '#51f008',
                            confirmButtonText: 'Ingresar',
                            showConfirmButton: false,
                            timer: 1000,
                        }).then(function () {
                            window.location.reload();
                        }
                        )
                    }
                }
            });
        });
    });
}
// Fin Creacion de lockers //

function actualizarlocker(Id) {
    $(document).ready(function () {
        var updatelocker = "#updatelocker" + Id;

        $(updatelocker).ready(function () {


            var upcompania = "#upcompania" + Id;
            var uplocker = "#uplocker" + Id;
            var upagencia = "#upagencia" + Id;
            var upvfirmware = "#upvfirmware" + Id;
            var upvapp = "#upvapp" + Id;
            var upinformacion = "#upinformacion" + Id;
            var uplocalizacion = "#uplocalizacion" + Id;
            var upslots = "#upslots" + Id;
            var upslotsmas = "#upslotsmas" + Id;
            var upconectado = "#upconectado" + Id;
            var uptipo = "#uptipo" + Id;
            var upcodigo = "#upcodigo" + Id;
            var upcreado = "#upcreado" + Id;
            var upactualizado = "#upactualizado" + Id;
            var upid = "#upid" + Id;

            if ($((upcompania)).val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Digite el nombre de la compañia',
                });
                return false;
            } else if ($(uplocker).val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Digite el nombre del locker',
                });
                return false;
            } else if ($(upagencia).val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Digite el nombre de la agencia',
                });
                return false;
            } else if ($(upvfirmware).val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Digite la versión del firmware',
                });
                return false;
            } else if ($(upvapp).val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Digite la versón de la app',
                });
                return false;
            } else if ($(upinformacion).val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Digite informacion adicional del locker',
                });
                return false;
            } else if ($(uplocalizacion).val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Digite la localizacion del locker',
                });
                return false;
            } else if ($(upslots).val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Digite la cantidad de taquillas del locker',
                });
                return false;
            } else if (Number($(upslotsmas).val()) < Number($(upslots).val())) {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'La cantidad de lockers debe ser mayor a ' + $('#upslots' + Id).val(),
                });
                return false;
            } else if ($(upconectado).val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Seleccione si está o no conectado',
                });
                return false;
            } else if ($(uptipo).val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Seleccione el tipo de locker',
                });
                return false;
            } else if ($(upcodigo).val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Ingrese el codigo privado del locker',
                });
                return false;
            }


            cadena = "compania=" + $(upcompania).val() +
                "&locker=" + $(uplocker).val() +
                "&agencia=" + $(upagencia).val() +
                "&vfirmware=" + $(upvfirmware).val() +
                "&vapp=" + $(upvapp).val() +
                "&informacion=" + $(upinformacion).val() +
                "&localizacion=" + $(uplocalizacion).val() +
                "&slots=" + $(upslots).val() +
                "&slotsmas=" + $(upslotsmas).val() +
                "&conectado=" + $(upconectado).val() +
                "&tipo=" + $(uptipo).val() +
                "&codigo=" + $(upcodigo).val() +
                "&creado=" + $(upcreado).val() +
                "&actualizado=" + $(upactualizado).val() +
                "&id=" + $(upid).val();


            $.ajax({
                type: "POST",
                url: "../../php/update-locker.php",
                data: cadena,
                success: function (r) {
                    if (r == 2) {
                        Swal.fire({
                            type: 'warning',
                            icon: 'warning',
                            iconColor: '#05A1D3',
                            confirmButtonColor: '#05A1D3',
                            title: 'Ya existe un casillero con este nombre o codigo, por favor digite otro.',
                        });
                    } else if (r == 1) {
                        $('#frmupdatelocker')[0].reset();
                        Swal.fire({
                            type: 'success',
                            icon: 'success',
                            title: 'Casillero Actualizado',
                            showConfirmButton: false,
                            timer: 1000,
                        }).then(function () {
                            window.location.href = "index-admin.php";
                        }
                        )
                    } else {
                        Swal.fire({
                            type: 'success',
                            icon: 'success',
                            title: 'Casillero Actualizado',
                            showConfirmButton: false,
                            timer: 1000,
                        }).then(function () {
                            window.location.href = "index-admin.php";
                        }
                        );
                    }
                }
            });
        });
    });
}

function borrarlocker(Id) {
    $(document).ready(function () {
        var deletelocker = "#deletelocker" + Id;

        $(deletelocker).ready(function () {
            var lock = "#lock" + Id;
            var del = "#del" + Id;

            cadena = "id=" + $(del).val() +
                "&lock=" + $(lock).val();
            $.ajax({
                type: "POST",
                url: "../../php/delete-locker.php",
                data: cadena,
                success: function (r) {
                    if (r == 1) {
                        $('#frmdeletelocker')[0].reset();
                        Swal.fire({
                            type: 'success',
                            icon: 'success',
                            title: 'Eliminado con exito!',
                            showConfirmButton: false,
                            timer: 1000,
                        }).then(function () {
                            window.location.href = "index-admin.php";
                        }
                        )
                    } else {
                        Swal.fire({
                            type: 'error',
                            icon: 'error',
                            confirmButtonColor: '#f27474',
                            title: 'No se ha podido eliminar el casillero',
                        });
                    }
                }
            });
        });
    });
}



function actualizarusuario(Id) {
    $(document).ready(function () {
        var updateuser = "#updateuser" + Id;

        $(updateuser).ready(function () {


            var upnombre = "#upnombre" + Id;
            var updocumento = "#updocumento" + Id;
            var upnumdocumento = "#upnumdocumento" + Id;
            var uptelefono = "#uptelefono" + Id;
            var upcorreo = "#upcorreo" + Id;
            var upidu = "#upidu" + Id;

            if ($((upnombre)).val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Digite el nombre del usuario',
                });
                return false;
            } else if ($(updocumento).val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Digite el tipo de documento',
                });
                return false;
            } else if ($(upnumdocumento).val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Digite el numero de documento',
                });
                return false;
            } else if ($(uptelefono).val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Digite el numero telefonico',
                });
                return false;
            } else if ($(upcorreo).val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Digite el correo del usuario',
                });
                return false;
            }

            cadena = "nombre=" + $(upnombre).val() +
                "&documento=" + $(updocumento).val() +
                "&numdocumento=" + $(upnumdocumento).val() +
                "&telefono=" + $(uptelefono).val() +
                "&correo=" + $(upcorreo).val() +
                "&id=" + $(upidu).val();


            $.ajax({
                type: "POST",
                url: "../../php/update-users-general.php",
                data: cadena,
                success: function (r) {
                    if (r == 2) {
                        Swal.fire({
                            type: 'warning',
                            icon: 'warning',
                            iconColor: '#05A1D3',
                            confirmButtonColor: '#05A1D3',
                            title: 'Ya existe un usuario con este documento, telefono o correo, por favor digite otro.',
                        });
                    } else if (r == 1) {
                        $('#frmupdateuser')[0].reset();
                        Swal.fire({
                            type: 'success',
                            icon: 'success',
                            title: 'Usuario Actualizado',
                            showConfirmButton: false,
                            timer: 1000,
                        }).then(function () {
                            window.location.href = "users-registered.php";
                        }
                        )
                    } else {
                        Swal.fire({
                            type: 'success',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1000,
                            title: 'Usuario Actualizado',
        
                        });
                    }
                }
            });
        });
    });
}

function borrarusuario(Id) {
    $(document).ready(function () {
        var deleteuser = "#deleteuser" + Id;
        $(deleteuser).ready(function () {
            var delu = "#delu" + Id;
            cadena = "id=" + $(delu).val();
            $.ajax({
                type: "POST",
                url: "../../php/delete-user.php",
                data: cadena,
                success: function (r) {
                    if (r == 1) {
                        $('#frmdeleteuser')[0].reset();
                        Swal.fire({
                            type: 'success',
                            icon: 'success',
                            title: 'Eliminado con exito!',
                            showConfirmButton: false,
                            timer: 1000,
                        }).then(function () {
                            window.location.href = "users-registered.php";
                        }
                        )
                    } else {
                        Swal.fire({
                            type: 'error',
                            icon: 'error',
                            confirmButtonColor: '#f27474',
                            title: 'No se ha podido eliminar el usuario',
                        });
                    }
                }
            });
        });

    });
}

function actualizarrol(Id) {
    $(document).ready(function () {
        var updaterole = "#updaterole" + Id;

        $(updaterole).ready(function () {


            var upidRol = "#upidRol" + Id;
            var upid = "#upid" + Id;



            cadena = "idRol=" + $(upidRol).val() +
                "&id=" + $(upid).val();


            $.ajax({
                type: "POST",
                url: "../../php/update-role.php",
                data: cadena,
                success: function (r) {
                    if (r == 1) {
                        $('#frmupdaterole')[0].reset();
                        Swal.fire({
                            type: 'success',
                            icon: 'success',
                            title: 'Rol de usuario actualizado',
                            showConfirmButton: false,
                            timer: 1000,
                        }).then(function () {
                            window.location.href = "users-registered.php";
                        }
                        )
                    } else {
                        Swal.fire({
                            type: 'error',
                            icon: 'error',
                            confirmButtonColor: '#f27474',
                            title: 'No se ha podido actualizar el rol',
                        });
                    }
                }
            });
        });
    });
}


function editartaquilla(Id) {
    $(document).ready(function () {
        var updatetaquilla = "#updatetaquilla" + Id;

        $(updatetaquilla).ready(function () {


            var upestado = "#estadoslot" + Id;
            var uptamano = "#tamanoslot" + Id;
            var upobservaciones = "#observaciones" + Id;
            var uplocker = "#locker" + Id;
            var upid = "#id" + Id;



            cadena = "estado=" + $(upestado).val() +
                "&tamano=" + $(uptamano).val() +
                "&observaciones=" + $(upobservaciones).val() +
                "&locker=" + $(uplocker).val() +
                "&id=" + $(upid).val();


            $.ajax({
                type: "POST",
                url: "../../php/update-taquilla.php",
                data: cadena,
                success: function (r) {
                    if (r = 1) {
                        $('#frmupdatetaquilla')[0].reset();
                        Swal.fire({
                            type: 'success',
                            icon: 'success',
                            title: 'Taquilla actualizada',
                            showConfirmButton: false,
                            timer: 1000,
                        }).then(function () {
                            window.location.reload();
                        }
                        )
                    } else {
                        Swal.fire({
                            type: 'error',
                            icon: 'error',
                            confirmButtonColor: '#f27474',
                            title: 'No se ha podido actualizar la taquilla',
                        });
                    }
                }
            });
        });
    });
}

function crearencomienda() {
    $(document).ready(function () {
        $('#createparcel').ready(function () {

            if ($(('#tamanoslot')).val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Debe seleccionar un tamaño de taquilla',
                });
                return false;
            } else if ($('#nombre-cliente').val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'Seleccione el cliente',
                });
                return false;
            } else if ($('#codigo_pruebaa').val() == "") {
                Swal.fire({
                    type: 'warning',
                    icon: 'warning',
                    iconColor: '#F09A22',
                    confirmButtonColor: '#F09A22',
                    title: 'falta el codigo',
                });
                return false;
            } 

            cadena = "tamano=" + $('#tamano-slot').val() +
                "&cliente=" + $('#nombre-cliente').val() +
                "&info=" + $('#info').val() +
                "&locker=" + $('#nombre-locker').val() +
                "&taquillaid=" + $('#taquilla-id').val() +
                "&reserva=" + $('#reserva').val() +
                "&creado=" + $('#creado').val() +
                "&codigo=" + $('#codigo_pruebaa').val();


            $.ajax({
                type: "POST",
                url: "../../php/insert-parcel.php",
                data: cadena,

                success: function (r) {

                    var codigo_entrega = $('#codigo_entrega').val();;

                    if (r = 1) {
                        $('#frmupdatetaquilla')[0].reset();
                        var token = "";
                        Swal.fire({
                            type: 'success',
                            icon: 'success',
                            title: 'Taquilla actualizada',
                            showConfirmButton: false,
                            timer: 1000000,
                        }).then(function () {
                            window.location.reload();
                        }
                        )
                    } else {
                        Swal.fire({
                            type: 'error',
                            icon: 'error',
                            confirmButtonColor: '#f27474',
                            title: 'No se ha podido actualizar la taquilla',
                        });
                    }
                }

            });
        });
    });
}
