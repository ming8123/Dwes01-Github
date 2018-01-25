package servlets;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.Servlet;
import javax.servlet.ServletConfig;
import javax.servlet.ServletException;
import javax.servlet.ServletRequest;
import javax.servlet.ServletResponse;
import javax.servlet.annotation.WebServlet;

@WebServlet(urlPatterns={"/primerServlet","/SampleHttpServlet"}, loadOnStartup=1)
public class primerServlet implements Servlet {
	private ServletConfig config;
	private static final long serialVersionUID = 1L;

	public void init(ServletConfig cfg) throws ServletException {
		config = cfg;
		config.getServletContext().log("Iniciando el servlet");
	}

	public void service(ServletRequest request, ServletResponse response) throws ServletException, IOException {
		config.getServletContext().log("Petición recibida desde " + request.getRemoteAddr());
		PrintWriter out = response.getWriter();
		out.println("<html><head><meta charset='UTF-8'/></head>");
		out.println("<body><h1>Implementando la interfaz Servlet ming ming</h1>");
		out.println("<a href='http://localhost:8080/U4P03/index.html'>Vuelver a inicio</a>");
		out.println("</body></html>");
		out.close();

	}

public void destroy() {
		config.getServletContext().log("Destruyendo el servlet");
	}

	public String getServletInfo() {
		return "Servlet de Ejemplo";
	}

	public ServletConfig getServletConfig() {
		return config;
	}
}