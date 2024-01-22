import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;

public class ficherosjairo {
    public static void main(String[] args) {
        // Ruta del archivo que deseas leer
        String rutaArchivo = "ruta/del/archivo.txt";

        try (BufferedReader br = new BufferedReader(new FileReader(rutaArchivo))) {
            String linea;

            // Lee línea a línea y muestra en pantalla
            while ((linea = br.readLine()) != null) {
                System.out.println(linea);
            }
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
