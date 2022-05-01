create table USUARIO
(
    id_usuario BIGINT(20) PRIMARY KEY NOT NULL,
    nombre VARCHAR(50),
    app VARCHAR(50),
    apm VARCHAR(50),
    email VARCHAR(50),
    pw VARCHAR(50)
)

create  table DIRECCIONES(
                             id_dir BIGINT(20) PRIMARY KEY NOT NULL,
                             id_usuario BIGINT(20),
                             nombre VARCHAR(50),
                             apellidos VARCHAR(50),
                             telefono VARCHAR(50),
                             celular VARCHAR(50),
                             calle VARCHAR(50),
                             cp INT(6),
                             estado VARCHAR(50),
                             municipio VARCHAR(50),
                             colonia VARCHAR(50),
                             referencias TEXT,
                             empresa VARCHAR(50) NULL,
                             FOREIGN KEY (id_usuario)
                                 REFERENCES USUARIO(id_usuario)
                                 ON UPDATE CASCADE
                                 ON DELETE CASCADE
)

create table VENDEDOR
(
    id_vendedor INT(5) PRIMARY KEY NOT NULL,
    nombre VARCHAR(50),
    app VARCHAR(50),
    apm VARCHAR(50),
    email VARCHAR(50),
    pw VARCHAR(50),
    puesto VARCHAR(50),
    telefono VARCHAR(30)
)

create table MARCA
(
    id_marca INT(5) PRIMARY KEY NOT NULL,
    marca VARCHAR(30)
)



create table CATEGORIA
(
    id_categoria INT(5) PRIMARY KEY auto_increment NOT NULL,
    id_categoria_fk INT(5),
    categoria VARCHAR(30)
)

alter table CATEGORIA
    ADD CONSTRAINT tmp_kf_idCat FOREIGN KEY(id_categoria_fk)
        REFERENCES CATEGORIA(id_categoria)
        ON UPDATE CASCADE
        ON DELETE CASCADE

select * from CATEGORIA

    insert into CATEGORIA
values(null,null,'PAPEL')

insert into CATEGORIA
values(null,1,'PAPEL CORTADO')

INSERT INTO `categoria` (`id_categoria`, `id_categoria_FK`, `categoria`) VALUES
    (NULL, 5, 'Escritura'),
    (NULL, 5, 'Pegamentos'),
    (NULL, 5, 'PLASTILINA');

select B.categoria, A.categoria from CATEGORIA  A INNER JOIN CATEGORIA B ON
        A.id_categoria = B.id_categoria_fk

create table PRODUCTOS
(
    id_producto INT(5) PRIMARY KEY auto_increment NOT NULL,
    id_categoria INT(5),
    id_marca INT(5),
    sku INT(10) unique,
    barcode VARCHAR(30) UNIQUE,
    nombre VARCHAR(50),
    descripcion TEXT,
    min_alerta DECIMAL(7,2),
    presentacion VARCHAR(30),
    costo_promedio DECIMAL(7,2),
    descuento DECIMAL(7,2),
    stock DECIMAL(7,2),
    estatus TINYINT(2),
    FOREIGN KEY (id_categoria)
        REFERENCES CATEGORIA(id_categoria)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    FOREIGN KEY (id_marca)
        REFERENCES MARCA(id_marca)
        ON UPDATE CASCADE
        ON DELETE CASCADE
)

CREATE TABLE IMAGEN
(
    id_imagen INT(5) PRIMARY KEY auto_increment NOT NULL,
    id_producto INT(5),
    path TEXT,
    FOREIGN KEY (id_producto)
        REFERENCES PRODUCTOS(id_producto)
        ON UPDATE CASCADE
        ON DELETE CASCADE
)

create table VENTA_PEDIDO
(
    id_venta_pedido BIGINT(20) PRIMARY KEY NOT NULL,
    id_usuario BIGINT(20),
    id_dir_entrega BIGINT(20) NULL,
    id_vendedor INT(5),
    subtotal DECIMAL(7,2),
    descuento DECIMAL(7,2),
    iva DECIMAL(7,2),
    total DECIMAL(7,2),
    create_at TIMESTAMP,
    update_at TIMESTAMP,
    forma_entrega VARCHAR(30),
    forma_pago VARCHAR(30),
    estatus_pago VARCHAR(30),
    estatus_envio VARCHAR(30),
    no_guia TEXT,
    estatus_venta TINYINT(3),
    FOREIGN KEY (id_usuario) REFERENCES USUARIO(id_usuario)
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (id_dir_entrega)  REFERENCES DIRECCIONES(id_dir)
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (id_vendedor)  REFERENCES VENDEDOR(id_vendedor)
        ON UPDATE CASCADE ON DELETE CASCADE
)

create table DETALLE_VENTA
(
    id_venta_pedido BIGINT(20),
    id_producto INT(5),
    cantidad DECIMAL(7,2),
    precio_vta DECIMAL(7,2),
    PRIMARY KEY (id_venta_pedido,id_producto),
    FOREIGN KEY (id_venta_pedido) REFERENCES VENTA_PEDIDO(id_venta_pedido)
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (id_producto) REFERENCES PRODUCTOS(id_producto)
        ON UPDATE CASCADE ON DELETE CASCADE
)

create table CARRITO
(
    id_carrito BIGINT(20) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    id_sesion varchar(100) UNIQUE,
    id_usuario BIGINT(20) NULL,
    create_at TIMESTAMP,
    FOREIGN KEY (id_usuario) REFERENCES USUARIO(id_usuario)
        ON UPDATE CASCADE ON DELETE CASCADE
)


create table AGREGADO_CARRITO_TMP
(
    id_carrito BIGINT(20),
    id_producto INT(5),
    cantidad DECIMAL(7,2),
    PRIMARY KEY (id_carrito,id_producto),
    FOREIGN KEY (id_carrito) REFERENCES CARRITO(id_carrito)
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (id_producto) REFERENCES PRODUCTOS(id_producto)
        ON UPDATE CASCADE ON DELETE CASCADE
)

create table PROVEEDOR
(
    id_prioveedor INT(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    proveedor VARCHAR(30)
)

create table INGRESO
(
    id_ingreso INT(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    id_producto INT(5),
    id_proveedor INT(10),
    date_create TIMESTAMP,
    costo_compra DECIMAL(7,2),
    costo_operacion DECIMAL(7,2),
    costo_venta DECIMAL(7,2),
    cantiada DECIMAL(7,2) DEFAULT 0,
    FOREIGN KEY (id_producto) REFERENCES PRODUCTOS(id_producto)
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (id_proveedor) REFERENCES PROVEEDOR(id_prioveedor)
        ON UPDATE CASCADE ON DELETE CASCADE
)
