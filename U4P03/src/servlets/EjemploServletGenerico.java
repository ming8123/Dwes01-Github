package servlets;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.GenericServlet;
import javax.servlet.ServletRequest;
import javax.servlet.ServletResponse;
import javax.servlet.annotation.WebServlet;
@WebServlet(urlPatterns="/EjemploServletGenerico", loadOnStartup=1)
public class EjemploServletGenerico extends GenericServlet {
	private static final long serialVersionUID = 1L;
	 public void init() {
		    log("Iniciando el servlet genérico");
		  }
  public void service(ServletRequest req, ServletResponse res) throws IOException {
    log("Petición recibida desde " + req.getRemoteAddr());

    PrintWriter out = res.getWriter();
	out.println("<html><head><meta charset='UTF-8'/></head>");
	out.println("<body><h1>Mensaje desde el servlet generico de ejemplo</h1>");
	out.println("<a href='http://localhost:8080/U4P03/index.html'>Vuelver a inicio</a>");
	out.println("</body></html>");
	out.close();
    res.getWriter().close();
  }
 
	  public void destroy() {
	    log("Destruyendo el servlet genérico");
	  }

	  public String getServletInfo() {
	    return "Servlet de Ejemplo usando GenericServlet";
	  }
}