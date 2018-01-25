

import java.io.IOException;
import java.io.PrintWriter;
import java.util.Date;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class segundoservlt
 */
@WebServlet("/olamundo")
public class segundoservlt extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public segundoservlt() {
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
	    Date date =new Date();
		out.println("<html><head><meta charset='UTF-8'/><title>segundo Servlet</title></head>");
		out.println("<body><h1>segundo servlet</h1>");
		out.println("<h3>Me llamo ming ====((()))====</h3>");
		out.println("<p>tiempo: " + date.toLocaleString() + "</p>");
		out.println("<a href='http://localhost:8080/U4P02-Java-Servlets/index.html'>Vuelver a inicio</a>");
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
