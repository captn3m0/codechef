---
{"category_name":"easy","problem_code":"HELPLIRA","problem_name":"Helping Lira","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kuruma","problem_tester":"shangjingbo","date_added":"26-02-2013","tags":{"0":"cakewalk","1":"geometry","2":"kuruma","3":"oct13"},"editorial_url":"http://discuss.codechef.com/problems/HELPLIRA","time":{"view_start_date":1381743000,"submit_start_date":1381743000,"visible_start_date":1381743000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in Mandarin Chinese <a target="_blank" href="http://www.codechef.com/download/translated/OCT13/mandarin/HELPLIRA.pdf">here</a></h3>
<h3>Problem Statement</h3>
<p>Lira is a little girl form Bytenicut, a small and cozy village located in the country of Byteland.</p>
<p> As the village is located on a somewhat hidden and isolated area, little Lira is a bit lonely and she needs to invent new games that she can play for herself.</p>
<p> However, Lira is also very clever, so, she already invented a new game. </p>
<p>She has many stones with her, which she will display on groups of three stones on the ground on a triangle like shape and then, she will select two triangles, one with the smallest area and one with the largest area as the most beautiful ones.</p>
<p>While it's easy for Lira to "estimate" the areas of the triangles by their relative sizes, it's harder for her to actually calculate these areas.</p>
<p>But, it turns out, that Lira is also friends with YOU, an exceptional Mathematics student, and she knew that you would know exactly how to do such verification.</p>
<p>Lira also numbered the triangles from 1 to <b>N</b>, and now she wants to know the indices of the triangles with the smallest and largest area respectively.</p>
<p>It is now up to you, to help Lira and calculate the areas of the triangles and output their numbers.</p>
<h3>Input</h3>
<p>The first line of the input file contains an integer, <b>N</b>, denoting the number of triangles on the given input file.</p>
<p>Then <b>N</b> lines follow, each line containing <b>six</b> space-separated integers, denoting the coordinates x<sub>1</sub>, y<sub>1</sub>, x<sub>2</sub>, y<sub>2</sub>, x<sub>3</sub>, y<sub>3</sub> </p>
<ul>
<h3>Output</h3>
<p>You should output two space separated integers, the indexes of the triangles with the smallest and largest area, respectively.</p>
<p>If there are multiple triangles with the same area, then the last index should be printed.</p>
<h3>Constraints</h3>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>-1000</b> ≤ <b> x<sub>i</sub>, y<sub>i</sub> </b> ≤ <b>1000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
0 0 0 100 100 0
1 1 1 5 5 1

<b>Output:</b>
2 1
</pre><p> </p>
</ul>