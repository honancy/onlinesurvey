<!-- Stored in resources/views/mostiA.blade.php -->

@extends('layouts.master')

@section('css')
    label span.req {
        color: red;
    }
    ul#for_ul, ul#seo_ul {
        list-style-type: none;
    }
@endsection

@section('sidebar')
    <p><a class="btn btn-primary btn-lg" href="{{url('/info')}}">
        Learn More>>
    </a></p>
@endsection

@section('content')
    <form id="form1" action="{{url('/mosti')}}" method="POST">
    {!! csrf_field() !!}
        <div>
            <label for="staff-id">Staff ID <span class="req">*</span></label>
            <input type="text" id="staff-id" name="staffid"
                   title="staff id" placeholder="staff id" required><br/>
            <label for="author-names">Author Names <span class="req">*</span></label>
            <input type="text" id="author-names" name="authornames"
                   title="author name" placeholder="author names"><br/>

            <label for="forarea" >Fields of Research (FOR) <span class="req">*</span> </label>
            <input type="text" id="forarea" name="forarea"
                   title="for" placeholder="for" hidden>
            <select id="forarea_sel">
                <option selected="selected" disabled="disabled">Select one</option>
                <option>try</option>
                <option>try2</option>
            </select><br/>
            <ul id="for_ul">

            </ul>
            <p id="for_text"></p>

            <label for="seo">Socio-economic Objectives (SEO)</label>
            <input type="text" id="seo" name="seo"
                   title="seo" placeholder="seo" hidden>
            <select id="seo_sel">
                <option id="test1" selected disabled>Select one</option>
                <option>try</option>
                <option>try2</option>
            </select><br/>
            <ul id="seo_ul">

            </ul>
            <p id="seo_text"></p>

            <label for="comments">Comments</label>
            <input type="text" id="comments" name="comments"
                   title="s id" ><br/>
        </div>
        <div>
            <button id="subBtn" type="button">
                Submit
            </button>
            <button id="clrBtn" type="button">
                Clear
            </button>
    </div>
    </form>
@endsection

@section('script')
    <script>
        document.getElementById('subBtn').onclick = function(){submitEvent();};
        document.getElementById('clrBtn').onclick = function(){clearEvent();};
        document.getElementById('forarea_sel').onchange = function(){forareaSel();};
        document.getElementById('seo_sel').onchange = function(){seoSel();};
        var fullForText = "", fullSeoText = "";
        var forTotal = 0, seoTotal = 0;

        function onload() {
            document.getElementById('forarea_sel').onclick = function(){addFor();};
            document.getElementById('seo_sel').onclick = function(){seoSel();};
        }
        function forareaSel() {
            var x = document.getElementById('forarea_sel');

            var text = x.options[x.selectedIndex].innerHTML;
            if (fullForText == "") {
                fullForText += text;
            } else {
                fullForText += ", " + text;
            }
            forTotal += 1;
            x.remove(x.selectedIndex);
            x.selectedIndex = 0;
            var list = document.getElementById("for_ul");
            var node = document.createElement("LI");
            var btn = document.createElement("BUTTON");
            var textnode = document.createTextNode(text);
            btn.setAttribute("type", "button");
            btn.onclick = function() {
                this.parentNode.removeChild(this);
                if (fullForText.indexOf(text+", ") > 0) {
                    fullForText = fullForText.replace(text+", ", "");
                } else if (fullForText.indexOf(", "+text) > 0) {
                    fullForText = fullForText.replace(", "+text, "");
                } else {
                    fullForText = fullForText.replace(text, "");
                }
                var option = document.createElement("option");
                option.text = text;
                x.add(option);
                document.getElementById("for_text").innerHTML=fullForText; //for tracing
            };
            btn.appendChild(textnode);
            node.appendChild(btn);
            list.appendChild(node);
            document.getElementById("for_text").innerHTML=fullForText; //for tracing
        }
        function seoSel() {
            var x = document.getElementById('seo_sel');

            var text = x.options[x.selectedIndex].innerHTML;
            if (fullSeoText == "") {
                fullSeoText += text;
            } else {
                fullSeoText += ", " + text;
            }
            forTotal += 1;
            x.remove(x.selectedIndex);
            x.selectedIndex = 0;
            var list = document.getElementById("seo_ul");
            var node = document.createElement("LI");
            var btn = document.createElement("BUTTON");
            var textnode = document.createTextNode(text);
            btn.setAttribute("type", "button");
            btn.onclick = function() {
                this.parentNode.removeChild(this);
                if (fullSeoText.indexOf(text+", ") > 0) {
                    fullSeoText = fullSeoText.replace(text+", ", "");
                } else if (fullSeoText.indexOf(", "+text) > 0) {
                    fullSeoText = fullSeoText.replace(", "+text, "");
                } else {
                    fullSeoText = fullSeoText.replace(text, "");
                }
                var option = document.createElement("option");
                option.text = text;
                x.add(option);
                document.getElementById("seo_text").innerHTML=fullSeoText; //for tracing
            };
            btn.appendChild(textnode);
            node.appendChild(btn);
            list.appendChild(node);
            document.getElementById("seo_text").innerHTML=fullSeoText; //for tracing
        }
        function checkEvent() {
            var correctEvent = true;
            var alerts = "Whoops! Something went wrong! <ul>";
            var staffID = document.getElementById("staff-id").value;
            var authorName = document.getElementById("author-names").value;

            if (staffID == "") {
                alerts += "<li>The staff id field is required.</li>";
                correctEvent = false;
            } else {

            }
            if (authorName =="" ) {
                alerts += "<li>The authornames field is required.</li>";
                correctEvent = false;
            }
            if (fullForText == "") {
                alerts += "<li>The forarea field is required</li>";
                correctEvent = false;
            } else {
                document.getElementById("forarea").value = fullForText;
            }
            document.getElementById("seo").value = fullSeoText;

            if (correctEvent) {
                submitEvent();
            } else {
                alerts += "</ul>"
                document.getElementById("alert_div").innerHTML = alerts;
            }
        }
        function submitEvent() {
            document.getElementById("forarea").value = fullForText;
            document.getElementById("seo").value = fullSeoText;
            document.getElementById('form1').submit();
        }
        function clearEvent() {
            document.getElementById("staff-id").value = "";
            document.getElementById("author-names").value = "";
            fullForText = "";
            fullSeoText = "";
            document.getElementById("comments").value = "";
        }
    </script>
@endsection