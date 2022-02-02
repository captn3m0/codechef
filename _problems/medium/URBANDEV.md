---
{"category_name":"medium","problem_code":"URBANDEV","problem_name":"Urban Development","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"cenadar","problem_tester":"xcwgf666","date_added":"20-11-2015","tags":{"0":"cenadar","1":"line","2":"medium","3":"nov16","4":"segment"},"editorial_url":"http://discuss.codechef.com/problems/URBANDEV","time":{"view_start_date":1479115800,"submit_start_date":1479115800,"visible_start_date":1479115800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/mandarin/URBANDEV.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/russian/URBANDEV.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/vietnamese/URBANDEV.pdf">Vietnamese</a> as well.</h3>


<p>
Chef is working with the development of a new city Krewsko. He and other city planners are designing the transportation system of Krewsko. They are using Cartesian coordinates and Krewsko will only have roads that are parallel to either the x-axis or the y-axis.
</p>

<p>
It is clear that we need to add one set of traffic lights at every intersection of roads where a person has at least two other directions to continue their trip when arriving at the intersection. Your task is to count how many traffic light sets should be deployed. In particular, for each road you want to know how many traffic light sets will appear on that road.
</p>

<p>
Let's formalize how a road in the city is defined. A road is a segment on the plane with endpoints in <b>X<sub>i,1</sub></b>, <b>Y<sub>i,1</sub></b> and <b>X<sub>i,2</sub></b>, <b>Y<sub>i,2</sub></b> for <b>i<sup>th</sup></b> line. You are guaranteed that each line segment is either a vertical line or a horizontal line. An intersection is a point that belongs to two line segments: one horizontal and another vertical. We guarantee that no two vertical lines will share a point and no two horizontal lines share a point.
</p>

<p>
You must put a set of lights at each intersection of a horizontal and a vertical line segment where the point of intersection is not an endpoint of both segments.
</p>

<p></p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>N</b> indicating number of roads.</p>
<p>The next <b>N</b> lines contain <b>4</b> integers each. The <b><sup>i</sup>th</b> line contain <b>X<sub>i,1</sub></b>, <b>Y<sub>i,1</sub></b> and <b>X<sub>i,2</sub></b>, <b>Y<sub>i,2</sub></b>.</p>

<h3>Output</h3>
<p>
The output consists of two lines. The first line contains a single
integer indicating the number of sets of lights that will be used
throughout all of Krewsko. The second line consists of <b>N</b>
integers. The <b>i</b>'th such integer indicates the number of traffic light
sets that will be deployed to the <b>i</b>'th road. There should be a single space between consecutive integers on this line.
</p>

<p></p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>X<sub>i,1</sub></b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>Y<sub>i,1</sub></b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>X<sub>i,2</sub></b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>Y<sub>i,2</sub></b> ≤ <b>10<sup>5</sup></b></li>
<li>The length of each road is positive and each road will either be a horizontal line segment or a vertical line segment.</li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 [40 points]: N ≤ 10000</b></li>
<li><b>Subtask #2 [60 points]: No additional constraints</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>4
2 1 2 6
1 3 5 3
4 1 4 4
1 5 5 5</tt>
<b>Output:</b>
<tt>3
2 2 1 1</tt>
</pre>
