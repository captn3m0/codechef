---
{"category_name":"medium","problem_code":"CSS2","problem_name":"Cascading Style Sheets","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"piyushkumar","problem_tester":"xiaodao","date_added":"21-10-2014","tags":{"0":"easy","1":"hash","2":"ltime17","3":"piyushkumar"},"editorial_url":"http://discuss.codechef.com/problems/CSS2","time":{"view_start_date":1414312200,"submit_start_date":1414312200,"visible_start_date":1414312200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME17/mandarin/CSS2.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME17/russian/CSS2.pdf">Russian</a>.</h3>
<p>Cascading Style Sheets, or <i>CSS</i> is a style sheet language, most popularly known for styling web pages. Each <i>object</i> on a web page (like a picture, a paragraph, a table) can have various properties (like height, width, size, colour), and these properties can be set using CSS. Each of these <i>objects</i> has a unique identifier called <i>id</i>, using which CSS can identify the object and assign value to its property.</p>
<p>Due to hierarchical nature of the web page, often same property of an object gets assigned different values in different CSS statements. To decide what the final value will be, each statement has a <i>priority</i> assigned to it. The statement with the highest priority will be the one that sets the value of the property. If there are more than one statements with same priority, then the one which was executed last amongst those will set the value.</p>
<p>Given multiple CSS statements in the order they were executed, answer a few queries about the final values of certain objects</p>
<h3>Input</h3>
<p>First line contains two space-separated integers <b>N</b> and <b>M</b>, the number of CSS statements and the number of queries respectively.<br />Following N lines will each have 4 values <b>id, attr, val, priority</b>, which mean that a CSS statement tries to assign value <b>val</b> to the attribute named <b>attr</b> of the object <b>id</b>, and that the priority of this statement is equal to <b>priority</b>.<br />Each of the next M lines will contain two values <b>id</b> and <b>attr</b>, for which you have to print value of the attribute <b>attr</b> of object <b>id</b>. You can assume that there is a statement that assigns value to this attribute <b>attr</b> of object <b>id</b>.</p>
<h3>Output</h3>
<p>Print exactly M lines, i<sup>th</sup> line contains the answer to the i<sup>th</sup> query as described above.</p>
<h3>Constraints</h3>
<ul>
<pre>
<li>1 ≤ value, priority ≤ 10<sup>6</sup>, for all subtasks.
</li><li><b>For 20 points : </b>1 ≤ id, N, M, attr ≤ 10<sup>3</sup>
</li><li><b>For 30 points : </b>1 ≤ N, M ≤ 10<sup>3</sup>, 1 ≤ id, attr ≤ 10<sup>6</sup>
</li><li><b>For 50 points : </b>1 ≤ N, M ≤ 10<sup>5</sup>, 1 ≤ id, attr ≤ 10<sup>6</sup>
</li></pre></ul><h3>Example</h3>
<p><b>Input:</b></p>
<pre>3 1<br />22 1 200 2<br />22 1 300 2<br />22 1 100 1<br />22 1</pre><p><br /><b>Output:</b></p>
<pre>300</pre>