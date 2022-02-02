---
{"category_name":"easy","problem_code":"CHFANS","problem_name":"Chef and Two Fans","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":0.4,"source_sizelimit":50000,"problem_author":"abeyaar","problem_tester":null,"date_added":"6-09-2015","tags":{"0":"abeyaar"},"time":{"view_start_date":1441555684,"submit_start_date":1441555684,"visible_start_date":1420050600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Chef is studying Rotational Motion in physics. Here is preparing for Engineering Entrance exam. He's stuck in a problem. Which states that "Two fans, each with a single blade are rotating one above the other, about the same axis of rotation and both blades have the same length. Consider the blade as a rod. Both the fans are rotating indefinitely. <br/><br/><br />
Fans can rotate in either <b>clockwise</b> or <b>anticlockwise</b> direction. There is a dot marked on the blade of both the fans and the dot is marked at the same distance from the center of rotation.<br />
You're be given speeds of the fans. </br/></br/></p>
<li>Clockwise rotation - positive speed. </li>
<li>Anticlockwise rotation - negative speed.</li>
<p><br/><br />
Help Chef to find the number of distinct points the dots will coincide on the circumference of rotation.
</br/></p>
<h3>Input</h3>
<p>First line consists of <b>T</b> Test cases.<br />
Each of the next <b>T</b> lines consists of Two numbers <b>S1</b> and <b>S2</b> which describes the speed of rotation of both the fans respectively</p>
<h3>Output</h3>
<p>Print <b>T</b> lines with each containing the required answer.</p>
<h3>Constraints</h3>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li><b>S1</b> ≠ <b>S2</b></li>
<li><b>S1,S2</b> ≠ 0</li>
<li>-100000 ≤ <b>S1,S2</b> ≤ 100000.</li>
<h3>Example</h3>
<pre><b>Input:</b>
3
1 2
6 5
1 -2

<b>Output:</b>
1
1
3
</pre><p> </p>
