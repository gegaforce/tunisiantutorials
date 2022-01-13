<script src="http://localhost/ace_code/ace-builds-master/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script><article><br><div dir="ltr" id="code_insert9" class=" ace_editor ace-monokai ace_dark" style="font-size: 18px; height: 856px;" draggable="false"><textarea class="code" id="code_insert9">package com.octest.dao;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class DaoFactory {
    private String url;
    private String username;
    private String password;

    DaoFactory(String url, String username, String password) {
        this.url = url;
        this.username = username;
        this.password = password;
    }

    public static DaoFactory getInstance() {
        try {
            Class.forName("com.mysql.jdbc.Driver");
        } catch (ClassNotFoundException e) {

        }

        DaoFactory instance = new DaoFactory(
                "jdbc:mysql://localhost:3306/javaee", "root", "");
        return instance;
    }

    public Connection getConnection() throws SQLException {
        return DriverManager.getConnection(url, username, password);
    }

    // Récupération du Dao
    public UtilisateurDao getUtilisateurDao() {
        return new UtilisateurDaoImpl(this);
    }
}</textarea></div><button class="button" value="code_insert9" id="button9" style="display: none;">supprimer</button><br><br>
				  			 			</article>
<script  class="script"id="script9">
var editor9 = ace.edit("code_insert9");
editor9.setFontSize(18);
editor9.renderer.setScrollMargin(10, 10, 10, 10);
editor9.setTheme("ace/theme/monokai");
editor9.session.setMode("ace/mode/java");
editor9.setAutoScrollEditorIntoView(true);
editor9.setOption("maxLines", 100);
editor9.setReadOnly(false);
value9 = editor9.getValue();
lang9 = "java";
</script>
