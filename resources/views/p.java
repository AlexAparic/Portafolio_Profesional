package com.example.myfirstapp;

import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

public class DB extends SQLiteOpenHelper {

    private static final String DATABASE_NAME = "Tienda";
    private static final int DATABASE_VERSION = 1;

    private static final String SQLdb =
            "CREATE TABLE productos (" +
                    "idProducto INTEGER PRIMARY KEY AUTOINCREMENT," +
                    "codigo TEXT," +
                    "descripcion TEXT," +
                    "marca TEXT," +
                    "presentacion TEXT," +
                    "precio REAL," +
                    "urlFoto TEXT," +
                    "costo REAL," +
                    "ganancia REAL," +
                    "stock INTEGER" +
                    ");";

    public DB(Context context) {
        super(context, DATABASE_NAME, null, DATABASE_VERSION);
    }

    @Override
    public void onCreate(SQLiteDatabase db) {
        db.execSQL(SQLdb);
    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
        db.execSQL("DROP TABLE IF EXISTS productos");
        onCreate(db);
    }

    public String administrar_Productos(String accion, String[] datos) {
    SQLiteDatabase db = null;

    try {
        db = getWritableDatabase();
        String mensaje = "ok";

        switch (accion.toLowerCase().trim()) {

            case "nuevo":
                ContentValues valuesNuevo = new ContentValues();
                valuesNuevo.put("codigo", datos[1]);
                valuesNuevo.put("descripcion", datos[2]);
                valuesNuevo.put("marca", datos[3]);
                valuesNuevo.put("presentacion", datos[4]);
                valuesNuevo.put("precio", datos[5]);
                valuesNuevo.put("urlFoto", datos[6]);
                valuesNuevo.put("costo", datos[7]);
                valuesNuevo.put("ganancia", datos[8]);
                valuesNuevo.put("stock", datos[9]);

                db.insert("productos", null, valuesNuevo);
                break;

            case "modificar":
                ContentValues valuesModificar = new ContentValues();
                valuesModificar.put("codigo", datos[1]);
                valuesModificar.put("descripcion", datos[2]);
                valuesModificar.put("marca", datos[3]);
                valuesModificar.put("presentacion", datos[4]);
                valuesModificar.put("precio", datos[5]);
                valuesModificar.put("urlFoto", datos[6]);
                valuesModificar.put("costo", datos[7]);
                valuesModificar.put("ganancia", datos[8]);
                valuesModificar.put("stock", datos[9]);

                db.update("productos", valuesModificar, "idProducto=?", new String[]{datos[0]});
                break;

            case "eliminar":
                db.delete("productos", "idProducto=?", new String[]{datos[0]});
                break;

            default:
                return "Error: acción no válida";
        }

        return mensaje;

    } catch (Exception e) {
        return e.getMessage();

    } finally {
        if (db != null) {
            db.close();
        }
    }
}

    public Cursor lista_productos() {
        SQLiteDatabase db = getReadableDatabase();
        return db.rawQuery("SELECT * FROM productos", null);
    }

    public Cursor buscar_producto(String codigo) {
        SQLiteDatabase db = getReadableDatabase();
        return db.rawQuery("SELECT * FROM productos WHERE codigo LIKE '%" + codigo + "%'", null);
    }
}