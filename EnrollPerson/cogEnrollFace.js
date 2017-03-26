function createPerson(imgName){
    var imgPath = "http://jinheon.azurewebsites.net/EnrollPerson/" + imgName;
    imgName = (imgName.split("."))[0];
    var personGroupId = "test";
    var subscriptionKey = "954a1ea97e6e4b1082fa95c2b8cede52";

    $(function() {
        var params = {
        // Request parameters
        };

        $.ajax({
            url: "https://westus.api.cognitive.microsoft.com/face/v1.0/persongroups/" + personGroupId + "/persons?" + $.param(params),
            beforeSend: function(xhrObj){
                // Request headers
                xhrObj.setRequestHeader("Content-Type","application/json");
                xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key",subscriptionKey);
            },
            type: "POST",
            async: false,
            // Request body
            data: "{" + 
                "\"name\":\"" + imgName + "\"," +
                "\"userDate\":\"" + "TestFace" + "\"" +
            "}",
        })
        .done(function(data) {
            alert("success");
        })
        .fail(function() {
            alert("error");
        });
    });

    return imgName;
}

function addPersonFace(personId){
    var personGroupId = "test";
    var subscriptionKey = "954a1ea97e6e4b1082fa95c2b8cede52";
    var imgPath = "http://jinheon.azurewebsites.net/EnrollPerson/" + personId + ".jpg"

    $(function() {
        var params = {
            // Request parameters
            //"userData": "{string}",
            //"targetFace": "{string}",
        };
      
        $.ajax({
            url: "https://westus.api.cognitive.microsoft.com/face/v1.0/persongroups/" + personGroupId + "/persons/" + personId +"/persistedFaces?" + $.param(params),
            beforeSend: function(xhrObj){
                // Request headers
                xhrObj.setRequestHeader("Content-Type","application/json");
                xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key",subscriptionKey);
            },
            type: "POST",
            // Request body
            data: "{" + 
                "\"url\":\"" + imgPath +
            "\"}"
        })
        .done(function(data) {
            alert("success");
        })
        .fail(function() {
            alert("error");
        });
    });
}