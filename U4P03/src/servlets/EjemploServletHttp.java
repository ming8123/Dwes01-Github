package servlets;



import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class primerservlet
 */
@WebServlet(urlPatterns="/EjemploServletHttp", loadOnStartup=1)
public class EjemploServletHttp extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
	public void init() {
	    log("Iniciando el servlet HTTP");
	  }
    public EjemploServletHttp() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
    
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		response.setContentType("text/html;UTF-8");
		PrintWriter out = response.getWriter();
		out.println("<html><head><meta charset='UTF-8'/><title>Primer Servlet</title></head>");
		out.println("<body><h1> EjemploServletHttp</h1>");
		out.println("<h3>Me llamo ming =)</h3>");
		out.println("<p>Ejecución de " + request.getContextPath() + "</p>");
		out.println("<a href='http://localhost:8080/U4P03/index.html'>Vuelver a inicio</a>");
		out.println("</body></html>");
		out.close();	}
	/**

	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}
	

}
