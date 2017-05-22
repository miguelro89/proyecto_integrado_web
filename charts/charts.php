<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript">
        
        google.load('visualization','1.0',{'packages':['corechart']});
        
        google.setOnLoadCallback(dibujar);    
        
        function dibujar()
            {
                var data = new google.visualization.DataTable();
                data.addColumn('string','cancion');
                data.addColumn('number','visitas');
                data.addRows(
                [
                    ['cancion1', 600],
                    ['cancion2'],200],
                    ['cancion3'],1000],
                    
                ]
                
                ]
                );
                var opciones = {'title':'Visitas de las canciones, 'width':550',
                               'height'};
                var grafica = new google.visualization.BarChart
            }
       
        </script>        
    </head>
    <body>
        <div id="charts"></div>
    </body>   
</html>