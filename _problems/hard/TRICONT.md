---
{"category_name":"hard","problem_code":"TRICONT","problem_name":"Chef and Guard Towers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":9,"source_sizelimit":50000,"problem_author":"kevinsogo","problem_tester":"xcwgf666","date_added":"2-07-2016","tags":{"0":"aug16","1":"binary","2":"hard","3":"kevinsogo","4":"sqrt"},"editorial_url":"http://discuss.codechef.com/problems/TRICONT","time":{"view_start_date":1471253400,"submit_start_date":1471253400,"visible_start_date":1471253400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG16/mandarin/TRICONT.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/AUG16/russian/TRICONT.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG16/vietnamese/TRICONT.pdf">Vietnamese</a> as well.</h3>


<p>Chef holds all his secret recipes inside his house. For this reason, Chef wants to make his house secure. To do so, Chef wants to install <b>guard towers</b> in his house.</p>

<p>Unfortunately, due to high costs, Chef can only activate <b>3</b> guard towers each night. Chef considers his house <b>safe</b> if the triangle formed by these <b>3</b> guard towers as vertices <i>strictly</i> contains his house. Chef's house is located at <b>(0, 0)</b>.</p>

<p>On the <b>i<sup>th</sup></b> day, Chef plans to install a guard tower at location <b>(x<sub>i</sub>, y<sub>i</sub>)</b>. Chef wants to know how effective each installation is. Specifically, after every installation, Chef wants to know the number of subsets of <b>3</b> guard towers he can activate so that his house becomes safe. Please help him answer this question!</p>

<p>This is an <i>online</i> problem, so you won't get the next point unless you answer the question first. Don't forget to flush the output after every print statement. Please see the note section for details about how to flush the standard output.!</p>

<h3>Input</h3>
<p>The first line of input contains a single integer <b>N</b>. The next <b>N</b> lines describe the points.</p>

<p>The <b>i<sup>th</sup></b> line contains two integers <b>x<sub>i</sub></b> and <b>y<sub>i</sub></b> denoting the location of Chef's <b>i<sup>th</sup></b> guard tower, <b>(x<sub>i</sub>, y<sub>i</sub>)</b>.</p>

<h3>Output</h3>
<p>Output <b>N</b> lines. The <b>i<sup>th</sup></b> line must contain a single integer, the answer to Chef's question after the <b>i<sup>th</sup></b> installation.</p>

<h3>Constraints</h3>
<ul>
<li><b>|x<sub>i</sub>|</b>, <b>|y<sub>i</sub>|</b> ≤ <b>10<sup>6</sup></b></li>
<li>The points are distinct.</li>
<li><b>(x<sub>i</sub>, y<sub>i</sub>) ≠ (0, 0)</b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1: (11 points)</b> <b>3</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li><b>Subtask #2: (24 points)</b> <b>3</b> ≤ <b>N</b> ≤ <b>12000</b></li>
<li><b>Subtask #3: (65 points)</b> <b>3</b> ≤ <b>N</b> ≤ <b>400000</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>6
2 3
3 2
-1 -1
3 3
4 1
5 5
</tt>

<b>Output:</b>
<tt>0
0
1
1
2
2</tt>
</pre>

<h3>Explanation</h3>
<p>
<ul>
<li>After the first and second installations, there aren't enough guard towers for Chef to choose from.</li>
<li>After the third and fourth installations, there is one set of guard towers that make Chef's house safe: <b>{(2, 3), (3, 2), (-1, -1)}</b>.</li>
<li>After the fifth and sixth installations, there are two sets of guard towers that make Chef's house safe: <b>{(2, 3), (3, 2), (-1, -1)}</b> and <b>{(2, 3), (4, 1), (-1, -1)}</b>.</li>
</ul>
</p>

<h3>Note</h3>
<p>
You can flush the standard output in C++ by writing fflush(stdout).
In Java, you can do that by System.out.flush(). Please read the documentations of a particular language for more details.
</p>