<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
function loadXMLDoc()
{
var sparqlQuery="abc";
echo sparqlQuery;

$.ajax({
                url: "http://quepy.machinalis.com/engine/get_query",
                data: {
                    question: "Who is Tom Cruise?"
                },
                type: "GET",
                dataType: "json",
                success: function(data){
                    sparqlQuery= data.queries[0].query;
                    console.log(sparqlQuery)
                },
                error: function(data){
                    console.log(data)
                }
});

$.ajax({
url: "http://dbpedia.org/sparql",
            data: {
                "debug": "on",
                "timeout": "0",
                "query": sparqlQuery,
                "default-graph-uri": "",
                "format": "application/sparql-results+json"
            },
            type: "GET",
            dataType: "json",
            success: function(data){
                console.log(data);
    //code for extracting output from the json
            },
            error: function(data){
                console.log(data)
            }
});

document.getElementById ("btnsave").addEventListener ("click", resetEmotes, false);
}
</script>
</head>
<body>

<div id="myDiv"><h2>Let AJAX change this text</h2></div>
<button type="button" id="btnsave" >Change Content</button>


</body>
</html>